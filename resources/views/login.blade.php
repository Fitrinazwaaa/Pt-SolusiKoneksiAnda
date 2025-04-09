<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <style>
    body {
      background-color: #f5f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-container img {
      width: 80px;
      margin-bottom: 20px;
    }

    .login-container h2 {
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .form-group input:focus {
      outline: none;
      border-color: #4a90e2;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background-color: #4a90e2;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-login:hover {
      background-color: #357ab7;
    }

    .register-link {
      margin-top: 15px;
      display: block;
      font-size: 14px;
    }

    .register-link a {
      color: #4a90e2;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<div class="login-container">
  <img src="{{ asset('logo2.png') }}" alt="Logo" style="width: 120px; margin-left: -10px; margin-bottom: 20px;">
  <h2 style="margin-top: -20px">Login</h2>

  @if ($errors->any())
    <div class="error">
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
    </div>
  @endif

  <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
      <label for="password">Kata Sandi</label>
      <input type="password" name="password" id="password" required>
    </div>
    <button class="btn-login" type="submit">Masuk</button>
  </form>

  <div class="register-link">
    Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
  </div>
</div>

</body>
</html>
