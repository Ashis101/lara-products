<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function setorder(Request $req){
        $user_id=Session('user')['id'];
        
        $email=Session('user')['email'];
        $price=DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user_id)
            ->sum('products.price');
        
        return view('order',['email'=>$email,'price'=>$price]);
    }
   
    public function placeorder(Request $req){
        $user_id=Session('user')['id'];
        $price=DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user_id)
            ->sum('products.price');
        $cartdata=Cart::where('carts.user_id',$user_id)->get();
        foreach($cartdata as $c){
            $order=new Order;
            $order->user_id=$c['user_id'];
            $order->product_id=$c['product_id'];
            $order->price=$price;
            $order->status="Pending";
            $order->payment_method=$req->payment;
            $order->address=$req->address;
            $order->save();

        }
        Cart::where('carts.user_id',$user_id)->delete();
        return redirect('/'); 
    }   

    public function showall(){
        $user_id=Session('user')['id'];
        $data=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
    
        return view('myorder',['order'=>json_decode($data,true)]);
    }
}
