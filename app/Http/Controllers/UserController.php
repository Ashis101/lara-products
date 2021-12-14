<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\CartController;

class UserController extends Controller
{
    //

    public function login(Request $req){
        $u=User::where(['email'=>$req->email])->first();
        // return Hash::check($req->password,$u->password);
        if( $u and  Hash::check($req->password,$u->password)){
            $data=['email'=>$req->email,'id'=>$u->id];
            $req->session()->put('user',$data);
            return redirect('/');

        }else{
            return "Name Or Password not valid";

        }
         
    }

    public function reg(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $u=User::where(['email'=>$req->email])->first();
        if($u){
            return redirect('/reg')->with('error','Email alredy registered');
        }else{
            $haspass=Hash::make($req->password);
            $user=new User;
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=$haspass;
            $user->save();
            return redirect('/login');
        }
    }
}
