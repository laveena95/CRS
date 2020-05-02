@extends('layouts.coordinator')
@section('title','View Resume')

@section('style')
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="wrapper">
        <h3 style="margin-top:-20px;"><i class="fa fa-users"></i> <b>Student Requests</b> <i class="fa fa-angle-right"></i> <i class="fa fa-eye"></i> @yield ('title')</h3>
        <div class="row mb">
            
                <h4 style="margin-left:25px;"><i class="fa fa-user"> </i> Name of the Student : {{$data->name}}</h4>
                <h4 style="margin-left:25px;"><i class="fa fa-building"> </i> Name of the Company : {{$data->company}}</h4>
                <h4 style="margin-left:25px;"><i class="fa fa-desktop"> </i> Vacancy applied for : {{$data->position}}</h4><br><br>
                <p style="margin-left:35%; margin-top:-130px;"> 
                    <iframe src="{{url('/uploads/candidate/CV/'.$data->cv)}}" style="width:600px;height:600px;align:center;"></iframe>
                </p>
            </div>
        </div>
    </section>
@endsection