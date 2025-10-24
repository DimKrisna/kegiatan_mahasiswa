<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body class="login-page" style="background-image: url('{{ asset('1.jpg') }}');">
    <div class="container-fluid">
        <div class="wrapper d-flex align-items-center justify-content-center pt-5">
            <div class="card login-form mt-4">
                <div class="card-body">
                    <div class="text-center ">
                        <span class="text-secondary  fw-bold">
                            <img src="/image/logouty-baru.png" style="width: 45%; height: auto;">
                            <br><br>
                        </span>
                        <p class="text-uppercase fw-bold">Universitas Teknologi Yogyakarta</p>
                    </div>
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                   name="username" value="{{ old('username') }}" required autofocus
                                   placeholder="Masukkan username">
                            @error('username')
                                <small class="text-danger mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" required placeholder="Masukkan kata sandi">
                            @error('password')
                                <small class="text-danger mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
