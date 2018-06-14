@extends('postlayout.master')

@section('content')

<div class="container">
    <div class="row">
        <h2>Posts</h2>
        <a href="/posts/create" class="btn btn-info">Create Post</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($posts as $post)
                {
                ?>
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><a href="posts/{{ $post->id }}">{{ $post->title }}</a></td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td><a href="posts/{{ $post->id }}/edit" class="btn btn-primary">Update</a></td>
                    <td><a href="posts/{{ $post->id }}/delete" class="btn btn-warning" onclick="return confirm('Delete post {{ $post->id }}')">Remove</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
@endsection
