<html>
<head>
    <title>
        Pagevamp Attendance System
    </title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">



</head>
<body>
    <div id="wrap">
        <div class="container">
        <div class="login-wrap">
            <div class="panel panel-default hidden-xs">
                <div class="panel-body text-center">
                    <figure class="login-wrap__brand m-b-45">
                        <img src="{{asset('img/logo-brand.png')}}" alt="">
                    </figure>

                    <div class="container">
                        <form class="form-signin" action="{{route('login.post')}}" method="POST">
                            <h2 class="form-signin-heading">Attendance Management System</h2>
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <button class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


</body>
</html>