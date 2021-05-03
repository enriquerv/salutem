@extends('layout.principal')

@section('title')
	Nosotros
@endsection

@section('styles')
@endsection

@section('content')

	<!-- BANNER -->
    <div>
        <img src="{{ env('APP_URL') }}/assets/images/banner_2.png" width="100%">
    </div>


	<!-- QUIENES SOMOS -->
	<section class="mt-5 mb-5 white">
		<div class="container">
			<h1 class="text-center" data-aos="zoom-in" data-aos-duration="1000">¿Quienes somos?</h1>
			<p class="text-justify mt-3 desc" data-aos="zoom-in" data-aos-duration="1000">
				Somos una empresa dedicada a la eliminación de microorganismos patógenos, para que tú y tu familia se sientan protegidos. Contamos con un equipo técnico de ultima generación, personal altamente capacitado, productos de calidad y permisos sanitarios.
				<br><br>
				Para ello utilizamos procesos de nebulización en frío de ultra bajo volumen (ULV), con soluciones sanitizantes que son 100%  biodegradables e inocuas al ser humano y mascotas.
			</p>
			<div class="container row mt-5 mb-5">
				<!-- MISION -->
				<div class="col-md-3 mt-3">
					<img src="{{ env('APP_URL') }}/assets/images/mision.png" data-aos="zoom-in" data-aos-duration="1000" width="100%">
				</div>
				<div class="col-md-9" data-aos="zoom-in" data-aos-duration="1000">
					<h2 class="text-left mt-5 mb-4">Misión</h2>
					<p class="text-justify">
						Satisfacer las necesidades de sanitización e implementación de protocolos sanitarios de todos nuestros clientes garantizando siempre su seguridad y la de su entorno, utilizando productos de vanguardia, con laconfianza de ser siempre asesorados por expertos en el ramo.
					</p>
				</div>

				<!-- VALORES -->
				<div class="col-12 mt-5 mb-4"><h2 class="text-center">Valores</h2></div>
				<div class="mt-5 col-6 col-sm-6 col-md-6 col-lg-2 offset-lg-1 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/seguridad.png" width="75%">
					<p class="font-weight-bold">Seguridad</p>
				</div>
				<div class="mt-5 col-6 col-sm-6 col-md-6 col-lg-2 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/responsabilidad.png" width="75%">
					<p class="font-weight-bold">Responsabilidad</p>
				</div>
				<div class="mt-5 col-6 col-sm-6 col-md-6 col-lg-2 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/honestidad.png" width="75%">
					<p class="font-weight-bold">Honestidad</p>
				</div>
				<div class="mt-5 col-6 col-sm-6 col-md-6 col-lg-2 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/compromiso.png" width="75%">
					<p class="font-weight-bold">Compromiso</p>
				</div>
				<div class="mt-5 col-6 col-sm-6 col-md-6 col-lg-2 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/calidad.png" width="75%">
					<p class="font-weight-bold">Calidad</p>
				</div>

				<div class="col-12 text-center mt-5 mb-5">
					<img src="{{ env('APP_URL') }}/assets/images/aboutus/cv_face.png" class="mb-3 img-cv">
					<p class="text-cv mt-3">Director General</p>
					<p class="text-cv mt-3">Maestro en Ciencias</p>
					<p class="text-cv mt-3">Alan Ricardo Quiroz Moguel</p>
					<p class="text-cv mt-3">Maestría en Farmacología</p>
				</div>
				<div class="col-6 text-left mt-5 mb-5">
					<img src="{{ env('APP_URL') }}/assets/images/aboutus/cv_1.png" width="100%" class="mb-3">
				</div>
				<div class="col-6 text-right mt-5 mb-5">
					<img src="{{ env('APP_URL') }}/assets/images/aboutus/cv_2.png" width="100%" class="mb-3">
				</div>
			</div>
		</div>
	</section>

	<style>
		.desc{ width: 80%; margin: 0 auto; font-size: 18px; }
		.text-cv{ width: 80%; margin: 0 auto; font-size: 24px; }
		.img-cv{ min-width: 200px; }
	</style>


@endsection

@section('scripts')
@endsection
