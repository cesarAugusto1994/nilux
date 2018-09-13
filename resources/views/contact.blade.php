@extends('layout')

@section('content')

<section id="contact-main" class="contact-main section">
    <div class="container text-center">
        <h2 class="title">Entre em Contato Conosco</h2>
        <p class="intro"></p>

        <div class="row">
            <div class="item col-md-4 col-12">
                <div class="item-inner">
                    <div class="icon">
                        <!--<i class="fa fa-envelope"></i>-->
                        <span class="pe-icon pe-7s-mail-open-file"></span>
                    </div>
                    <div class="details">
                        <h4 class="title">Email:</h4>
                        <p><a href="mailto:contato@nilux.com.br">Contato - contato@nilux.com.br</a></p>
                        <p><a href="mailto:vendas@nilux.com.br">Vendas - vendas@nilux.com.br</a></p>
                        <p><a href="mailto:financeiro@nilux.com.br">Financeiro - financeiro@nilux.com.br</a></p>
                    </div><!--details-->
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-md-4 col-12">
                <div class="item-inner">
                    <div class="icon">
                        <!--<i class="fa fa-phone"></i>-->
                        <span class="pe-icon pe-7s-phone"></span>
                    </div>
                    <div class="details">
                        <h4 class="title">Nos Ligue:</h4>
                        <p class="phone">(47) 3121-9620 <br/> (47) 9966-10509</p>
                        <p class="day">Segunda à Sexta das 07h às 21h.</p>
                    </div><!--details-->
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-md-4 col-12 last">
                    <div class="item-inner">
                    <div class="icon">
                        <!--<i class="fa fa-map-marker"></i>-->
                        <span class="pe-icon pe-7s-map-2"></span>
                    </div>
                    <div class="details">
                        <h4 class="title">Nosso Endereço:</h4>
                        <p class="address">Rua João Eberte 672,<br /> - Comasa - Joinville</p>
                    </div><!--details-->
                </div><!--//item-inner-->
            </div><!--//item-->
        </div><!--//row-->
    </div><!--//container-->
</section><!--//contact-->
<section class="container contact-form-section">
    <h3 class="title text-center">Formulário de Contato</h3>
    <p class="intro text-center">

      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>

    <div class="row text-center">
        <div class="contact-form col-lg-6 col-12 ml-lg-auto mr-lg-auto">
            <form class="form" id="contact-form" method="post" action="#">
                <div class="form-group name">
                    <label class="sr-only" for="name">Nome</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Nome" required>
                </div><!--//form-group-->
                <div class="form-group email">
                    <label class="sr-only" for="email">Email</label>
                    <input id="email" type="email" class="form-control" placeholder="Email" required>
                </div><!--//form-group-->
                <div class="form-group telefone">
                    <label class="sr-only" for="telefone">Telefone</label>
                    <input id="telefone" name="telefone" type="text" class="form-control" placeholder="Telefone" required>
                </div>
                <div class="form-group message">
                    <label class="sr-only" for="message">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" class="form-control" rows="8" placeholder="Mensagem" required></textarea>
                </div><!--//form-group-->
                <button type="submit" class="btn btn-block btn-cta-primary">Enviar</button>
            </form><!--//form-->
        </div><!--//contact-form-->
    </div><!--//row-->
</section>

<section class="map-section">
    <h3 class="sr-only title">Google Map</h3>
    <div class="gmap-wrapper" id="map">
        <!--//You need to embed your own google map below-->
        <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79444.64391671501!2d-0.21428374128957384!3d51.51972634746694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876045108e9cad3%3A0x6514817fa6d57c9!2sThe+Web+Kitchen!5e0!3m2!1sen!2suk!4v1469624353093" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!--//gmap-wrapper-->
</section><!--//map-->

@endsection
