@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>
                        {{ $link->title }}
                    </h1>
                </div>
                <div class="panel-body">{{ $link->description }}</div>
                <p>{{ $link->url }}</p>
                <p>Comments section</p>
            </div>
        </div>
    </div>
</div>
@endsection