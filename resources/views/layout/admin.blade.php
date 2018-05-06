<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin dashboard</title>
    @include('includes.head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header class="navbar navbar-inverse">
    @include('includes.header')
</header>

<div class="container-fluid">
    <div id="main" class="row">
        <div id="nav" class="col-sm-2">
            <ul class="sidebar">
                <li class="active"><a href="{{route('attendance')}}">Attendance</a></li>
                <li><a href="#">Holidays</a></li>
                <li><a href="#">Leave</a></li>
            </ul>

            <hr>
            <ul class="sidebar">
                <li><a href="{{route('create.member')}}">Create Member</a></li>
                <li><a href="{{route('show.member')}}">Team Members</a></li>
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