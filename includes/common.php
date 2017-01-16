<?php
/*
* this is a common file for php functions
* 
* part of AberdeenPHP website
* see https://github.com/AberdeenPHP/site
*/


/*
* This prints a html header
* 
* @param string $title          Title used in the head->title tag and also laid over the header image. Optional.
* @param string $tagline        Tagline laid over the header image, below the title. Optional.
* @param string $image          Image used for the header, a path like "images/mypic.jpg", the images should be pretty wide, like 1600x400.  If not set, a random image is used. Optional. 
* @param string $description    Description used in the head->description tag. Optional.
* @param string $keywords       Keywords used in the head->keywords tag. Optional.
*/
function print_header ( $title="", $tagline="", $image="", $description = "", $keywords = "") {

    # set defaults
    if (!$title) {
        $title = "Aberdeen PHP - The monthly meetup for Aberdeen&#039;s Developers";
    }    
    
    
    if (!$tagline) {
        $tagline = "";
    } 
    
    if (!$image) {
        # if there is no image set, get one from the radnom directory
        $dir = "images/random_header_images/";
        $images = glob($dir . '*.{jpg,jpeg,png}', GLOB_BRACE);
        shuffle($images);
        $image = array_pop($images);
    }     
           
    if (!$description) {
        $description = "Aberdeen PHP User Group aims to provide a regular meeting for developers in Aberdeen and the surrounding areas to get together and discuss just about anything in and around the PHP Community.";
    }
    
    if (!$keywords) {
        $keywords = "aberdeen,php,web development,linux,apache,css,html,javascript,lamp,docker,laravel,scotland,grampian,php user group,php ug";
    }    

    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="' . $description . '">
    <meta name="author" content="Aberdeen PHP">
    <meta name="keywords" content="' . $keywords . '">
    <meta name="generator" content="Some text editor" />
    <title>' . $title . ' - Aberdeen PHP User Group</title>
    <link href="images/icons/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/icons/apple-touch-icon-57-precomposed.png"> 	
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/ab_php.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/aberdeenphp_logo_vsmall.png" alt="AberdeenPHP"/> AberdeenPHP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="about_us.php">About Us</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>                    
                    <li>
                        <a href="give-a-talk.php">Give a talk</a>
                    </li>                    
                    <li>
                        <a href="sponsorship.php">Sponsorship</a>
                    </li>
                    <li>
                        <a href="https://news.aberdeenphp.co.uk" target="_blank">News</a>
                    </li>                      
                    <li>
                        <a href="community.php">Community</a>
                    </li>                                       
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url(' . $image . ')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>' . $title . '</h1>
                        <hr class="small">
                        <span class="subheading">' . $tagline . '</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    ';
}






/*
* this prints a html footer
* 
* 
*/
function print_footer() {
    echo '
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://slack.scotlandphp.co.uk/" title="ScotlandPHP Slack Channel" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-slack fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>                    
                        <li>
                            <a href="https://twitter.com/aberdeenphp" title="AberdeenPHP on Twitter" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/aberdeenpug/"  title="AberdeenPHP on Facebook" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://us10.campaign-archive2.com/home/?u=20b87746549994300f14bd083&id=509b586b54" title="AberdeenPHP on MailChimp" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>                        
                        <li>
                            <a href="https://github.com/AberdeenPHP" title="AberdeenPHP on GitHub" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.scotlandphp.co.uk/" title="ScotlandPHP" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>                        
                    </ul>
                    <p class="footerlinks">
                        <a href="code-of-conduct.php">Code of conduct</a>
                        |
                        <a href="privacy.php">Privacy</a>
                        |
                        <a href="terms.php">Terms and conditions</a>
                    </p>
                    <p class="copyright text-muted">Copyright &copy; Aberdeen PHP ' . date("Y") . ' | Powered by PHP6</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/ab_php.js"></script>

</body>

</html>
    ';
}



?>
