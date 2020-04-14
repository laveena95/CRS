@extends('layouts.student')
@section('title','Available Jobs')

@section('style')
@endsection

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-users"></i> <b>Students</b> <i class="fa fa-angle-right"></i> <i class="fa fa-folder-open"></i> @yield('title')</h3>
    <div class="row mb">
        <!-- page start-->
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
                <tr style="background-color:silver; font-weight:bold;color:black;"> 
                <th>Company Name</th>
                  <th>Job Title</th>
                  <th>Job Description</th>
                  <th>Required Experience</th>
                  <th>No of Vacancies</th>
                  <th>Gender Preference</th>
                  <th>Registration_No</th>
                  <th>Field of Work</th>
                  <th>Skills Required</th>
                </tr>
                @foreach($job as $row)
                  <tr>
                    <td>{{$row['company_name']}}</td>
                    <td>{{$row['title']}}</td>
                    <td>{{$row['gender']}}</td>
                    <td>{{$row['DOB']}}</td>
                    <td>{{$row['Age']}}</td>
                    <td>{{$row['Semester']}}</td>
                    <td>{{$row['Registration_No']}}</td>
                    <td>{{$row['PIN']}}</td>
                    <td>{{$row['Course_Period']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['phone']}}</td>
@endsection

@section('script')
@endsection