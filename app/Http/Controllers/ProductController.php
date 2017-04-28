<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ProductController extends Controller
{
    public function index(){
        $ans = DB::table('product')->select('pId','pName','pPrice','PDesc','Pimage')->get();
        return view('admin.overTheCounter',['ans'=>$ans]);
        
    }
    public function addProduct(){
        //add a product from the category 
        return view('admin.addOTC');

    }
    public function editProduct(){
       // $data['id'] = $id;
        // edit a product from the pcategory
        return view('admin.editOTC');

    }
    public function deleteProduct(){
        // delete product
    }
    public function userOtc(){
        $products = DB::table('product')->select('*')->get();
        return view('product.otcProducts',['products'=>$products]);
    }
    
}
