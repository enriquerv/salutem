@extends('layout.principal')

@section('title')
	Protocolos
@endsection

@section('styles')
@endsection

@section('content')

	<!-- BANNER -->
    <div>
        <img src="{{ env('APP_URL') }}/assets/images/banner_5.png" width="100%">
    </div>


	<!-- QUIENES SOMOS -->
	<section class="mt-5 mb-5 white">
		<div class="container">
			<h1 class="text-center">Protocolos</h1>
			<p class="desc text-justify mt-3">
				Con las nuevas disposiciones para poder regresar a las actividades de manera normal, las empresas se ven obligadas en capacitar a sus empleados, al igual que establecer estrategias de higiene para evitar propagación interna de COVID-19.
			</p>
			<p class="desc text-justify mt-3">
				Con base al tiempo que actúa el sanitizante, el espacio y la práctica de higiene individual, establecemos protocolos sanitarios para tu empresa o negocio, para así ampliar la proteccion del personal y sus familias.

			</p>
			<div class="container row mt-5 mb-5">
				<img src="{{ env('APP_URL') }}/assets/images/protocolo.png" width="100%">
			</div>
		</div>
	</section>

	<style>
		.desc{ width: 80%; margin: 0 auto; font-size: 18px; }
	</style>

@endsection

@section('scripts')
@endsection
