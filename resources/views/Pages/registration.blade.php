@extends('layouts.application')
@section('title','Registration')
@section('style')

@stop

@section('content')

<section class="wrapper">
  <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
        <div class="form-panel">
        
            <form class="form-horizontal style-form" method="get" action="login">
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Name of the Company</label>
                <div class="col-sm-8">
                    <input type="text"  class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-map-marker"></i><span> </span> location</label>
                <div class="col-sm-8">
                    <textarea  class="form-control round-form"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-code"></i></b><span> </span> Type of the Business</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-trophy"></i><span> </span> Achievements</label>
                <div class="col-sm-8">
                <textarea class="form-control round-form" id="focusedInput" type="text" value=""></textarea>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-md-3"><i class="fa fa-clock-o"></i> <span> </span> Active in Market</label>
                    <div class="col-md-4">
                    <div class="input-group input-large" data-date="01/01/2014" data-date-format="mm/dd/yyyy">
                        <input type="text" class="form-control round-form dpd1" name="from">
                        <span class="input-group-addon">To</span>
                        <input type="text" class="form-control round-form dpd2" name="to">
                    </div>
                    <span class="help-block"></span>
                    </div>
                </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-mobile"></i><span> </span> Contact No</label>
                <div class="col-sm-8">
                    <input type="text"  class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-envelope"></i><span> </span> Email</label>
                <div class="col-sm-8">
                    <input type="email"  class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-desktop"></i><span> </span> Official Website</label>
                <div class="col-sm-8">
                    <input type="email"  class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-lock"></i><span> </span> Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control round-form" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-lock"></i><span> </span> Confirm Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control round-form" placeholder="">
                </div>
            </div>
                <div class="form-send">
                <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;" onclick="">Register</button>
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
<a href="#" class="back-to-top">
  <i class="ti-arrow-up"></i>
</a>
  
@endsection
@section('script')


@stop