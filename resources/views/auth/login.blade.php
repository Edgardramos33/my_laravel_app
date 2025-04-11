<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display:flex;
            justify-content: center;
            align-items:center;
            flex-direction:column;
        }
        .login-form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        .user-login {
            margin-bottom:10px;
            height:20px;
        }
        .login-btn {
            height:30px;
            border-radius: 2px;
            margin-bottom: 10px;
        }
        .login-btn a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <input class="user-login" type="email" name="email" placeholder="Email" required>
        <input class="user-login" type="password" name="password" placeholder="Password" required>
        <button class="login-btn" type="submit">Login</button>
        <button class="login-btn"><a href="{{ route('register') }}">Register</a></button>
    </form>
</body>
</html>
