<!DOCTYPE html>
<!-- Metreex - SEO & Digital Marketing Agency Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Bohdan Terskow"/> 
        <meta name="description" content="Metreex - SEO & Digital Marketing Agency Landing Page Template"/>
        <meta name="keywords" content="Responsive, HTML5 template, Jthemes, SEO, Strategy, Digital Marketing Agency, Online Marketing"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                
        <!-- SITE TITLE -->
        <title>@yield('title')</title>
                            
        <!-- FAVICON AND TOUCH ICONS  -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">      
        <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

        <!-- BOOTSTRAP CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
                
        <!-- FONT ICONS -->
        <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">     
        <link href="css/flaticon.css" rel="stylesheet">

        <!-- PLUGINS STYLESHEET -->
        <link href="css/menu.css" rel="stylesheet"> 
        <link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">   
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <!-- ON SCROLL ANIMATION -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- TEMPLATE CSS -->
        <!-- <link href="css/carrot.css" rel="stylesheet">     --> 
        <!-- <link href="css/dodgerblue.css" rel="stylesheet"> --> 
        <!-- <link href="css/green.css" rel="stylesheet">      -->
        <!-- <link href="css/magneta.css" rel="stylesheet">    --> 
        <!-- <link href="css/olive.css" rel="stylesheet">      -->
        <link href="css/orange.css" rel="stylesheet">
        <!-- <link href="css/purple.css" rel="stylesheet">     -->
        <!-- <link href="css/red.css" rel="stylesheet">        -->
        <!-- <link href="css/skyblue.css" rel="stylesheet">    -->
        <!-- <link href="css/teal.css" rel="stylesheet">       -->
        
        <!-- RESPONSIVE CSS -->
        <link href="css/responsive.css" rel="stylesheet"> 
        <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
    
    </head>




    <body>




        <!-- PRELOADER SPINNER
        ============================================= -->       
        <div id="loader-wrapper">
            <div id="loading">
                <div id="loading-center">
                    <div id="loading-center-absolute">
                        <div class="object" id="object_four"></div>
                        <div class="object" id="object_three"></div>
                        <div class="object" id="object_two"></div>
                        <div class="object" id="object_one"></div>
                    </div>
                </div> 
            </div>
        </div>




        <!-- PAGE CONTENT
        ============================================= -->   
        <div id="page" class="page">




            <!-- HEADER
            ============================================= -->
            <header id="header" class="header tra-menu navbar-dark dark-scroll">
                <div class="header-wrapper">


                    <!-- MOBILE HEADER -->
                    <div class="wsmobileheader clearfix">   
                        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>          
                        <span class="smllogo smllogo-black"><img src="images/logo.png" width="162" height="40" alt="mobile-logo"/></span>
                        <span class="smllogo smllogo-white"><img src="images/logo-white.png" width="162" height="40" alt="mobile-logo"/></span>
                        <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
                    </div>


                    <!-- NAVIGATION MENU -->
                    <div class="wsmainfull menu clearfix">
                        <div class="wsmainwp clearfix">


                            <!-- LOGO IMAGE -->
                            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 334 x 80 pixels) -->
                            <div class="desktoplogo"><a href="{{route('welcome')}}" class="logo-black"><img src="images/logo.png" width="162" height="40" alt="header-logo"></a></div>
                            <div class="desktoplogo"><a href="{{route('welcome')}}" class="logo-white"><img src="images/logo-white.png" width="162" height="40" alt="header-logo"></a></div>


                            <!-- MAIN MENU -->
                            <nav class="wsmenu clearfix blue-header">
                                <ul class="wsmenu-list">


                                    <!-- SIMPLE NAVIGATION LINK -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="{{route('about')}}">About</a></li>



                                    <!-- SIMPLE NAVIGATION LINK -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="services.html">Services</a></li>



                                    <!-- SIMPLE NAVIGATION LINK -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="blog-listing.html">Blog</a></li>


                                    <!-- HEADER PHONE NUMBER -->
                                    <li class="nl-simple green-scroll" aria-haspopup="true">
                                        <a href="tel:123456789" class="last-link last-link-number">
                                            <i class="fas fa-phone-square-alt"></i> (380)-95-432-17-00
                                        </a>
                                    </li>


                                    <!-- HEADER BUTTON 
                                    <li class="nl-simple" aria-haspopup="true">
                                        <a href="#" class="btn btn-green tra-white-hover last-link">Get In Touch</a>
                                    </li> -->


                                </ul>
                            </nav>  <!-- END MAIN MENU -->

                        </div>
                    </div>  <!-- END NAVIGATION MENU -->


                </div>     <!-- End header-wrapper -->
            </header>   <!-- END HEADER -->
        </div>

         <!-- EXTERNAL SCRIPTS
        ============================================= -->   
        
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.easing.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/materialize.js"></script>   
        <script src="js/jquery.scrollto.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script> 
        <script src="js/contact-form.js"></script>  
        <script src="js/comment-form.js"></script>
        <script src="js/jquery.validate.min.js"></script>   
        <script src="js/jquery.ajaxchimp.min.js"></script>  
        <script src="js/wow.js"></script>   

        <!-- Custom Script -->      
        <script src="js/custom.js"></script>

        <script>
            new WOW().init();
        </script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!-- [if lt IE 9]>
            <script src="js/html5shiv.js" type="text/javascript"></script>
            <script src="js/respond.min.js" type="text/javascript"></script>
        <![endif] -->

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. --> 
        <!--
        <script>
            window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview');
        </script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
        -->
        <!-- End Google Analytics -->
    </body>
</html>
