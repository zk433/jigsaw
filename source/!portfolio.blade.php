@extends('layouts.master')

@section('content')
      
@include('partials._header')
      
        <section id="portfolio" class="grid-container">
          <div class="blurb">
              <p>My knowledge and love for psychology helps me create beautiful and functional websites built with usability and accessibility in mind. Below are some examples of my work.</p>
          </div>
          
          <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
            
            <div class="cell">
              <figure class="tile">
                <img class="thumbnail" src="/assets/images/zuzana-k-cropped2.png" alt="Zuzana K website screenshot">
                <figcaption>
                    <h4><a href="https://www.zuzana-k.com">Live Site</a></h4>
                    <h5><a href="https://github.com/zk433/zuzana-k">Source code</a></h5>
                </figcaption>
              </figure>
            </div>
      
            <div class="cell">
              <figure class="tile">
                <img class="thumbnail" src="/assets/images/clear-view-cropped2.png" alt="Clear View Travel Agency website screenshot">
                <figcaption>
                    <h4><a href="https://zk433.github.io/travel-site/">Live Demo</a></h4>
                    <h5><a href="https://github.com/zk433/travel-site">Source code</a></h5>
                </figcaption>
              </figure>
            </div>
      
            <div class="cell">
              <figure class="tile">
                <img class="thumbnail" src="/assets/images/hotel-spa-cropped2.png" alt="Hotel Spa website screenshot">
                <figcaption>
                    <h4><a href="https://zk433.github.io/hotel-spa-resort/">Live Demo</a></h4>
                    <h5><a href="https://github.com/zk433/hotel-spa-resort">Source code</a></h5>
                </figcaption>
              </figure>
            </div>
      
            <div class="cell">
              <figure class="tile">
                <img class="thumbnail" src="/assets/images/readr-app-cropped2.png" alt="Readr App website screenshot">
                <figcaption>
                    <h4><a href="https://zk433.github.io/Readr-App/">Live Demo</a></h4>
                    <h5><a href="https://github.com/zk433/Readr-App">Source code</a></h5>
                </figcaption>
              </figure>
            </div>
          </div>
        </section>
      </main>  

@endsection