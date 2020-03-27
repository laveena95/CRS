<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login()
    {
        return view('Pages.Login');
    }
    public function register()
    {
        return view('Employee.registration');
    }
    public function index()
    {
        $company=Companies::all()->toArray();
        return view('administrator.companyOverview',compact('company'));
    }

    public function viewCompany()
    {
        return view('layouts.company');
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
        $data =$request->all();
        $lastid =Companies::create($data)->id;
        return redirect()->back()->with('success','Company added successfully!');
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
        $com=Companies::find($id);
        return view('administrator.editCompany',compact('com','id'));
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
            'cname' => 'required',
            'address' =>'required',
            'businessType' => 'required',
            'achievement' => 'required',
            'active' => 'required',
            'vacancy' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'website' => 'required',
            'password' => 'required',
        ]);
        $com=Companies::find($id);
        $com->cname = $request->get('cname');
        $com->address = $request->get('address');
        $com->businessType = $request->get('businessType');
        $com->achievement = $request->get('achievement');
        $com->active = $request->get('active');
        $com->vacancy = $request->get('vacancy');
        $com->contact = $request->get('contact');
        $com->email = $request->get('email');
        $com->website = $request->get('website');
        $com->password = $request->get('password');

        $com->save();
        $details= Companies::all();
        return view('administrator.companyOverview')->with('company',$details);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Companies::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully!');
    }
}
