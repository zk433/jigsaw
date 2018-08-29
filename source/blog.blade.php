@extends('layouts.master')

@section('content')

<div id="blog">
    <div class="grid-container">
        <h1 class="sr-only">Blog Archive</h1>
        <div class="grid-x grid-margin-x">
                @foreach($blog as $post)
                    <div class="cell small-12 blog-post">
                        <div class="blog-title">
                            <h2>
                                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                            </h2>
                            
                        </div>
                        <br>
                        <div class="blog-date">{{ date('F j, Y', $post->created_at) }}</div>
                        <br>
                        <div class="blog-abstract">
                            {{ $post->abstract }}
                        </div>
                    </div>
                @endforeach
        </div>
</div>
</div>
    

@endsection