@extends('_layouts.post')

@section('content')

@foreach($posts as $post)

    <div class="container">

            <a href="{{ $post->getPath() }}">{{ $post->title }}</a>

    </div>

@endforeach
@endsection