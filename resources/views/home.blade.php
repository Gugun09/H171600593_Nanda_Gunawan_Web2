@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ Auth::user()->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->email }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->telepon }}</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
