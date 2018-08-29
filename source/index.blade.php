@extends('layouts.master')

@section('content')
    @include('partials._header')

    <div class="grid-container">
            
        @include('content._intro')

            <div class="grid-x grid-margin-x">
                    @foreach($blog->take(4) as $post)
                        <div class="cell small-12 medium-6" style="border: 1px solid black;">
                            <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                            <span>{{ date('F j, Y', $post->created_at) }}</span>
                            
                            <div>
                                {{ $post->abstract }}
                            </div>
                        </div>
                    @endforeach
            </div>
            <button>View more posts</button>

            <h2>Testimonials</h2>
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-6">
                    <blockquote>
                        "Zuzana helped design freeCodeCamp's new user profile and settings pages. She has been a valuable contributor, reliable and responsible, and able to iterate on new design ideas. Working with her has been a pleasure. Zuzana would be a great asset to any team." <br>
                        <cite class="author">Quincy Larson, Teacher and Founder of <a href="https://www.freecodecamp.org/">freeCodeCamp.org</a> </cite>
                    </blockquote>
                </div>
                <div class="cell small-12 medium-6">
                    <blockquote> 
                        "Zuzana is one of the most determined and self-directed people I know and this comes across in her approach to her work: detail conscious, conscientious, thorough. Her deep understanding of psychological principles makes a real difference - you'll get a full understanding of user experience, psychological aspects of website design and accessibility issues as well as all-round coding and technical skills." <br>
                        <cite class="author">Elisabeth Klaar of <a href="https://www.oaktreestudio.co.uk/">Oak Tree Studio</a> </cite>
                    </blockquote>    
                </div>
            </div>
@endsection

