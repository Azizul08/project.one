@extends('master')
@section('title', 'Posts')
@section('content')
    <div class="col-md-12">
        @if (count($posts))
            @foreach($posts as $post)
                <article>
                    <a href="#"><h1>{!! $post->title !!}</h1></a>
                    <div>
                        <p class="post-info"><span>Created at: {{$post->created_at->format('d-M-Y')}}</span></p>
                    </div>
                    <div class="post-excerpt">
                        {!! str_limit($post->content, 150) !!}
                    </div>
                </article>
                <hr>
            @endforeach
        @else
            <h1>Hi, you've landed in our First Prject!</h1>
            <h2>Sorry, We don't have any post right now.</h2>
        @endif
    </div>
@endsection