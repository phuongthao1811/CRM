<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href=" {{ asset('') }} ">

    <title>Quản lý cho thuê xe</title>
    <link href="source/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="source/css/dataTables/dataTables.responsive.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="source/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="source/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="source/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="source/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="source/css/morris.css" rel="stylesheet">
    <link href="source/css/mystyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="source/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="source/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="source/css/dataTables/dataTables.responsive.css" rel="stylesheet">

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">PHẦN MỀM QUẢN LÝ CHO THUÊ XE</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        {{--<ul class="nav navbar-nav navbar-left navbar-top-links">--}}
            {{--<li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>--}}
        {{--</ul>--}}

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li><a href="admin/trangchu/admin" style="color: black;"><i class="fa fa-home fa-fw" style="font-size: 24px;"></i> HOME</a></li>
                    <li><a href="admin/hangxe/list"  style="color: black;"><i class="fa fa-bus fa-fw" style="font-size: 24px;"></i> Quản lý hãng xe</a></li>
                    <li><a href="admin/xe/list"  style="color: black;"><i class="fa fa-car fa-fw" style="font-size: 24px;"></i> Quản lý xe</a></li>
                    <li><a href="admin/hopdong/list" style="color: black;"><i class="fa fa-list fa-fw" style="font-size: 24px;"></i> Quản lý hợp đồng</a></li>
                    <li><a href="admin/khachhang/list" style="color: black;"><i class="fa fa-users fa-fw" style="font-size: 24px;"></i> Quản lý khách hàng</a></li>
                    <li><a  href="admin/bienban/list"  style="color: black;"><i class="fa fa-file fa-fw" style="font-size: 24px;"></i> Biên bản sự số </a></li>
                    <li><a  href="admin/nhanvien/list"  style="color: black;"><i class="fa fa-user fa-fw" style="font-size: 24px;"></i>Quản lý nhân viên</a></li>
                    <li><a href="admin/thongke/list"  style="color: black;"><i class="fa fa-list-alt fa-fw" style="font-size: 24px;"></i> Thống kê doanh thu</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
</div>
<script src="source/js/jquery-3.3.1.min.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="source/js/bootstrap.min.js"></script>

{{--<!-- Metis Menu Plugin JavaScript -->--}}
<script src="source/js/metisMenu.min.js"></script>

{{--<!-- Morris Charts JavaScript -->--}}
<script src="source/js/raphael.min.js"></script>
<script src="source/js/morris.min.js"></script>
<script src="source/js/morris-data.js"></script>
{{--<!-- DataTables JavaScript -->--}}
<script src="source/js/dataTables/jquery.dataTables.min.js"></script>
<script src="source/js/dataTables/dataTables.bootstrap.min.js"></script>

{{--<!-- Custom Theme JavaScript -->--}}
<script src="source/js/startmin.js"></script>

        @yield('script')
    </body>
</html>
