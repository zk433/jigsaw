@extends('_layouts.post')

@section('content')

    @foreach($blog as $post)

        <div class="container">

                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <span>{{ date('F j, Y', $post->created_at) }}</span>
               
                <div>
                    {{ $post->abstract }}
                </div>

        </div>

    @endforeach

@endsection