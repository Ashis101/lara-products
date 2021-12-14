<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showall(){
        $user_id=Session('user')['id'];
        $cart=Db::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_id)
        ->select('products.*','carts.id as cartid')
        ->get();
        $totalprice=0;
        foreach($cart as $c){
            // Here i did not decode so in use [$key->$value instead $key['value']]
            $totalprice+=$c->price;
        };
        return view('cart',['cart'=>json_decode($cart,true),'total'=>$totalprice]);

    }

    public function count(){
        $user_id=Session('user')['id'];
        if(!isset($user_id) == false){
            $count=Cart::where('user_id',$user_id)->count();
            return $count;
        }else{ return 0;}
    }

    

    public function delete(Request $req){
        $user_id=Session('user')['id'];
        if($user_id){
            Cart::destroy($req->id);
            return redirect('/mycart');
            
        }else{
            return redirect('/login');
        }
    }

    
}
