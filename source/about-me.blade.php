@extends('layouts.master')

@section('content')

@include('partials._header')

    <main id="main" role="main">
        <section id="about" class="about">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        @include('content._about')
                    </div>
                </div>
            </div>  
        </section>
    </main> 
    
@endsection