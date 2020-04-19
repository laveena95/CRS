<?php

namespace App\Http\Controllers;

use Auth;
use App\StudentProfile;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile()
    {
        return view('Student.profile',array('user'=>Auth::user()));
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
        $data=new StudentProfile();
        $data->fname=$request->input('fname');
        $data->lname=$request->input('lname');
        $data->gender=$request->input('gender');
        $data->DOB=$request->input('DOB');
        $data->age=$request->input('age');
        $data->Semester=$request->input('Semester');
        $data->Registration_No=$request->input('Registration_No');
        $data->Course_Period=$request->input('Course_Period');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->address=$request->input('address');
        $data->nationality=$request->input('nationality');
        
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' .$extension;
            $file->move('uploads/candidate/',$filename);
            $data->image=$filename;
        }
        
        $data->save();
        return redirect()->back()->with('success','Your details have been successfully!');   
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
