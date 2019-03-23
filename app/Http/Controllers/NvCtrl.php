<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NvModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NvCtrl extends Controller
{
    public function getNv(){
        $nv = DB::select("SELECT * FROM nhanvien");
        return view('admin.nhanvien.listNV',['nv'=>$nv]);
    }
    public function postNv(Request $request){
        $ds = new NvModel();
        $ds->manv =$request->manv;
        $ds->tennv =$request->namenv;
        $ds->sdt =$request->phone;
        $ds->cmnd =$request->socmnd;
        $ds->diachi =$request->diachi;
        $ds->chucvu =$request->chucvu;
        $ds->save();
        return redirect('admin/nhanvien/list');
    }
    public function getDelNv($id){
        NvModel::find($id)->delete();
        return redirect('admin/nhanvien/list');
    }
    public function geteditNv($id){

        $getnv=DB::select("SELECT * FROM  nhanvien where nhanvien.id=".$id." ");
        return view('admin.nhanvien.edit',['getnv'=>$getnv]);

    }
    public function updateNv(Request $request){
        $allrequest=$request->all();
        $id = $allrequest['id'];
        $manv=$allrequest['manv'];
        $tennv=$allrequest['tennv'];
        $sdt=$allrequest['sdt'];
        $cmnd=$allrequest['cmnd'];
        $diachi=$allrequest['diachi'];
        $chucvu=$allrequest['chucvu'];
        $nv=NvModel::find($id);
        if($nv != NULL)
        {
            $nv->manv=$manv;
            $nv->tennv=$tennv;
            $nv->sdt=$sdt;
            $nv->cmnd=$cmnd;
            $nv->diachi=$diachi;
            $nv->chucvu=$chucvu;
            $nv->save();
        }
        else {
            return;
        }

        return redirect('admin/nhanvien/list');

    }

    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $req){
        $data=[
            'name'=>$req->username,
            'password'=>$req->password,
        ];
        if(Auth::attempt($data)){
            Auth::login(Auth::user(), true);
            if(Auth::check()){
                $user = Auth::user();
                if($user->level == 1){
                    return redirect('admin/trangchu/admin');
                }else if ($user->level == 2) {
                    return redirect('admin/xe/list');
                }
            }
            echo 'f';
        }else{
            return redirect('elogin')->with('mess','Đăng nhập thất bại,vui lòng kiểm tra lại');
        }

    }

    public function getLogout(){
        Auth::logout();
        return redirect('elogin');
    }
}
