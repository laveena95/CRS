@extends('layouts.coordinator')
@section('title','Student Details')

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-users"></i> <b>Students</b> <i class="fa fa-angle-right"></i> <i class="fa fa-folder-open"></i> @yield('title')</h3>
    <div class="row mb">
        <!-- page start-->
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
                <tr style="background-color:silver; font-weight:bold;color:black;"> 
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Semester</th>
                  <th>Registration_No</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Student's Resume</th>
                </tr>
            
                @foreach($st as $row)
                  <tr>
                    <td>{{$row['fname']}}</td>
                    <td>{{$row['lname']}}</td>
                    <td>{{$row['Semester']}}</td>
                    <td>{{$row['Registration_No']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['phone']}}</td>
                    <td>{{$row['resume']}}</td>
                  </tr>
                @endforeach
            </table>
        </div>
        </div>
        <!-- page end-->
    </div>
        <!-- /row -->
</section>
@endsection