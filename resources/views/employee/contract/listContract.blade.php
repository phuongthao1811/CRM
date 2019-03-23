@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> DANH SÁCH HỢP ĐỒNG</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách hợp đồng
                    </div>
                    <button type="button" class="btn btn-success fa fa-plus" data-toggle="modal" data-target="#add" style="margin:10px"> Thêm Hợp Đồng</button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Số HĐ</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Loại Xe</th>
                                    <th>Số Xe</th>
                                    <th>Tổng Tiền</th>
                                    <th>Ngày Thuê</th>
                                    <th>Ngày Trả</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1 ?>
                                @foreach($kq as $ds)
                                    <tr class="odd gradeX">
                                        <td>{{$index ++}}</td>
                                        <td>{{$ds->mahd}}</td>
                                        <td>{{$ds->tenkh}}</td>
                                        <td>0{{$ds->sdt}}</td>
                                        <td>{{$ds->loaixe}}</td>
                                        <td>{{$ds->soxe}}</td>
                                        <td>{{$ds->tongtien}}</td>
                                        <td>{{$ds->ngaygiao}}</td>
                                        <td>{{$ds->ngaytra}}</td>
                                        <td>
                                            <a href="admin/hopdong/list/{{$ds->id}}/edit"><button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit"></button></a>
                                            <a href="admin/hopdong/list/{{$ds->id}}/del" onclick="return confirm('Bạn có chắc chắn muốn xóa hợp đồng này?')"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>
                                            <a href="">Chi Tiết</a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal add -->
        <div id="add" class="modal fade" role="dialog">
            <form action="{{url('/admin/hopdong/list')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Thêm Hợp Đồng</h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="mahd">Số Hợp Đồng</label>
                                <input type="text" class="form-control" name="mahd">
                            </div>
                            <div class="form-group">
                                <label for="namekh">Tên Khách Hàng</label>
                                <select id="namekh" type="text" class="form-control" name="namekh">
                                    <option>---Chọn Khách Hàng---</option>
                                    @foreach($kh as $name)
                                        <option  value='{{$name->cmnd}}'>{{$name->tenkh}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ngaylap">Ngày Lập HĐ</label>
                                <input type="date" class="form-control" name="ngaylap">
                            </div>
                            <div class="form-group">
                                <label for="manv">Mã NV</label>
                                <select  type="text" class="form-control" name="manv">
                                    <option>---NV Lập HĐ---</option>
                                    @foreach($nv as $nvl)
                                        <option value='{{$nvl->manv}}'>{{$nvl->manv}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="soxe">Số Xe</label>
                                <select id="soxe" type="text" class="form-control" name="soxe">
                                    <option>---Chọn Biển Số Xe---</option>
                                    @foreach($status as $tt)
                                        <option value='{{$tt->soxe}}'>{{$tt->soxe}}</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="giathue">Giá Thuê (VNĐ)</label>
                                <input type="number" class="form-control" name="giathue" value="{{$tt->giathue}}">
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="datcoc">Đặt Cọc (VNĐ)</label>
                                <input type="number" class="form-control" name="datcoc">
                            </div>
                            <div class="form-group">
                                <label for="ngaythue">Ngày Thuê</label>
                                <input type="date" class="form-control" name="ngaythue">
                            </div>
                            <div class="form-group">
                                <label for="ngaytra">Ngày Trả</label>
                                <input type="date" class="form-control" name="ngaytra">
                            </div>
                            <div class="form-group">
                                <label for="tongtien">Tổng Tiền (VNĐ)</label>
                                <input type="number" class="form-control" name="tongtien">
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

{{--@section('script')--}}
{{--<script type="text/javascript">--}}

{{--$(document).ready(function() {--}}
{{--$(document).on('change', '#namekh', function(){--}}
{{--let id = $(this).val();--}}
{{--let sdt = $('#namekh').find(`option[value=${id}]`).attr('sdt');--}}
{{--console.log(sdt);--}}
{{--!!sdt && $('input[name=phone]').val(sdt);--}}
{{--})--}}
{{--});--}}
{{--</script>--}}
{{--@endsection--}}