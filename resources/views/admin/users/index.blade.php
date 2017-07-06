@extends('layouts.admin')

@section('content')

    <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>{{$user->role->name}}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop
