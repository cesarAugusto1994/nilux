<!DOCTYPE html>
<html lang="en">
<head>
    <title>Responsive website template for startups</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ asset('plugins/font-awesome/js/fontawesome-all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/flexslider/flexslider.css') }}">
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme-1.css') }}">
</head>

<body class="home-page">

    <!-- * Facebook Like button script starts -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- * Facebook Like button script ends -->

    <div class="wrapper">
        <!-- ******HEADER****** -->
        <header id="header" class="header">
            <div class="container">
                <h1 class="logo">
                    <a href="{{route('home')}}">
                        <span class="logo-title">Nilux Tecnologia</span>
                    </a>
                </h1><!--//logo-->
                <nav class="main-nav navbar navbar-expand-md navbar-dark" role="navigation">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item"><a class="nav-link" href="{{route('home')}}">Inicio</a></li>
                            <!--
                            <li class="nav-item"><a class="nav-link" href="tour.html">Tour</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                            -->
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Empresa</a></li>

                            <!--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Blog <i class="fas fa-angle-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="blog.html">Blog Home</a>
                                    <a class="dropdown-item" href="blog-single.html">Single Blog Post</a>
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="email-templates/tempo-email-color-1.html">Email Template (10 Colour Options)</a>
                                </div>
                            </li>
                          -->
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contato</a></li>
                            <li class="nav-item"><a class="nav-link login-trigger" href="{{route('login')}}">Log in</a></li>
                            <!--
                            <li class="nav-item"><a class="nav-link login-trigger" data-toggle="modal" data-target="#login-modal">Log in</a></li>
                            <li class="nav-item nav-item-cta last"><a class="nav-link btn btn-cta btn-cta-primary" data-toggle="modal" data-target="#signup-modal" >Get Started</a></li>
                          -->
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->
            </div><!--//container-->
        </header><!--//header-->

        @yield('content')



    </div><!--//wrapper-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-lg-5 col-md-7 col-12 about">
                        <div class="footer-col-inner">
                            <h3 class="title">Sobre</h3>
                            <p>A Nilux Tecnologia é uma empresa que atua na área de assistência técnica de informática nossa meta é de forma criativa,
                            competitiva e rentável, com soluções que garantam tranqüilidade e satisfação aos nossos clientes.</p>
                            <p><a class="more" href="{{route('about')}}">Saber mais... <i class="fas fa-long-arrow-alt-right"></i></a></p>

                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="footer-col col-lg-3 col-md-4 col-12 mr-lg-auto links">
                        <div class="footer-col-inner">
                            <h3 class="title">Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fas fa-caret-right"></i>Knowledge Base</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Jobs</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Press</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Terms of services</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Privacy Policy</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="footer-col col-lg-3 col-12 contact">
                        <div class="footer-col-inner">
                            <h3 class="title">Entre em Contato</h3>
                            <div class="row">
                                <p class="tel col-lg-12 col-md-4 col-12"><i class="fas fa-phone"></i>0800 123 4567</p>
                                <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-envelope"></i><a href="#">support@website.com</a></p>
                                <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-comment"></i><a href="#">Live Chat</a></p>
                            </div>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-12">Nilux Tecnologia, Copyright, site desenvolvido por  <a href="#" target="_blank">César Augusto</a></small>
                    <div class="social-container col-md-6 col-12">
                        <ul class="social list-inline">
	                        <li class="last list-inline-item"><a href="#" ><i class="fab fa-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="#" ><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#" ><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" ><i class="fab fa-twitter"></i></a></li>

                        </ul><!--//social-->
                    </div><!--//social-container-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->

    <!-- Login Modal -->
    <div class="modal modal-login" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="loginModalLabel" class="modal-title justify-content-center">Log in to your account</h4>
                </div>
                <div class="modal-body">
                    <div class="social-login text-center">
                        <ul class="list-unstyled social-login">
                            <li><button class="twitter-btn btn" type="button"><i class="fab fa-twitter"></i>Log in with Twitter</button></li>
                            <li><button class="facebook-btn btn" type="button"><i class="fab fa-facebook-f"></i>Log in with Facebook</button></li>
                            <li><button class="google-btn btn" type="button"><i class="fab fa-google-plus-g"></i>Log in with Google</button></li>
                        </ul>
                    </div>
                    <div class="divider"><span>Or</span></div>
                    <div class="login-form-container">
                        <form class="login-form" method="post" action="{{ url(config('adminlte.login_url', 'login')) }}">
                            {!! csrf_field() !!}
                            <div class="form-group email">
	                            <i class="fas fa-envelope"></i>
                                <label class="sr-only" for="login-email">Your email</label>
                                <input id="login-email" name="login-email" type="email" class="form-control login-email" placeholder="Your email">
                            </div><!--//form-group-->
                            <div class="form-group password">
	                            <i class="fas fa-lock"></i>
                                <label class="sr-only" for="login-password">Password</label>
                                <input id="login-password" name="login-password" type="password" class="form-control login-password" placeholder="Password">
                                <p class="forgot-password">
                                    <a href="#" id="resetpass-link" data-toggle="modal" data-target="#resetpass-modal">Forgot password?</a>
                                </p>
                            </div><!--//form-group-->
                            <button type="submit" class="btn btn-block btn-cta-primary">Log in</button>
                            <div class="checkbox remember">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div><!--//checkbox-->
                        </form>
                    </div><!--//login-form-container-->
                </div><!--//modal-body-->
                <div class="modal-footer">
                    <p>New to Tempo? <a class="signup-link" id="signup-link" href="#">Sign up now</a></p>
                </div><!--//modal-footer-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->

    <!-- Signup Modal -->
    <div class="modal modal-signup" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="signupModalLabel" class="modal-title text-center">New to Tempo? Sign up now.</h4>

                </div>
                <div class="modal-body">
                    <p class="intro text-center">It only takes 3 minutes!</p>
                    <div class="social-login text-center">
                        <ul class="list-unstyled social-login">
                            <li><button class="twitter-btn btn" type="button"><i class="fab fa-twitter"></i>Sign up with Twitter</button></li>
                            <li><button class="facebook-btn btn" type="button"><i class="fab fa-facebook-f"></i>Sign up with Facebook</button></li>
                            <li><button class="google-btn btn" type="button"><i class="fab fa-google-plus-g"></i>Sign up with Google</button></li>
                        </ul>
                        <p class="note">Don't worry, we won't post anything without your permission.</p>
                    </div>
                    <div class="divider"><span>Or</span></div>
                    <div class="login-form-container">
                        <form method="post" action="{{ url(config('adminlte.register_url', 'register')) }}" class="login-form">
                            {!! csrf_field() !!}
                            <div class="form-group email">
	                            <i class="fas fa-envelope"></i>
                                <label class="sr-only" for="signup-email">Your email</label>
                                <input id="signup-email" name="signup-email" name="email" type="email" class="form-control login-email" placeholder="Your email">
                            </div><!--//form-group-->
                            <div class="form-group password">
	                            <i class="fas fa-lock"></i>
                                <label class="sr-only" for="signup-password">Your password</label>
                                <input id="signup-password" name="signup-password" name="password" type="password" class="form-control login-password" placeholder="Password">
                            </div><!--//form-group-->
                            <button type="submit" class="btn btn-block btn-cta-primary">Sign up</button>
                            <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
                        </form>
                    </div><!--//login-form-container-->
                </div><!--//modal-body-->
                <div class="modal-footer">
                    <p>Already have an account? <a class="login-link" id="login-link" href="#">Log in</a></p>
                </div><!--//modal-footer-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->

    <!-- Reset Password Modal -->
    <div class="modal modal-resetpass" id="resetpass-modal" tabindex="-1" role="dialog" aria-labelledby="resetpassModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="resetpassModalLabel" class="modal-title text-center">Password Reset</h4>
                </div>
                <div class="modal-body">
                    <div class="resetpass-form-container">
                        <p class="intro">Please enter your email address below and we'll email you a link to a page where you can easily create a new password.</p>
                        <form class="resetpass-form">
                            <div class="form-group email">
	                            <i class="fas fa-envelope"></i>
                                <label class="sr-only" for="reg-email">Your email</label>
                                <input id="reg-email" name="reg-email" type="email" class="form-control login-email" placeholder="Your email">
                            </div><!--//form-group-->
                            <button type="submit" class="btn btn-block btn-cta-primary">Reset Password</button>
                        </form>
                    </div><!--//login-form-container-->
                </div><!--//modal-body-->
                <div class="modal-footer">
                    <p>I want to <a class="back-to-login-link" id="back-to-login-link" href="#">return to login</a></p>
                </div><!--//modal-footer-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->

    <!-- *****CONFIGURE STYLE****** -->
    <div class="config-wrapper d-none d-md-inline-block">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fas fa-cog mx-auto"></i></a>
            <div id="config-panel" class="config-panel">
                <h5>Choose Colour</h5>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="list-inline-item theme-1 active" ><a data-style="{{ asset('css/theme-1.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-2"><a data-style="{{ asset('css/theme-2.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-3"><a data-style="{{ asset('css/theme-3.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-4"><a data-style="{{ asset('css/theme-4.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-5"><a data-style="{{ asset('css/theme-5.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-6"><a data-style="{{ asset('css/theme-6.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-7"><a data-style="{{ asset('css/theme-7.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-8"><a data-style="{{ asset('css/theme-8.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-9"><a data-style="{{ asset('css/theme-9.css') }}" href="#"></a></li>
                    <li class="list-inline-item theme-10"><a data-style="{{ asset('css/theme-10.css') }}" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fas fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('plugins/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-inview/jquery.inview.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/isMobile/isMobile.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flexslider/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <!-- Modal Video -->
    <script type="text/javascript" src="{{ asset('js/modal-video.js') }}"></script>

    <!--[if !IE]>-->
    <script type="text/javascript" src="{{ asset('js/animations.js') }}"></script>
    <!--<![endif]-->

    <!-- Theme Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script type="text/javascript" src="{{ asset('js/demo/theme-switcher.js') }}"></script>
</body>
</html>
