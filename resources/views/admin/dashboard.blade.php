@extends('layouts.app')

@section('content')
<h1>Dashboard Admin</h1>

<div class="card p-3">
    <p>Selamat datang, <b>{{ auth()->user()->email }}</b></p>

    <a href="/admin/secret" class="btn btn-danger mt-3">
        Halaman Rahasia
    </a>
</div>
@endsection