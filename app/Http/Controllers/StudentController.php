<?php

namespace App\Http\Controllers;

use App\Students;
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

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $lastid=Students::create($data)->id;
        //return redirect()->back()->with('success','Your Details have been Saved!');
        return view('Student.StudentHome',compact('lastid')); 
    }
    public function storeProfile(Request $request)
    {
        $data =$request->all();
        $lastid =Students::create($data)->id;
        return view('Student.StudentHome',compact('lastid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Students::find($id);
        return view('Student.editStudentProfile',compact('student','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
