@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="modal-content" style="margin-top: 50px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thay Đổi Thông Tin Biên Bản Sự Cố</h4>
            </div>
            @foreach ($getbbsc as $bbsc)
                <div class="modal-body">
                    <form class="form-horizontal" action="{{url('/admin/bienban/list/update')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$bbsc->id}}">
                            <div class="col-sm-12">
                                <label for="idsuco"> Mã sự cố</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="idsuco" value="{{$bbsc->idsuco}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="tensc">Tên sự cố</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="tensc" value="{{$bbsc->tensc}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="ngaylap">Ngày lập</label>
                                <input style="margin-bottom:10px;" type="date" class="form-control" name="ngaylap" value="{{$bbsc->ngaylap}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="nvlap">Nhân viên lập</label>
                                <select style="margin-bottom:10px;" type="text" class="form-control" name="nvlap" value="{{$bbsc->nvlap}}">
                                    @foreach($nvl as $emp)
                                        <option value='{{$emp->manv}}'>{{$emp->tennv}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label for="mahd">Mã hợp đồng</label>
                                <select style="margin-bottom:10px;" type="text" class="form-control" name="mahd" value="{{$bbsc->mahd}}">
                                    @foreach($kq as $ds)
                                        <option value='{{$ds->id}}'>{{$ds->mahd}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label for="noidung"> Nội dung</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="noidung" value="{{$bbsc->noidung}}">
                            </div>
                            <div class="col-sm-12">
                                <label for="tienphat"> Tiền phạt</label>
                                <input style="margin-bottom:10px;" type="text" class="form-control" name="tienphat" value="{{$bbsc->tienphat}}">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button class="btn btn-default" data-dismiss="modal" style="margin:0px;">Close</button>
                </div>
                </form>
        </div>

        @endforeach
    </div>
    </div>

@endsection