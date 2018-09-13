@extends('layout')

@section('content')
<!-- ******PROMO****** -->
<section id="promo" class="promo section">
    <div class="container intro">
        <h2 class="title">Nilux Tecnologia</h2>
        <p class="summary">Tenha o seu site de forma rápida e fácil</p>
        <a class="btn btn-cta btn-cta-secondary" href="#">Saber mais...</a>
    </div><!--//intro-->

    <div class="fixed-container">
        <div class="signup">
            <div class="container text-center">
                <h3 class="title">Saiba mais</h3>
                <p class="summary">Entre em Contato.</p>
                <form class="signup-form">
                    <div class="form-group">
                        <label class="sr-only" for="semail1">Seu Email</label>
                        <input type="email" id="semail1" name="semail1" class="form-control" placeholder="Informe o seu email">
                    </div>
                    <button type="submit" class="btn btn-cta btn-cta-primary">Enviar</button>
                </form><!--//signup-form-->
            </div><!--//contianer-->
        </div><!--//signup-->
        <div class="social text-center">
            <div class="container">
                <span class="line">Love Tempo? Spread the word:</span>

                <!--//twitter tweet button code starts -->
                <div class="twitter-tweet">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_media" data-hashtags="bootstrap">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <!--//twitter tweet button code ends -->

                <!--//facebook like button code starts-->
                <div class="fb-like" data-href="http://themes.3rdwavemedia.com/tempo/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" ></div>
                <!--//facebook like button code ends-->
            </div>
        </div><!--//social-->
    </div>
    <div class="bg-slider-wrapper">
        <div id="bg-slider" class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>
                <li class="slide slide-2"></li>
                <li class="slide slide-3"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->
</section><!--//promo-->

<!-- ******PRESS****** -->
<div class="press">
    <div class="container text-center">
        <div class="row">
            <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="http://nilux.com.br/area/img/clientes/772f784a8bc71ac4053235a2d79d5d94.png" alt=""></a></div>
            <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="http://nilux.com.br/area/img/clientes/63981a9a75c4183a816b5d2c4b4fbd1d.png" alt=""></a></div>
            <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="http://nilux.com.br/area/img/clientes/22571b94d790770835654416903a0491.png" alt=""></a></div>
            <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="http://nilux.com.br/area/img/clientes/19b3f8889d65d11ba3b4a7f4ff6b7846.png" alt=""></a></div>
            <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="http://nilux.com.br/area/img/clientes/8e7e928b2b614b2c6d3c4355f9692a36.png" alt=""></a></div>
            <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="http://nilux.com.br/area/img/clientes/cf2c15c93514bea44b356409423d920c.png" alt=""></a></div>
        </div><!--row-->
    </div>
</div><!--//press-->

