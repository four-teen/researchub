<?php

namespace App\Controllers;

class Prospectus extends BaseController
{
    public function index(): string
    {
        $course_model = new \App\Models\CourseModel();

        $data['Courses'] = $course_model->orderby('coursecode', 'ASC')->findAll();

        return view('prospectus/prospectuslist', $data);
    }
}
