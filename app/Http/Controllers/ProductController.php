<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Facade\FlareClient\Http\Response;
use App\Models\Cart;
class ProductController extends Controller
{
    //

    public function index(){
        $p=Product::all();
        $tv=Product::where('category','tv')->first();
        $mobile=Product::where('category','mobile')->first();   
        return view('product',['data'=>$p,'tv'=>$tv,'mobile'=>$mobile]);
    }

    public function tv(){
        $tvdata=Product::where('category','tv')->get();
        return view('tv',['tv'=>$tvdata]);
    }

    public function mobile(){
        $mobile=Product::where('category','mobile')->get();
        return view('mobile',['mobile'=>$mobile]);
    }

    public function tvdetail($id){
        $tv=Product::where('id',$id)->get()[0];
        return view('tvdetail',['tv'=>$tv]);
    }
    public function mobiledetail($id){
        $mobile=Product::where('id',$id)->get()[0];
        return view('mobiledetail',['mobile'=>$mobile]);
    }

    public function search(Request $req){
        $k=Product::where('name','like','%'.$req->key.'%')->get();
        return view('search',['search'=>$k]);
    }

    public function addtocart(Request $req,$id){
        if($req->session()->has('user')){
            $session=$req->session()->get('user');
            $cart=new Cart;
            $cart->user_id=$session['id'];
            $cart->product_id=$id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }

    }
}
