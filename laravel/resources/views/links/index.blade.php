@extends('layouts.app')

@include('layouts.flash')

@section('content')

@foreach ($links as $link)
<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/links/{{ $link->id }}">{{ $link->title }}</a>
    </h2>

    <p class="blog-post-meta">{{ $link->created_at->toFormattedDateString() }}</p>

    <h5>
        @foreach ($link->tags as $tag)
        <span class="label label-danger">{{ $tag->name }}</span>
        @endforeach
    </h5><br>

    <p>{{ $link->description }}</p>
</div>
@endforeach

@endsection