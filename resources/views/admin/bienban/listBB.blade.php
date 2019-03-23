@extends('admin.layout.index')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DANH SÁCH BIÊN BẢN SỰ CỐ</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách thông tin sự cố
                    </div>
                    <button type="button" class="btn btn-success fa fa-plus" data-toggle="modal" data-target="#add" style="margin:10px"> Thêm Sự Cố</button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mã sự cố</th>
                                    <th>Tên sự cố</th>
                                    <th>Ngày lập</th>
                                    <th>Nhân viên lập</th>
                                    <th>Mã hợp đồng</th>
                                    <th>Nội dung</th>
                                    <th>Tiền phạt</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1 ?>
                                @foreach($bb as $ds)
                                    <tr class="odd gradeX">
                                        <td>{{$index ++}}</td>
                                        <td>{{$ds->idsuco}}</td>
                                        <td>{{$ds->tensc}}</td>
                                        <td>{{$ds->ngaylap}}</td>
                                        <td>{{$ds->nvlap}}</td>
                                        <td>{{$ds->mahd}}</td>
                                        <td>{{$ds->noidung}}</td>
                                        <td>{{$ds->tienphat}}</td>
                                        <td>
                                            <a href="admin/bienban/list/{{$ds->id}}/edit"><button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit"></button></a>
                                            <a href="admin/bienban/list/{{$ds->id}}/del"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>
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
        <form action="{{url('/admin/bienban/list/')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Thêm Thông Tin Sự Cố</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="idsuco"> Mã sự cố</label>
                            <input type="text" class="form-control" name="idsuco">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tensc">Tên sự cố</label>
                            <input type="text" class="form-control" name="tensc">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ngaylap">Ngày lập</label>
                            <input type="date" class="form-control" name="ngaylap">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nvlap">Nhân viên lập</label>
                            <select type="text" class="form-control" name="nvlap">
                                <option>---Nhân Viên Lập---</option>
                                @foreach($nvl as $emp)
                                    <option value='{{$emp->manv}}'>{{$emp->tennv}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="mahd">Mã hợp đồng</label>
                            <select type="text" class="form-control" name="mahd">
                                <option>---Mã Hợp Đồng---</option>
                                @foreach($kq as $ds)
                                    <option value='{{$ds->mahd}}'>{{$ds->mahd}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="noidung"> Nội dung</label>
                            <input type="text" class="form-control" name="noidung">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tienphat"> Tiền phạt</label>
                            <input type="text" class="form-control" name="tienphat">
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
    <!-- modal edit -->
    <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Sửa Đổi Thông Tin Hãng Xe</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="hangxe"> Tên Hãng Xe</label>
                        <input type="text" class="form-control" id="hangxe">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal edit -->
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
