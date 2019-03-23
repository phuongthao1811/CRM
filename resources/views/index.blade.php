<head>
    <meta charset="utf-8">
    <title>Quản lý cho thuê xe</title>
    <base href=" {{ asset('') }} ">
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
    <link href="source/css/user.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="source/css/morris.css" rel="stylesheet">
    <link href="source/css/mystyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="source/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="source/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="source/css/dataTables/dataTables.responsive.css" rel="stylesheet">
</head>
<script src="source/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="source/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="source/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="source/js/dataTables/jquery.dataTables.min.js"></script>
<script src="source/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="source/js/startmin.js"></script>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="login"> Login <span class="caret"></span></a>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/1.png" style="width:100%;">
        </div>

        <div class="item">
            <img src="img/2.png" style="width:100%;">
        </div>

        <div class="item">
            <img src="img/3.png"style="width:100%;">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="info-container container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">DANH SÁCH XE Ô TÔ CHO THUÊ	</h1>
        </div>
    </div>
    <div class="row">
        @foreach($xe as $dsxe)
            <div class="col-md-6 col-sm-6 info-wrapper container">
                <div class="row">
                    <div class="thumbnail col-sm-6">
                        <img src="{{$dsxe->hinh}}">
                    </div>
                    <div class="info col-sm-6">
                        <ul>
                            <li class="even typeTextfield group2">
                                <span class="catItemExtraFieldsLabel">Hiệu: </span>
                                <span class="catItemExtraFieldsValue">{{$dsxe->tenhang}}</span>
                            </li>
                            <li class="odd typeTextfield group2">
                                <span class="catItemExtraFieldsLabel">Tên xe: </span>
                                <span class="catItemExtraFieldsValue">{{$dsxe->tenxe}}</span>
                            </li>
                            <li class="odd typeSelect group2">
                                <span class="catItemExtraFieldsLabel">Kiểu xe: </span>
                                <span class="catItemExtraFieldsValue">{{$dsxe->loaixe}} Chỗ</span>
                            </li>
                            <li class="even typeTextfield group2">
                                <span class="catItemExtraFieldsLabel">Giá thuê ngày: </span>
                                <span class="catItemExtraFieldsValue">{{$dsxe->giathue}} VNĐ</span>
                            </li>
                            <li class="odd typeTextfield group2">
                                <span class="catItemExtraFieldsLabel">Biển số xe: </span>
                                <span class="catItemExtraFieldsValue">{{$dsxe->soxe}}</span>
                            </li>
                            <li class="even typeTextfield group2">
                                <span class="catItemExtraFieldsLabel">Tình trạng xe: </span>
                                <span class="catItemExtraFieldsValue">{{$dsxe->trangthai}}</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <button type="submit" data-toggle="modal" data-target="#hire" class="btn btn-success"> Thuê xe</button>
            </div>
        @endforeach
    </div>
</div>
<!-- modal add -->
<div id="hire" class="modal fade" role="dialog">
    <form action="{{url('/admin/xe/list')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Vui Lòng Để Lại Thông Tin Liên Lạc</h3>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="hoten">Họ và tên</label>
                        <input type="text" class="form-control" name="hoten">
                    </div>
                    <div class="form-group">
                        <label for="tel">Số điện thoại</label>
                        <input type="number" class="form-control" name="tel">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="loaixe">Loại Xe</label>
                        <input type="text" class="form-control" name="loaixe" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="ngaythue">Ngày Thuê</label>
                        <input type="date" class="form-control" name="ngaythue">
                    </div>
                    <div class="form-group">
                        <label for="ngaytra">Ngày Trả</label>
                        <input type="date" class="form-control" name="ngaytra">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end add modal -->

