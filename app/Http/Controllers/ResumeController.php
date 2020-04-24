<?php

namespace App\Http\Controllers;

use App\Resume;
//use Validator,Redirect,Response,File;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('Student.addResume');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cv=Resume::all();
        return view('Student.jobsApplied',compact('cv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Resume();
        $data->name=$request->input('name');
        $data->Registration_No=$request->input('Registration_No');
        $data->phone=$request->input('phone');
        $data->company=$request->input('company');
        $data->position=$request->input('position');
        
        if($request->file('cv')){
            $file = $request->file('cv');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/candidate/CV/',$filename);
            $data->cv=$filename;
        }
        $data->save();
        return redirect()->back()->with('success','Your details have been sent for approval!');
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
        //
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