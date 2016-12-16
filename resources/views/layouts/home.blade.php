<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kakamega Friends' Church -Kakamega, Kenya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Bootstrap 3 template for corporate business" />
    <!-- css -->
    <link href={{url("css/bootstrap.min.css")}} rel="stylesheet" />
    <link href={{url("plugins/flexslider/flexslider.css")}} rel="stylesheet" media="screen" />
    <link href={{url("css/cubeportfolio.min.css")}} rel="stylesheet" />
    <link href={{url("css/style.css")}} rel="stylesheet" />

    <!-- Theme skin -->
    <link id="t-colors" href={{url("skins/default.css")}} rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href={{url("bodybg/bg1.css")}} rel="stylesheet" type="text/css" />


</head>
<body>



<div id="wrapper">
    <!-- start header -->
    <header>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="topleft-info">
                            <li><i class="fa fa-mail-reply"></i> <a href="mailto:info@kakamegafriends.co.ke">Mail Us</a> </li>
                            <li><i class="fa fa-phone"></i> +(254) 000000000 </a> </li>
                        </ul>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{url('login')}}">
                            <button class="btn btn-primary">
                                Login
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-default navbar-static-top" style="background-color: #354e9d">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{url('images/finalkfc.png')}}" alt="" style="margin-bottom: 20px" width="auto" height="100" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav" >
                        <li><a href="{{url('/')}}" style="color: white">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " style="color: white" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Administration <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('administration/quakers')}}">QUAKERMEN</a></li>
                                <li><a href="">SOcial Concern</a></li>
                                <li><a href="">Youth Friends' Programme</a></li>
                                <li><a href="">English Service</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('services')}}" style="color: white">Services</a></li>
                        <li><a href="portfolio.html" style="color: white">Events</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

@yield('content')

    <footer>

        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>&copy; Kakamega Friends' Church | 2016</p>
                            <div class="credits">
                                <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                                -->
                                <a href="mailto:makamuevans@gmail.com">Designed  by Makamu L Evans.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src={{url("js/jquery.min.js")}}></script>
<script src={{url("js/modernizr.custom.js")}}></script>
<script src={{url("js/jquery.easing.1.3.js")}}></script>
<script src={{"js/bootstrap.min.js"}}></script>
<script src={{"plugins/flexslider/jquery.flexslider-min.js"}}></script>
<script src={{"plugins/flexslider/flexslider.config.js"}}></script>
<script src={{"js/jquery.appear.js"}}></script>
<script src={{"js/stellar.js"}}></script>
<script src={{"js/classie.js"}}></script>
<script src={{"js/uisearch.js"}}></script>
<script src={{"js/jquery.cubeportfolio.min.js"}}></script>
<script src={{"js/google-code-prettify/prettify.js"}}></script>
<script src={{"js/animate.js"}}></script>
<script src={{"js/custom.js"}}></script>


</body>
</html>