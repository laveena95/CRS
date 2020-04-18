@extends('layouts.admin')
@section('title','Add Student')

@section('content')

<section class="wrapper">
    <h3><i class="fa fa-users"></i> <b>Students</b> <i class="fa fa-angle-right"></i> <i class="fa fa-plus"></i> <b>Add Student</b></h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
        <div class="form-panel">
          <br>
          @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
          @endif
          @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
          @endif
            <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b> Student Informations</b></h4>
            <form class="form-horizontal style-form" method="POST" action="/students"  autocomplete="off" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>First Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="fname" placeholder="fname">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Last Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="lname" placeholder="lname">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Gender</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="gender" placeholder="gender">
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-clock-o"></i><span> </span>D.O.B</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control " name="DOB" placeholder="DOB" style="width:200px;">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-calendar"></i><span> </span>Age</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="age" placeholder="age" style="width:200px;">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-book"></i><span> </span>Semester</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Semester" placeholder="Semester">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-pencil"></i><span> </span>Registration_No</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Registration_No" placeholder="Registration_No" style="width:200px;">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-pencil"></i><span> </span>PIN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="PIN" placeholder="PIN" style="width:200px;">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-clock-o"></i><span> </span>Course_Period</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Course_Period" placeholder="Course_Period" style="width:200px;">
                </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-2 col-sm-2 control-label"><i class="fa fa-envelope"></i>{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-mobile"></i><span> </span>Phone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="phone" placeholder="phone" style="width:200px;">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-home"></i><span> </span>Address</label>
                <div class="col-sm-8">
                    <textarea class="form-control round-form"  name="address" placeholder="address" style="width:200px;"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-flag"></i><span> </span>Nationality</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="nationality" placeholder="nationality" style="width:200px;">
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
                    <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">Add Student</button>
                </div>
            </div>
            
            </form>
        </div>
        </div>
        <!-- col-lg-12-->
    </div>
    <!-- /row -->
  
</section> 
    
@endsection

