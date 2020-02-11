@extends('layouts.student')
@section('title','Change Password')

@section('style')
@endsection

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-building"></i> <b>My Account</b> <i class="fa fa-angle-right"></i> <i class="fa fa-key"></i> <b>@yield ('title')</b></h3>
        <!-- CHANGE PASSWORD DIV STARTS-->
    <div class="row mt">
        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-left:15%;margin-top:60px;background-color:;">
        <h4 class="title">Change Password</h4>
        <div id="message"></div>
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
            <input type="password" name="name" class="form-control" id="contact-name" placeholder="OLD PASSWORD" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
            <div class="validate"></div>
            </div>
            <div class="form-group">
            <input type="password" name="email" class="form-control" id="contact-email" placeholder="NEW PASSWORD" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
            </div>
            <div class="form-group">
            <input type="password" name="subject" class="form-control" id="contact-subject" placeholder="RE-TYPE NEW PASSWORD" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
            <div class="validate"></div>
            </div>
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your Password has been reset!</div>

            <div class="form-send">
            <button type="submit" class="btn btn-large btn-primary">SAVE CHANGE</button>
            <div style="height:100px;"></div>
            </div>
        </form>
        </div>
    </div>
</section>

@endsection

@section('script')
@endsection