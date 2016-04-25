<!DOCTYPE html>
<html>
    <head>
        <title>Demp project</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
        <script src="{{url('js/main.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <a class="navbar-brand" href="/"><img src="{{url('images/logo2.PNG')}}"></a>
                            <li><a href="#">Test1</a></li>
                            <li><a href="#">Test2</a></li>
                            <li><a href="#">Test3</a></li>
                            <li><a href="contact">Contact us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>

            @yield('content')

        </div> <!-- /container -->
    </body>
</html>
