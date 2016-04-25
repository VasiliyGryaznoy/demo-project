<!DOCTYPE html>
<html>
    <head>
        <title>Demp project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script src="{{url('js/main.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img src="{{url('images/logo2.PNG')}}"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                            <ul class="nav navbar-nav">
                                <li><a href="automation">Automation</a></li>
                                <li><a href="system-integration">System integration</a></li>
                                <li><a href="consulting">Consulting</a></li>
                                <li><a href="contact">Contact us</a></li>
                            </ul>
<!--                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                                <li><a href="../navbar-static-top/">Static top</a></li>
                                <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                            </ul>-->
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>

            @yield('content')
            </div>
        </div> <!-- /container -->
    </body>
    <script type="text/javascript" src="//userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/d90b19e0b3039c4d1f53548c26f340d819305574adfa4a0a634f07f05e784f71.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
