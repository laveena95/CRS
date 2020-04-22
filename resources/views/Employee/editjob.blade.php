@extends('layouts.company')
@section('title','Edit job')

@section('style')
@endsection

@section('content')
    <section class="wrapper">
    <div class="row">
        <div class="col-md-12">
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
            <form class="form-horizontal style-form" action="{{ action('JobsController@update', $id) }}" method="post" autocomplete="off">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Company</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="company_name" value="{{$jb->company_name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-laptop"></i><span> </span>Job Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="title" value="{{$jb->title}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-edit"></i><span> </span>Job Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control round-form"  name="description" value="{{$jb->description}}" style="width:400px;"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-eye"></i><span> </span>Experience</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="experience" value="{{$jb->experience}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-users"></i><span> </span>Total Positions</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control round-form"  name="total_positions" value="{{$jb->total_positions}}">
                            <option value="">--Select the no of vacancies--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-map-marker"></i><span> </span>Job Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="job_location" value="{{$jb->job_location}}">
                    </div>
                </div> 

                 <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-male"></i><span> </span>Gender Prefrence</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control" id="gender" name="gender" value="{{$jb->gender}}">
                            <option value="">--Please Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="No Prefrence">No Prefrence</option>
                        </select>
                    </div>
                </div> 
               
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-desktop"></i><span> </span>Industry</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control" id="industry" name="industry" value="{{$jb->industry}}">
                            <option value="">--Please Select--</option>
                            <option value="Web and IT">Web and IT</option>
                            <option value="Engeenering">Engeenering</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-keyboard-o"></i><span> </span>Skills Required</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="skills" value="{{$jb->skills}}">
                    </div>
                </div> 

                 <div class="form-send">
                    <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">UPDATE</button>
                </div>  
            </form>           
@endsection