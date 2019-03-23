<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\xeModel;
use Illuminate\Support\Facades\DB;

class xeCtrl extends Controller
{
    // get list xe
    public function getList()
    {
        $xe = DB::select("SELECT xe.id, xe.soxe,xe.tenxe, xe.hangxe, xe.loaixe, xe.giathue, xe.trangthai, xe.hinh, hangxe.tenhang 
                          FROM xe,hangxe 
                          WHERE xe.hangxe = hangxe.id");
        $nv = DB::select("SELECT * FROM hangxe");

        return view('admin.xe.listxe', ['xe' => $xe, 'nv'=> $nv]);
    }
    //add xe
    public function postAdd(Request $request){
        $ds = new xeModel();
        $ds->soxe =$request->soxe;
        $ds->tenxe =$request->tenxe;
        $ds->hangxe =$request->hangxe;
        $ds->loaixe =$request->loaixe;
        $ds->giathue =$request->giathue;
        $ds->trangthai =$request->trangthai ='0';
        $ds->hinh =$request->hinh;
        $ds->save();
        return redirect('admin/xe/list')->with('mess','Cập nhật thông tin thành công');
    }
    public function getDel($id){
        xeModel::find($id)->delete();
        return redirect('admin/xe/list')->with('mess','Xóa xe thành công');
    }
}
