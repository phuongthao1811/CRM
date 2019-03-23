<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminCtrl extends Controller
{
    public function getIndex(){
        return view('admin.trangchu.admin');
    }
}
