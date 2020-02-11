<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile()
    {
        return view('Student.profile');
    }
    public function addResume()
    {
        return view('Student.addResume');
    }
    public function jobAlert()
    {
        return view('Student.jobAlert');
    }
    public function changePassword()
    {
        return view('Student.changePassword');
    }
    public function myMail()
    {
        return view('Student.myMail');
    }
    public function student()
    {
        return view('Student.student');
    }
}
