<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KHModel;
use Illuminate\Support\Facades\DB;

class KhCtrl extends Controller
{
    public function getListKH(){
        $kh = DB::select("SELECT * FROM khachhang");
        return view('admin.khachhang.listKh',['kh' => $kh]);
    }
    public function postKh(Request $request){
        $tkh = new KHModel();
        $tkh->tenkh =$request->tenkh;
        $tkh->cmnd =$request->socmnd;
        $tkh->sdt =$request->phone;
        $tkh->sogplx =$request->sogplx;
        $tkh->diachi =$request->diachi;
        $tkh->save();
        return redirect('admin/khachhang/list')->with('mess','Cập nhật thông tin thành công');
    }
    public function getDelKH($id){
        KHModel::find($id)->delete();
        return redirect('admin/khachhang/list')->with('mess','Xóa xe thành công');
    }
    public function geteditkh($id){
        $getkh=DB::select("SELECT * FROM  khachhang where khachhang.id=".$id." ");
        return view('admin.khachhang.edit',['getkh' => $getkh]);
    }
    public function updatekh(Request $request){
        $allrequest=$request->all();
        $id = $allrequest['id'];
        $tenkh=$allrequest['tenkh'];
        $cmnd=$allrequest['cmnd'];
        $sdt=$allrequest['sdt'];
        $sogplx=$allrequest['sogplx'];
        $diachi=$allrequest['diachi'];
        $kh=KHModel::find($id);
        if($kh != NULL)
        {
            $kh->tenkh=$tenkh;
            $kh->cmnd=$cmnd;
            $kh->sdt=$sdt;
            $kh->sogplx=$sogplx;
            $kh->diachi=$diachi;
            $kh->save();
        }
        else {
            return;
        }

        return redirect('admin/khachhang/list')->with('mess','Thông tin khách hàng đã được sửa đổi thành công');

    }
}
