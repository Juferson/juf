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
                <div class="row">
                <p><b>Scholar - </b>{{ $getRecord->firstname }} {{ $getRecord->lastname }}</p>
                </div>

                <div class="signup-link">Logout? <a href="{{ url('logout') }}">Logout</a></div>
            </form>
        </div>
    </div>
</body>
</html>