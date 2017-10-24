<?php

namespace App\Http\Controllers;

use App\Model\post;
use App\Model\setting;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $setting = setting::where('id','1')->first();
        $info = post::with('user')->where('type','Info')->limit('5')->get();
        $berita = post::with('user')->where('type','Post')->limit('5')->get();
        return view('client.home')->with('info',$info)
            ->with('berita',$berita)
            ->with('setting',$setting);
    }
    public function showNews($id){
        $terbaru = post::where('type','Post')->orderBy('id_post','desc')->limit('10')->get();
        $data = post::where('id_post',$id)->where('type','Post')->first();
        return view('client.berita')->with('news',$data)->with('terbaru',$terbaru);
    }
    public function showInfo($id){
        $terbaru = post::where('type','Info')->orderBy('id_post','desc')->limit('10')->get();
        $data = post::where('id_post',$id)->where('type','Info')->first();
        return view('client.info')->with('news',$data)->with('terbaru',$terbaru);
    }
    public function profile(){
        return view('client.profile');
    }
    public function siswa(){
        return view('client.siswa');
    }
}
