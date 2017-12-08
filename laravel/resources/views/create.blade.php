@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">Новый тэг</h2>

    <hr>

    <form method="POST" action="/tags">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Название</label>

            <input type="text" class="form-control" id="name" name="name">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить тэг</button>
        </div>        

        <!-- @include('layouts.errors') -->
    </form>
</div>
@endsection