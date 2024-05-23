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
                <span>Login</span>
            </div>
            <form action="{{ url('login_post') }}" method="post">
                @csrf
                    @if(Auth::check())
                        @if(Auth::user()->is_role == 2) 
                            <div class="signup-link">Admin already login <a href="{{ url('admin/menu') }}">Menu</a></div>
                        @elseif(Auth::user()->is_role == 1) 
                            <div class="signup-link">Scholar already login <a href="{{ url('scholar/menu') }}">Menu</a></div>
                        @elseif(Auth::user()->is_role == 0) 
                        <div class="signup-link">Applicant already login <a href="{{ url('applicant/menu') }}">Menu</a></div>
                        @endif

                    @else
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="{{ old('email') }}" placeholder="Email" required name="email">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="password" value="" placeholder="Password" required name="password">
                </div>
                <div class="pass">
                    <a href="{{ url('forgot') }}">Forgot Password</a>
                </div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">
                    Don't have an account? <a href="{{ url('registration') }}">Sign up</a>
                </div>
                    @endif
            </form>
        </div>
    </div>
</body>
</html>
