<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WaSendController extends Controller
{
    public function index(){
        $get_all_users = User::select('nama_user','nomor_hp')->get();

        return view('wa.send',[
            'user' => $get_all_users
        ]);
    }
}
