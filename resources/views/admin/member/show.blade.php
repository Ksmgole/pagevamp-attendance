@extends ('layout.admin')
@section('content')
    <h1 class="page-header">Pagevamp Team Members</h1>
    <table class="table table-striped">
        <tr>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>

        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('edit.member')}}" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach

    </table>
@stop
