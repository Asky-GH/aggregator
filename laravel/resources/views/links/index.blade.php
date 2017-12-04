@extends('layouts.app')

@section('content')

@foreach ($links as $link)
<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/links/{{ $link->id }}">{{ $link->title }}</a>
    </h2>

    <p class="blog-post-meta">{{ $link->created_at->toFormattedDateString() }}</p>

    <p>{{ $link->description }}</p>
</div>
@endforeach

@endsection