@extends('layouts.admin')
@section('title','Edit Coordinators')

@section('style')
@endsection

@section('content')
<section class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3><i class="fa fa-pencil-square-o"></i> Edit Record</h3>
            <br/>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="form-horizontal style-form" method="post" action="{{ action('CoordinatorController@update', $id) }}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />
                
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>First Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="fname" placeholder="fname" value="{{$coordinator->fname}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Last Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="lname" placeholder="lname" value="{{$coordinator->lname}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Gender</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="gender" placeholder="gender" value="{{$coordinator->gender}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Position</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="position" placeholder="position" value="{{$coordinator->position}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Qualification</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="qualification" placeholder="qualification" value="{{$coordinator->qualification}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Subject In Charge</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="subject" placeholder="subject" value="{{$coordinator->subject}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Date of Appointment</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control round-form" name="appointment" placeholder="appointment" value="{{$coordinator->appointment}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Mobile No</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="mobile" placeholder="mobile" value="{{$coordinator->mobile}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control round-form" name="email" placeholder="yourMail@gmail.com" value="{{$coordinator->email}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control round-form" name="password" placeholder="*******" value="{{$coordinator->password}}">
                </div>
            </div>

            <div class="form-group" align="right">
               <input type="submit" class="btn btn-danger" value="update" />
            </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection