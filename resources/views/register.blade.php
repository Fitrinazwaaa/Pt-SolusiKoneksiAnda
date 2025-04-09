<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logo-wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-wrapper img {
            width: 120px;
        }

        .register-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .btn-register {
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-register:hover {
            background-color: #357ab7;
        }

        .text-center {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="logo-wrapper">
            <img src="{{ asset('logo2.png') }}" alt="Logo">
        </div>
        <h2 style="margin-top: -20px">Register</h2>
        @if ($errors->any())
            <div style="color: red; font-size: 14px; margin-bottom: 10px;">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <button class="btn-register" type="submit">Daftar</button>
        </form>
        <div class="text-center">
            <a href="{{ route('login') }}">Sudah punya akun? Login</a>
        </div>
    </div>

</body>

</html>
