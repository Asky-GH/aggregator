@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">Новая ссылка</h2>

    <hr>

    <form method="POST" action="/links/{{ $link->id }}">
        <input name="_method" type="hidden" value="PATCH">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title">Название</label>

            <input type="text" class="form-control" id="title" name="title" value="{{ $link->title }}">

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description">Описание</label>

            <textarea class="form-control" id="description" name="description">{{ $link->description }}</textarea>

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
            <label for="url">Ссылка</label>

            <input type="text" class="form-control" id="url" name="url" value="{{ $link->url }}">

            @if ($errors->has('url'))
                <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
        </div>
            
        <div class="form-group">
            <label for="tags">Тэги</label>

            <select name="tags[]" multiple class="form-control">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить ссылку</button>
        </div>        

        <!-- @include('layouts.errors') -->
    </form>
</div>
@endsection