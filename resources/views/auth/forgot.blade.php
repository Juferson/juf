<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Forgot Password</span>
            </div>
            <form action="{{ url('forgot_post') }}" method="post">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="{{ old('email')}}" placeholder="Email" required name="email">
                </div>
                <div class="pass">
                    <a href="{{ url('/') }}">Login</a>
                </div>
                <div class="row button">
                    <input type="submit" value="Forgot Password">
                </div>
                <div class="signup-link">
                    Don't have an account? <a href="{{ url('registration') }}">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
