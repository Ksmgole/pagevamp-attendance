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
            @include('includes.sidenav')
        </div>

        <div id="content" class="col-sm-9">
                @yield('attendancelist')
        </div>
        </div>
    </div>
</div>
</body>
</html>