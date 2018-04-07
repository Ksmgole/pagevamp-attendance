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
<<<<<<< HEAD
                        <form class="form-signin" action="{{route('login.post')}}" method="POST">
                            <h2 class="form-signin-heading">Attendance Management System</h2>
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                            <input type="password" name="password" class="form-control" placeholder="Password">
=======
                        <form class="form-signin" action="{{ route('login.post') }}" method="POST">
                            <input name="_token" type="hidden" value="{{csrf_token()}}"/>
                            <h2 class="form-signin-heading">Attendance Management System</h2>
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add
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
