@extends('layouts.master')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $link->title }}</h2>

    <p class="blog-post-meta">{{ $link->created_at }}</p>

    <p>{{ $link->description }}</p>

    <p>{{ $link->url }}</p>
</div>
@endsection