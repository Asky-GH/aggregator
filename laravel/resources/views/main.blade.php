@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($links as $link)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>
                        <a href="{{ action('LinkController@show', $link->id) }}">{{ $link->title }}</a>
                    </h1>
                </div>
                <div class="panel-body">{{ $link->description }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection