@extends('layouts.admin')


@section('content')

    <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>User ID</th>
                <th>Category ID</th>
                <th>Photo ID</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->photo_id}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop