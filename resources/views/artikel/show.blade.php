@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Artikel <a href="/artikel" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Kategori Artikel</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{!! $artikel->judul !!}</td>
                        <td>{!! $artikel->isi !!}</td>
                        <td>{!! $artikel->users_id !!}</td>
                        <td>{!! $artikel->kategori_artikel_id !!}</td>
                        <td>
                            <a href="/artikel/{{$artikel->id}}/edit" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                </table>
		@endsection