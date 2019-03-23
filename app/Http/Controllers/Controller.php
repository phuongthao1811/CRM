<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\NvModel;
use App\xeModel;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getIndex() {
        $xe = DB::select("SELECT xe.id, xe.soxe,xe.tenxe, xe.hangxe, xe.loaixe, xe.giathue, xe.trangthai, xe.hinh, hangxe.tenhang FROM xe,hangxe WHERE xe.hangxe = hangxe.id");
        $nv = DB::select("SELECT * FROM hangxe");
        return view('index',['xe'=>$xe, 'nv' =>$nv]);
    }
}
