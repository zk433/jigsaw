@include('partials._meta')
    <body>
        @include('partials._nav')

        @include('partials._header')     
        
        <div class="container">
            <h2>Blog listing</h2>
        </div>
 
        @yield('content')
    
        @include('partials._footer')
    
    </body>
</html>