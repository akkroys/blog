@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <a href="/" class="btn btn-primary btn-sm">back to main page</a>
                        <h1 class="display-one">the best blog in your life</h1>
                        <p>click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Create new post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
        <div class="pagination">{{ $posts->links() }}</div>

    </div>
@endsection

