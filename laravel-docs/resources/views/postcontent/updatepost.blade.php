@extends('postlayout.master')

@section('content')
<div class="container">
    <div class="row">
        <h2>Update Post</h2>
        <form method="post" action="/posts">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $post['title'] }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Body</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $post['content'] }}"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="save" value="Publish" class="btn btn-info">
            </div>
            <div class="form-group">
                <a href="/posts">Back to Posts</a>
            </div>
        </form>
    </div>
</div>
@endsection
