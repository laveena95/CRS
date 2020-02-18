@extends('layouts.admin')
@section('title','Company Overview')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" />}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />

@stop
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-building"></i> <b>Coordinator</b> <i class="fa fa-angle-right"></i> <i class="fa fa-folder-open"></i> @yield('title')</h3>
    <div class="row mb">
        <!-- page start-->
        @if($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{$message}}</p>
          </div>
        @endif
        <div align="right">
          <a href="addStudent" class="btn btn-theme ">ADD</a><br><br>
        </div>
        <div class="content-panel">
        <div class="adv-table">
        <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
                <tr style="background-color:silver; font-weight:bold;color:black;"> 
                <th>Name of the Company</th>
                <th>Location</th>
                <th>Type of the Business</th>
                <th>Achivements</th>
                <th>Active in Market</th>
                <th>Email</th>
                <th>Official Website</th>
                <th>Vacancies Available</th>
                </tr>

                @foreach($company as $row)
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
                    <td>{{$row['image']}}</td>
                @endforeach
            <!--<tbody>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeU">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeU">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeU">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeU">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeX">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeU">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeC">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeX">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
                <tr class="gradeA">
                <td>IT Solutions</td>
                <td>No: 21,
                    Kandy rd,
                    Colombo.
                </td>
                <td>ERP</td>
                <td>Became 4 star Company Recently</td>
                <td class="hidden-phone">2010 to present</td>
                <td class="center hidden-phone">info@gmail.com</td>
                <th class="hidden-phone">www.itsolution.lk</th>
                </tr>
            </tbody>-->
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


<!--Table script-->
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
      nCloneTd.innerHTML = '<img src="{{ asset('backend/lib/advanced-datatable/images/details_open.png') }}">';
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
          this.src = "{{ asset('backend/lib/advanced-datatable/images/details_open.png') }}";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "{{ asset('backend/lib/advanced-datatable/images/details_close.png') }}";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
  
  

@stop