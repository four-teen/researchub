<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SubjectController extends BaseController
{
    public function subject()
    {
        $course_model = new \App\Models\SubjectModel();

        $data['Subjects'] = $course_model->orderby('subject_code', 'ASC')->findAll();

        return view('subject/subjectslist', $data);
    }
}
