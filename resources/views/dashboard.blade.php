@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white fw-bold">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="card-title">Selamat Datang, {{ Auth::user()->name }}!</h5>
                    <p class="card-text">Anda berhasil login ke sistem BPBD.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection