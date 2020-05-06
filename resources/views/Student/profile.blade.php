@extends('layouts.student')
@section('title','My account')

@section('content') 
    <section class="wrapper site-min-height">
        <h3 style="margin-top:-20px;"><i class="fa fa-home"></i> @yield ('title')</h3>
        <div class="row mt">
        <div class="col-lg-12">
            <div class="row content-panel">
            <div class="col-md-4 profile-text" style="margin-left:125px;">
                <h3>{{Auth::user()->name}}</h3>
                <h6>UNDERGRADUATE</h6>
                <p>Department of Computing & Information Systems, <br> Faculty of Applied Sciences, <br>Sabaragamuwa University of Srilanka</p>
                <br>
                <p><button class="btn btn-theme"><i class="fa fa-pencil"></i> Edit</button></p>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 centered"style="margin-left:125px;background-color:black;">
                <div class="profile-pic">
                <p><img src="/uploads/candidate/{{Auth::user()->image}}" class="img-circle"></p>
                <p>
                    <button class="btn btn-theme02"><i class="fa fa-pencil"></i> Change</button>
                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove</button>
                </p>
                </div>
            </div>
            <!-- /col-md-4 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /col-lg-12 -->
        <div class="col-lg-12 mt">
            <div class="row content-panel">
            <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#edit">Edit Profile</a>
                </li>
                </ul>
            </div>
            <!-- /panel-heading -->
            <div class="panel-body">
                <div class="tab-content">
                <div id="overview" class="tab-pane active">
                    <div class="row">
                    <div class="col-md-6">
                        <textarea rows="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                        <div class="grey-style">
                        <div class="pull-left">
                            <button class="btn btn-sm btn-theme"><i class="fa fa-camera"></i></button>
                            <button class="btn btn-sm btn-theme"><i class="fa fa-map-marker"></i></button>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm btn-theme03">POST</button>
                        </div>
                        </div>
                        <div class="detailed mt">
                        <h4>Recent Activity</h4>
                        <div class="recent-activity">
                            <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                            <div class="activity-panel">
                            <h5>1 HOUR AGO</h5>
                            <p>Sent resumes for approval.</p>
                            </div>
                            <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                            <div class="activity-panel">
                            <h5>5 HOURS AGO</h5>
                            <p>Browse Jobs.</p>
                            </div>
                            <div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
                            <div class="activity-panel">
                            <h5>3 DAYS AGO</h5>
                            <p>Sent resumes for Approval</p>
                            </div>
                        </div>
                        <!-- /recent-activity -->
                        </div>
                        <!-- /detailed -->
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-6 detailed">
                        <h4>User Stats</h4>
                        <div class="row centered mt mb">
                        <div class="col-sm-4">
                            <h1><i class="fa fa-desktop"></i></h1>
                            <h3>Count</h3>
                            <h6>JOBS AVAILABLE</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1><i class="fa fa-check-circle"></i></h1>
                            <h3>count</h3>
                            <h6>JOBS APPLIED</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1><i class="fa fa-file"></i></h1>
                            <h3>count</h3>
                            <h6>APPROVED RESUMES</h6>
                        </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                </div>
                <!-- /tab-pane -->
                <div id="contact" class="tab-pane">
                    <div class="row">
                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-6 detailed">
                        <h4>Location</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                            Postal Address<br/> 
                        </p>
                        <br>
                        </div>
                        <h4>Contacts</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                            Phone: +33 4898-4303<br/> Cell: 48 4389-4393<br/>
                        </p>
                        <br>
                        <p>
                            Email: hello@dashiotheme.com<br/> Skype: UseDashio<br/> 
                        </p>
                        </div>
                    </div>
                    <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /tab-pane -->
                <div id="edit" class="tab-pane">
                    <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Personal Information</h4>
                        <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-6">
                            <input type="file" id="exampleInputFile" class="file-pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Institute</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="c-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Lives In</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="lives-in" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Home town</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="country" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
                            <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Contact Information</h4>
                        <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Address 1</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="addr1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Address 2</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="addr2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Cell</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="cell" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Skype</label>
                            <div class="col-lg-6">
                            <input type="text" placeholder=" " id="skype" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" type="submit">Save</button>
                            <button class="btn btn-theme04" type="button">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
            </div>
            <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        </div>
        <!-- /container -->
    </section>
@endsection