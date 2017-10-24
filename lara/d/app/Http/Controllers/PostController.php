<?php

namespace App\Http\Controllers;

use App\Model\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = post::with('user')->where('type', 'Post')->orderBy('id_post', 'desc')->paginate('20');
        return view('post.post')->with('post', $data);
    }

    public function insert()
    {
        return view('post.postInsert');
    }

    public function store(Request $r)
    {
        $user_id = session('user')['id'];
        $type = 'Post';
        $post = new post();
        $post->title = $r->title;
        $post->description = $r->description;
        $img = $r->image;
        if ($img !== null) {
            $file = $r->file('image');
            $imgname = date('Y-m-d-h-i-s') . "-" . $file->getClientOriginalName();
            $r->file('image')->move('images/berita/', $imgname);
            $post->images = $imgname;
        }
        $post->type = $type;
        $post->user_id = $user_id;
        $post->save();
        return redirect('admin/post');
    }

    public function destroy(Request $r, $id)
    {
        $post = post::where('id_post', $id);
        $post->delete();
        return redirect('admin/post')->with('msg', 'berhasil');
    }

    public function edit($id)
    {
        $post = post::where('id_post', $id)->first();
        return view('post.edit')->with('data', $post);
    }

    public function update(Request $r, $id)
    {
        $user_id = session('user')['id'];
        $type = 'Post';
        $post = post::where('id_post', $id)->first();
        $post->title = $r->title;
        $post->description = $r->description;
        $img = $r->image;
        if ($img !== null) {
            $file = $r->file('image');
            $imgname = date('Y-m-d-h-i-s') . "-" . $file->getClientOriginalName();
            $r->file('image')->move('images/berita/', $imgname);
            $post->images = $imgname;
        }
        $post->type = $type;
        $post->user_id = $user_id;
        $post->save();
        return redirect('admin/post');
    }
}
