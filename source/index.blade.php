@extends('_layouts.master')

@section('content')

<div class="container">
    <h2>Hello!</h2>
    <p>Write me an <a href="mailto:{{ $page->contact_email }}">email</a></p>
</div>

@endsection
