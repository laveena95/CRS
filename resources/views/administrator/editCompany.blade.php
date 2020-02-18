@extends('layouts.admin')
@section('title','Edit Company')

@section('style')
@endsection

@section('content')
<section class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <br/>
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
            <form class="form-horizontal style-form" method="post" action="{{ action('CompanyController@update', $id) }}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Company Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="cname" placeholder="cname" value="{{$com->cname}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="address" placeholder="address" value="{{$com->address}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Type of the Business</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="businessType" placeholder="businessType" value="{{$com->businessType}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Achievement</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="achievement" placeholder="achievement" value="{{$com->achievement}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Active in Market</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="active" placeholder="active" value="{{$com->active}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Vacancy Available</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="vacancy" placeholder="vacancy" value="{{$com->vacancy}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Contact</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="contact" placeholder="contact" value="{{$com->contact}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control round-form" name="email" placeholder="email" value="{{$com->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Official Website</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control round-form" name="website" placeholder="website" value="{{$com->website}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control round-form" name="password" placeholder="password" value="{{$com->password}}">
                    </div>
                </div>
                <div class="form-group" align="right">
                    <input type="submit" class="btn btn-danger" value="update" />
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection