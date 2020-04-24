<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\StudentProfile;
use App\User;
use App\Job;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile()
    {
        return view('Student.profile');
    }

    public function profileS()
    {
        return view('layouts.student',array('user'=>Auth::user()));
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

    public function browseJob()
    {   
        $job=Job::paginate(10);
        return view('Student.browse-job',compact('job'));
    }


    public function index()
    {
        //return view('search');
    }
 
    public function search(Request $request)
    {     
        $search = $request->get('search');
        $job = DB::table('jobs')->where('title', 'LIKE', '%'. $search. '%')->paginate(5);
        return view('Student.browse-job',compact('search'));
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
        return redirect()->back()->with('success','Your details have been saved successfully!');   
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
        $data=new User();
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' .$extension;
            $file->move('uploads/candidate/',$filename);
            $data->image=$filename;
            $user = Auth::user();
            $user->image=$filename;
            $user->save();
        }
        
        return redirect()->back()->with('success','Your details have been successfully!'); 
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
