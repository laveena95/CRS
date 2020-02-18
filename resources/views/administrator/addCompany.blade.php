@extends('layouts.admin')
@section('title','Add Company')

@section('content')

<section class="wrapper">
    <h3><i class="fa fa-building"></i> <b>Company</b> <i class="fa fa-angle-right"></i> <i class="fa fa-plus"></i> <b>@yield ('title')</b></h3>
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
            <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b>Company Details</b></h4>
            <form class="form-horizontal style-form" method="POST" action="/companies" autocomplete="off">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Name of the Company</label>
                <div class="col-sm-8">
                    <input type="text" name="cname" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-map-marker"></i><span> </span> location</label>
                <div class="col-sm-8">
                    <textarea  class="form-control round-form" type="text" name="address"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-code"></i></b><span> </span> Type of the Business</label>
                <div class="col-sm-8">
                    <input type="text" name="businessType" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-trophy"></i><span> </span> Achievements</label>
                <div class="col-sm-8">
                <textarea class="form-control round-form" id="focusedInput" type="text" name="achievement"></textarea>
                </div>
            </div>
            <div class="form-group">
                  <label class="control-label col-md-3"><i class="fa fa-clock-o"></i> <span> </span> Active From</label>
                  <div class="col-md-4">
                  <input type="date" name="active" class="form-control round-form">
                  </div>
            </div>
            <div class="form-group">
                  <label class="control-label col-md-3"><i class="fa fa-clock-o"></i> <span> </span> Vacancy Available</label>
                  <div class="col-md-4">
                  <input type="date" name="active" class="form-control round-form">
                  </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-mobile"></i><span> </span> Contact No</label>
                <div class="col-sm-8">
                    <input type="text" name="contact" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-envelope"></i><span> </span> Email</label>
                <div class="col-sm-8">
                    <input type="email" name="email" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-desktop"></i><span> </span> Official Website</label>
                <div class="col-sm-8">
                    <input type="text" name="website" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-lock"></i><span> </span> Password</label>
                <div class="col-sm-8">
                <input type="password" name="password" class="form-control round-form" placeholder="">
                </div>
            </div>
                <div class="form-send">
                <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">Add to List</button>
            </div>

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
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
