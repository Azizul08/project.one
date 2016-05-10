@extends('master')
@section('title', '|| Post')
@section('content')
    <div class="col-md-12">

        <article>
            <h1>{!! $post->title !!}</h1>
            <div>
                <p class="post-info"><span>Created at: {{$post->created_at->format('d-M-Y')}}</span></p>
            </div>
            <div class="single-post-content">
                {!! $post->content !!}
            </div>
        </article>
    </div>
@endsection