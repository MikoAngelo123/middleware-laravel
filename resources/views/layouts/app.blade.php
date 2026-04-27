<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Middleware Praktik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Middleware App</a>

        <div class="navbar-nav ms-auto">
            @auth
                <span class="navbar-text me-3 text-white">
                    {{ auth()->user()->email }}
                </span>

                <a class="nav-link" href="{{ auth()->user()->role == 'admin' ? '/admin' : '/user' }}">
                    Dashboard
                </a>

                <a class="nav-link" href="/logout">Logout</a>
            @else
                <a class="nav-link" href="/login">Login</a>
            @endauth
        </div>
    </div>
</nav>

<div class="container mt-4">

    {{-- ALERT ERROR --}}
    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>