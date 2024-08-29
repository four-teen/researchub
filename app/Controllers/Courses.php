<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function course()
    {

        $course_model = new \App\Models\CourseModel();

        $data['Courses'] = $course_model->orderby('coursecode', 'ASC')->findAll();

        return view('course/courseslist', $data);
    }


//MANAGE ADD
    public function add(){

        helper('form');
        $course_model = new \App\Models\CourseModel();

        $data = [];

        if ($this->request->getMethod() =='POST') {

            $rules = [
                'coursecode' => ['label' => "Course Code", 'rules'=>'required'],
                'coursedesc' => ['label'=>"Course Description", 'rules'=>'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{


                $result = $course_model->insert($_POST);

                if($result){
                    session()->setFlashdata('success', "Course successfuly added!");
                    return redirect()->to('course/courseslist');

                }else{
                    session()->setFlashdata('error', "Something is wrong!");
                }
            }
        }
        return view('course/course_add', $data);
    }

    public function delete($courseid){

        helper('form');
        $course_model = new \App\Models\CourseModel();
        $data = [];

        if ($this->request->getMethod() =='POST') {

            $rules = [
                'courseid' => 'required',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{


                $result = $course_model->delete($_POST['courseid']);

                if($result){
                    session()->setFlashdata('success', "User successfuly deleted!");
                    return redirect()->to('course/courseslist');

                }else{
                    session()->setFlashdata('error', "Something went wrong!");
                }
            }
        }


        $userDetails = $course_model
            ->where("MD5(CONCAT('delete', courseid))", $courseid)
            ->first();

            if($userDetails){

                $_POST['courseid'] = $userDetails->courseid;
                $_POST['coursecode'] = $userDetails->coursecode;
                $_POST['coursedesc'] = $userDetails->coursedesc;

                return view('course/course_delete', $data);
            }
            session()->setFlashdata('success', "User not found!");
            return redirect()->to('course/courseslist');

    }


    public function edit($courseid){


        helper('form');
        $course_model = new \App\Models\CourseModel();
        $data = [];

        if ($this->request->getMethod() =='POST') {

            $rules = [
                'coursecode' => ['label' => "Course Code", 'rules'=>'required'],
                'coursedesc' => ['label'=>"Course Description", 'rules'=>'required'],
                'userid' => 'required',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{

                $updateData['coursecode']=$_POST['coursecode'];
                $updateData['coursedesc']=$_POST['coursedesc'];


                $result = $course_model->update($_POST['courseid'], $updateData);

                if($result){
                    session()->setFlashdata('success', "User successfuly updated!");
                    return redirect()->to('course/courseslist');

                }else{
                    session()->setFlashdata('error', "Something went wrong!");
                }
            }
        }

        $userDetails = $course_model
            ->where("MD5(CONCAT('edit', courseid))", $courseid)
            ->first();

            if($userDetails){
                $_POST['courseid'] = $userDetails->courseid;
                $_POST['coursecode'] = $userDetails->coursecode;
                $_POST['coursedesc'] = $userDetails->coursedesc;


                return view('course/course_edit', $data);
            }
            session()->setFlashdata('success', "User not found!");
            return redirect()->to('course/courseslist');

    }


}

?>