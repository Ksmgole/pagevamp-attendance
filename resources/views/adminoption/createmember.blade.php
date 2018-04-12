

<html>
<head>
<title>Create Member</title>
</head>

<body>

<form class="form-signin" action="{{route('insert.member')}}" method="POST">
    <h2 class="form-signin-heading">Add new member</h2>
    Firstname: <input type="text" name="firstname" class="form-control"><br>
    Lastname: <input type="text" name="lastname" class="form-control"><br>
    Email: <input type="text" name="email" class="form-control"><br>
    Password: <input type="password" name="password" class="form-control"><br>
    <button class="btn btn-primary">Add Member</button>
</form>



</body></html>
