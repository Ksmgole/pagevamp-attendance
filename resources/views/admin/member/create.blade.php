@extends('layout.admin')
@section('content')

    <form class="form-signin" action="{{route('save.member')}}" method="POST">
        <h2 class="form-signin-heading">Add new member</h2>
        <table>
            <tr>
                <td> Firstname: <input type="text" name="firstname" class="form-control"></td>
                <td> Lastname: <input type="text" name="lastname" class="form-control"></td>
            </tr>
            <tr>
                <td>Email: <input type="text" name="email" class="form-control"></td>
            </tr>
            <tr>
                <td>Password: <input type="password" name="password" class="form-control"></td>
            </tr>
            <tr>
                <td>Contact no.: <input type="text" name="contact" class="form-control"></td>
            </tr>
            <tr>
                <td>Address: <input type="text" name="address" class="form-control"></td>
            </tr>
            <tr>
                <td>Citizenship no.: <input type="integer" name="citizenship" class="form-control"></td>
            </tr>
            <tr>
                <td>PAN no.: <input type="text" name="pan" class="form-control"></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary">Add Member</button>
                </td>
            </tr>
        </table>
    </form>

@stop