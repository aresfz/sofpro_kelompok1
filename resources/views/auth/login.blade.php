<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login New</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif

    <div class="wrapper">
        <form action="{{ route('login') }}" method="POST">
        <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="logo">
            <h1>Login</h1>
            <h4>Sistem Rekomendasi Konsentrasi Jurusan</h4>
            @csrf
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}" required>
                <i class='bx bxs-user'></i>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" id="password" required>
                <i class='bx bxs-lock-alt'></i>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    
    
</body>
</html>