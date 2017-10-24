<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.index');
    }
    public function check(Request $r){
        $check = User::where('email',$r->email)->where('password', md5($r->password))->count();
        if ($check == 0){
            echo "<script>alert('Sepertinya email atau password salah')</script>";
            return view('auth.index');
        } else{
            $get= User::where('email',$r->email)->where('password', md5($r->password))->first();
            $my = array(
                'id' => $get->id,
                'name' => $get->name,
                'email' => $get->email,
                'level' => $get->level,
                'photo' => $get->photo,
                'status' => $get->status,
            );
            Session(['user' => $my]);
            if ($get->level == 'Admin'){
                return redirect('/admin');
            }
        }
    }
    public function logout(Request $r){
        if (session('user')['level'] == 'Admin'){
            $r->session()->forget('user');
            return redirect('login');
        }
    }
}
