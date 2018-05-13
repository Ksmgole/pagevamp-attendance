@extends ('layout.admin')
@section('content')
    <h1 class="page-header">Pagevamp Team Members</h1>
    <button type="button" class="add-user">ADD</button>
    <script>
        $(function(){
            $(".add-user").click(function(){
                var html = '<tr><td><input type="text" id="new-user"><button>Save</button></td></tr>';
                $("#users-table").append(html);
            });
        })
    </script>
    <table class="table table-striped" id="users-table">
        <tr style="font-size:16px;">
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>Designation</td>
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
                <td>{{$user->designation}}</td>
                <td>{{$user->phone_no}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->citizenship_no}}</td>
                <td>{{$user->pan_no}}</td>
                <td>
                    <a href="{{route('edit.member',$user ->id)}}" class="btn btn-success">Edit</a>
                    <button type="button" class="delete-user btn btn-danger" data-user-id="{{$user->id}}"><a href ="{{route('delete.member',$user->id)}}">Delete</a>
                    </button>
                </td>

            </tr>
        @endforeach
    </table>
    <script>
        $(function() {
            $(".delete-user").click(function() {
                var $this = $(this);
                var question = confirm('Are you sure want to delete?');
                if (question) {
                    $this.closest('tr').remove();
                }
            });
        })
    </script>

@stop
