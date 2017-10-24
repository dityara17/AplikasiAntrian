<?php

namespace App\Http\Controllers;

use App\Model\post;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function index(){
        $data = post::with('user')->where('type', 'Info')->orderBy('id_post', 'desc')->paginate('20');
        return view('info.info')->with('info',$data);
    }
    public function insert(){
        return view('info.insert');
    }
    public function store(Request $r){
        $post = new post();
        $user_id = session('user')['id'];
        $type = 'Info';
        $post = new post();
        $post->title = $r->title;
        $post->description = $r->description;
        $img = $r->image;
        if ($img !== null) {
            $file = $r->file('image');
            $imgname = date('Y-m-d-h-i-s') . "-" . $file->getClientOriginalName();
            $r->file('image')->move('images/info/', $imgname);
            $post->images = $imgname;
        }
        $post->type = $type;
        $post->user_id = $user_id;
        $post->save();
        return redirect('admin/info');
    }
    public function delete($id){
        $data = post::where('id_post',$id);
        $data->delete();
        return redirect('admin/info');
    }
    public function edit($id){
        $data = post::where('id_post',$id)->first();
        return view('info.edit')->with('data',$data);
    }
    public function update(Request $r,$id){
        $data = post::where('id_post',$id)->first();
        $user_id = session('user')['id'];
        $type = 'Info';
        $data->title = $r->title;
        $data->description = $r->description;
        $img = $r->image;
        if ($img !== null) {
            $file = $r->file('image');
            $imgname = date('Y-m-d-h-i-s') . "-" . $file->getClientOriginalName();
            $r->file('image')->move('images/info/', $imgname);
            $data->images = $imgname;
        }
        $data->type = $type;
        $data->user_id = $user_id;
        $data->save();
        return redirect('admin/info');
    }
}
