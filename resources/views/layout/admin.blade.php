<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin dashboard</title>
    @include('includes.head')
</head>
<body>
    <header class="navbar navbar-inverse">
        @include('includes.header')
    </header>
    <div class="container-fluid">
        <div id="main" class="row">
            <div id="nav" class="col-sm-2">
                <ul class="sidebar">
                    <li class="active"><a href="">Attendance</a></li>
                    <li><a href="#">Holidays</a></li>
                    <li><a href="{{url('leave/admin.blade.php')}}">Leave</a></li>
                </ul><br>
                <hr>
                <ul class="sidebar">
                    <li><a href="">Create Member</a></li>
                    <li><a href="">Send Notice</a></li>
                    <li><a href="">Notifications</a></li>
                </ul>
            </div>

            <div id="content" class="col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>