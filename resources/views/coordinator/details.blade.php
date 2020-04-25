@extends('layouts.coordinator')
@section('title','Requests')

@section('style')
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="wrapper">
        <i class></i><h2>Name of the Student : {{$data->name}}</h2>
        <h2>Vacancy applied for : {{$data->position}}</h2>
        <p>
            <iframe src="{{url('/uploads/candidate/CV/'.$data->cv)}}" style="width:600px;height:600px;align:center;"></iframe>
        </p>
    </section>
@endsection