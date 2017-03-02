<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description or 'Aberdeen PHP User Group aims to provide a regular meeting for developers in Aberdeen and the surrounding areas to get together and discuss just about anything in and around the PHP Community.' }}">
    <meta name="author" content="Aberdeen PHP">
    <meta name="keywords" content="{{ $keywords or 'aberdeen,php,web development,linux,apache,css,html,javascript,lamp,docker,laravel,scotland,grampian,php user group,php ug'}}">
    <meta name="generator" content="Some text editor" />
    <title>{{ $title or 'Aberdeen PHP' }} - Aberdeen PHP User Group</title>
    <link href="images/icons/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/icons/apple-touch-icon-57-precomposed.png"> 	
    <!-- Bootstrap Core CSS -->
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Theme CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                <a class="navbar-brand" href="/"><img src="images/aberdeenphp_logo_vsmall.png" alt="AberdeenPHP"/> AberdeenPHP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About Us</a>
                    </li>
                    <li>
                        <a href="/events">Events</a>
                    </li>                    
                    <li>
                        <a href="/give-a-talk">Give a talk</a>
                    </li>                    
                    <li>
                        <a href="/sponsorship">Sponsorship</a>
                    </li>
                    <li>
                        <a href="https://news.aberdeenphp.co.uk" target="_blank">News <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </li>                      
                    <li>
                        <a href="/community">Community</a>
                    </li>                                       
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ $image or $randomBackgroundImage }})">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $title }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $tagline or "The monthly meetup for Aberdeen's Developers" }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

  
     <hr>

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
                        <a href="/code-of-conduct">Code of Conduct</a>
                        |
                        <a href="/privacy">Privacy</a>
                        |
                        <a href="/terms">Website T's &amp; C's</a>
                        |
                        <a href="/cookies">Cookies</a>
                    </p>
                    <p class="copyright text-muted">Copyright &copy; Aberdeen PHP {{ date("Y") }} | Powered by PHP6</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Theme JavaScript -->
    <script src="{{ mix('js/theme.js') }}"></script>
    
    @stack('javascriptfrompages')

    @if(App::environment('production'))
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-61042224-1', 'auto');
          ga('send', 'pageview');

        </script>
    @endif
    

</body>

</html>