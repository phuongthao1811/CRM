@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DANH SÁCH NHÂN VIÊN</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách nhân viên
                    </div>
                    <button type="button" class="btn btn-success fa fa-plus" data-toggle="modal" data-target="#add" style="margin:10px"> Thêm Nhân Viên</button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID NV</th>
                                    <th>Họ và Tên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Số CMND</th>
                                    <th>Địa Chỉ</th>
                                    <th>Chức vụ </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1 ?>
                                @foreach($nv as $ds)
                                    <tr class="odd gradeX">
                                        <td>{{$index ++}}</td>
                                        <td>{{$ds->manv}}</td>
                                        <td>{{$ds->tennv}}</td>
                                        <td>0{{$ds->sdt}}</td>
                                        <td>{{$ds->cmnd}}</td>
                                        <td>{{$ds->diachi}}</td>
                                        <td>{{$ds->chucvu}}</td>
                                        <td>
                                            <a href="admin/nhanvien/list/{{$ds->id}}/edit"><button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit"></button></a>
                                            <a href="admin/nhanvien/list/{{$ds->id}}/del"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>
                                        </td>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal add -->
    <div id="add" class="modal fade" role="dialog">
        <form action="{{url('/admin/nhanvien/list')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Thêm Nhân Viên</h3>
                    </div>
                    <div class="modal-body ">
                        <div class="form-group">
                            <label for="manv">Mã Nhân Viên</label>
                            <input type="text" class="form-control" name="manv">
                        </div>
                        <div class="form-group">
                            <label for="namenv">Họ và Tên</label>
                            <input type="text" class="form-control" name="namenv">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số Điện Thoại</label>
                            <input type="number" class="form-control" name="phone" maxlength="12">
                        </div>
                        <div class="form-group">
                            <label for="socmnd">Số CMND</label>
                            <input type="number" class="form-control" name="socmnd" maxlength="12">
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa Chỉ</label>
                            <input type="text" class="form-control" name="diachi">
                        </div>
                        <div class="form-group">
                            <label for="chucvu">Chức Vụ</label>
                            <input type="text" class="form-control" name="chucvu">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end add modal -->
@section('script')
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
            $('test').onclick(function(){
                alert("404 error");
            })
        });
    </script>
@endsection
@endsection
