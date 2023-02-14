@extends('layouts.app')
@section('content')
    <div class="container align-middle">
        <div class="row">
            <h1 class="display-1 mt-5 text-center"> {{config('app.name')}}</h1>
            <p class="text-center">i really don't know how to do it all but i will try to do my best</p>
            <a href="/blog" class="btn btn-outline-dark">Show blog</a>
        </div>
    </div>
@endsection
