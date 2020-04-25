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
<h3 style="margin-top:-20px;"><i class="fa fa-users"></i> <b>Student Requests</b> <i class="fa fa-angle-right"></i> <i class="fa fa-bell"></i> @yield ('title')</h3>
        <div class="row mb">
            <div class="content-panel">           
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info" style="width:600px;">
                        <thead>
                            <th>Name</th>
                            <th>Registration_No</th>
                            <th>Phone</th>
                            <th>Company Applied</th>
                            <td>Position</td>
                            <td>Resume of the Student</td>
                            <td>Approve</td>
                            <td>Pending</td>
                            <td>Reject</td>
                        </thead>
                        @foreach($cv as $row)
                        <tr class="gradeA">
                            <td>{{$row['name']}}</td>
                            <td>{{$row['Registration_No']}}</td>
                            <td>{{$row['phone']}}</td>
                            <td>{{$row['company']}}</td>
                            <td>{{$row['position']}}</td>
                            <td>{{$row['cv']}}</td>
                            <td> 
                                <button type="submit" class="btn btn-success"><a href="addResume" style="color:white;"><i class="fa fa-check"> </i> </a></button>  
                            </td>
                            <td> <button type="submit" class="btn btn-warning"><a href="addResume" style="color:white;"><i class="fa fa-exclamation-circle"> </i> </a></button></td>
                            <td> <button type="submit" class="btn btn-danger"><a href="addResume" style="color:white;"><i class="fa fa-times"> </i> </a></button></td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>       
</section>
@endsection

@section('script')
    <script src="{{ asset('backend/lib/advanced-datatable/js/jquery.js')}}"></script>
    <script src="{{ asset('backend/lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('backend/lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
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