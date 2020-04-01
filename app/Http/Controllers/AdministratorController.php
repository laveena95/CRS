<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function Adminhome()
    {
        return view('administrator.Adminhome');
    }
    public function inbox()
    {
        return view('administrator.inbox');
    }
    public function adminLogin()
    {
        return view('administrator.adminLogin');
    }

    //Cordinator
    public function addCoordinator()
    {
        return view('administrator.addCoordinator');
    }
    public function coordinatorOverview()
    {
        return view('administrator.coordinatorOverview');
    }
    public function coordinatorNotification()
    {
        return view('administrator.coordinatorNotification');
    }

    //Student
    public function addStudent()
    {
        return view('administrator.addStudent');
    }
    public function studentOverview()
    {
        return view('administrator.studentOverview');
    }
    public function studentNotification()
    {
        return view('administrator.studentNotification');
    }

    //Company
    public function addCompany()
    {
        return view('administrator.addCompany');
    }
    public function companyOverview()
    {
        return view('administrator.companyOverview');
    }
    public function companyNotification()
    {
        return view('administrator.companyNotification');
    }

}
