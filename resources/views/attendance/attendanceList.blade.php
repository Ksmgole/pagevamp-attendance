
@extends('layout.admin')
@section('content')
    <h1 class="page-header">Attendance</h1>
    <h3 class="sub-header">3/3/2018</h3>
     <table class="table table-striped">
        <tr style="font-size: 16px;">
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Designation</td>
            <td>Entry time</td>
            <td>Exit time</td>
            <td>Online Status</td>
        </tr>
         @foreach($users as $user)
         <tr>
             <td>{{$user->firstname}}</td>
             <td>{{$user->lastname}}</td>
             <td>{{$user->designation}}</td>
             <td>{{$user->entry_time}}</td>
             <td>{{$user->leave_time}}</td>
         </tr>
         @endforeach

     </table>

@stop
