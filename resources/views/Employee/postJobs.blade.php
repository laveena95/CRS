@extends('layouts.company')
@section('title','Post Jobs')

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-upload"></i> <b>Post Jobs</b></h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b> Job Details</b></h4>
                <form class="form-horizontal style-form" action="{{URL::to('save-job') }}" method="get" autocomplete="off">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Company</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="company_name" placeholder="Company Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-laptop"></i><span> </span>Job Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="title" placeholder="Job Title">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-edit"></i><span> </span>Job Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control round-form"  name="description" placeholder="Description" style="width:400px;"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-eye"></i><span> </span>Experience</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="experience" placeholder="Required Experience">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-users"></i><span> </span>Total Positions</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control round-form"  name="totalPositions">
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
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-map-maker"></i><span> </span>Job Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="jobLocation" placeholder="Location">
                    </div>
                </div> 

                 <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-male"></i><span> </span>Gender Prefrence</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control" id="gender" name="gender">
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
                        <select type="text" class="form-control" id="industry" name="industry">
                            <option value="">--Please Select--</option>
                            <option value="Web and IT">Web and IT</option>
                            <option value="Engeenering">Engeenering</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-keyborad"></i><span> </span>Skills Required</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="skills" placeholder="separate by commas">
                    </div>
                </div> 

                 <div class="form-send">
                    <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">Create Job</button>
                </div>  
            </form>              
            </div>
        </div>
    </div>
</section>
@endsection