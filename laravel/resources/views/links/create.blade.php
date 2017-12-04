@extends('layouts.app')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">Добавить ссылку</h2>

    <hr>

    <form method="POST" action="/links">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        
        <div class="form-group">
            <label for="url">Ссылка</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить ссылку</button>
        </div>        

        @include('layouts.errors')
    </form>
</div>
@endsection