<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>YFPC</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/ypfc-logo-21transitions.png" type="image/gif" />
    <!-- Slider CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index"><img src="images/ypfc-logo-21transitions.png" width="70" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-4 col-sm-6 ham">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"> <a href="/">Home</a> </li>
                                        <li class="{{ (request()->is('/about')) ? 'active' : '' }}"> <a href="/about">about</a> </li>
                                        <li class="{{ (request()->is('/services')) ? 'active' : '' }}"> <a href="/services"> Services</a> </li>
                                        <li class="{{ (request()->is('/event')) ? 'active' : '' }}"> <a href="/event">Event</a> </li>
                                        <li class="{{ (request()->is('/footer')) ? 'active' : '' }}"> <a href="#footer_with_contact">Contact</a> </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search dropdown">
                            <button class="form-control dropbtn" type="text">Donate
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                            
                            {{-- <button><img src="images/search_icon.png"></button> --}}
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>

    <div>
        @yield('content')
</div>


       <!--  footer -->
       <footer id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li><img src="icon/1.png" alt="icon" />100, Penn Dr, Unit 6, North York, ON, M9L 2A9, Canada.</li>
                                <li><img src="icon/2.png" alt="icon" />+1 514 627 9415, +1 647 274 1022</li>
                                <li><img src="icon/3.png" alt="icon" />admin@yfpc.ca</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><a href="https://web.facebook.com/Youth-for-Purpose-Canada-101954948481259"><img src="icon/fb.png" alt="icon" /></a></li>
                                <li><a href="https://twitter.com/yfpcanada"><img src="icon/tw.png" alt="icon" /></a></li>
                                <li><img src="icon/lin(2).png" alt="icon" /></li>
                                <li><a href="https://instagram.com/yfpcanada"><img src="icon/instagram.png" alt="icon" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 width">
                        <div class="address">
                            <h3>Partners</h3>
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <figure><img src="images/partner 1.jpg" /></figure>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                    <figure><img src="images/partner2.jpg" /></figure>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                    <figure><img src="images/partner3.jpg" /></figure>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <figure><img src="images/atica.png" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="copyright">
                <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
            </div> --}}
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="./assets/js/main.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>