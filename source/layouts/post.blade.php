@include('partials._meta')
    <body>
   
        @include('partials._horizontal-nav')    
        <div class="grid-container">
            @yield('content')  
        </div>  
        
    
        @include('partials._footer')
    
    </body>
</html>