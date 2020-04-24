@extends('layouts.admin')
@section('title','Students Overview')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />

@endsection

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-users"></i> <b>Students</b> <i class="fa fa-angle-right"></i> <i class="fa fa-folder-open"></i> @yield('title')</h3>
    <div class="row mb" style="width:1400px;">
        <!-- page start-->
        @if($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{$message}}</p>
          </div>
        @endif
        <div style="margin-left:1100px;">
          <a href="addStudent" class="btn btn-theme ">ADD</a><br><br>
        </div>
        <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
              <thead>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Age</th>
                  <th>Semester</th>
                  <th>Registration_No</th>
                  <th>PIN</th>
                  <th>Course_Period</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Nationality</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
              </thead>
            
                @foreach($st as $row)
                  <tr class="gradeA">
                    <td>{{$row['fname']}}</td>
                    <td>{{$row['lname']}}</td>
                    <td>{{$row['gender']}}</td>
                    <td>{{$row['DOB']}}</td>
                    <td>{{$row['Age']}}</td>
                    <td>{{$row['Semester']}}</td>
                    <td>{{$row['Registration_No']}}</td>
                    <td>{{$row['PIN']}}</td>
                    <td>{{$row['Course_Period']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['phone']}}</td>
                    <td>{{$row['address']}}</td>
                    <td>{{$row['nationality']}}</td>
                    <td><img src="{{ asset('uploads/candidate/' . $row['image']) }}" width="100px;" height="100px;" alt="Image"></td>
                    <td><a href="{{action('addController@edit',$row['id'])}}" class="btn btn-theme"><i class="fa fa-pencil"></i></a></td>
                    <td>
                      <form method="post" class="delete_form" action="{{action('addController@destroy',$row['id'])}}">
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
            if(confirm("Are your sure you want to delete it?"))
            {
              return true;
            }
            else{
              return false;
            }
        });
      });
    </script>
    
    <script type="text/javascript">
    /* Formating function for row details */
      function fnFormatDetails(oTable, nTr) {
        var aData = oTable.fnGetData(nTr);
        var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
        sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
        sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
        sOut += '</table>';

        return sOut;
      }

      $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="backend/lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "backend/lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "backend/lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
        $( "#search" ).autocomplete({
    
            source: function(request, response) {
                $.ajax({
                url: "{{url('autocomplete')}}",
                data: {
                        term : request.term
                },
                dataType: "json",
                success: function(data){
                  var resp = $.map(data,function(obj){
                        //console.log(obj.city_name);
                        return obj.name;
                  }); 
    
                  response(resp);
                }
            });
        },
        minLength: 1
    });
      });
 
  </script> 
@endsection