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
            <article class="post">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto quisquam dolores, impedit qui quia error, dolorem, dolore quibusdam aspernatur fugiat maxime. Qui adipisci quasi, deserunt fuga quod animi voluptatum.</p>
                <div class="info">
                    Posted by Jamil on 6th July 2020
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>

            <article class="post">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto quisquam dolores, impedit qui quia error, dolorem, dolore quibusdam aspernatur fugiat maxime. Qui adipisci quasi, deserunt fuga quod animi voluptatum.</p>
                <div class="info">
                    Posted by Jamil on 6th July 2020
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection