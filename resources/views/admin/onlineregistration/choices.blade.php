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
            <div class="title"><span></span></div>
            <form>
                <div class="signup-link"><a href="{{ url('admin/menu') }}">Back</a></div>

                <div class="signup-link">
                   <a href="{{ url('admin/onlineregistration/selection/allowanceregistration/validatescholar') }}">Scholar Allowance Registration</a>
                </div>
                <div class="signup-link">
                   <a href="{{ url('admin/onlineregistration/selection/scholarregistration/validateapplicant') }}">Scholar Applicant Registration</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>