<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Reset Password</span>
            </div>
            <form action="{{ url('reset_post/'.$token) }}" method="post">
                @csrf 
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required name="password">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" value="" placeholder="Confirm Password" required name="confirm_password">
                </div>
                <div class="row button">
                    <input type="submit" value="Reset Password">
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>
