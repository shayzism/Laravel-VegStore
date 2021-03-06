<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="../build/images/favicon.ico" type="image/ico"/>
    <title>Admin Panel For MySabzi</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
<link href="{{asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<!-- Datatables -->
<link href="{{asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('front/css/css.css')}}">
    <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">


        {{-- sidebar --}}
        @include('admin/partials.sidebar')
        {{-- end of sidebar --}}



        <!-- top navigation -->
        @include('admin/partials/topnav')
        <!-- end of top navigation -->




        <!-- page content -->
        @yield('content')
        <!-- /page content -->




        <!-- footer content -->
        @include('admin/partials/footer')
        <!-- /footer content -->


    </div>
</div>
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>
<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin/vendors/iCheck/icheck.min.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>

<script src="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Chart.js -->
<script src="{{asset('admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- jQuery Sparklines -->
<script src="{{asset('admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('admin/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('admin/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('admin/vendors/DateJS/build/production/date.min.js')}}"></script>
<script src="{{asset('admin/vendors/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/vendors/morris.js/morris.min.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('front/js/city.js')}}"></script>


<!-- Custom Theme Scripts -->
<!-- <script src="../build/js/custom.min.js"></script> -->
<script src="{{asset('admin/src/js/custom.js')}}"></script>

</body>
</html>
