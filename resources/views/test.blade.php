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
<div id="hero-slider">
    <div id="logo" class="mask">
        <span class="logo-text masked">Ghost Dev</span>
    </div>
    <div id="slideshow">
        <div id="slides-main" class="slides">
            <div class="slide" data-index="0">
                <div class="abs-mask">
                    <div class="slide-image" style="background-image: url(./assets/img/slide-1.jpg)"></div>
                </div>
            </div>
            <div class="slide" data-index="1">
                <div class="abs-mask">
                    <div class="slide-image" style="background-image: url(./assets/img/slide-2.jpg)"></div>
                </div>
            </div>
            <div class="slide" data-index="2">
                <div class="abs-mask">
                    <div class="slide-image" style="background-image: url(./assets/img/slide-3.jpg)"></div>
                </div>
            </div>
            <div class="slide" data-index="3">
                <div class="abs-mask">
                    <div class="slide-image" style="background-image: url(./assets/img/slide-4.jpg)"></div>
                </div>
            </div>
        </div>
        <div id="slides-aux" class="slides mask">
            <h2 class="slide-title slide" data-index="0"><a href="#">#64 Paradigm</a></h2>
            <h2 class="slide-title slide" data-index="1"><a href="#">Industrial Works</a></h2>
            <h2 class="slide-title slide" data-index="2"><a href="#">Future Ghosts</a></h2>
            <h2 class="slide-title slide" data-index="3"><a href="#">The License</a></h2>
        </div>
    </div>
    <div id="info">
        <div class="slider-title-wrapper">
            <span class="line"></span>
            <h1 class="slider-title">
                <span>YFPC</span>
            </h1>
        </div>
        <div class="about">
            <p>
               Road Map to success is a monthly event that takes place every last sunday of the month
            </p>
        </div>
    </div>
    <nav id="slider-nav">
        <span class="current">01</span>
        <span class="sep"></span>
        <span class="total">04</span>
    </nav>
</div>
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