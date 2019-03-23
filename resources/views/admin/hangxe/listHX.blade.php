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
                        Danh sách thông tin hãng xe
                    </div>
                    <button type="button" class="btn btn-success fa fa-plus" data-toggle="modal" data-target="#add" style="margin:10px"> Thêm Hãng Xe Mới</button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Hãng Xe</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1 ?>
                                @foreach($hx as $ds)
                                    <tr class="odd gradeX">
                                        <td>{{$index ++}}</td>
                                        <td>{{$ds->tenhang}}</td>
                                        <td>
                                            <a href="admin/hangxe/list/{{$ds->id}}/edit"><button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit"></button></a>
                                            <a href="admin/hangxe/list/{{$ds->id}}/del"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>
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
        <form action="{{url('/admin/hangxe/list')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Thêm Thông Tin Hãng Xe</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="hangxe">Tên Hãng Xe</label>
                            <input type="text" class="form-control" id="hangxe" name="hangxe">
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
