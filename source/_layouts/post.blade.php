@include('_partials.meta')
    <body>
        @include('_partials.nav')

        @include('_partials.header')     
        
        <div class="container">
            <h2>Blog listing</h2>
        </div>
 
        @yield('content')
    
        @include('_partials.footer')
    
    </body>
</html>