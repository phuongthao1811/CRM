@extends('admin.layout.index')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DANH SÁCH XE Ô TÔ</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách thông tin xe
                    </div>
                    <button type="button" class="btn btn-success fa fa-plus" data-toggle="modal" data-target="#add" style="margin:10px"> Thêm Xe Mới</button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Số Xe</th>
                                    <th>Tên Xe</th>
                                    <th>Hãng Xe</th>
                                    <th>Loại Xe</th>
                                    <th>Giá Thuê</th>
                                    <th>Trạng Thái</th>
                                    <th> Hình Ảnh</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1 ?>
                                @foreach($xe as $dsxe)
                                    <tr class="odd gradeX">
                                        <td>{{$index ++}}</td>
                                        <td>{{$dsxe->soxe}}</td>
                                        <td>{{$dsxe->tenxe}}</td>
                                        <td>{{$dsxe->tenhang}}</td>
                                        <td>{{$dsxe->loaixe}}</td>
                                        <td>{{$dsxe->giathue}}</td>
                                        <td>{{$dsxe->trangthai == 1 ? "Đã được thuê" : "Chưa được thuê"}}</td>
                                        <td><img src="{{$dsxe->hinh}}" style="width:150px; height:80px"></td>
                                        <td>
                                            <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit"></button>
                                            <a href="admin/xe/list/{{$dsxe->id}}/del" onclick="return confirm('Bạn có chắc chắn muốn xóa xe này?')"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>
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
        <form action="{{url('/admin/xe/list')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Thêm Thông Tin Xe</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="soxe">Số Xe</label>
                            <input type="text" class="form-control" name="soxe">
                        </div>
                        <div class="form-group">
                            <label for="tenxe">Tên Xe</label>
                            <input type="text" class="form-control" name="tenxe">
                        </div>
                        <div class="form-group">
                            <label for="hangxe">Hãng Xe</label>
                            <select type="text" class="form-control" name="hangxe">
                                <option>---Chọn Hãng Xe---</option>
                                @foreach($nv as $dshx)
                                    <option value='{{$dshx->id}}'>{{$dshx->tenhang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="loaixe">Loại Xe</label>
                            <input type="text" class="form-control" name="loaixe">
                        </div>
                        <div class="form-group">
                            <label for="giathue">Giá Thuê</label>
                            <input type="number" class="form-control" name="giathue">
                        </div>
                        <div class="form-group">
                            <label for="trangthai">Trạng Thái</label>
                            <input type="text" class="form-control" name="trangthai" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="hinh">Hình Ảnh</label>
                            <input type="file" class="form-control" name="hinh">
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
                    <h3 class="modal-title">Sửa Đổi Thông Tin Xe</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="soxe">Số Xe</label>
                        <input type="text" class="form-control" id="soxe">
                    </div>
                    <div class="form-group">
                        <label for="tenxe">Tên Xe</label>
                        <input type="text" class="form-control" id="tenxe">
                    </div>
                    <div class="form-group">
                        <label for="hangxe">Hãng Xe</label>
                        <input type="text" class="form-control" id="hangxe">
                    </div>
                    <div class="form-group">
                        <label for="loaixe">Loại Xe</label>
                        <input type="text" class="form-control" id="loaixe">
                    </div>
                    <div class="form-group">
                        <label for="giathue">Giá Thuê</label>
                        <input type="number" class="form-control" id="giathue">
                    </div>
                    <div class="form-group">
                        <label for="status">Trạng Thái</label>
                        <input type="text" class="form-control" id="status">
                    </div>
                    <div class="form-group">
                        <label for="anh">Hình Ảnh</label>
                        <input type="file" class="form-control" id="anh">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Save</button>
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
