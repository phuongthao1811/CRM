<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BBModel;
use Illuminate\Support\Facades\DB;

class BBCtrl extends Controller
{
    public function getBB(){
        $bb = DB::select("SELECT * FROM bienbansuco");
        $kq = DB::select("SELECT * FROM hopdong");
        $nvl = DB::SELECT("SELECT * FROM nhanvien");
        return view('admin.bienban.listBB',['bb'=>$bb,'kq'=>$kq, 'nvl' =>$nvl]);
    }
    public function postBB(Request $request){
        $bbsc = new BBModel();
        $bbsc->idsuco =$request->idsuco;
        $bbsc->tensc =$request->tensc;
        $bbsc->ngaylap =$request->ngaylap;
        $bbsc->nvlap =$request->nvlap;
        $bbsc->mahd =$request->mahd;
        $bbsc->noidung =$request->noidung;
        $bbsc->tienphat =$request->tienphat;
        $bbsc->save();
        return redirect('admin/bienban/list');

    }
    public function getDelBB($id){
        BBModel::find($id)->delete();
        return redirect('admin/bienban/list');
    }
    public function geteditBB($id){

        $getbbsc = DB::select("SELECT * FROM  bienbansuco where bienbansuco.id=".$id." ");
        $kq = DB::select("SELECT * FROM hopdong");
        $nvl = DB::SELECT("SELECT * FROM nhanvien");
        return view('admin.bienban.edit',['getbbsc'=>$getbbsc,'kq'=>$kq, 'nvl' =>$nvl]);
    }
    public function updateBB(Request $request){
        $allrequest=$request->all();
        $id = $allrequest['id'];
        $idsuco = $allrequest['idsuco'];
        $tensc=$allrequest['tensc'];
        $ngaylap=$allrequest['ngaylap'];
        $nvlap=$allrequest['nvlap'];
        $mahd=$allrequest['mahd'];
        $noidung=$allrequest['noidung'];
        $tienphat=$allrequest['tienphat'];
        $bbsc=BBModel::find($id);

        if($bbsc != NULL)
        {
            $bbsc->idsuco=$idsuco;
            $bbsc->tensc=$tensc;
            $bbsc->ngaylap=$ngaylap;
            $bbsc->nvlap=$nvlap;
            $bbsc->mahd=$mahd;
            $bbsc->noidung=$noidung;
            $bbsc->tienphat=$tienphat;
            $bbsc->save();
        }
        else {
            return;
        }

        return redirect('admin/bienban/list');
    }
}
