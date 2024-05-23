<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <style>
        body {
            background-color: darkblue;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; 
        }
        .content-wrapper {
            width: 100%;
            max-width: 1200px; 
            margin: 50px auto; 
        }
        .content-header h1 {
            margin: 20px 0; 
            padding: 0;
        }
        .signup-link {
            margin-bottom: 20px; 
        }
        .signup-link a {
            display: inline-block;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px; 
        }
        .content {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff; 
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Scholar Applicant Registration</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <div class="signup-link">
                            <a href="{{ url('admin/onlineregistration/choices') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Submitted by</th>
                                            <th>Description</th>
                                            <th>Submission Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
