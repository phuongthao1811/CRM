@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">

        <div class="modal-content" style="margin-top: 50px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thay Đổi Hãng Xe</h4>
            </div>
            @foreach ($gethx as $kt)
                <div class="modal-body">
                    <form class="form-horizontal" action="{{url('/admin/hangxe/list/update')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$kt->id}}">
                                <label for="tenhang">Tên Hãng Xe</label>
                                <input type="text" class="form-control" id="tenhang" name="tenhang" value="{{$kt->tenhang}}">
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