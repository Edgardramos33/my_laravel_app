<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            display:flex;
            justify-content: center;
            align-items:center;
            flex-direction:column;
        }
        .user-form{
            display:flex;
            flex-direction:column;
            width:300px;
        }
        .user-input {
            height:30px;
            margin-bottom:10px;
        }
        .reg-btn {
            height:30px;
        }
        .login-btn {
            height:30px;
            border-radius: 2px;
            margin-bottom: 10px;
            margin-top:20px;
        }
        .login-btn a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Register</h2>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ route('register') }}" class="user-form">
        @csrf
        <input class="user-input" type="text" name="name" placeholder="Name" required>
        <input class="user-input" type="email" name="email" placeholder="Email" required>
        <input class="user-input" type="password" name="password" placeholder="Password" required>
        <input class="user-input" type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button class="reg-btn" type="submit">Register</button>
        <button class="login-btn"><a href="{{ route('login') }}">Log in</a></button>
    </form>
</body>
</html>
