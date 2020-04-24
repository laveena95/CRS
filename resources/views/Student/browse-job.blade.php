@extends('layouts.student')
@section('title','Available Jobs')

@section('style')
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="wrapper">
        <h3 le="margin-top:-20pxsty;"> <i class="fa fa-laptop"> </i> @yield('title')</h3>
            <!-- page start-->
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif

            <div class="row mb">
                <div class="content-panel">           
                    <div class="adv-table">
                      <div>
                        <form action="/search" method="GET" role="search">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <input type="search" class="form-control round-form" name="search" placeholder="Search Jobs" style="width:200px; margin-left:60px;">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-danger" style="margin-top:-35px; margin-left:10px; border-radius:50%;">
                                <i class="fa fa-search"></i>
                              </button>
                            </span>
                          </div>
                        </form>
                      </div>
                  
                      <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
                          <thead>
                              <th>Company Name</th>
                              <th>Job Title</th>
                              <th>Job Description</th>
                              <th>Required Experience</th>
                              <th>No of Vacancies</th>
                              <th>Location</th>
                              <th>Gender Preference</th>
                              <th>Field of Work</th>
                              <th>Skills Required</th>
                              <tn></th>
                          </thead>
                          @foreach($job as $row)
                          <tr class="gradeA">
                              <td >{{$row['company_name']}}</td>
                              <td>{{$row['title']}}</td>
                              <td>{{$row['description']}}</td>
                              <td>{{$row['experience']}}</td>
                              <td>{{$row['total_positions']}}</td>
                              <td>{{$row['job_location']}}</td>
                              <td>{{$row['gender']}}</td>
                              <td>{{$row['industry']}}</td>
                              <td>{{$row['skills']}}</td>
                              <td>
                                  <button type="submit" class="btn btn-theme"><a href="addResume" style="color:white;"><i class="fa fa-tick"></i>APPLY</a></button>
                              </td>
                          </tr>
                          @endforeach
                      </table>
                      {{ $job->links() }}
                     
                </div>
            </div>
            </div>
            <!-- /row -->
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
