@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">

        <div class="modal-content" style="margin-top: 50px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thay Đổi Thông Tin Nhân Viên</h4>
            </div>
            @foreach ($getnv as $nv)
                <div class="modal-body">
                    <form class="form-horizontal" action="{{url('/admin/nhanvien/list/update')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$nv->id}}">
                            <div class="col-sm-12">
                                <label for="manv">Mã Nhân Viên</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="manv" value="{{$nv->manv}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="namenv">Họ và Tên</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="tennv" value="{{$nv->tennv}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="phone">Số Điện Thoại</label>
                                <input style="margin-bottom:10px;"  type="number" class="form-control" name="sdt" maxlength="12" value="0{{$nv->sdt}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="socmnd">Số CMND</label>
                                <input style="margin-bottom:10px;" type="number" class="form-control" name="cmnd" value="{{$nv->cmnd}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="diachi">Địa Chỉ</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="diachi" value="{{$nv->diachi}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="chucvu">Chức Vụ</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="chucvu" value="{{$nv->chucvu}}">
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