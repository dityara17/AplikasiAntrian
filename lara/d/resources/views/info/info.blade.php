@extends('admin.layout')

@section('title')
    Post
@endsection
@section('content')
    <div class="page-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Berita Terbaru</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li><a href="#">Berita Terbaru</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-title">Berita Terbaru <a href="{!! url('admin/info/insert') !!}"
                                                         class="btn btn-primary"><i class="fa fa-plus"
                                                                                    title="Tamban Berita Baru"></i></a>
                </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Post Oleh</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($info as $key => $value)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{date('F,Y d', strtotime($value->date))}}</td>
                                <td>{{$value->user->name}}</td>
                                <td>
                                    <a data-id="{{$value->id_post}}" class="button btn btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    <a href="{!! url('admin/info/edit/'.$value->id_post.'') !!}" class="btn btn-success" title="Ubah"><i
                                                class="fa fa-pencil" ></i></a>
                                </td>
                                <td>

                                </td>
                                <script>
                                    $(document).on('click', '.button', function (e) {
                                        e.preventDefault();
                                        var id = $(this).data('id');
                                        swal({
                                            title: "Are you sure!",
                                            type: "error",
                                            confirmButtonClass: "btn-danger",
                                            confirmButtonText: "Hapus!",
                                            showCancelButton: true,
                                            cancelButtonText: "Cancel",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        }, function (isConfirm) {
                                            if (isConfirm) {
                                                location="{{url('admin/info/delete/'.$value->id_post.'')}}";
//                                                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                                {{--                                                load("{{url('admin/post/delete/'.$value->id_post.'')}}");--}}
                                            } else {
                                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                                            }
                                        });
                                    });
                                </script>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $info->links() !!}
            </div>
        </div>
    </div>
    @if(session('msg') == 'berhasil')
        <script>
            swal("Deleted!", "Produk telah dihapus.", "success");
        </script>
    @endif
@endsection
