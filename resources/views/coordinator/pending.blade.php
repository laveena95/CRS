@extends('layouts.coordinator')
@section('title','Pending Requests')

@section('style')
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
@endsection

@section('notification')
{{ $pending->count() }}
@endsection

@section('content')
  <section class="wrapper">
    <h3 style="margin-top:-20px;"><i class="fa fa-users"></i> <b>Student Requests</b> <i class="fa fa-angle-right"></i> <i class="fa fa-exclamation-circle"><span class="badge bg-warning">{{ $pending->count() }}</span></i> @yield ('title')</h3>
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
                              <td>View Resume</td>
                              <td>Download Resume</td>
                              <td>is_Approved</td>
                              <!--<td>Pending</td>-->
                          </thead>
                          @foreach($pending as $key=>$data)
                          <tr class="gradeA">
                              <td>{{$data->name}}</td>
                              <td>{{$data->Registration_No}}</td>
                              <td>{{$data->phone}}</td>
                              <td>{{$data->company}}</td>
                              <td>{{$data->position}}</td>
                              <td> <button type="submit" class="btn btn-info"><a href="/resumes/{{$data->id}}" style="color:black;"><i class="fa fa-eye"> </i></a></button></td>
                              <td> <button type="submit" class="btn btn-info"><a href="/resumes/download/{{$data->cv}}" style="color:black;"><i class="fa fa-download"> </i></a></button></td>
                              <td>
                                @if($data->is_approved == 1)
                                  <span class="btn btn-success">Approved</span>
                                  @else
                                  <span class="btn btn-danger"> <i class="fa fa-exclamation-circle"> </i> Pending</span>
                                @endif
                              </td>
                              <td class="text-center">
                                @if($data->is_approved == 0)
                                    <button type="button" class="btn btn-success waves-effect" onclick="approvePost({{ $data->id }})">
                                        <i class="fa fa-check"></i>
                                    </button>
                                    <form method="post" action="{{ action('CoordinatorController@studentRequest',$data->id) }}" id="approval-form-{{ $data->id }}" style="display: none">
                                        @csrf
                                        @method('PUT')
                                    </form>
                                @endif
                              </td>
                              <!--td> <button type="submit" class="btn btn-danger"><a href="addResume" style="color:white;"><i class="fa fa-times"> </i> </a></button></td>-->
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

  /* script to approve  student resume */
  <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

  <script type="text/javascript">
    function approvePost(id) {
          swal({
              title: 'Are you sure?',
              text: "You want to approve this Resume ",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, approve it!',
              cancelButtonText: 'No, cancel!',
              confirmButtonClass: 'btn btn-success',
              cancelButtonClass: 'btn btn-danger',
              buttonsStyling: false,
              reverseButtons: true
          }).then((result) => {
              if (result.value) {
                  event.preventDefault();
                  document.getElementById('approval-form-'+ id).submit();
              } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
              ) {
                  swal(
                      'Cancelled',
                      'The Student Resume Remain PENDING!!! :)',
                      'info'
                  )
              }
          })
      }
  </script>

@endsection