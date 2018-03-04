<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/admin_dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse" >
        <div class="container-fluid">
            <div class="navbar-header">
                <figure class="login-wrap__brand m-b-45">
                    <img src="{{asset('img/logo-brand.png')}}" alt="">
                </figure>
            </div>
                <div class="nav navbar-nav navbar-right">
                    <a href="#">Logout</a>
                </div>

            </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <ul class="sidebar">
                    <li class="active"><a href="#">Attendance</a></li>
                    <li><a href="#">Holidays</a></li>
                    <li><a href="#">Leave</a></li>
                </ul><br>
                <hr>
                <ul class="sidebar">
                    <li><a href="">Create Member</a></li>
                    <li><a href="">Send Notice</a></li>
                    <li><a href="">Notifications</a></li>
                </ul>
            </div>

            <div class="col-sm-9">
                @yield('attendance')
                </div>
        </div>
    </div>
</body>
</html>