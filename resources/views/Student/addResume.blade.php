@extends('layouts.student')
@section('title','Get Approved')

@section('content')
  <section class="wrapper">
    <h3 style="margin-top:-20px;"><i class="fa fa-search"></i> <b>Browse Jobs</b> <i class="fa fa-angle-right"></i> <i class="fa fa-certificate"></i> <b>@yield('title')</b></h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
        @if($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{$message}}</p>
          </div>
          @endif
          <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b> My Profile</b></h4>
            <form class="form-horizontal style-form" method="POST" action="/resumes"  autocomplete="off"  enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Name with initials</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="name" placeholder="name" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-pencil"></i><span> </span>Registration_No</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Registration_No" placeholder="Registration_No" style="width:200px;" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-phone"></i><span> </span>Mobile</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="phone" placeholder="+94(123456789)" style="width:200px;" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Company Applying for</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="company" placeholder="Name of the company with location" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-laptop"></i><span> </span>Position</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="position" placeholder="Position" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-file"></i><span> </span>Resume</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control round-form" name="cv" placeholder="Your CV here...." required="">
                </div>
              </div>

              <div class="form-send">
                  <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">SEND FOR APPROVAL</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection