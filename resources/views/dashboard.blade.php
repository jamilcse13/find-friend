@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you want to say?</h3></header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="new-post" id="new-post" rows="10" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>    What other people say...</h3></header>
            @foreach ($posts as $post)
                <article class="post">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Posted by {{ $post->user->name }} on {{ $post->created_at }}
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a> |
                        <a href="#">Edit</a> |
                        <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection