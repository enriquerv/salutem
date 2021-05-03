<section id="section1">
  <div class="row">
    <div class="col-12">
      <img src="{{ env('APP_URL') }}/assets/images/salutem/img_1_navbarsalutem.png" width="100%">
      <a href="https://www.facebook.com/Clean-Grace-101961094934416/" target="_blank">
        <img class="img_social social_1" src="{{ env('APP_URL') }}/assets/images/salutem/icono_face.png">
      </a>
      <a href="https://www.instagram.com/cleangrace.mx/" target="_blank">
        <img class="img_social social_2" src="{{ env('APP_URL') }}/assets/images/salutem/icono_whats.png">
      </a>
    </div>
  </div>
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-fill w-100">
      <a class="nav-item nav-link text-center {{ $active == 'index' ? 'bolder' : '' }}" onclick="goTo('section1')">
        Inicio
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'aboutus' ? 'bolder' : '' }}" onclick="goTo('section2')">
        Nosotros
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'aboutus' ? 'bolder' : '' }}" onclick="goTo('section3')">
        Oferta educativa
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'galery' ? 'bolder' : '' }}" onclick="goTo('section4')">
        Perfiles
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'contact' ? 'bolder' : '' }}" onclick="goTo('section5')">
        Requisitos
      </a>
      <a class="nav-item nav-link text-center" href="https://salutem.neolms.com/" target="_blank">
        Plataforma
      </a>
      <a class="nav-item nav-link text-center" data-toggle="modal" data-target="#contactModal">
        Contacto
      </a>
    </div>
  </div>
</nav>

<style>
  .nav-link{
    padding: 0 !important;
  }
  .nav-item{
    color: #24437a !important;
    font-size: 25px;
    cursor: pointer;
  }
  .no-padding{
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .item_service{
    color: #24437a !important;
    font-size: 20px;
  }
  .img_social{
    width: 60px;
    position: absolute;
    bottom: 10px;
    right: 0;
  }
  .social_1{ margin-right: 120px; }
  .social_2{ margin-right: 30px; }
</style>

