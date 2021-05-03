@extends('layout.principal')

@section('title', '| '.trans($active.'.title'))

@section('styles')
@endsection

@section('content')

    <!-- BANNER -->
    <div>
        <img src="{{ env('APP_URL') }}/assets/images/banner_4.png" width="100%">
    </div>

    <section class="mt-5 white" data-aos="zoom-in" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-6 pt-5 pl-5 pb-5 pr-5">
                <div class="row">
                    <div class="col-4 text-center">
                        <a href="https://www.facebook.com/Clean-Grace-101961094934416/" target="_blank">
                            <img src="{{ env('APP_URL') }}/assets/images/icon_face.png" width="120px">
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <img src="{{ env('APP_URL') }}/assets/images/logo_clean.png" width="185px">
                    </div>
                    <div class="col-4 text-center">
                        <a href="https://www.instagram.com/cleangrace.mx/" target="_blank">
                            <img src="{{ env('APP_URL') }}/assets/images/icon_insta.png" width="120px">
                        </a>
                    </div>
                    <div class="col-md-10 offset-md-1 mt-5 text-justify" style="font-size: 20px">
                        En Clean Grace ofrecemos el mejor servicio y productos de calidad que brindan seguridad y confianza.
                        <br><br>
                        Ponte en contacto con nosotros, llena el formato y envíanos un mensaje, nos pondremos en contacto contigo a la brevedad y te daremos la mejor atención para lo que necesitas.
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-5 pl-5 pb-5 pr-5">
                <form action="{{ URL::route('post_contact') }}" method="POST" class="container">
                    {!! Form::token() !!}
                    <div class="form-group">
                        <label class="bolder" for="Nombre">Nombre *</label>
                        <input type="text" class="form-control" id="Nombre" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="bolder" for="Email">E-mail *</label>
                        <input type="email" class="form-control" placeholder="correo@dominio.com" name="email" id="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="bolder" for="Telefono">Teléfono</label>
                        <input type="tel" pattern="[0-9]{10}" class="form-control" placeholder="5511223344" id="Telefono" name="phone" required>
                        <small>Formato a 10 dígitos</small>
                    </div>
                    <div class="form-group">
                        <label class="bolder" for="Mensaje">Mensaje *</label>
                        <textarea class="form-control" id="Mensaje" rows="5" name="message" required></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary pl-5 pr-5">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    @include('website.formvalidation.contact')
@endsection
