@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Data Berita <a href="/berita" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <form method="post" action="/berita">
                @include('berita.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
$(document).ready(function() {
    CKEDITOR.replace( 'isi' );
});
</script>
@endsection