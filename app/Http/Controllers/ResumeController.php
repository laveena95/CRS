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
        $data=new Resume();
        $data->name=$request->input('name');
        $data->Registration_No=$request->input('Registration_No');
        $data->phone=$request->input('phone');
        $data->company=$request->input('company');
        $data->position=$request->input('position');
        $data->cv=$request->input('cv');

       
        // file validation
        $validator      =   Validator::make($data->all(),
            ['cv'      =>   'required|mimes:pdf,docx|max:2048']);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        // if validation success
        if($file   =   $data->file('cv')) {

        $name      =   time().time().'.'.$file->getClientOriginalExtension();
        
        $target_path    =   public_path('/uploads/Candidate/CV/');
        
            if($file->move($target_path, $name)) {
               
                // save file name in the database
                $file   =   Resume::create(['cv' => $name]);
            
                return back()->with("success", "Resume sent for aproval successfully");
            }
        }
 
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
