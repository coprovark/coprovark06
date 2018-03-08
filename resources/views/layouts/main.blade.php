<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <center>
            <a href="/page01">Page01</a>
            <a href="/page02">Page02</a>
            <a href="/page03">Page03</a>
            <a href="/page04">Page04</a>
            <hr>
                <div class="container">
                    @yield('content')
                </div>
        </center>
    </body>
</html>