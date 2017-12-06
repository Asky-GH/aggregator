@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $link->title }}</h2>

    <p class="blog-post-meta">{{ $link->created_at->toFormattedDateString() }}</p>

    <p>{{ $link->description }}</p>

    <p>
        <a href="{{ $link->url }}">{{ $link->url }}</a>
    </p>
</div>

@if (count($link->comments))
<hr>

<div class="comments">
    <ul class="list-group">
    @foreach ($link->comments as $comment)
    <li class="list-group-item">
        <strong>{{ $comment->user->name }}</strong>

        <p class="blog-post-meta">{{ $comment->created_at->diffForHumans() }}</p>

        {{ $comment->body }}
    </li>
    @endforeach
    </ul>
</div>
@endif

@if (Auth::check())
<hr>

<div class="card">
    <div class="card block">
        <form method="POST" action="/links/{{ $link->id }}/comments">
            {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" placeholder="Комментарий..." class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Добавить комментарий</button>
            </div>
        </form>

        @include('layouts.errors')
    </div>
</div>
@endif

@endsection