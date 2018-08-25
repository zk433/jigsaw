@include('partials._meta')
    <body>
        @include('partials._sidebar')
            
        @yield('content')
    
        @include('partials._footer')
    
        @include('partials._scripts')
    </body>
</html>
