<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member dashboard</title>
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
            </ul>
        </div>

        <div id="content" class="col-sm-9">
                @yield('attendancelist')
        </div>
        </div>
    </div>
</div>
</body>
</html>