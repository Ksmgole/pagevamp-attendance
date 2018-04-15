@extends ('layout.admin');
@section('content')
    <h1 class="page-header">Pagevamp Team Members</h1>
    <table class="table table-striped">
        <tr>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>

        </tr>
        @foreach($users as $row)
            <tr>
                <td>{{$row->firstname}}</td>
                <td>{{$row->lastname}}</td>
                <td>{{$row->email}}</td>
                <td>
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach

    </table>
@stop
