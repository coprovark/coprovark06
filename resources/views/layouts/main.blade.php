<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <center>
            <a href="/page01"> <font size="5" color="" face="PL-EDIT"> Page01 </font></a>
            <a href="/page02"> <font size="5" color="" face="PL-EDIT"> Page02 </font></a>
            <a href="/page03"> <font size="5" color="" face="PL-EDIT"> Page03 </font></a>
            <a href="/page04"> <font size="5" color="" face="PL-EDIT"> Page04 </font></a>
            <br>
            <hr>
                <div class="container">
                    @yield('content')
                </div>
        </center>
    </body>
</html>