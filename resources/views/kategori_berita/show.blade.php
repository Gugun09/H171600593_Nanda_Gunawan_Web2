@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Berita <a href="/kategori_berita" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{!! $kategori_berita->id !!}</td>
                        <td>{!! $kategori_berita->nama !!}</td>
                        <td>{!! $kategori_berita->users_id !!}</td>
                        </tr>
                    </tbody>
                </table>
		@endsection