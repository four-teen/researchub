<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {

        $dictmodel = new \App\Models\DictModel();

        $data['Users'] = $dictmodel->orderby('lastname', 'ASC')->findAll();

        return view('user/index', $data);
    }

    public function userslist()
    {

        $dictmodel = new \App\Models\DictModel();

        $data['Users'] = $dictmodel->orderby('lastname', 'ASC')->findAll();

        return view('user/userslist', $data);
    }    

//MANAGE LOGIN
    public function login()
    {

        helper('form');
        $dictmodel = new \App\Models\DictModel();

        $data = [];

        if ($this->request->getMethod() =='POST') {

            $rules = [

                'username' => ['label'=>"Username",'rules'=>'required'],
                'password' => ['label'=>"Password",'rules'=>'required'],
                            
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{

            $result = $dictmodel->where('username', $_POST['username'])->first(); // Fetching the first record

            if ($result) {
                if (password_verify($_POST['password'], $result->password)) { // Corrected to access as an array
                    session()->set('isLoggedIn', true);
                    session()->set('firstname', $result->firstname);
                    return redirect()->to('user');
                } else {
                    session()->setFlashdata('error', "Invalid username or password!");
                }

            }else{
                    session()->setFlashdata('error', "Something is wrong!");
                }
            }
        }
        return view('user/login', $data);
    }

//MANAGE ADD
    public function add(){
        helper('form');
        $dictmodel = new \App\Models\DictModel();
        $data = [];
        if ($this->request->getMethod() =='POST') {
            $rules = [
                'lastname' => ['label' => "Last Name", 'rules'=>'required'],
                'firstname' => ['label'=>"First Name", 'rules'=>'required'],
                'middlename' => 'permit_empty',
                'username' => 'required|is_unique[tblusers.username]',
                'password' => 'required',
                'confirmpassword' => 'required|matches[password]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $_POST['password'] = $password;
                $result = $dictmodel->insert($_POST);
                if($result){
                    session()->setFlashdata('success', "User successfuly added!");
                    return redirect()->to('user/userslist');
                }else{
                    session()->setFlashdata('error', "Something is wrong!");
                }
            }
        }
        return view('user/add', $data);
    }


    public function logout(){
        session()->destroy();
        return redirect()->to('login');
    }


    public function edit($userid){
        helper('form');
        $dictmodel = new \App\Models\DictModel();
        $data = [];
        if ($this->request->getMethod() =='POST') {
            $rules = [
                'lastname' => ['label' => "Last Name", 'rules'=>'required'],
                'firstname' => ['label'=>"First Name", 'rules'=>'required'],
                'middlename' => 'permit_empty',
                'username' => 'required|is_unique[tblusers.username, userid, {userid}]',
                'password' => 'permit_empty',
                'confirmpassword' => 'permit_empty',
                'userid' => 'required',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{
                $updateData['lastname']=$_POST['lastname'];
                $updateData['firstname']=$_POST['firstname'];
                $updateData['middlename']=$_POST['middlename'];
                $updateData['username']=$_POST['username'];

                if($_POST['password'] != ""){
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $updateData['password'] = $password;
                }
                $result = $dictmodel->update($_POST['userid'], $updateData);
                if($result){
                    session()->setFlashdata('success', "User successfuly updated!");
                    return redirect()->to('user/userslist');
                }else{
                    session()->setFlashdata('error', "Something went wrong!");
                }
            }
        }
        $userDetails = $dictmodel
            ->where("MD5(CONCAT('edit', userid))", $userid)
            ->first();
            if($userDetails){
                $_POST['userid'] = $userDetails->userid;
                $_POST['lastname'] = $userDetails->lastname;
                $_POST['firstname'] = $userDetails->firstname;
                $_POST['middlename'] = $userDetails->middlename;
                $_POST['username'] = $userDetails->username;

                return view('user/edit', $data);
            }
            session()->setFlashdata('success', "User not found!");
            return redirect()->to('user/userslist');

    }



    public function delete($userid){
        helper('form');
        $dictmodel = new \App\Models\DictModel();
        $data = [];
        if ($this->request->getMethod() =='POST') {
            $rules = [
                'userid' => 'required',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{
                $result = $dictmodel->delete($_POST['userid']);
                if($result){
                    session()->setFlashdata('success', "User successfuly deleted!");
                    return redirect()->to('user/userslist');
                }else{
                    session()->setFlashdata('error', "Something went wrong!");
                }
            }
        }
        $userDetails = $dictmodel
            ->where("MD5(CONCAT('delete', userid))", $userid)
            ->first();
            if($userDetails){
                $_POST['userid'] = $userDetails->userid;
                $_POST['lastname'] = $userDetails->lastname;
                $_POST['firstname'] = $userDetails->firstname;
                $_POST['middlename'] = $userDetails->middlename;
                $_POST['username'] = $userDetails->username;
                return view('user/delete', $data);
            }
            session()->setFlashdata('success', "User not found!");
            return redirect()->to('user/userslist');
    }
}
