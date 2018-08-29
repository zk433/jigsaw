<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas>

    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>

    <div class="grid-y grid-padding-x" style="height: 100%;">
        <div class="shrink">
            <img class="headshot" src="/assets/images/headshot-full2.png" alt="Image of Zuzana K">
        </div>
        <hr>
        <div class="auto cell">

            @include('content._bio')

            <hr>

            @include('partials._nav')

            <hr>
            <div id="social-media">
                <a href="https://twitter.com/Zk433">Follow me on Twitter</a>
            </div>
        </div>   
       
    </div>

 </div>{{-- off-canvas position-left reveal-for-large --}}

<main class="off-canvas-content" data-off-canvas-content>
    <div class="title-bar hide-for-large">
        <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="my-info">Menu</button>
    </div>
</div>