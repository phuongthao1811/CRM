<link href="{{asset('source/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{{asset('source/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
<!-- Bootstrap Core CSS -->
<link href="{{asset('source/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="{{asset('source/css/metisMenu.min.css')}}" rel="stylesheet">

<!-- Timeline CSS -->
<link href="{{asset('source/css/timeline.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('source/css/startmin.css')}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset('source/css/morris.css')}}" rel="stylesheet">
<link href="{{asset('source/css/mystyle.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('source/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="{{asset('source/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{{asset('source/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
<style type="text/css" media="screen">
    body {
        text-align: center;
        background-image: url('img/download.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .title {
        text-transform: uppercase;
        font-weight: 700;
        color: green;
        padding-top:30px;
        font-size: 20px;
        margin: 0 40px;
    }
    .login_wrapper {
        box-shadow: 3px 2px 10px 1px #3b88bd;
        width: 500px;
        margin:  0 auto;
        margin-top: 15%;
        border-radius: 5px;
        background-color: #FFF;
    }
    .form-label-group input {
        width: 300px;
        margin:  0 auto;
        margin-bottom: 30px ;
        margin-top: 30px ;

    }
    .btn-wrapper {
        padding: 30px;
    }
    button {
        margin: 20px;
        width: 100px;
        font-weight: 700;
    }
    label {
        margin: 10px 0;
    }

</style>
<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="login" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="title">Đăng nhập vào hệ thống quản lý cho thuê xe</div>
                    @if(session('mess'))
                        <div class="alert alert-success">
                            {{ session('mess') }}
                        </div>
                    @endif
                    <div class="form-label-group">
                        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Vui Lòng Nhập Tên Đăng Nhập" required autofocus>
                    </div>
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Vui Lòng Nhập Mật Khẩu" required autocomplete="off">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="btn-wrapper">
                        <button type="submit" class="btn btn-success btn-login">Log in</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>