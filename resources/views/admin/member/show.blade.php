@extends ('layout.admin')
@section('content')
    <h1 class="page-header">Pagevamp Team Members</h1>
    <table class="table table-striped">
        <tr style="font-size: 16px;">
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>Contact no.</td>
            <td>Address</td>
            <td>Citizenship no.</td>
            <td>PAN no.</td>

        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_no}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->citizenship_no}}</td>
                <td>{{$user->pan_no}}</td>
                <td>
                    <a href="{{route('edit.member',$user ->id)}}" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach

    </table>
@stop
