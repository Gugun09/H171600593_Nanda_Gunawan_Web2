@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Pengumuman <a href="/pengumuman" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Kategori pengumuman</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{!! $pengumuman->judul !!}</td>
                        <td>{!! $pengumuman->isi !!}</td>
                        <td>{!! $pengumuman->users_id !!}</td>
                        <td>{!! $pengumuman->kategori_pengumuman_id !!}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                </table>
		@endsection