<!-- ******WHY****** -->
<section id="why" class="why section">
    <div class="container">
        <h2 class="title text-center">Por que Nilux Tecnologia?</h2>
        <p class="intro text-center">Algumas de nossas caracteristicas.</p>
        <div class="row">
            <div class="benefits col-lg-7 col-md-6 col-12">
                    <div class="item">
                        <div class="icon text-center">
                            <span class="pe-icon pe-7s-rocket"></span>
                        </div><!--//icon-->
                        <div class="content">
                            <h3 class="title">Brings you consectetuer adipiscing elit</h3>
                            <p class="desc">State a benefit of your product/services here. You can change the icon on the left to any of the 600+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. Maecenas ultrices pellentesque nisi, eu volutpat nunc. </p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item">
                        <div class="icon text-center">
                            <span class="pe-icon pe-7s-piggy"></span>
                        </div><!--//icon-->
                        <div class="content">
                            <h3 class="title">No more velit tristique condimentum</h3>
                            <p class="desc">State a benefit of your product/services here. You can change the icon on the left to any of the 600+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. Maecenas ultrices pellentesque nisi, eu volutpat nunc. </p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item">
                        <div class="icon text-center">
                            <span class="pe-icon pe-7s-users"></span>
                        </div><!--//icon-->
                        <div class="content">
                            <h3 class="title">Connect lectus ultricies dolor vulputate</h3>
                            <p class="desc">State a benefit of your product/services here. You can change the icon on the left to any of the 600+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. Maecenas ultrices pellentesque nisi, eu volutpat nunc. </p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item">
                        <div class="icon text-center">
                            <span class="pe-icon pe-7s-bicycle"></span>
                        </div><!--//icon-->
                        <div class="content">
                            <h3 class="title">Liberate vulputate eleifend tellus</h3>
                            <p class="desc">State a benefit of your product/services here. You can change the icon on the left to any of the 600+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. Maecenas ultrices pellentesque nisi, eu volutpat nunc. Cras pharetra turpis pharetra iaculis euismod.</p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item last">
                        <div class="icon text-center">
                            <span class="pe-icon pe-7s-joy"></span>
                        </div><!--//icon-->
                        <div class="content">
                            <h3 class="title">Helps laoreet auctor libero</h3>
                            <p class="desc">State a benefit of your product/services here. You can change the icon on the left to any of the 600+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. Maecenas ultrices pellentesque nisi, eu volutpat nunc. Pellentesque fermentum purus nec mi vulputate interdum. Ut eu vulputate mi.</p>
                        </div><!--//content-->
                    </div><!--//item-->
                <div class="clearfix"></div>
                <div class="text-center">
                    <a class="btn btn-cta btn-cta-secondary" href="tour.html" >Learn how it works</a>
                </div>
            </div>
            <div class="testimonials col-lg-4 col-md-5 col-12 ml-md-auto mr-md-auto">
                <div class="item">
                    <div class="quote-box">
                        <blockquote class="quote">Love it! vehicula consequat cursus. Morbi bibendum cursus urna, quis rhoncus arcu. Curabitur vel sollicitudin leo.
                        </blockquote><!--//quote-->
                        <p class="details">
                            <span class="name">Steven Turner</span>
                            <span class="title">Bristol, UK</span>
                        </p>
                        <i class="fas fa-quote-right"></i>
                    </div><!--//quote-box-->
                    <div class="people text-center">
                        <img class="img-rounded user-pic" src="assets/images/people/people-1.png" alt="">
                    </div><!--//people-->
                </div><!--//item-->
                <div class="item">
                    <div class="quote-box">
                        <blockquote class="quote">Great vehicula consequat cursus. Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim!

                        </blockquote><!--//quote-->
                        <p class="details">
                            <span class="name">Michelle Cheung</span>
                            <span class="title">San Francisco, US</span>
                        </p>
                        <i class="fas fa-quote-right"></i>
                    </div><!--//quote-box-->
                    <div class="people text-center">
                        <img class="img-rounded user-pic" src="assets/images/people/people-2.png" alt="">
                    </div><!--//people-->
                </div><!--//item-->
                <div class="item last">
                    <div class="quote-box">
                        <blockquote class="quote">Excellent Vivamus sit amet tortor id orci interdum tempor sed sit amet ante, pretium quis, sem. Nulla consequat massa quis enim!
                        </blockquote><!--//quote-->
                        <p class="details">
                            <span class="name">James Lee</span>
                            <span class="title">London, UK</span>
                        </p>
                        <i class="fas fa-quote-right"></i>
                    </div><!--//quote-box-->
                    <div class="people text-center">
                        <img class="img-rounded user-pic" src="assets/images/people/people-3.png" alt="">
                    </div><!--//people-->
                </div><!--//item-->
            </div>
        </div><!--//row-->
    </div><!--//container-->
</section><!--//why-->

<!-- ******VIDEO****** -->
<section id="video" class="video section">
    <div class="container">
        <h2 class="title">Faça o seu negócio crescer, ligue agora!</h2>
        <p class="summary"></p>
        <div class="control text-center">
            <button type="button" id="play-trigger" class="play-trigger" data-toggle="modal" data-target="#tour-video"><span class="icon-holder"><i class="fas fa-play"></i></span></button>
            <p>Assistir Video</p>

            <div class="modal modal-video" id="tour-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 id="videoModalLabel" class="modal-title">Video Tutorial</h4>
                        </div>
                        <div class="modal-body">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <iframe id="vimeo-video" class="embed-responsive-item" src="https://player.vimeo.com/video/32424882?" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div><!--//video-container-->
                        </div><!--//modal-body-->
                    </div><!--//modal-content-->
                </div><!--//modal-dialog-->
            </div><!--//modal-->
        </div><!--//control-->
    </div><!--//container-->
</section><!--//video-->

<!-- ******SIGNUP****** -->
<section id="signup" class="signup">
    <div class="container text-center">
      <!--
        <h2 class="title">Ready to kickstart your business with Tempo?</h2>
        <p class="summary">Sign up to try Tempo FREE for 30 days! No credit card needed.</p>
        <form class="signup-form" method="post" action="#">
            <div class="form-group">
                <label class="sr-only" for="semail2">Your email</label>
                <input type="email" id="semail2" name="semail2" class="form-control" placeholder="Enter your email address" required>
            </div>
            <button type="submit" class="btn btn-cta btn-cta-primary">SIGN UP</button>
        </form>
      -->
    </div>
</section><!--//signup-->

@endsection
