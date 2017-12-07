@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">Новая ссылка</h2>

    <hr>

    <form method="POST" action="/links">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title">Название</label>

            <input type="text" class="form-control" id="title" name="title">

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description">Описание</label>

            <textarea class="form-control" id="description" name="description"></textarea>

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
            <label for="url">Ссылка</label>

            <input type="text" class="form-control" id="url" name="url">

            @if ($errors->has('url'))
                <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить ссылку</button>
        </div>        

        <!-- @include('layouts.errors') -->
    </form>
</div>
@endsection