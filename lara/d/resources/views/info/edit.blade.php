@extends('admin.layout')

@section('title')
    Post
@endsection
@section('content')
    <div class="page-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Ubah info</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li><a href="{!! url('admin/info') !!}">Info</a></li>
                <li><a href="#">Ubah Info</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="well bs-component">
                    <fieldset>
                        <legend>Ubah Info</legend>
                        <form class="form-horizontal" action="{!! url('admin/info/edit/'.$data->id_post.'') !!}" method="post"
                              enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="title">Judul</label>
                                <div class="col-lg-10">
                                    <input required class="form-control" id="title" placeholder="Title" name="title"
                                           type="text" value="{{$data->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="">Desksipsi</label>
                                <div class="col-lg-10">
                                    <textarea required class="ckeditor" cols="10" rows="10"
                                              name="description">{{$data->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="title">Gambar Utuma</label>
                                <div class="col-lg-10">
                                    <img style="max-width: 100%" src="{!! asset('images/info/'.$data->images.'') !!}" alt="">
                                    <br> <br>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="insert" class="btn btn-primary icon-btn" type="submit"><i
                                            class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                                </button>
                                <button class="btn btn-warning icon-btn" type="reset"><i
                                            class="fa fa-fw fa-lg fa-times-circle"></i>Reset
                                </button>
                            </div>
                            {!! csrf_field() !!}
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#insert').click(function () {
            swal("Sukses", "Berita Ter Update", "success");
        });
    </script>
@endsection

