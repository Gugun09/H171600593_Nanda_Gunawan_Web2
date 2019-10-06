@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Galeri</div>
                <div class="card-body">
                <a href="/kategori_galeri/create" class="btn btn-success">Tambah Data Galeri</a>
                <ul class="list-group pt-2">
                @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $kategori_galeri as $kategori_galeri)
                        <tr>
                        <td>{!! $kategori_galeri->nama !!}</td>
                        <td>{!! $kategori_galeri->created_at !!}</td>
                        <td>
                            <a href="/kategori_galeri/{{$kategori_galeri->id}}" class="badge badge-info">Detail</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </ul>
		@endsection