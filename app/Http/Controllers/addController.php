<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class addController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st=Students::all()->toArray();
        return view('administrator.studentOverview',compact('st'));
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
        //return $request;
        $data=$request->all();
        $lastid=Students::create($data)->id;
        return redirect()->back()->with('success','Student added successfully!');   
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
        return view('administrator.editStudent',compact('student','id'));
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
        $this->validate($request, [
            'fname' => 'required',
            'lname' =>'required',
            'gender' => 'required',
            'DOB' => 'required',
            'age' => 'required',
            'Semester' => 'required',
            'Registration_No' => 'required',
            'PIN' => 'required',
            'Course_Period' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'nationality' => 'required'
        ]);
        $student=Students::find($id);
        $student->fname = $request->get('fname');
        $student->lname = $request->get('lname');
        $student->gender = $request->get('gender');
        $student->DOB = $request->get('DOB');
        $student->age = $request->get('age');
        $student->Semester = $request->get('Semester');
        $student->Registration_No = $request->get('Registration_No');
        $student->PIN = $request->get('PIN');
        $student->Course_Period = $request->get('Course_Period');
        $student->phone = $request->get('phone');
        $student->address = $request->get('address');
        $student->nationality = $request->get('nationality');   
        $student->save();
        $details= Students::all();
        return view('administrator.studentOverview')->with('st',$details); }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Students::where('id',$id)->delete();
        return redirect()->back()->with('success','Stdent Removed From The List Successfully!');   
    }
}
