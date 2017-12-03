@extends('layouts.master')

@section('content')

@foreach ($links as $link)
<div class="blog-post">
    <h2 class="blog-post-title"><a href="{{ action('LinkController@show', $link->id) }}">{{ $link->title }}</a></h2>

    <p class="blog-post-meta">{{ $link->created_at }}</p>

    <p>{{ $link->description }}</p>
</div>
@endforeach

@endsection