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
                <p><b>Admin - </b>{{ $getRecord->email }} {{ $getRecord->campus }}</p>
                </div>

                <div class="signup-link"><a href="{{ url('admin/menu') }}">Back</a></div>
            </form>
        </div>
    </div>
</body>
</html>