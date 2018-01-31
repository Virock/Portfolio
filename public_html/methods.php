<?php

session_start();
$name = $email = $message = "";
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $message = $_SESSION['message'];
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['message']);
    $error = true;
}

if (isset($_GET['success'])) {
    $success = true;
}
//$rootFolder = "/work/Dropbox/Portfolio/public_html";
$rootFolder = "";

/**
 * 
 * @param String $title The title of the document
 * @param String $keywords The keywords of the document
 */
function topOfPage($title, $keywords) {
    $rootFolder = $GLOBALS['rootFolder'];
    echo <<<EOF
    <!DOCTYPE html>
    <html lang = "en">
    <head>
        <title>$title</title>
        <!--meta-tags -->
        <!-- Favicon gotten from Icons8. https://icons8.com/icon/23883/resume All the icons you need guaranteed -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
        <meta name="description" content="This is Victor Ngozi Ahuwanya's portfolio">
        <meta name="author" content="Victor Ahuwanya">
        <meta name="keywords" content="$keywords" />
        <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
        <!-- //meta-tags -->
        <!-- Custom-Files -->
        <link rel="stylesheet" href="$rootFolder/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="$rootFolder/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
        <link href="$rootFolder/css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->	
        <link rel="stylesheet" href="$rootFolder/css/swipebox.css"> <!-- For-Gallery-Swipebox-CSS -->
        <!-- //Custom-Files -->
        <!-- Web-Fonts -->
        <link href="//fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
        <!-- //Web-Fonts -->
    </head>
    <body>
EOF;
}

/**
 * style="background: url($imageURL) no-repeat 0px 0px;"
 * @param args $args Includes the title of the header, the background image url and an optional boolean to indicate that this is the homepage
 */
function pageHeader(...$args) {
    $rootFolder = $GLOBALS['rootFolder'];
    $title = $args[0];
    $introduction = "";
    $imageURL = $args[1];
    if (isset($args[2]) && $args[2]) {
        $introduction = <<<EOF
                <div class="banner-info-w3l">
                    <!--<h3>Lorem ipsum</h3>--><br>
                    <h2>Hi, I am Victor Ahuwanya</h2>
                    <h4><a class="scroll" href="#about">About Me</a></h4>
                </div>
EOF;
    }
    echo <<<EOF
    <!-- Header -->
        <div class="banner-agile" style="background: url($imageURL) no-repeat 0px 0px; background-size: cover;">
            <div class="logo-w3layouts">
                <h1><a href="">$title</a></h1>
            </div>	
                $introduction;
            </div>
        </div>
EOF;
}

/**
 * 
 * @param arguments $args Can be empty for default case but can take an array 
 * of 2 image links, and another array filled with features. Each array is an array 
 * with two elements. The first is the title and the second is the feature
 */
function about(...$args) {
    $head = $features = "";
    if (count($args) == 0) {
        $head = "<h3 class='w3l_head'>About Me</h3>";
        $features = <<<EOF
                <div class="w3ls-agile-left-info">
                            <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="icon-w3l">
                                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></i>
                                </div>
                                <div class="text-w3l">
                                    <h4>WEB DEVELOPER</h4>
                                    <p>I'm extremely good at building dynamic websites with PHP, JSP, Javascript and MySQL.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="w3ls-agile-left-info">
                            <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="icon-w3l">
                                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span></i>
                                </div>							
                                <div class="text-w3l">
                                    <h4>Front-end designer</h4>
                                    <p>While this is not where my strength lies, i have great command of HTML, CSS and the bootstrap framework.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="w3ls-agile-left-info">
                            <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="icon-w3l">
                                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></i>
                                </div>
                                <div class="text-w3l">
                                    <h4>Desktop development</h4>
                                    <p>I can develop desktop applications with C++, C#, Java and the electron framework for quick cross platform development.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="w3ls-agile-left-info">
                            <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="icon-w3l">
                                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></i>
                                </div>
                                <div class="text-w3l">
                                    <h4>Mobile development</h4>
                                    <p>I'm exceptional at android application development. I'm not interested in making video games though.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="w3ls-agile-left-info">
                            <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="icon-w3l">
                                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></i>
                                </div>
                                <div class="text-w3l">
                                    <h4>Microcontroller programming</h4>
                                    <p>I'm an engineer, so i have some knowledge of how electronics work. This gives my arduino and uc projects a great edge in performance and simplicity.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
EOF;
    }
    $image = <<<EOF
            <div class="col-md-5 w3ls-ab-right">
                <div class="agile-about-right-img">
                    <img src="images/ab.jpg" alt="">
                </div>
            </div>
EOF;
    if (count($args) > 0) {
        $image1 = $args[0][0];
        $image2 = $args[0][1];
        $image = <<<EOF
            <div class="col-md-5 w3ls-ab-right">
                <div class="col-sm-6 col-md-12 marginIfBig">
                    <img src="$image1" alt="" width='70%'>
                </div>
                <div class="col-sm-6 col-md-12">
                    <img src="$image2" alt="" width='70%'>
                </div>
            </div>
EOF;
        foreach ($args[1] as $featureArray) {
            $title = $featureArray[0];
            $feature = $featureArray[1];
            $features .= <<<EOF
                    <div class="w3ls-agile-left-info">
                            <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="icon-w3l">
                                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></i>
                                </div>
                                <div class="text-w3l">
                                    <h4>$title</h4>
                                    <p>$feature</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
EOF;
        }
    }
    echo <<<EOF
    <div class="about" id="about">
            <div class="container">
                $head
                <div class="w3l-grids-about">
                    $image
                    <div class="col-md-7 w3ls-agile-left">
                        $features
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
EOF;
}

/**
 * 
 * @param arguments $args If there is no argument, show all nav links. If there
 * is an argument, show only the home button
 */
function navLinks(...$args) {
    $nav = "";
    $rootFolder = $GLOBALS['rootFolder'];
    if (count($args) > 0) {
        $nav = <<<EOF
                    <li><a class="scroll" href="#about"><span data-hover="About">About</span></a></li>
                    <li><a class="scroll" href="#skills"><span data-hover="Skills">Skills</span></a></li>
                    <li><a class="scroll" href="#experience"><span data-hover="Experience">Experience</span></a></li>
                    <li><a class="scroll" href="#portfolio"><span data-hover="Projects">Projects</span></a></li>
                    <li><a class="scroll" href="#contact"><span data-hover="Contact">Contact</span></a></li>
EOF;
    }
    echo <<<EOF
    <div class="nav-agile">
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                    <li><a class="scroll2" href="$rootFolder/"><span data-hover="Home">Home</span></a></li>
                    $nav
                </ul>
                <div class="clearfix"></div>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix"></div>
        </nav>
    </div>
</div>
EOF;
}
