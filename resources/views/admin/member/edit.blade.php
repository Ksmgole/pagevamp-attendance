@extends('layout.admin')
@section('content')

    <form class="form-signin" action="{{route('update.member',$user->id)}}" method="POST">
        <h2 class="form-signin-heading">Update new member</h2>
        <table>
            <tr>
                <td> Firstname: <input type="text" name="firstname" class="form-control" value="{{$user ->firstname}}"></td>
                <td> Lastname: <input type="text" name="lastname" class="form-control"  value="{{$user ->lastname}}"></td>
            </tr>
            <tr>
                <td>Email: <input type="text" name="email" class="form-control"  value="{{$user ->email}}"></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary">Update</button>
                </td>
            </tr>
        </table>
    </form>

@stop