<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinators;
use App\Resume;
use App\User;
use Auth;

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
        $cv = Resume::all();
        return view('coordinator.CoordinatorHome');
    }

    public function CoordinatorAvatar(Request $request)
    {
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' .$extension;
            $file->move('uploads/coordinator/Avatar/',$filename);
            $user = Auth::user();
            $user->image=$filename;
            $user->save(); 
        }
        return redirect()->back();
    
    }

    public function changeCoPassword()
    {
        return view('coordinator.changeCoPassword');
    }

    public function CMail()
    {
        return view('coordinator.CMail');
    }
    
    public function CoLock()
    {
        return view('coordinator.CoLock');
    }

    public function coordinatorLogin()
    {
        return view('coordinator.coordinatorLogin');
    }

    public function studentDetail()
    {
        return view('coordinator.studentDetail');
    }

    public function studentRequest()
    {
        $cv=Resume::all();
        return view('coordinator.studentRequest',compact('cv'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coordinator.approved');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Coordinators();
        $data->fname=$request->input('fname');
        $data->lname=$request->input('lname');
        $data->gender=$request->input('gender');
        $data->position=$request->input('position');
        $data->qualification=$request->input('qualification');
        $data->subject=$request->input('subject');
        $data->appointment=$request->input('appointment');
        $data->mobile=$request->input('mobile');
        $data->email=$request->input('email');
        $data->password=$request->input('password');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' .$extension;
            $file->move('uploads/coordinator/',$filename);
            $data->image=$filename;
        }
        
        $data->save();
        return redirect()->back()->with('success','Coordinator added successfully!');
    }

    /*public function storeProfile(Request $request)
    {
        $data =$request->all();
        $lastid =Coordinators::create($data)->id;
        return view('coordinator.coordinatorProfile',compact('lastid'));
    }*/

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
