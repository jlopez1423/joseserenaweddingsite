@extends('layouts.home')

@section('content')
    <div class="content">
        <form method="POST" action="/pages/store">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Page Title</label>
                <input type="title" class="form-control" id="title" name="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="body">Page Body</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop
