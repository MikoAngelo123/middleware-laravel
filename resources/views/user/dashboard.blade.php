@extends('layouts.app')

@section('content')
<h1>Dashboard User</h1>

<div class="card p-3">
    @auth
        <p>Selamat datang, <b>{{ auth()->user()->email }}</b></p>
    @endauth
</div>
@endsection