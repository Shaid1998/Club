@extends('admin.dashboard');

@section('content');
<table class='table table-bordered'>
    <tr>
        <th>name</th>
        <th>email</th>
    </tr>
    @foreach($users as @users)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
    </tr>
</table>