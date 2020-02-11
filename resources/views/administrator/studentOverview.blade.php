@extends('layouts.admin')
@section('title','Students Overview')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/demo_page.css') }}" />}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/demo_table.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/advanced-datatable/css/DT_bootstrap.css') }}" />

@endsection

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-users"></i> <b>Students</b> <i class="fa fa-angle-right"></i> <i class="fa fa-folder-open"></i> @yield('title')</h3>
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
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" class="display table table-bordered" id="hidden-table-info">
                <tr style="background-color:silver; font-weight:bold;color:black;"> 
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
                </tr>
            
                @foreach($st as $row)
                  <tr>
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
            
            <!--<tbody>
                <tr class="gradeX">
                <td>15APC2321</td>
                <td>AYESHMANTHA M.A.C</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2322</td>
                <td>BANDARA H.M.A.P</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2323</td>
                <td>BANDARA U.R.T.D</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2324</td>
                <td>BUDDHIKA W.G.G</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2325</td>
                <td>BUDDHINI H.K.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2326</td>
                <td>DHANANJAYA R.A.T.K</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2327</td>
                <td>DHARMASENA W.G.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2328</td>
                <td>DILSHAN L.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2329</td>
                <td>DISAYIRAM N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2331</td>
                <td>EKANAYAKA E.M.S.U</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2332</td>
                <td>ERANDIKA D.D.H</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2333</td>
                <td>FERNANDO W.S.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2334</td>
                <td>GAMAGE M.G.M.S.P</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2335</td>
                <td>HEMACHANDRA K.G.R.P</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2336</td>
                <td>HERATH H.M.Y.G.R.J</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2337</td>
                <td>HETTIARACHCHI H.D.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2338</td>
                <td>HEWAVITHANA L.I.A</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2339</td>
                <td>IFHAM M.Z.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2340</td>
                <td>ISURUJITH M.G.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2341</td>
                <td>JASMAN N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2342</td>
                <td>JAYAKODY J.P.U.S.D</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2343</td>
                <td>JAYAMAHA J.H.R.P</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2345</td>
                <td>JAYASANKA H.W.J</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2346</td>
                <td>JAYATHILAKA R.B.M.K.K</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2347</td>
                <td>JEEVANTHA S.K.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2348</td>
                <td>JEEWAMALI M.T.S.B</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2349</td>
                <td>KAMMALAWATTA W.O</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2350</td>
                <td>KANDAMBI K.A.A.S.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2351</td>
                <td>KARIYAWASAM B.T</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2352</td>
                <td>KARIYAWASAM S.K.V.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2353</td>
                <td>KARALAVI M.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2354</td>
                <td>KARUNATHILAKA P.D.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2355</td>
                <td>KAVITHA P</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2356</td>
                <td>KKULANDARA K.M.O.V.K</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2357</td>
                <td>KINITHTHA T</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2358</td>
                <td>KUMARASEKARA T.M.D</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2359</td>
                <td>KUMARI W.A.M.A</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2360</td>
                <td>LAVEENA R</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2361</td>
                <td>LIYANAGE M.M.S.S.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2362</td>
                <td>LIYANAGE R.P.H</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2363</td>
                <td>MADAWALA MA.S.V</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2364</td>
                <td>MADHUSHANI W.A.D.C.I</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2365</td>
                <td>MADUSANKA H.P.N.D</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2366</td>
                <td>MALSHIKA A.Y</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2367</td>
                <td>MEDDEGODA M.L.D.A</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2368</td>
                <td>NADEESHANA M.G.K</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2369</td>
                <td>NANDASIRI K.P.S.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2370</td>
                <td>NAWODYA A.G.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2371</td>
                <td>NAYANTHARA R.G.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2372</td>
                <td>PEIRIS M.M.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2373</td>
                <td>PRABHATH M.G.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2374</td>
                <td>PREMARATHNA M.L</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2375</td>
                <td>PRIYASAD S.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2376</td>
                <td>RAJAPAKSHA R.M.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2377</td>
                <td>RANAPANA R.A.A.I.B</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2378</td>
                <td>RATHNAYAKA R.M.D.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2379</td>
                <td>RATHNAYAKA W.A.C.L</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2380</td>
                <td>RAVISARA A.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2381</td>
                <td>SAMEERA M.L.D.R</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2382</td>
                <td>SAMEERA R.A.D.T</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2383</td>
                <td>SAYANTHINY R</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2384</td>
                <td>MISHOBA S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2385</td>
                <td>SENANAYAKE S.R.S.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2386</td>
                <td>SUBHASHINI W.P.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2387</td>
                <td>THARMIKA K</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2388</td>
                <td>THILAKARATHNE K.R.R.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2389</td>
                <td>THUVISAN K</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2390</td>
                <td>UDARA D.V.I</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2391</td>
                <td>UDARA H.Y.B</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2392</td>
                <td>VITHUJAN A</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2393</td>
                <td>WEERASINGHE P.A.D.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2394</td>
                <td>WEERASINGHE S.K.S.B</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2395</td>
                <td>WERASINGHE W.M.G.C</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2397</td>
                <td>WIJEKOON N.A.D.U</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2398</td>
                <td>WIJERATHNA A.G.D.S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2399</td>
                <td>YATAPALA K.Y.D.H.T</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2400</td>
                <td>IHRAS M.M.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2401</td>
                <td>DE SILVA T.S.J</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2402</td>
                <td>KODITHUWAKKU K.A.D.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2403</td>
                <td>CHANDRASIRI H.D.M.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2404</td>
                <td>KAJANAN S</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2405</td>
                <td>DAYANANDA D.P.D</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2406</td>
                <td>RATHNAYAKE R.L.M</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2407</td>
                <td>WIMALARATHNE M.W.M.N</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
                </tr>
                <tr class="gradeX">
                <td>15APC2408</td>
                <td>THASHMILA K.K.R</td>
                <td class="hidden-phone">123abc</td>
                <td class="center hidden-phone">a@gmail.com</td>
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


<!--Table script-->
<!--<script type="text/javascript">
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
  </script>-->
  
@stop