@extends('layouts.company')
@section('title','Posted Jobs')

@section('style')
@endsection

@section('content')
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> <b>Jobs</b> <i class="fa fa-angle-right"></i> <i class="fa fa-check-circle"></i> @yield('title')</h3>
        <div class="row mb">
            <!-- page start-->
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <div align="right">
            <a href="postJobs" class="btn btn-theme ">ADD JOB</a><br><br>
            </div>
            <div class="adv-table">
                <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
                    <tr style="background-color:silver; font-weight:bold;color:black;"> 
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Job Description</th>
                    <th>Required Experience</th>
                    <th>No of Vacancies</th>
                    <th>Location</th>
                    <th>Gender Preference</th>
                    <th>Field of Work</th>
                    <th>Skills Required</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                    @foreach($job as $row)
                    <tr>
                        <td>{{$row['company_name']}}</td>
                        <td>{{$row['title']}}</td>
                        <td>{{$row['description']}}</td>
                        <td>{{$row['experience']}}</td>
                        <td>{{$row['total_positions']}}</td>
                        <td>{{$row['job_location']}}</td>
                        <td>{{$row['gender']}}</td>
                        <td>{{$row['industry']}}</td>
                        <td>{{$row['skills']}}</td>
                        <td><a href="{{action('JobsController@edit',$row['id'])}}" class="btn btn-theme"><i class="fa fa-pencil"></i></a></td>
                        <td>
                        <form method="post" class="delete_form" action="{{action('JobsController@destroy',$row['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </form>
                        </td>
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

@section('script')
    <script src="{{ asset('backend/lib/advanced-datatable/js/jquery.js')}}"></script>
    <script src="{{ asset('backend/lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('backend/lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.delete_form').on('submit',function(){
            if(confirm("Are your sure you want to delete this Job?"))
            {
            return true;
            }
            else{
            return false;
            }
        });
    });
    </script>
@endsection