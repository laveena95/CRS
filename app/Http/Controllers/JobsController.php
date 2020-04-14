<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job=Job::all()->toArray();
        return view('Student.browseJob',compact('job'));
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
        $lastid=Job::create($data)->id;
        return redirect()->back()->with('success','Job Posted Successfully!'); 
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
        $jb=Job::find($id);
        return view('administrator.editStudent',compact('jb','id'));
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
                         'company_name' => 'required',
                         'title' => 'required',
                         'description' => 'required',
                         'experience' => 'required',
                         'totalPositions' => 'required',
                         'jobLocation' => 'required',
                         'gender' => 'required',
                         'industry' => 'required',
                         'skills' => 'required'
        ]);
        $jb=Job::find($id);
        $jb->company_name = $request->get('company_name');
        $jb->title = $request->get('title');
        $jb->description = $request->get('description');
        $jb->experience= $request->get('experience');
        $jb->totalPositions = $request->get('totalPositions');
        $jb->jobLocation = $request->get('jobLocation');
        $jb->gender = $request->get('gender');
        $jb->industry= $request->get('industry');
        $jb->skills= $request->get('skills');  
        $jb->save();
        $details= Job::all();
        return view('Student.browseJob')->with('job',$details); 
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('id',$id)->delete();
        return redirect()->back()->with('success','Job Removed Successfully!'); 
    }
}
