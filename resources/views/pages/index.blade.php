@extends('layouts.home')

@section('content')
    <div class="content">
        <a class="waves-effect waves-light btn-large" href="/pages/create">Add New Page</a>
        <ul class="collection">
            @foreach($pages as $page)
                <li class="collection-item">{{ $page['title'] }}</li>
            @endforeach
        </ul>
    </div>
@stop
