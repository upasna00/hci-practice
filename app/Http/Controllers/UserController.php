<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Session;

class UserController extends Controller
{
    public function index(Request $request){
        $uname = $request->uname;
        $pass = $request->password;
        $user = DB::table('user')->select('fname','id')->where('fname',$uname)->where('password',$pass)->get();
        if(!empty($user)){
            foreach($user as $u){
                $a = $u->fname;
            }
            Session::put('user',$a);
           return view ('users.index',['user'=>$user]) ;    
        }
       else{
            \Session::flash('warning','Invalid Username or Password');
           return view('users.registerLogin');
       }
    }
    public function addUser(Request $request){
        if(empty($request->name) || empty($request->pass1)  || empty($request->pass2))
        {
            \Session::flash('register','Empty fields!, please fill all fields for registration');
           return view('users.registerLogin');
    
        }
            $uname = $request->name;
            $pass1 = $request->pass1;
            $pass2 = $request->pass2;
            $findUser = DB::table('user')->where('fname', $uname)->get();

        if(empty($findUser)){
           if(strcmp($pass1, $pass2)==0){
            DB::table('user')->insert([
                'fname' =>$uname ,
                'password' =>$pass1,
                ]);
                session_start();
                $loggedUser['loggedUser'] = $uname;
                return view('users.index',['uname'=>$uname]);
            }
        else{
             \Session::flash('register','Invalid password!.Both of the password field should match!');
           return view('users.registerLogin');
            }
        }else{
             \Session::flash('register','User name exists, please set another name for registration');
           return view('users.registerLogin');
        }
    }
     public function checkout(){
         $u = Session::get('user');
        if(!empty($u)){
           return view('users.checkout');
        }   
        return redirect()->to('otcProducts')->with(['status','Login or Register to buy the medicine']);
    } 
    //upload Pres
    public function uploadPres(){
         $u = Session::get('user');
        if(!empty($u)){
           return view('users.uploadrescription');
        }   
        Session::flash('status','Login or Register to Upload the medicine');
        return redirect()->back();
    } 
    public function myOrders(){
         $u = Session::get('user');
         if(!empty($u)){
           //  $results = DB::table('product')->
         }
        return view ('users.myOrders') ;
    }
    public function prescriptions(){
        return view('users.myPrescriptions');
    }
    public function logout(){
        \Session::flush();
        return redirect('/');
    }
    public function addOrder(){
        //can add 
    }
    public function editOrder(){
        // edit order
    }
    public function deleteOrder(){
        // delete order
    }
    public function orderStatus(){
        //order status
    }
    public function userSettings(){
        return view('users.accountSettings');
    }

}
