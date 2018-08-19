@include('_partials.meta')
    <body>
        @include('_partials.nav')

        @include('_partials.header')        
 
        @yield('content')
    
        @include('_partials.footer')
    
    </body>
</html>
