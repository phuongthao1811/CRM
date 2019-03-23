@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">

        <div class="modal-content" style="margin-top: 50px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thay Đổi Thông Tin Khách Hàng</h4>
            </div>
            @foreach ($getkh as $kh)
                <div class="modal-body">
                    <form class="form-horizontal" action="{{url('/admin/khachhang/list/update')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$kh->id}}">
                            <div class="col-sm-12">
                                <label for="tenkh">Họ và Tên Khách Hàng</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="tenkh" value="{{$kh->tenkh}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="socmnd">Số CMND</label>
                                <input style="margin-bottom:10px;" type="number" class="form-control" name="cmnd" value="{{$kh->cmnd}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="phone">Số Điện Thoại</label>
                                <input style="margin-bottom:10px;" type="number" class="form-control" name="sdt" value="0{{$kh->sdt}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="sogplx">Số GPLX</label>
                                <input style="margin-bottom:10px;" type="number" class="form-control" name="sogplx" value="{{$kh->sogplx}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="diachi">Địa Chỉ</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="diachi" value="{{$kh->diachi}}">
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"  >Save</button>
                    <button class="btn btn-default" data-dismiss="modal" style="margin:0px;">Close</button>
                </div>
                </form>
        </div>

        @endforeach
    </div>
    </div>

@endsection