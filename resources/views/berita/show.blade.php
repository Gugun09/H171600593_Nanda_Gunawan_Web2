@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Berita <a href="/berita" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Kategori berita</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{!! $berita->judul !!}</td>
                        <td>{!! $berita->isi !!}</td>
                        <td>{!! $berita->users_id !!}</td>
                        <td>{!! $berita->kategori_berita_id !!}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                </table>
		@endsection