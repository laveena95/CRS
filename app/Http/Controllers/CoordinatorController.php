<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinators;

class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordi=Coordinators::all()->toArray();
        return view('administrator.coordinatorOverview',compact('coordi'));
    }
    public function CoordinatorHome()
    {
    return view('coordinator.CoordinatorHome');
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
        $data =$request->all();
        $lastid =Coordinators::create($data)->id;
        return redirect()->back()->with('success','Coordinator added successfully!');
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
        $coordinator=Coordinators::find($id);
        return view('administrator.editCoordinator',compact('coordinator','id'));
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
            'fname'=> 'required',
            'lname'=> 'required',
            'gender'=> 'required',
            'position'=> 'required',
            'qualification'=> 'required',
            'subject'=> 'required',
            'appointment'=> 'required',
            'mobile'=> 'required',
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $coordinator=Coordinators::find($id);
        $coordinator->fname = $request->get('fname');
        $coordinator->lname = $request->get('lname');
        $coordinator->gender = $request->get('gender');
        $coordinator->position = $request->get('position');
        $coordinator->qualification = $request->get('qualification');
        $coordinator->subject = $request->get('subject');
        $coordinator->appointment = $request->get('appointment');
        $coordinator->mobile = $request->get('mobile');
        $coordinator->email = $request->get('email');
        $coordinator->password = $request->get('password');

        $coordinator->save();

        $details= Coordinators::all();
        return view('administrator.coordinatorOverview')->with('coordi',$details);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coordinators::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully!'); 
    }
}
