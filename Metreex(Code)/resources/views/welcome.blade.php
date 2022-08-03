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
        <title>Metreex</title>
                            
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




            <!-- HERO-2
            ============================================= -->   
            <section id="hero-2" class="bg-fixed hero-section division">
                <div class="container"> 


                    <!-- HERO TEXT -->
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="hero-txt text-center">

                                <!-- Title -->
                                <h3 class="indigo-color">Take advantage of SEO to receive more customers & profit</h3>

                                <!-- Text -->
                                <p class="grey-color">Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet 
                                   augue luctus magna vulputate molestie bibendum quis luctus an dolor
                                </p>

                                <!-- HERO FORM -->
                                <div  id="form-holder" class="form-holder text-center">
                                    <form name="form" id="form" method="POST" class="row seo-form">
                                                                                            
                                        <!-- Hero Form Input -->
                                        <div id="input-email" class="col-lg-4">
                                            <input type="text" name="name" id="name" class="form-control text" placeholder="Your Name*"> 
                                        </div>

                                        <!-- Hero Form Input -->
                                        <div id="input-url" class="col-lg-5">
                                            <input type="email" name="email" id="email" class="form-control email" placeholder="Your Address*" value=""> 
                                        </div>

                                        <!-- Hero Form Button -->
                                        <div class="col-lg-3 form-btn"> 
                                            <button type="submit" class="btn btn-primary black-hover submit">Let's Send</button> 
                                        </div>
                                        

                                                                                                
                                    </form> 
                                     
                                </div>                          

                            </div>
                        </div>  
                    </div>  <!-- END HERO TEXT -->
                    
                    <script type="text/javascript">
                        $("#form").on("submit", function(e) {
                            e.preventDefault();
                            let name = $("#name").val();
                            let email = $("#email").val();
                            $.ajax(
                            {
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: 'POST',
                                url: '/welcome',
                                data: {"_token" : "{{csrf_token()}}", name:name, email:email},
                                success: function(data) {
                                    console.log(data.success);
                                    $("#form-holder").html(`<div class="col-lg-12 seo-form-ms"><h1>Exactly! Your name and email were sending! We callback to you very soon!</h1></div>`);
                                }
                            })
                        })
                    </script>
                    
                    <!-- HERO IMAGE --> 
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="hero-2-img text-center">
                                <img class="img-fluid" src="images/1603954182-seo-article-header.png" alt="hero-image">
                            </div>  
                        </div>
                    </div>


                </div>  <!-- End container --> 


                <!-- SECTION OVERLAY -->    
                <div class="bg-fixed white-overlay-wave"></div> 


            </section>  <!-- END HERO-2 --> 




            <!-- BRANDS-2
            ============================================= -->
            <div id="brands-2" class="brands-section division">
                <div class="container">                 
                    <div class="row">
                        <div class="col-md-12 text-center"> 

                            <!-- Title -->
                            <p class="p-lg grey-color">Used by startups, e-stores, web designers, and teams including:</p>

                            <ul class="brands-list">
                                                    
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-1.jpg" alt="brand-logo" />
                                </li>
                                                    
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-2.jpg" alt="brand-logo" />
                                </li>
                                                    
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-3.jpg" alt="brand-logo" />
                                </li>
                                                    
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-4.jpg" alt="brand-logo" />
                                </li>
                                                    
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-5.jpg" alt="brand-logo">
                                </li>
                                                    
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-6.jpg" alt="brand-logo" />
                                </li>

                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-7.jpg" alt="brand-logo" />
                                </li>
                                                            
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="images/brand-8.jpg" alt="brand-logo" />
                                </li>
                                
                                <!-- BRAND LOGO IMAGE -->
                                <li class="brand-logo">
                                    <img class="img-fluid" src="https://static.theprint.in/wp-content/uploads/2021/11/New-picture-6-3.png" alt="brand-logo" />
                                </li>

                            </ul>

                        </div>
                    </div>      <!-- End row -->
                </div>      <!-- End container -->
            </div>  <!-- END BRANDS-2 -->




            <!-- CONTENT-5
            ============================================= -->
            <section id="content-5" class="bg-lightgrey wide-60 content-section division">
                <div class="container">
                    <div class="row d-flex align-items-center">


                        <!-- TEXT BLOCK --> 
                        <div class="col-md-7 col-lg-6">
                            <div class="txt-block pc-25 mb-40 wow fadeInLeft" data-wow-delay="0.4s">

                                <!-- Title -->  
                                <h4 class="h4-xl indigo-color">Get more sales with SEO, PPC, and Email Marketing</h4>

                                <!-- Text -->
                                <div class="cbox-1">        
                                    <i class="fas fa-check grey-color"></i>
                                    <div class="cbox-1-txt">
                                        <p>Semper lacus cursus porta, feugiat primis ligula risus auctor and rhoncus in ultrice ligula 
                                           purus ipsum primis in cubilia
                                        </p>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="cbox-1">    
                                    <i class="fas fa-check grey-color"></i>
                                    <div class="cbox-1-txt">
                                        <p>Integer congue magna at pretium purus pretium ligula rutrum and luctus risus eros dolor auctor 
                                           ipsum blandit purus vehicula magna and luctus tempor quisque turpis magna ligula 
                                       </p>
                                    </div>
                                </div>
                                
                                <!-- Text -->
                                <div class="cbox-1">    
                                    <i class="fas fa-check grey-color"></i>
                                    <div class="cbox-1-txt">
                                        <p>An enim nullam tempor sapien gravida donec enim blandit ipsum at porta justo integer velna
                                           vitae auctor integer congue
                                        </p>
                                    </div>
                                </div>

                                <!-- SMALL STATISTIC -->
                                <div class="small-statistic">
                                    <div class="row">   

                                        <!-- STATISTIC BLOCK #1 -->
                                        <div class="col-sm-6">                  
                                            <div class="statistic-block">                           
                                                <h5 class="statistic-number primary-color">4,<span class="count-element">379</span></h5>
                                                <p class="indigo-color">Websites Improved</p>
                                                <p class="p-sm">An enim nullam tempor sapien gravida donec blandit ipsum</p>            
                                            </div>                              
                                        </div>

                                        <!-- STATISTIC BLOCK #2 -->
                                        <div class="col-sm-6">                      
                                            <div class="statistic-block">                               
                                                <h5 class="statistic-number primary-color"><span class="count-element">99</span>%</h5>
                                                <p class="indigo-color">Customer Satisfaction</p>
                                                <p class="p-sm">An enim nullam tempor sapien gravida donec blandit ipsum</p>    
                                            </div>                          
                                        </div>

                                    </div>  
                                </div>  <!-- END SMALL STATISTIC -->

                            </div>
                        </div>  <!-- END TEXT BLOCK --> 


                        <!-- IMAGE BLOCK -->
                        <div class="col-md-5 col-lg-6">
                            <div class="content-5-img mb-40 wow fadeInRight" data-wow-delay="0.6s">
                                <img class="img-fluid" loading="lazy" src="https://stevenbartlett.com/wp-content/uploads/2022/02/The-Diary-of-a-CEO-Live-A4-1-873x1024.jpg" alt="content-image">
                            </div>
                        </div>


                    </div>    <!-- End row -->  
                </div>     <!-- End container -->
            </section>  <!-- END CONTENT-5 -->




            <!-- SERVICES-4
            ============================================= -->
            <section id="services-4" class="wide-60 services-section division">
                <div class="container">


                    <!-- SECTION TITLE -->  
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">    

                            <!-- Title  --> 
                            <h3 class="h3-sm indigo-color">We know exactly how to increase your website traffic and grow up your business</h3>  

                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>
                                
                        </div>
                    </div>  <!-- END SECTION TITLE -->  

                    <!-- SERVICE BOXES -->
                    <div class="services-boxes">
                        <div class="row">
                        

                            <!-- SERVICE BOX #1 -->
                            <div class="col-md-6">
                                <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="0.4s"> 

                                    <!-- Icon --> 
                                    <img class="img-65" src="images/icons/analytics-2.png" alt="feature-icon" />

                                    <!-- Text -->
                                    <div class="sbox-4-txt">
        
                                        <!-- Title -->
                                        <h5 class="h5-lg indigo-color">Advanced Analytics Review</h5>
                                            
                                        <!-- Text -->
                                        <p class="grey-color">Maecenas gravida nunc vehicula magna luctus tempor quisque laoreet turpis at 
                                            augue, viverra and augue eget dictum tempor. Pulvinar porta blandit posuere vehicula imperdiet 
                                           varius undo viverra rutrum dignissim
                                        </p>

                                    </div>

                                </div>
                            </div>


                            <!-- SERVICE BOX #2 -->
                            <div class="col-md-6">
                                <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="0.6s"> 

                                    <!-- Icon --> 
                                    <img class="img-65" src="images/icons/email-1.png" alt="feature-icon" />

                                    <!-- Text -->
                                    <div class="sbox-4-txt">
        
                                        <!-- Title -->
                                        <h5 class="h5-lg indigo-color">Email Marketing Campaigns</h5>
                                            
                                        <!-- Text -->
                                        <p class="grey-color">Maecenas gravida nunc vehicula magna luctus tempor quisque laoreet turpis at 
                                            augue, viverra and augue eget dictum tempor. Pulvinar porta blandit posuere vehicula imperdiet 
                                           varius undo viverra rutrum dignissim
                                        </p>

                                    </div>

                                </div>
                            </div>  


                            <!-- SERVICE BOX #3 -->
                            <div class="col-md-6">
                                <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="0.8s"> 

                                    <!-- Icon --> 
                                    <img class="img-65" src="images/icons/video-player-1.png" alt="feature-icon" />

                                    <!-- Text -->
                                    <div class="sbox-4-txt">
        
                                        <!-- Title -->
                                        <h5 class="h5-lg indigo-color">Video Marketing</h5>
                                            
                                        <!-- Text -->
                                        <p class="grey-color">Maecenas gravida nunc vehicula magna luctus tempor quisque laoreet turpis at 
                                            augue, viverra and augue eget dictum tempor. Pulvinar porta blandit posuere vehicula imperdiet 
                                           varius undo viverra rutrum dignissim
                                        </p>

                                    </div>

                                </div>
                            </div>


                            <!-- SERVICE BOX #4 -->
                            <div class="col-md-6">
                                <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="1s">   

                                    <!-- Icon --> 
                                    <img class="img-65" src="images/icons/price-tag.png" alt="feature-icon" />

                                    <!-- Text -->
                                    <div class="sbox-4-txt">
        
                                        <!-- Title -->
                                        <h5 class="h5-lg indigo-color">Search Engine Optimization (SEO)</h5>
                                            
                                        <!-- Text -->
                                        <p class="grey-color">Maecenas gravida nunc vehicula magna luctus tempor quisque laoreet turpis at 
                                            augue, viverra and augue eget dictum tempor. Pulvinar porta blandit posuere vehicula imperdiet 
                                           varius undo viverra rutrum dignissim
                                        </p>

                                    </div>

                                </div>
                            </div>


                            <!-- SERVICE BOX #5 -->
                            <div class="col-md-6">
                                <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="1.2s"> 

                                    <!-- Icon --> 
                                    <img class="img-65" src="images/icons/pay-per-click-3.png" alt="feature-icon" />

                                    <!-- Text -->
                                    <div class="sbox-4-txt">
        
                                        <!-- Title -->
                                        <h5 class="h5-lg indigo-color">Pay Per Click (PPC)</h5>
                                            
                                        <!-- Text -->
                                        <p class="grey-color">Maecenas gravida nunc vehicula magna luctus tempor quisque laoreet turpis at 
                                            augue, viverra and augue eget dictum tempor. Pulvinar porta blandit posuere vehicula imperdiet 
                                           varius undo viverra rutrum dignissim
                                        </p>

                                    </div>

                                </div>
                            </div>


                            <!-- SERVICE BOX #6 -->
                            <div class="col-md-6">
                                <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="1.4s"> 

                                    <!-- Icon --> 
                                    <img class="img-65" src="images/icons/computer-1.png" alt="feature-icon" />

                                    <!-- Text -->
                                    <div class="sbox-4-txt">
        
                                        <!-- Title -->
                                        <h5 class="h5-lg indigo-color">Content Marketing</h5>
                                            
                                        <!-- Text -->
                                        <p class="grey-color">Maecenas gravida nunc vehicula magna luctus tempor quisque laoreet turpis at 
                                            augue, viverra and augue eget dictum tempor. Pulvinar porta blandit posuere vehicula imperdiet 
                                           varius undo viverra rutrum dignissim
                                        </p>

                                    </div>

                                </div>
                            </div>


                        </div>  <!-- End row -->    
                    </div>   <!-- END SERVICE BOXES --> 


                </div>     <!-- End container -->       
            </section>  <!-- END SERVICES-4 -->




            <!-- STATISTIC-1
            ============================================= -->
            <div id="statistic-1" class="bg-06 statistic-section division">
                <div class="container white-color">
                    <div class="row">


                        <!-- STATISTIC BLOCK #1 -->
                        <div class="col-sm-6 col-md-3">                         
                            <div class="statistic-block wow fadeInUp" data-wow-delay="0.4s">

                                <!-- Text -->
                                <h5 class="statistic-number">3,<span class="count-element">485</span></h5>
                                <p class="p-md">Links Optimized</p>                                                                     
                                                    
                            </div>                              
                        </div>


                        <!-- STATISTIC BLOCK #2 -->
                        <div class="col-sm-6 col-md-3">                                 
                            <div class="statistic-block wow fadeInUp" data-wow-delay="0.6s">

                                <!-- Text -->
                                <h5 class="statistic-number">1,<span class="count-element">281</span></h5>  
                                <p class="p-md">Happy Customers</p>                                 
                                                                        
                            </div>                          
                        </div>


                        <!-- STATISTIC BLOCK #3 -->
                        <div class="col-sm-6 col-md-3">                     
                            <div class="statistic-block wow fadeInUp" data-wow-delay="0.8s">    

                                <!-- Text -->
                                <h5 class="statistic-number">4,<span class="count-element">379</span></h5>
                                <p class="p-md">Websites Improved</p>                               

                            </div>                      
                        </div>
                    

                        <!-- STATISTIC BLOCK #4 -->
                        <div class="col-sm-6 col-md-3">                         
                            <div class="statistic-block wow fadeInUp" data-wow-delay="1s">  

                                <!-- Text -->   
                                <h5 class="statistic-number">2,<span class="count-element">473</span></h5>
                                <p class="p-md">Active Accounts</p>             
                                
                            </div>                      
                        </div>


                    </div> <!-- End row -->
                </div>   <!-- End container -->     
            </div>   <!-- END STATISTIC-1 -->




            <!-- ABOUT-1
            ============================================= -->
            <section id="about-1" class="wide-60 about-section division">
                <div class="container">
                    <div class="row d-flex align-items-center">


                        <!-- ABOUT IMAGE -->
                        <div class="col-md-5 col-lg-6">
                            <div class="img-block pr-25 mb-40 wow fadeInLeft" data-wow-delay="0.6s">
                                <img class="img-fluid" src="images/image-02.png" alt="about-image">
                            </div>
                        </div>


                        <!-- ABOUT TEXT -->
                        <div class="col-md-7 col-lg-6">
                            <div class="txt-block pc-25 mb-40 wow fadeInRight" data-wow-delay="0.4s">

                                <!-- Title -->  
                                <h4 class="h4-xl indigo-color">We're providing the best SEO services for your website</h4>

                                <!-- Text -->
                                <p>An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer at odio 
                                   velna vitae auctor integera congue magna at purus pretium ligula rutrum luctus ultrice 
                                   a gravida lectus suscipit gestas magna suscipit luctus undo
                                </p>

                                <!-- QUOTE -->
                                <div class="quote quote-primary">

                                    <!-- Quote Text -->
                                    <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean magna ligula eget dolor 
                                       suscipit egestas at viverra dolor iaculis luctus magna suscipit egestas "                                       
                                    </p>
                                            
                                    <!-- Quote Avatar -->
                                    <div class="quote-avatar">
                                        <img src="images/quote-avatar.jpg" alt="quote-avatar">
                                    </div>
                                                
                                    <!-- Quote Author -->
                                    <div class="quote-author">
                                        <h5 class="h5-xs indigo-color">Sean Mcmarthy </h5>
                                        <span class="grey-color">Founder of Metreex</span>
                                    </div>  
                                
                                </div>                  
                                
                            </div>
                        </div>    <!-- END ABOUT TEXT -->


                    </div>    <!-- End row -->  
                </div>     <!-- End container -->   
            </section>  <!-- End ABOUT-1 --> 




            <!-- TESTIMONIALS-3
            ============================================= -->
            <section id="reviews-3" class="bg-04 wide-100 reviews-section division">
                <div class="container">


                    <!-- SECTION TITLE -->  
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">    

                            <!-- Title  --> 
                            <h3 class="h3-xs indigo-color">
                                <span class="title-digit">2,<span class="count-element">968</span></span> 
                                Positive Reviews From Our Customers
                            </h3>

                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>

                        </div>
                    </div>
                
                    
                    <!-- TESTIMONIALS CONTENT -->
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">                 
                            <div class="owl-carousel owl-theme reviews-holder">

                        
                                <!-- TESTIMONIAL #1 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>

                                    <!-- Testimonial Text -->
                                    <p>Etiam sapien sem at sagittis congue an augue massa varius egestas and suscipit magna and 
                                       tempus and aliquet porta vitae purus congue a cursus magna cubilia augue vitae laoreet                  
                                    </p>

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-1.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Sean McMarthy</h5>   
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>

                                    </div>                                  
                                                                                    
                                </div>  <!--END  TESTIMONIAL #1 -->
                        
                        
                                <!-- TESTIMONIAL #2 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>
                    
                                    <!-- Testimonial Text -->
                                    <p>At sagittis congue augue egestas rhoncus in magna ipsum vitae purus ipsum primis cubilia 
                                       laoreet augue egestas luctus and donec diam ociis ultrice ligula magna suscipit
                                    </p>

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-2.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Evelyn Martinez</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>

                                    </div>
                    
                                </div>  <!-- END TESTIMONIAL #2 -->
                        
                        
                                <!-- TESTIMONIAL #3 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>
                                                                
                                    <!-- Testimonial Text -->
                                    <p>Mauris donec ociis magnis sapien etiam sapien congue and augue egestas et ultrice vitae undo 
                                       purus and diam integer congue at magna ligula an egestas magna suscipit lectus   
                                    </p>

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-3.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Joel Peterson</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>  

                                    </div>  

                                </div>  <!-- END TESTIMONIAL #3 -->


                                <!-- TESTIMONIAL #4 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>
                    
                                    <!-- Testimonial Text -->
                                    <p>Mauris donec ociis magnis sapien etiam sapien congue undo augue pretium purus ligula lectus aenean 
                                       magna and mauris lectus undo laoreet tempor egestas magna vitae laoreet augue
                                    </p>

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-4.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Michael Deal</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>
                    
                                    </div>  

                                </div>  <!-- END TESTIMONIAL #4 -->
                                
                                
                                <!-- TESTIMONIAL #5 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>

                                    <!-- Testimonial Text -->
                                    <p>An augue in cubilia laoreet magna suscipit egestas magna ipsum at purus ipsum primis in augue 
                                       ultrice ligula egestas and suscipit lectus gestas integer congue
                                    </p>    

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-5.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Mark Paterson</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>                  
                                                                
                                    </div>  

                                </div>  <!-- END TESTIMONIAL #5 -->
                                
                                
                                <!-- TESTIMONIAL #6 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>

                                    <!-- Testimonial Text -->
                                    <p>An augue cubilia laoreet undo magna a suscipit egestas magna an ipsum ligula vitae purus and 
                                       ipsum primis in cubilia
                                    </p>

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-6.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Mark Hodges</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>

                                    </div>  

                                </div>  <!-- END TESTIMONIAL #6 -->
                                
                                
                                <!-- TESTIMONIAL #7 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>
                
                                    <!-- Testimonial Text -->
                                    <p>Augue egestas volutpat egestas augue purus cubilia laoreet magna suscipit luctus and dolor blandit 
                                       vitae purus diam tempus undo aliquet porta rutrum gestas egestas 
                                    </p>

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-7.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Aaron Wall</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>
                    
                                    </div>  

                                </div>  <!-- END TESTIMONIAL #7 -->


                                <!-- TESTIMONIAL #8 -->
                                <div class="review-3">

                                    <!-- Quote Icon -->
                                    <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>
                    
                                    <!-- Testimonial Text -->
                                    <p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus and dolor blandit
                                       vitae purus diam tempus 
                                    </p>    

                                    <!-- Author Data -->
                                    <div class="review-3-author d-flex align-items-center">

                                        <!-- Author Avatar -->
                                        <div class="author-avatar">
                                            <img class="img-fluid" src="images/review-author-8.jpg" alt="review-author-avatar" />
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">
                                            <h5 class="h5-xs indigo-color">Tosha Wisdom</h5>
                                            <span>Owner, <a href="#">Company Name</a></span>
                                        </div>                          
                                                                
                                    </div>  

                                </div>  <!-- END TESTIMONIAL #8 -->

                            
                            </div>
                        </div>                                  
                    </div>  <!-- END TESTIMONIALS CONTENT --> 
                            
                        
                </div>     <!-- End container -->
            </section>   <!-- END TESTIMONIALS-3 -->




            <!-- SERVICES-2
            ============================================= -->
            <section id="services-2" class="wide-30 services-section division">
                <div class="container">


                    <!-- SECTION TITLE -->  
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                            <!-- Title  --> 
                            <h3 class="h3-lg indigo-color">Custom SEO Services – Our Specialty</h3> 

                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>
                                
                        </div>
                    </div>  <!-- END SECTION TITLE -->  


                    <!-- SERVICE BOXES -->  
                    <div class="row">


                        <!-- SERVICE BOX #1 -->
                        <div class="col-sm-6 col-lg-3">
                            <a href="service-details.html">
                                <div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">

                                    <!-- Icon  -->
                                    <img class="img-85" src="images/icons/placeholder-1.png" alt="feature-icon" />

                                    <!-- Title -->
                                    <h5 class="h5-md indigo-color">Local SEO</h5>
                                        
                                    <!-- Text -->
                                    <p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

                                </div>
                            </a>
                        </div>


                        <!-- SERVICE BOX #2 -->
                        <div class="col-sm-6 col-lg-3">
                            <a href="service-details.html">
                                <div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">

                                    <!-- Icon  -->
                                    <img class="img-85" src="images/icons/online-shop-1.png" alt="feature-icon" />

                                    <!-- Title -->
                                    <h5 class="h5-md indigo-color">E-Commerce SEO</h5>
                                        
                                    <!-- Text -->
                                    <p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

                                </div>
                            </a>
                        </div>


                        <!-- SERVICE BOX #3 -->
                        <div class="col-sm-6 col-lg-3">
                            <a href="service-details.html">
                                <div class="sbox-2 wow fadeInUp" data-wow-delay="0.8s">

                                    <!-- Icon  -->
                                    <img class="img-85" src="images/icons/pie-chart.png" alt="feature-icon" />

                                    <!-- Title -->
                                    <h5 class="h5-md indigo-color">Advanced Analytics</h5>
                                        
                                    <!-- Text -->
                                    <p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

                                </div>
                            </a>
                        </div>


                        <!-- SERVICE BOX #4 -->
                        <div class="col-sm-6 col-lg-3">
                            <a href="service-details.html">
                                <div class="sbox-2 wow fadeInUp" data-wow-delay="1s">

                                    <!-- Icon  -->
                                    <img class="img-85" src="images/icons/pay-per-click-2.png" alt="feature-icon" />

                                    <!-- Title -->
                                    <h5 class="h5-md indigo-color">PPC Management</h5>

                                    <!-- Text -->
                                    <p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

                                </div>
                            </a>
                        </div>


                    </div>  <!-- END SERVICE BOXES -->  


                </div>     <!-- End container -->       
            </section>  <!-- END SERVICES-2 --> 




            <!-- TESTIMONIALS-4
            ============================================= -->
            <section id="reviews-4" class="bg-05 reviews-section division">
                <div class="container white-color">
                    <div class="row d-flex align-items-center">


                        <!-- TESTIMONIAL STATISTIC -->
                        <div class="col-lg-6">
                            <div class="small-statistic pc-25">
                                <div class="row">   

                                    <!-- STATISTIC BLOCK #1 -->
                                    <div class="col-sm-6 col-md-3 col-lg-6">                    
                                        <div class="statistic-block wow fadeInUp" data-wow-delay="0.4s">                            
                                            <h5 class="statistic-number primary-color"><span class="count-element">735</span>%</h5>
                                            <p>increase in SEO traffic from benchmark month</p>         
                                        </div>                              
                                    </div>

                                    <!-- STATISTIC BLOCK #2 -->
                                    <div class="col-sm-6 col-md-3 col-lg-6">                        
                                        <div class="statistic-block wow fadeInUp" data-wow-delay="0.6s">                                
                                            <h5 class="statistic-number primary-color"><span class="count-element">363</span>%</h5>
                                            <p>increase in phone calls from search engines</p>  
                                        </div>                          
                                    </div>

                                    <!-- STATISTIC BLOCK #3 -->
                                    <div class="col-sm-6 col-md-3 col-lg-6">                    
                                        <div class="statistic-block wow fadeInUp" data-wow-delay="0.8s">                            
                                            <h5 class="statistic-number primary-color"><span class="count-element">528</span>%</h5>
                                            <p>increase in organic visitors in 6 months</p>         
                                        </div>                              
                                    </div>

                                    <!-- STATISTIC BLOCK #4 -->
                                    <div class="col-sm-6 col-md-3 col-lg-6">                        
                                        <div class="statistic-block wow fadeInUp" data-wow-delay="1s">                              
                                            <h5 class="statistic-number primary-color"><span class="count-element">436</span>%</h5>
                                            <p>increase in first page rankings in the 6 months</p>  
                                        </div>                          
                                    </div>

                                </div>  
                            </div>
                        </div>  <!-- END TESTIMONIAL STATISTIC -->


                        <!-- TESTIMONIAL TEXT -->
                        <div class="col-lg-6">
                            <div class="review-4 wow fadeInUp" data-wow-delay="0.4s">

                                <!-- Quote Icon -->
                                <div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>

                                <!-- Testimonial Text -->
                                <p>"<span>They're communicative, honest, and reliably deliver tangible results.</span> Etiam sapien 
                                   sem at sagittis congue an augue massa varius egestas and suscipit magna a tempus undo aliquet 
                                   a ligula magna suscipit vitae and rutrum luctus a risus ultrice luctus enim ipsum blandit porta 
                                   justo integer mollislorem primis in orci"                   
                                </p>

                                <!-- Testimonial Author -->
                                <div class="review-4-author">
                                    <h5 class="h5-xs">Sean McMarthy, CEO</h5>   
                                    <span class="lightgrey-color">Company Name</span>
                                </div>  

                            </div>  <!-- END TESTIMONIAL TEXT -->   


                        </div>
                    </div>     <!-- End row -->
                </div>      <!-- End container -->
            </section>   <!-- END TESTIMONIALS-4 -->




            <!-- PROJECTS-2
            ============================================= -->
            <section id="projects-2" class="wide-70 projects-section division">
                <div class="container">


                    <!-- SECTION TITLE -->  
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                            <!-- Title  --> 
                            <h3 class="h3-lg indigo-color">We Leave Lasting Impressions</h3>    

                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>
                                
                        </div>
                    </div>


                    <!-- PROJECTS IMAGES HOLDER -->
                    <div class="row">   


                        <!-- IMAGE #1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="project-2 wow fadeInUp" data-wow-delay="0.4s">
                                <a href="project-details.html">

                                    <!-- Project Preview -->
                                    <div class="hover-overlay"> 

                                        <img class="img-fluid" src="images/portfolio/project-01.jpg" alt="project-preview" />
                                        <div class="item-overlay"></div>

                                        <!-- Project Description -->
                                        <div class="project-description white-color">
                                            <img class="img-fluid" src="images/brand-1.png" alt="project-logo" />
                                            <p class="p-md">Restaurant Website</p>
                                        </div> 

                                    </div>

                                </a>
                            </div>
                        </div>  <!-- END IMAGE #1 -->   


                        <!-- IMAGE #2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="project-2 wow fadeInUp" data-wow-delay="0.6s">
                                <a href="project-details.html">

                                    <!-- Project Preview -->
                                    <div class="hover-overlay"> 

                                        <img class="img-fluid" src="images/portfolio/project-02.jpg" alt="project-preview" />
                                        <div class="item-overlay"></div>

                                        <!-- Project Description -->
                                        <div class="project-description white-color">
                                            <img class="img-fluid" src="images/brand-3.png" alt="project-logo" />
                                            <p class="p-md">Freelancer Website</p>
                                        </div> 

                                    </div>

                                </a>
                            </div>
                        </div>  <!-- END IMAGE #2 -->   


                        <!-- IMAGE #3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="project-2 wow fadeInUp" data-wow-delay="0.8s">
                                <a href="project-details.html">

                                    <!-- Project Preview -->
                                    <div class="hover-overlay"> 

                                        <img class="img-fluid" src="images/portfolio/project-03.jpg" alt="project-preview" />
                                        <div class="item-overlay"></div>

                                        <!-- Project Description -->
                                        <div class="project-description white-color">
                                            <img class="img-fluid" src="images/brand-5.png" alt="project-logo" />
                                            <p class="p-md">Organic Food Website</p>
                                        </div> 

                                    </div>

                                </a>
                            </div>      
                        </div>  <!-- END IMAGE #3 -->


                        <!-- IMAGE #4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="project-2 wow fadeInUp" data-wow-delay="1s">
                                <a href="project-details.html">

                                    <!-- Project Preview -->
                                    <div class="hover-overlay"> 

                                        <img class="img-fluid" src="images/portfolio/project-04.jpg" alt="project-preview" />
                                        <div class="item-overlay"></div>

                                        <!-- Project Description -->
                                        <div class="project-description white-color">
                                            <img class="img-fluid" src="images/brand-7.png" alt="project-logo" />
                                            <p class="p-md">Tourism Website</p>
                                        </div> 

                                    </div>

                                </a>
                            </div>  
                        </div>  <!-- END IMAGE #4 -->   


                        <!-- IMAGE #5 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="project-2 wow fadeInUp" data-wow-delay="1.2s">
                                <a href="project-details.html">

                                    <!-- Project Preview -->
                                    <div class="hover-overlay"> 

                                        <img class="img-fluid" src="images/portfolio/project-05.jpg" alt="project-preview" />
                                        <div class="item-overlay"></div>

                                        <!-- Project Description -->
                                        <div class="project-description white-color">
                                            <img class="img-fluid" src="images/brand-4.png" alt="project-logo" />
                                            <p class="p-md">e-Commerce Business</p>
                                        </div> 

                                    </div>

                                </a>
                            </div>
                        </div>  <!-- END IMAGE #5 -->   


                        <!-- IMAGE #6 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="project-2 wow fadeInUp" data-wow-delay="1.4s">
                                <a href="project-details.html">

                                    <!-- Project Preview -->
                                    <div class="hover-overlay"> 

                                        <img class="img-fluid" src="images/portfolio/project-06.jpg" alt="project-preview" />
                                        <div class="item-overlay"></div>

                                        <!-- Project Description -->
                                        <div class="project-description white-color">
                                            <img class="img-fluid" src="images/brand-6.png" alt="project-logo" />
                                            <p class="p-md">Travel Website</p>
                                        </div> 

                                    </div>

                                </a>
                            </div>  
                        </div>  <!-- END IMAGE #6 -->


                    </div>  <!-- END PROJECTS IMAGES HOLDER --> 


                    <!-- ALL PROJECTS BUTTON -->
                    <div class="row">
                        <div class="col-md-12 text-center all-projects-btn">
                            <a href="case-studies-2.html" class="btn btn-md btn-primary tra-black-hover">See All Case Studies</a>
                        </div>
                    </div>


                </div>     <!-- End container -->   
            </section>  <!-- END PROJECTS-2 -->




            <!-- CONTENT-2
            ============================================= -->
            <section id="content-2" class="bg-lightgrey wide-60 content-section division">
                <div class="container">
                    <div class="row d-flex align-items-center">


                        <!-- IMAGE BLOCK -->
                        <div class="col-md-5 col-lg-6">
                            <div class="img-block pr-25 mb-40 wow fadeInLeft" data-wow-delay="0.6s">
                                <img class="img-fluid" src="images/image-03.png" alt="content-image">
                            </div>
                        </div>


                        <!-- TEXT BLOCK --> 
                        <div class="col-md-7 col-lg-6">
                            <div class="txt-block pc-25 mb-40 wow fadeInRight" data-wow-delay="0.4s">

                                <!-- Title -->  
                                <h4 class="h4-xl indigo-color">We craft marketing & digital products that grow business</h4>

                                <!-- Text -->
                                <p>An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer and 
                                   odio velna vitae auctor integera congue magna at purus pretium ligula rutrum luctus 
                                   and ultrice a gravida lectus
                                </p> 

                                <!-- List -->
                                <ul class="ico-list mb-10"> 
                                    <li><i class="fas fa-check primary-color"></i> <span>Vitae auctor integer congue magna at pretium</span></li>
                                    <li><i class="fas fa-check primary-color"></i> <span>Integer congue magna and pretium purus ligula</span></li>
                                    <li><i class="fas fa-check primary-color"></i> <span>Sagittis congue augue egestas volutpat egestas</span></li>
                                    <li><i class="fas fa-check primary-color"></i> <span>Auctor magna at integer congue  pretium</span></li>
                                </ul>

                            </div>
                        </div>  <!-- END TEXT BLOCK --> 


                    </div>    <!-- End row -->  
                </div>     <!-- End container -->
            </section>  <!-- END CONTENT-2 -->




            <!-- PRICING-2
            ============================================= -->
            <section id="pricing-2" class=" wide-60 pricing-section division">
                <div class="container">


                    <!-- SECTION TITLE -->
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">    

                            <!-- Title  --> 
                            <h3 class="h3-lg indigo-color">Simple Pricing, Instant Sign Up</h3> 
                            
                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>
                                
                        </div>
                    </div>  


                    <div class="row pricing-row">


                        <!-- PRICE PLAN BASIC -->
                        <div class="col-md-6">
                            <div class="pricing-table wow fadeInLeft" data-wow-delay="0.4s">

                                <!-- Plan Price  -->
                                <div class="pricing-plan indigo-color text-center">
                                    <h4 class="h4-xs">Basic Subscription</h4>                               
                                    <sup>$</sup>                                
                                    <span class="price">24</span>
                                    <sup class="coins">99</sup>
                                    <p class="p-lg">Limited Access</p>
                                </div>  

                                <!-- Pricing Plan Features  -->
                                <ul class="features">

                                    <li><span class="indigo-color">Growth Plan</span> - purus ipsum neque dolor primis libero tempus, 
                                        blandit posuere and ligula varius magna porta
                                    </li>

                                    <li><span class="indigo-color">Website Monitoring</span> - augue suscipit, luctus and neque purus 
                                        ipsum neque dolor primis libero tempus, blandit posuere
                                    </li>   

                                    <li><span class="indigo-color">Weekly Snapshot Email</span> - purus ipsum neque at dolor primis 
                                        libero tempus, blandit posuere and ligula varius
                                    </li>

                                    <li><span class="indigo-color">Benchmarking</span> - iaculis odio auctor integer congue an impedit 
                                        magna viverra dolor vitae donec  mauris lectus laoreet gestas neque undo luctus feugiat lectus 
                                        laoreet gestas neque
                                    </li>

                                    <li><span class="indigo-color">Daily Health Score</span> - pretium ipsum porta justo integer at 
                                        odio velna vitae auctor integera congue magna
                                    </li>

                                    <li><span class="indigo-color">12/7 Free Support</span> - gravida lectus suscipit gestas luctus</li>

                                </ul>

                                <!-- Pricing Table Button -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-tra-grey black-hover">Get Started</a>
                                </div>

                            </div>  
                        </div>  <!-- END PRICE PLAN BASIC -->


                        <!-- PRICE PLAN PRO -->
                        <div class="col-md-6">
                            <div class="pricing-table wow fadeInRight" data-wow-delay="0.4s">

                                <!-- Plan Price  -->
                                <div class="pricing-plan indigo-color text-center">
                                    <h4 class="h4-xs">Pro Subscription</h4> 
                                    <sup>$</sup>                                
                                    <span class="price">89</span>
                                    <sup class="coins">99</sup>
                                    <p class="p-lg">Full Access</p>
                                </div>  

                                <!-- Pricing Plan Features  -->
                                <ul class="features">

                                    <li><span class="indigo-color">Growth Plan</span> - purus ipsum neque dolor primis libero tempus, 
                                       blandit posuere and ligula varius magna porta
                                    </li>

                                    <li><span class="indigo-color">Website Monitoring</span> - augue suscipit, luctus and neque purus 
                                        ipsum neque dolor primis libero tempus, blandit posuere
                                    </li>   

                                    <li><span class="indigo-color">Weekly Snapshot Email</span> - purus ipsum neque at dolor primis 
                                        libero tempus, blandit posuere and ligula varius
                                    </li>

                                    <li><span class="indigo-color">Benchmarking</span> - iaculis odio auctor integer congue an impedit 
                                        magna viverra dolor vitae donec  mauris lectus laoreet gestas neque undo luctus feugiat lectus 
                                        laoreet gestas neque
                                    </li>

                                    <li><span class="indigo-color">Daily Health Score</span> - pretium ipsum porta justo integer at 
                                        odio velna vitae auctor integera congue magna
                                    </li>

                                    <li><span class="indigo-color">Social Media</span> - augue suscipit, luctus and neque purus ipsum 
                                        neque dolor primis libero tempus, blandit posuere
                                    </li>

                                    <li><span class="indigo-color">SEO & Keywords</span> - iaculis odio auctor integer congue an impedit 
                                        magna viverra dolor vitae donec  mauris lectus laoreet gestas neque undo luctus feugiat lectus laoreet 
                                        gestas neque
                                    </li>

                                    <li><span class="indigo-color">24/7 Free Support</span> - gravida lectus suscipit gestas luctus</li>

                                </ul>

                                <!-- Pricing Table Button -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary tra-black-hover">Upgrade To PRO</a>
                                </div>

                            </div>  
                        </div>  <!-- END PRICE PLAN PRO -->
                        

                    </div>


                    <!-- PRICING NOTICE TEXT -->
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                            <div class="pricing-notice text-center mb-40">                          
                                <p class="grey-color">No commitment required – you can cancel anytime.</p>
                            </div>  
                        </div>
                    </div>


                </div>     <!-- End container -->
            </section>  <!-- END PRICING-2 -->




            <!-- VIDEO-3
            ============================================= -->
            <section id="video-3" class="bg-indigo bg-map wide-60 video-section division">
                <div class="container white-color">
                    <div class="row d-flex align-items-center">


                        <!-- VIDEO TEXT --> 
                        <div class="col-lg-5">
                            <div class="video-txt mb-40">

                                <!-- Title -->  
                                <h4 class="h4-lg">They are always forthcoming, coming up with good solutions for us to improve processes</h4>

                                <!-- Text -->
                                <p>An enim nullam tempor sapien gravida donec enim ipsum porta justo integer at odio velna 
                                   vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice 
                                   luctus in ligula blandit congue magna
                                </p> 

                                <!-- QUOTE -->
                                <div class="quote">
                                            
                                    <!-- Quote Avatar -->
                                    <div class="quote-avatar">
                                        <img src="images/quote-avatar.jpg" alt="quote-avatar">
                                    </div>
                                                
                                    <!-- Quote Author -->
                                    <div class="quote-author">
                                        <h5 class="h5-xs">Sean Mcmarthy </h5>
                                        <span>Founder of Metreex</span>
                                    </div>  
                                
                                </div>

                            </div>
                        </div>  <!-- END VIDEO TEXT --> 


                        <!-- VIDEO LINK --> 
                        <div class="col-lg-7 mb-40">
                            <div class="video-link text-center">
                                
                                <!-- Change the link HERE!!! -->                        
                                <div class="play-btn play-btn-primary text-center">

                                    <a class="video-popup3 video-play-button" href="https://www.youtube.com/embed/0gv7OC9L2s8">
                                      <span></span>
                                    </a>

                                    <!-- Preview Image -->
                                    <img class="img-fluid" src="images/video-3.jpg" alt="video-preview">

                                </div>

                            </div>  
                        </div>  <!-- END VIDEO LINK --> 

                    
                    </div>     <!-- End row --> 
                </div>     <!-- End container -->                       
            </section>  <!-- END VIDEO-3 -->





            <!-- FAQs-1
            ============================================= -->
            <section id="faqs-1" class="wide-100 faqs-section division">                
                <div class="container">


                    <!-- SECTION TITLE -->
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                            <!-- Title -->
                            <h3 class="h3-lg indigo-color">Frequently Asked Questions</h3>

                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>

                        </div>
                    </div>   <!-- END SECTION TITLE --> 


                    <!-- QUESTIONS HOLDER -->
                    <div class="row">                       
                        <div class="col-lg-10 offset-lg-1">
                            <div id="accordion" role="tablist">


                                <!-- QUESTION #1 -->
                                <div class="card wow fadeInUp" data-wow-delay="0.4s">

                                    <!-- Question -->
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="h5-sm indigo-color">
                                            <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                                Do you require a contract?
                                            </a>
                                         </h5>
                                    </div>

                                    <!-- Answer -->
                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">

                                            <!-- Text -->
                                            <p>Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae and 
                                               congue auctor magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien etiam 
                                               sapien sagittis congue tempor gravida donec enim ipsum porta justo integer at odio velna
                                               placerat purus, aliquet elementum massa mollis risus lectus porta rutrum magna dignissim,
                                               porttitor hendrerit
                                            </p>    

                                        </div>
                                    </div>


                                </div>  <!-- END QUESTION #1 -->


                                <!-- QUESTION #2 -->
                                <div class="card wow fadeInUp" data-wow-delay="0.6s">

                                    <!-- Question -->
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="h5-sm indigo-color">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                                Should I ask to see law firm website ranking proof?
                                            </a>
                                         </h5>
                                    </div>

                                    <!-- Answer -->
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">

                                            <p>Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel laoreet
                                               turpis. Urna augue, viverra a augue eget, dictum tempor diam. Sed pulvinar consectetur 
                                               nibh, vel imperdiet dui varius viverra. Pellentesque ac massa lorem. Fusce eu cursus est.
                                               Fusce non nulla vitae massa placerat vulputate vel a purus
                                            </p>
                                        
                                         </div>
                                    </div>

                                </div>  <!-- END QUESTION #2 -->


                                <!-- QUESTION #3 -->
                                <div class="card wow fadeInUp" data-wow-delay="0.8s">

                                    <!-- Question -->
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="h5-sm indigo-color">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                                Do you provide details of what SEO work you will be doing?
                                            </a>
                                         </h5>
                                    </div>

                                    <!-- Answer -->
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                        
                                            <!-- Text -->   
                                            <p>Nullam rutrum eget nunc varius etiam mollis risus congue aliquam etiam sapien egestas, 
                                               congue gestas posuere cubilia congue ipsum mauris lectus laoreet gestas neque vitae
                                               auctor eros dolor luctus odio placerat magna cursus
                                            </p>
                                                        
                                            <!-- List -->
                                            <ul class="txt-list">
                                                        
                                                <li>Vitae auctor integer congue magna at pretium</li>

                                                <li>Integer congue magna at pretium purus pretium ligula rutrum and luctus risus eros dolor auctor 
                                                   ipsum blandit purus vehicula magna and luctus tempor quisque         
                                                </li>

                                                <li>Sagittis congue augue egestas volutpat egestas magna donec ociis et magnis ipsum porta justo 
                                                    integer velna purus ehicula magna luctus vel laoreet turpis 
                                                </li>

                                            </ul>       

                                        </div>
                                    </div>

                                </div>    <!-- END QUESTION #3 -->


                                <!-- QUESTION #4 -->
                                <div class="card wow fadeInUp" data-wow-delay="1s">

                                    <!-- Question -->
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h5 class="h5-sm indigo-color">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">          
                                                What is on-page search engine optimization?
                                            </a>
                                         </h5>
                                    </div>

                                    <!-- Answer -->
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                        
                                            <!-- Text -->
                                            <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit tristique justo
                                               ut aliquam. Aliquam vitae molestie nunc. Quisque sapien justo, aliquet non molestie sed purus, 
                                               venenatis nec. Aliquam eget lacinia elit. Vestibulum tincidunt tincidunt massa, et porttitor
                                            </p>   

                                        </div>
                                    </div>

                                </div>    <!-- END QUESTION #4 -->


                                <!-- QUESTION #5 -->
                                <div class="card wow fadeInUp" data-wow-delay="1.2s">

                                    <!-- Question -->
                                    <div class="card-header" role="tab" id="headingFive">
                                        <h5 class="h5-sm indigo-color">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">          
                                                How much do your monthly services cost?
                                            </a>
                                         </h5>
                                    </div>

                                    <!-- Answer -->
                                    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                        
                                            <!-- List -->
                                            <ul class="txt-list">
                                                        
                                                <li>Vitae auctor integer congue magna at pretium</li>

                                                <li>Integer congue magna at pretium purus pretium ligula rutrum and luctus risus eros dolor auctor 
                                                   ipsum blandit purus vehicula magna and luctus tempor quisque         
                                                </li>

                                                <li>Sagittis congue augue egestas volutpat egestas magna donec ociis et magnis ipsum porta justo 
                                                    integer velna purus ehicula magna luctus vel laoreet turpis 
                                                </li>

                                            </ul>  

                                        </div>
                                    </div>

                                </div>    <!-- END QUESTION #5 -->

                                                                            
                            </div>  <!-- END ACCORDION -->
                        </div>  <!-- End col-x -->  
                    </div>  <!-- END QUESTIONS HOLDER -->


                    <!-- MORE QUESTIONS BUTTON -->      
                    <div class="row">
                        <div class="col-md-12 text-center more-questions">
                            <h5>Still have a question? <a href="contacts.html" class="primary-color">Ask your question here</a></h5>
                        </div>
                    </div>


                </div>     <!-- End container -->       
            </section>  <!-- END FAQs-1 -->

            


            <!-- CONTENT-8
            ============================================= -->
            <section id="content-8" class="bg-lightgrey wide-60 content-section division">
                <div class="container">
                    <div class="row d-flex align-items-center">


                        <!-- TEXT BLOCK --> 
                        <div class="col-md-6 col-lg-5">
                            <div class="txt-block pc-25 mb-40 wow fadeInLeft" data-wow-delay="0.4s">

                                <!-- Title -->  
                                <h4 class="h4-xl indigo-color">We're working towards your business goals</h4>

                                <!-- Text -->
                                <p>An enim nullam tempor sapien gravida purus pretium donec undo ipsum porta justo integer and velna 
                                   vitae auctor integera congue magna at purus pretium ligula rutrum luctus ultrice sapien gravida donec
                                </p> 

                                <!-- List -->
                                <ul class="ico-list">   
                                    <li><i class="fas fa-check primary-color"></i> <span>Digital Competitive Analysis</span></li>
                                    <li><i class="fas fa-check primary-color"></i> <span>Search Engine Optimization (SEO)</span></li>
                                    <li><i class="fas fa-check primary-color"></i> <span>Strategy and Analytics Consulting</span></li>
                                </ul>

                            </div>
                        </div>  <!-- END TEXT BLOCK --> 


                        <!-- IMAGE BLOCK -->
                        <div class="col-md-6 col-lg-7">
                            <div class="img-block pl-25 mb-40 wow fadeInRight" data-wow-delay="0.6s">
                                <img class="img-fluid" src="images/image-10.png" alt="content-image">
                            </div>
                        </div>



                    </div>    <!-- End row -->  
                </div>     <!-- End container -->
            </section>  <!-- END CONTENT-8 -->




            <!-- BLOG-1
            ============================================= -->
            <section id="blog-1" class="wide-60 blog-section division">             
                <div class="container">


                    <!-- SECTION TITLE -->  
                    <div class="row">   
                        <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">    

                            <!-- Title  --> 
                            <h3 class="h3-lg indigo-color">Our Insights And Latest News</h3>    

                            <!-- Text -->   
                            <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
                               tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                            </p>
                                
                        </div>
                    </div>  <!-- END SECTION TITLE -->  


                    <!-- BLOG POSTS -->
                    <div class="row">


                        <!-- BLOG POST #1 -->
                        <div id="blog_post-1" class="col-md-6 col-lg-4">
                            <div class="blog-post wow fadeInUp" data-wow-delay="0.4s">
                        
                                <!-- BLOG POST IMAGE -->
                                <div class="blog-post-img">
                                    <img class="img-fluid" src="images/blog/post-1-img.jpg" alt="blog-post-image" />
                                </div>

                                <!-- BLOG POST TEXT -->
                                <div class="blog-post-txt">

                                    <!-- Post Tag -->
                                    <p class="post-read"><i class="far fa-clock"></i> - 12 min read</p>

                                    <!-- Post Link -->
                                    <h5 class="h5-md indigo-color">
                                        <a href="single-post.html">Quisque sapien justo, aliquet non molestie a purus venenatis</a>
                                    </h5>

                                    <!-- Text -->
                                    <p class="grey-color">Fringilla risus luctus mauris auctor purus euismod and pretium purus pretium...</p>

                                    <!-- Post Data -->
                                    <p class="post-data">by <a href="#">Sean McMarthy</a> - 24 minutes ago</p>  
                                    <p class="post-tag"><a href="#">#SocialMedia</a>, <a href="#">#Marketing</a></p>

                                </div>  <!-- END BLOG POST TEXT -->

                            </div>
                        </div>  <!-- END  BLOG POST #1 -->


                        <!-- BLOG POST #2 -->
                        <div id="blog_post-2" class="col-md-6 col-lg-4">
                            <div class="blog-post wow fadeInUp" data-wow-delay="0.6s">
                        
                                <!-- BLOG POST IMAGE -->
                                <div class="blog-post-img">
                                    <img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />
                                </div>

                                <!-- BLOG POST TEXT -->
                                <div class="blog-post-txt">

                                    <!-- Post Tag -->
                                    <p class="post-read"><i class="far fa-clock"></i> - 8 min read</p>

                                    <!-- Post Link -->
                                    <h5 class="h5-md indigo-color">
                                        <a href="single-post.html">Tempor sapien donec gravida ipsum a porta justo vitae</a>
                                    </h5>

                                    <!-- Text -->
                                    <p class="grey-color">Fringilla risus luctus mauris auctor purus euismod and pretium purus pretium...</p>

                                    <!-- Post Data -->
                                    <p class="post-data">by <a href="#">Ben Markton</a> - January 27, 2019</p>  
                                    <p class="post-tag"><a href="#">#Advice</a>, <a href="#">#LinkBuilding</a></p>

                                </div>  <!-- END BLOG POST TEXT -->

                            </div>
                        </div>  <!-- END  BLOG POST #2 -->


                        <!-- BLOG POST #3 -->
                        <div id="blog_post-3" class="col-md-6 col-lg-4">
                            <div class="blog-post wow fadeInUp" data-wow-delay="0.8s">
                        
                                <!-- BLOG POST IMAGE -->
                                <div class="blog-post-img">
                                    <img class="img-fluid" src="images/blog/post-3-img.jpg" alt="blog-post-image" />
                                </div>

                                <!-- BLOG POST TEXT -->
                                <div class="blog-post-txt">

                                    <!-- Post Tag -->
                                    <p class="post-read"><i class="far fa-clock"></i> - 21 min read</p>

                                    <!-- Post Link -->
                                    <h5 class="h5-md indigo-color">
                                        <a href="single-post.html">Dapibus libero quisque eu tristique neque blandit tristique</a>
                                    </h5>

                                    <!-- Text -->
                                    <p class="grey-color">Fringilla risus luctus mauris auctor purus euismod and pretium purus pretium...</p>

                                    <!-- Post Data -->
                                    <p class="post-data">by <a href="#">Caroline</a> - December 27, 2019</p>
                                    <p class="post-tag"><a href="#">#LocalSEO</a>, <a href="#">#Marketing</a>, <a href="#">#PPC</a></p> 

                                </div>  <!-- END BLOG POST TEXT -->

                            </div>
                        </div>  <!-- END  BLOG POST #3 -->


                    </div>  <!-- END BLOG POSTS -->


                </div>     <!-- End container -->       
            </section>  <!-- END BLOG-1 -->




            <!-- CALL TO ACTION-4
            ============================================= -->
            <section id="cta-4" class="bg-06 cta-section division">
                <div class="container white-color">
                    <div class="row d-flex align-items-center">
                    

                        <!-- CALL TO ACTION TEXT -->
                        <div class="col-lg-8">
                            <div class="cta-txt">

                                <!-- Title -->  
                                <h3 class="h3-xs">Improve your search ranking now!</h3>

                                <!-- Text -->
                                <p class="p-md">Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue 
                                   luctus dolor velna auctor congue tempus magna integer
                                </p>

                            </div>
                        </div>  <!-- END CALL TO ACTION TEXT -->


                        <!-- CALL TO ACTION BUTTON -->
                        <div class="col-lg-4">
                            <div class="cta-btn text-right">
                                <a href="pricing.html" class="btn btn-md btn-primary tra-white-hover">Get Started Now</a>
                            </div>
                        </div>  


                    </div>   <!-- End row -->
                </div>     <!-- End container -->   
            </section>  <!-- END CALL TO ACTION-4 -->




            <!-- FOOTER-2
            ============================================= -->
            <footer id="footer-2" class="pt-100 footer division">
                <div class="container">


                    <!-- FOOTER CONTENT -->
                    <div class="row">


                        <!-- FOOTER INFO -->
                        <div class="col-md-10 col-lg-4">
                            <div class="footer-info mb-40">

                                <!-- Footer Logo -->
                                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 364 x 90 pixels) -->
                                <img src="images/logo.png" width="182" height="45" alt="footer-logo">

                                <!-- Text -->   
                                <p>Aliquam orci a nullam tempor sapien gravida donec enim ipsum porta justo velna an auctor 
                                   undo congue magna laoreet augue sapien
                                </p>
                            
                            </div>  
                        </div>  


                        <!-- FOOTER PRODUCTS LINKS -->
                        <div class="col-md-3 col-lg-2 col-xl-2">
                            <div class="footer-links mb-40">
                            
                                <!-- Title -->
                                <h5 class="h5-sm indigo-color">Quick Links</h5>

                                <!-- Footer Links -->
                                <ul class="foo-links clearfix">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Case Studies</a></li>
                                    <li><a href="#">Lawyer SEO</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">From the Blog</a></li>                              
                                </ul>

                            </div>
                        </div>


                        <!-- FOOTER COMPANY LINKS -->
                        <div class="col-md-4 col-lg-3 col-xl-3">
                            <div class="footer-links mb-40">
                            
                                <!-- Title -->
                                <h5 class="h5-sm indigo-color">Featured Services</h5>

                                <!-- Footer Links -->
                                <ul class="clearfix">
                                    <li><a href="#">Local SEO</a></li>
                                    <li><a href="#">Social Media Marketing</a></li>
                                    <li><a href="#">Pay Per Click Management</a></li>
                                    <li><a href="#">Search Engine Optimization</a></li>
                                    <li><a href="#">Free SEO Analysis</a></li>              
                                </ul>

                            </div>
                        </div>


                        <!-- FOOTER NEWSLETTER FORM -->
                        <div class="col-md-5 col-lg-3 col-xl-3">
                            <div class="footer-form mb-20">

                                <!-- Title -->
                                <h5 class="h5-sm indigo-color">Follow the Best</h5>

                                <!-- Newsletter Form Input -->
                                <form class="newsletter-form">
                                            
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email Address" required id="s-email">                             
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn">
                                                <i class="far fa-arrow-alt-circle-right"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- Newsletter Form Notification -->       
                                    <label for="s-email" class="form-notification"></label>
                                                
                                </form>
                                                        
                            </div>
                        </div>  <!-- END FOOTER NEWSLETTER FORM -->


                    </div>    <!-- END FOOTER CONTENT -->

        
                    <!-- BOTTOM FOOTER -->
                    <div class="bottom-footer">
                        <div class="row">


                            <!-- FOOTER COPYRIGHT -->
                            <div class="col-lg-8">
                                <ul class="bottom-footer-list">
                                    <li><p>&copy; Copyright Metreex 2020</p></li>
                                    <li><p><a href="tel:123456789">508.746.9892</a></p></li>
                                    <li><p class="last-li"><a href="mailto:yourdomain@mail.com">hello@domain.com</a></p></li>
                                </ul>
                            </div>


                            <!-- FOOTER SOCIALS LINKS -->
                            <div class="col-lg-4 text-right">
                                <ul class="foo-socials text-center clearfix">

                                    <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li> 
                                    <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>           
                                                                                                                                            
                                    <!--
                                    <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li> 
                                    <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>                                   
                                    <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li> 
                                    <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>                               
                                    <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>                                     
                                    <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
                                    <li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
                                    <li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
                                    --> 

                                </ul>
                            </div>


                        </div>
                    </div>  <!-- END BOTTOM FOOTER -->


                </div>     <!-- End container -->                                       
            </footer>   <!-- END FOOTER-2 -->
            



        </div>  <!-- END PAGE CONTENT -->




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