@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">Смена Email адреса</h2>

    <hr>

    <form method="POST" action="/email/edit">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Введите новый Email адрес</label>

            <input type="email" class="form-control" id="email" name="email">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>        

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сменить Email адрес</button>
        </div>        

        <!-- @include('layouts.errors') -->
    </form>
</div>
@endsection