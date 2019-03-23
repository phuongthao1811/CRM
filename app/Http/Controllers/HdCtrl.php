<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HdModel;
use Illuminate\Support\Facades\DB;

class HdCtrl extends Controller
{
    public function getHD(){
        $kq = DB::select("SELECT * FROM hopdong, khachhang, xe WHERE hopdong.cmnd=khachhang.cmnd and hopdong.soxe=xe.soxe");
        $kh = DB::select("SELECT * FROM khachhang");
        $status = DB::select("SELECT * FROM  xe WHERE xe.trangthai='0'");
        $nv = DB::select("SELECT * FROM nhanvien");
        return view('admin.hopdong.listHD',['kq'=>$kq,'kh'=>$kh, 'status' =>$status, 'nv' =>$nv]);
    }
    public function postHD(Request $request){
        $hd = new HdModel();
        $hd->mahd =$request->mahd;
        $hd->cmnd =$request->namekh;
        $hd->ngayhd =$request->ngaylap;
        $hd->manv =$request->manv;
        $hd->soxe =$request->soxe;
        $hd->tongtien =$request->tongtien;
        $hd->tiendat =$request->datcoc;
        $hd->ngaygiao =$request->ngaythue;
        $hd->ngaytra =$request->ngaytra;
        $hd->save();
        return redirect('admin/hopdong/list');
    }
    public function getDelHD($id){
        HdModel::find($id)->delete();
        return redirect('admin/hopdong/list');
    }
}
