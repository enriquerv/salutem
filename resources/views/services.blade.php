@extends('layout.principal')

@section('title')
	Servicios
@endsection

@section('styles')
@endsection

@section('content')

	<!-- BANNER -->
    <div>
        <img src="{{ env('APP_URL') }}/assets/images/banner_6.png" width="100%">
    </div>


	<!-- QUIENES SOMOS -->
	<section class="mt-5 mb-5 white">
		<div class="container">
			<p class="desc text-justify mt-3">
				Al realizar este tratamiento de manera regular disminuye el riesgo de contagio de COVID19 por contacto de superficies, ya que, al aplicarse el producto, deja una residualidad la cual se mantiene activa durante un prolongado periodo de tiempo.
			</p>
			<p class="desc text-justify mt-3">
				Para el procedimiento se realiza una inspección del lugar estableciendo la mejor estrategia de distribución del producto para cubrir cada área y superficie dentro del inmueble.
			</p>
			<p class="desc text-justify mt-3">
				La nebulización se lleva a cabo de manera sencilla por medio de una técnica ángulo a ángulo cubriendo techo, paredes, intermedios (muebles, equipos etc.) y piso.
			</p>
			<p class="desc text-justify mt-3">
				Se hace por medio de nebulización ULV en frío que produce tamaños de gota entre 5-50 micras,  los estudios muestran es el tamaño y el peso perfecto para adherirse eficazmente a las superficies. Las gotas de este tamaño también flotan en el aire durante aproximadamente 10 minutos después de la aplicación, abarcando cada superficie grieta o hendidura; además, permiten una dispersión mucho más equilibrada del sanitizante. Este procedimiento reduce el tiempo de tratamiento, alcanzando así, el máximo grado de eficiencia y una repartición óptima. Esto significa que al aplicar una dosis determinada del producto con el método ULV, se generan muchas más gotas que con los procedimientos tradicionales.

			</p>
			<div class="container row mt-5 mb-5">
				<img src="{{ env('APP_URL') }}/assets/images/sanitizacion.png" width="100%">
			</div>

			<h4 class="text-center mb-3 h-sabias">¿Qué sanitizamos?</h4>
			<div class="container row mb-5">
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_1.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_2.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_8.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_4.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_5.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_6.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_7.png" width="80%"></div>
				<div class="col-md-3 mt-5"><img src="{{ env('APP_URL') }}/assets/images/services/img_servicios_3.png" width="80%"></div>

			</div>


		</div>
	</section>

	<style>
		.desc{ width: 80%; margin: 0 auto; font-size: 18px; }
		.h-sabias{
			font-size: 50px;
			color: #0d3b7c;
			font-weight: bolder;
		}
	</style>

@endsection

@section('scripts')
@endsection
