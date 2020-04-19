@extends('layouts.admin')
@section('title','Add Coordinator')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-user"></i> <b>Coordinator</b> <i class="fa fa-angle-right"></i> <i class="fa fa-plus"></i> <b>@yield('title')</b></h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12">
            <div class="form-panel">
            <br>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
                <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b>Details of the Coordinator</b></h4>
                <form class="form-horizontal style-form" method="POST" action="/coordinators"  autocomplete="off"  enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>First Name</label>
                    <div class="col-sm-8">
                        <input type="text"  name="fname" class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Last Name</label>
                    <div class="col-sm-8">
                        <input type="text"  name="lname" class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Gender</label>
                    <div class="col-sm-8">
                        <input type="text"  name="gender"  class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-shield"></i><span> </span> Position</label>
                    <div class="col-sm-8">
                        <input type="text"  name="position"  class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-trophy"></i><span> </span>Qualification</label>
                    <div class="col-sm-8">
                        <input type="text"  name="qualification" class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-laptop"></i><span> </span>Subject In Charge</label>
                    <div class="col-sm-8">
                    <input class="form-control round-form" id="focusedInput" type="text"  name="subject">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"><i class="fa fa-clock-o"></i> <span> </span>Date of Appointment</label>
                    <div class="col-md-4">
                        <input class="form-control round-form" type="date" name="appointment">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-mobile"></i><span> </span>Mobile No</label>
                    <div class="col-sm-8">
                        <input type="text"  name="mobile"  class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-envelope"></i><span> </span>Email</label>
                    <div class="col-sm-8">
                        <input type="email"  name="email"  class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-lock"></i><span> </span>Password</label>
                    <div class="col-sm-8">
                    <input type="password" name="password"class="form-control round-form" placeholder="">
                    </div>
                </div>
        
                <div class="form-group last">
                <label class="control-label col-md-3"><i class="fa fa-picture-o"></i> Image Upload</label>
                <div class="col-md-9">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;" name="image" type="file">
                    
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                    <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="image"/>
                    </span>
                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                    </div>
                </div>
                <span class="label label-info">NOTE!</span>
                <span>
                    Attached image thumbnail is
                    supported in Latest Firefox, Chrome, Opera,
                    Safari and Internet Explorer 10 only
                    </span>
                </div>
            </div>
                <div class="form-send">
                    <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">Add Coordinator</button>
                </div>
            
                </form>
            </div>
            </div>
            <!-- col-lg-12-->
        </div>
        <!-- /row -->
    
    </section>
<!-- /wrapper -->

@endsection