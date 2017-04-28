<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Session;

class AdminController extends Controller
{
    public function index(Request $request){
       return view ('admin.index');
    }
    public function decideUsersOrder(){
        return view('admin.userStatus');
        
    }
    public function profile(){
        $user = DB::table('admin')->select('uname','id')->get();
        return view('admin.profile',['user'=>$user]);
    
    }
}
