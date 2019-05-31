@extends('site._layouts.master')
@section('title', '| Contato')

@section('content')
    <!-- start: breadcrumb area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('site.home')}}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contato</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <!-- start: google maps area -->
    <div class="map-area mt-30">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                allowfullscreen></iframe>
    </div>
    <!-- end: google maps area -->

    <!-- start: contact area -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content-area">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="contact-content contact-information">
                                    <h4>Contato</h4>
                                    <p>contato@lpjj.com.br</p>
                                    <p>lpjjoficial@gmail.com</p>
                                    <p>+55 91 8029-6770</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="contact-content contact-information">
                                    <h4>Endereço</h4>
                                    <p></p>
                                    <p>Belém, PA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: contact area -->

    <!-- start: contact form area -->
    <div class="contact-form section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Deixe uma Mensagem</h2>
                        <p>Seu endereço de e-mail não será publicado. Campos obrigatórios são marcados.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-name">Nome Completo*:</label>
                                        <input type="text" class="form-control" id="contact-name"
                                               placeholder="Informe seu nome completo" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-email">E-mail*:</label>
                                        <input type="email" class="form-control" id="contact-email"
                                               placeholder="Informe seu melhor e-mail" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Celular*:</label>
                                        <input type="text" class="form-control" id="contact-number"
                                               placeholder="(12) 34567-8910">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Mensagem*:</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10"
                                                  placeholder="Escreva aqui sua mensagem..." required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn crose-btn mt-15">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: contact form area -->
@endsection