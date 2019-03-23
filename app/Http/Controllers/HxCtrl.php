<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HxModel;
use Illuminate\Support\Facades\DB;


class HxCtrl extends Controller
{
    public function getListHx(){
        $hx = DB::select("SELECT * FROM hangxe");
        return view('admin.hangxe.listHX',['hx' =>$hx]);
    }
    public function postHx(Request $request){
        $thx = new HxModel();
        $thx->tenhang=$request->hangxe;
        $thx->save();
        return redirect('admin/hangxe/list')->with('mess','Cập nhật thông tin thành công');
    }
    public function getDelHx($id){
        HxModel::find($id)->delete();
        return redirect('admin/hangxe/list');
    }
    public function geteditHx($id){

        $gethx=DB::select("SELECT * FROM  hangxe where hangxe.id=".$id." ");
        return view('admin.hangxe.edit',['gethx'=>$gethx]);
    }
    public function updateHx(Request $request){
        $allrequest=$request->all();
        $id = $allrequest['id'];
        $tenhang=$allrequest['tenhang'];

        $hx=HxModel::find($id);
        if($hx != NULL)
        {
            $hx->tenhang=$tenhang;
            $hx->save();
        }
        else {
            return;
        }

        return redirect('admin/hangxe/list');

    }
}
