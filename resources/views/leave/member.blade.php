@extends('layout.member')
@section('leave')
    <h1 class="page-header">Leave </h1>
    <form class="form-signin" action="" method="POST">
                <label>Request for a leave </label>
                Date: <input type="text" name="Date" class="form-control" placeholder="date you want to take leave on">
                Reason: <input type="text" name="Reason" class="form-control" placeholder="Password">
                <input class="btn" type="submit" name="Submit">
    </form>
@stop
