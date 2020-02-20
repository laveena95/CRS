@extends('layouts.admin')
@section('title','Send Notification')

@section('content')

<section class="wrapper">
    <h3><i class="fa fa-users"></i> <b>Students</b> <i class="fa fa-angle-right"></i> <i class="fa fa-bell"></i> <b>@yield('title')</b></h3>
        <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <h4 class="title">Notification</h4>
        <div id="message"></div>

            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

                <div class="form-group">
                <i class="fa fa-user"></i><input type="text" name="name" class="form-control" id="contact-name" placeholder="Student Registration No" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
                </div>
                <div class="form-group">
                <i class="fa fa-envelope"></i><input type="email" name="email" class="form-control" id="contact-email" placeholder="Student Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
                </div>
                <div class="form-group">
                <i class="fa fa-pencil-square-o"></i><input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
                </div>

                <div class="form-group">
                <i class="fa fa-file-text"></i><textarea class="form-control" name="message" id="contact-message" placeholder="Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
                </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message"> <i class="fa fa-check-circle"></i>Notification Sent!</div>

                <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Send Notification</button>
                </div>

         </form>
        </div>

    </div>
    <!-- /row -->
        <!-- /row -->
</section>
<!-- /wrapper -->

@endsection