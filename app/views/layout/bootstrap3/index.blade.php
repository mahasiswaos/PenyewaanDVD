<html>
    <head>
        @include('layout.bootstrap3.head')
    </head>
    <body>
        @include('layout.bootstrap3.header')
        @include('layout.bootstrap3.nav')
        </br>
        </br>
        </br>
        </br>
        <div class="container">
            @yield('content')            
        </div>
        </br>
        </br>
        </br>
        @include('layout.bootstrap3.footer')
    </body>
</html>