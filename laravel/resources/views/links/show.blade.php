@extends('layouts.app')

@include('layouts.flash')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $link->title }}</h2>

    <p class="blog-post-meta">{{ $link->updated_at->toFormattedDateString() }}</p>

    <h5>
        @foreach ($link->tags as $tag)
        <span class="label label-danger">{{ $tag->name }}</span>
        @endforeach
    </h5><br>

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

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <textarea name="body" placeholder="Комментарий..." class="form-control"></textarea>

                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Добавить комментарий</button>
            </div>

            @if (auth()->user()->email == "asky.gm@gmail.com")
            <div class="form-group">
                <a href="/pending/{{ $link->id }}">
                    <button type="button" class="btn btn-primary">Редактировать ссылку</button>
                </a>                                
            </div>
            @endif
        </form>
        <!-- @include('layouts.errors') -->
    </div>
</div>
@endif

@endsection