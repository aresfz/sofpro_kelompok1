<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            width: 90vw; 
            height: 80vh;
            padding: 20px;
            box-shadow: 0 4px 50px rgba(0, 0, 0, 0.1);
        }


        .logo {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            max-width: 250px;
            height: auto;
        }

        .form-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);

        }

        .form-container h1 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #1a1a1a;
        }

        .form-container form {
            width: 100%;
            max-width: 300px;
        }

        .form-container form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-container form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .form-container form button:hover {
            background-color: #0056b3;
        }

        .alert {
        background-color: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 5px;
        }

    </style>
</head>
<body>
    @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <div class="logo">
            <img src="{{asset('img/logo2.png') }}" alt="Logo">
        </div>
        <div class="form-container">
            <h4>Selamat Datang di</h4>
            <h4>Sistem Rekomendasi Konsentrasi Jurusan</h4>
            <br><br><br>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}" required>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="password" name="password" id="password" placeholder="Password" required>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

