<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container">
        <span style="color: red;">{{ $errors->first('email') }}<br></span>
        <span style="color: red;">{{ $errors->first('password') }}<br></span>
        <span style="color: red;">{{ $errors->first('confirm_password') }}<br></span>

        <div class="wrapper">
            <div class="title">
                <span>Registration</span>
            </div>
            <form action="{{ url('registration_post') }}" method="post">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value="{{ old('firstname') }}" placeholder="First Name" required name="firstname">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value="{{ old('lastname') }}" placeholder="Last Name" required name="lastname">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="{{ old('email') }}" placeholder="Email" required name="email">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="password" value="" placeholder="Password" required name="password">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="password" value="" placeholder="Confirm Password" required name="confirm_password">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value="{{ old('campus') }}" placeholder="Campus" required name="campus">
                </div>

                <div class="pass">
                    <a href="{{ url('forgot') }}">Forgot Password</a>
                </div>
                <div class="row button">
                    <input type="submit" value="Registration">
                </div>
                <div class="signup-link">
                    Sign In? <a href="{{ url('/') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
