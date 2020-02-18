@extends('layouts.admin')
@section('title','Edit Students')

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
            <form class="form-horizontal style-form" method="post" action="{{ action('addController@update', $id) }}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />
                
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>First Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="fname" placeholder="fname" value="{{$student->fname}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Last Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="lname" placeholder="lname" value="{{$student->lname}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-user"></i><span> </span>Gender</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="gender" placeholder="gender" value="{{$student->gender}}">
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-clock-o"></i><span> </span>D.O.B</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control " name="DOB" placeholder="DOB" style="width:200px;" value="{{$student->DOB}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-calendar"></i><span> </span>Age</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form" name="age" placeholder="age" style="width:200px;" value="{{$student->Age}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-book"></i><span> </span>Semester</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Semester" placeholder="Semester" value="{{$student->Semester}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-pencil"></i><span> </span>Registration_No</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Registration_No" placeholder="Registration_No" style="width:200px;" value="{{$student->Registration_No}}">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-pencil"></i><span> </span>PIN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="PIN" placeholder="PIN" style="width:200px;" value="{{$student->PIN}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-clock-o"></i><span> </span>Course_Period</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="Course_Period" placeholder="Course_Period" style="width:200px;" value="{{$student->Course_Period}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-2 col-sm-2 control-label"><i class="fa fa-envelope"></i>{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $student->email }}" required >

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
                    <input type="text" class="form-control round-form"  name="phone" placeholder="phone" style="width:200px;" value="{{$student->phone}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-home"></i><span> </span>Address</label>
                <div class="col-sm-8">
                    <textarea class="form-control round-form"  name="address" placeholder="address" style="width:200px;" >{{$student->address}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-flag"></i><span> </span>Nationality</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form"  name="nationality" placeholder="nationality" style="width:200px;" value="{{$student->nationality}}">
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