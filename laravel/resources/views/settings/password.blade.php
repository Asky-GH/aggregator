@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">Смена пароля</h2>

    <hr>

    <form method="POST" action="/password/edit">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Введите новый пароль</label>

            <input type="password" class="form-control" id="password" name="password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>        

        <div class="form-group">
            <label for="password-confirm">Подтвердите пароль</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сменить пароль</button>
        </div>        

        <!-- @include('layouts.errors') -->
    </form>
</div>
@endsection