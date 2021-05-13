@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section class="container-fluid">
	<div class="row mt-3">
		<div class="col-12">
			<img src="{{ env('APP_URL') }}/assets/images/salutem/img_1_bannerindex_2.png"  width="100%">
		</div>
		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right" id="section2">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<h2>Presentación del programa educativo.</h2>
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-md-8 offset-md-2 mt-4">
			<p class="text-justify p-pres mt-4 mb-4" data-aos="zoom-in" data-aos-duration="1000">
				La Nivelación de Licenciatura en Enfermería, es una etapa de estudio encaminada a lograr la formación profesional en el área de la Salud  ; para esto se requiere una gran responsabilidad personal y asumir un compromiso social, en el que su papel de alumno tradicional cambia al de un estudiante que interactúa con los diversos ambientes de aprendizaje, vanguardistas en tecnología, y que le permite continuar con su estilo de vida diario sin interrumpir su trabajo o actividades personales a la par de su formación universitaria.
			</p>
			<p class="text-justify p-pres mt-4 mb-4" data-aos="zoom-in" data-aos-duration="1000">
				Este programa surgió como estrategia para cumplir las expectativas de superación de quienes, por edad, falta de tiempo, situación económica o geográfica, no continuaron con sus estudios de Licenciatura en Enfermería quedándose con el grado de auxiliar, técnico o desertaron en su formación superior.
			</p>
			<p class="text-justify p-pres mt-4 mb-4" data-aos="zoom-in" data-aos-duration="1000">
				Nos congratulamos que hayan seleccionado a esta casa de estudios para continuar con su formación profesional.
			</p>
		</div>


		{{-- MISION Y VISION --}}

		<div class="col-md-6 mt-5 mb-5 text-center">
			<h1 class="text-center mb-3">Misión</h1>
			<img src="{{ env('APP_URL') }}/assets/images/salutem/img_mision.png"  width="70%">
			<p class="px-5 mt-3 text-justify" data-aos="zoom-in" data-aos-duration="1000">
				Consolidar a la educación como eje fundamental hasta alcanzar niveles de excelencia, con responsabilidad en sociedad para brindar un servicio eficiente y eficaz que satisfaga plenamente las necesidades y expectativas de los educandos, logrando con ello su desarrollo armónico e integral.
			</p>
		</div>

		<div class="col-md-6 mt-5 mb-5 text-center">
			<h1 class="text-center mb-3">Visión</h1>
			<img src="{{ env('APP_URL') }}/assets/images/salutem/img_vision.png"  width="70%">
			<p class="px-5 mt-3 text-justify" data-aos="zoom-in" data-aos-duration="1000">
				Que nuestros alumnos adquieran y desarrollen las habilidades intelectuales que les permitan aprender permanentemente y con independencia, así como actuar con eficacia e iniciativa en las cuestiones prácticas de la vida cotidiana. Que se formen éticamente mediante el conocimiento de sus derechos, deberes y la práctica de valores en su vida personal, en sus relaciones con los demás.
			</p>
		</div>

		<div class="col-md-12 mt-5 mb-2 text-center">
			<h1 class="text-center mb-3">Valores</h1>
		</div>

		<div class="col-6 col-md-2 mb-5 text-center">
			<img src="{{ env('APP_URL') }}/assets/images/salutem/valor1.png"  width="70%">
		</div>
        <div class="col-6 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/valor2.png"  width="70%">
        </div>
        <div class="col-6 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/valor3.png"  width="70%">
        </div>
        <div class="col-6 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/valor4.png"  width="70%">
        </div>
        <div class="col-6 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/valor5.png"  width="70%">
        </div>


        <div class="col-10 offset-1 text-center mt-5" id="section3">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/banner1.png"  width="100%">
        </div>


        <div class="col-md-4 mt-5 lines-left-right" id="section4">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<h1>Perfil</h1>
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 text-center">
				<h2 class="mb-3">Perfil de Ingreso.</h2>
				<p class="mb-3 text-justify">
					El estudio de esta licenciatura requiere de: 
					<ul class="text-left">
						<li>Estudios a nivel técnico de enfermería.</li>
						<li>Auxiliares en enfermería con bachillerato.</li>
						<li>Cinco cursos con valor curricular (expedidos por una institución de salud o educativa en el área de enfermería, con un máximo de tres años de antigüedad.</li>
						<li>Constancia laboral (mínimo dos años de experiencia y que se encuentren laborando en el área actualmente).</li>
						<li>La experiencia laboral no deberá ser de agencias o cuidadores.</li>
						<li>Interés por la solución de los problemas sociales del país.</li>
						<li>Disponibilidad para el trabajo en equipo.</li>
						<li>Sentido de responsabilidad.</li>
						<li>Capacidad de análisis, observación y reflexión.</li>
						<li>Buena salud física y mental.</li>
						<li>Habilidad y destreza manual.</li>
						<li>Hábitos de estudio.</li>
						<li>Vocación de servicio.</li>
						<li>Tolerancia y disponibilidad para trabajar en situaciones críticas de emergencia.</li>
					</ul>
				</p>
				<img src="{{ env('APP_URL') }}/assets/images/salutem/img_perfilingreso.png"  width="70%">
			</div>

			<div class="col-md-6 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/salutem/img_perfilingreso.png"  width="70%">
				<h2 class="mt-4 mb-3">Perfil de Egreso.</h2>
				<p class="mb-3 text-justify">
					El Licenciado en Enfermería de Salutem es formado como profesional de la salud con fundamentos teóricos, metodológicos, instrumentales aplicados en una plática sustentada en conocimientos de las ciencias biomédicas, sociales y de la conducta, con bases ético-legales que le permitan proporcionar atención de enfermería con un enfoque holístico tendiente a la solución de problemas de salud del individuo, familia y comunidad, durante las etapas de vida, que fomenten el autocuidado y su adaptación funcional al proceso de salud-enfermedad.
					<br><br>
					En comparación con el equipo multidisciplinario realiza funciones asistenciales, decentes, administrativas y de investigación en instituciones del sector salud, educativas, de protección social e industriales, así como en la práctica libre de la profesión.
				</p>
			</div>
		</div>
	</div>

	<div class="row mt-3" id="section5">

		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<h1>Requisitos</h1>
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-md-6 mt-5 text-center">
			<ul class="text-left">
				<li>Bachillerato concluido y contar con certificado.</li>
				<li>Carrera técnica en enfermería.</li>
				<li>Debe estar activo en el área de enfermería en algún hospital público o privado.</li>
				<li>Mínimo 2 años de experiencia como Enfermer@ General.</li>
			</ul>
			<h4 class="text-left mt-2 mb-2">Documentos requeridos en original y cuatro copias:</h4>
			<ul class="text-left">
				<li>Certificado de bachillerato.</li>
				<li>Cédula, título y certificado de carrera técnica en Enfermería (se adjunta hoja con diversas posibilidades de ingreso).</li>
				<li>Constancia laboral actual.</li>
				<li>Acta de nacimiento actualizada. CURP impreso de internet.</li>
				<li>Comprobante de domicilio reciente. INE.</li>
			</ul>
		</div>

		<div class="col-md-6 mt-5 text-center">
			<img src="{{ env('APP_URL') }}/assets/images/salutem/img_requisitos.png"  width="80%">
		</div>


		<div class="col-12 mt-5 mb-5 mini-banner">
			<h1 class="text-center">Contamos con bolsa de trabajo</h1>
		</div>


		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<h1>Avalados por</h1>
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr_line ml-0">
		</div>

		<div class="col-6 mt-4 col-md-2 mb-5 text-center">
			<img src="{{ env('APP_URL') }}/assets/images/salutem/av_1.png"  width="70%">
		</div>
        <div class="col-6 mt-4 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/av_2.png"  width="70%">
        </div>
        <div class="col-6 mt-4 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/av_3.png"  width="70%">
        </div>
        <div class="col-6 mt-4 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/av_4.png"  width="70%">
        </div>
        <div class="col-6 mt-4 col-md-2 mb-5 text-center col-half-offset">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/av_5.png"  width="70%">
        </div>


        <div class="col-12 mt-5">
			<img src="{{ env('APP_URL') }}/assets/images/salutem/img_footer.png"  width="100%">
		</div>

	</div>
</section>


<div class="modal fade" tabindex="-1" role="dialog" id="contactModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
        	<img src="{{ env('APP_URL') }}/assets/images/salutem/img_contacto.png"  width="100%">
        </h5>
      </div>
      <div class="modal-body">
        <h3 class="text-center mb-5">Déjanos tus datos y un asesor se comunicará contigo</h3>
        <form action="{{ URL::route('post_contact') }}" method="POST">
        	{{ csrf_field() }}
	        <div class="container">
		        <div class="row mb-2">
		        	<div class="col-md-4">
		        		<div class="form-group">
			    		    <label for="name">Nombre</label>
			    		    <input type="text" class="form-control" name="name" id="name" required="">
		        		</div>
		        	</div>
		        	<div class="col-md-4">
		        		<div class="form-group">
		        			 <label for="name">Email</label>
		        			<input type="email" class="form-control" name="email" required="">
		        		</div>
		        	</div>
		        	<div class="col-md-4">
		        		<div class="form-group">
		        			 <label for="name">Teléfono</label>
		        			<input type="text" class="form-control" name="phone" required="">
		        		</div>
		        	</div>
		        	<div class="col-md-12">
		        		<div class="form-group">
		        			 <label for="name">Mensaje</label>
		        			<textarea class="form-control" name="message" required="" rows="3"></textarea>
		        		</div>
		        	</div>

		        	<div class="col-md-12 text-right mt-2">
		        		<button type="button" class="btn btn-danger px-4 mr-3" data-dismiss="modal">Cerrar</button>
		        		<button type="submit" class="btn btn-primary px-4">Enviar</button>
		        	</div>

		        	<div class="col-md-6 offset-md-3 text-center mt-3">
		        		<img class="img-contact mr-4" src="{{ env('APP_URL') }}/assets/images/salutem/icono_face.png">
		        		<img class="img-contact" src="{{ env('APP_URL') }}/assets/images/salutem/icono_whats.png">
		        		<h3 class="mt-3">55 7701 9790</h3>
		        	</div>

		        	<div class="col-md-6  text-center mt-3">
		        		<h3 class="mt-3 mb-2">Campus Tepo</h3>
		        		<p class="text-justify px-3">
		        			Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Hic odit dignissimos impedit officia, veritatis! Animi, rem, excepturi. Doloremque nemo modi aspernatur.
		        		</p>
		        	</div>

		        	<div class="col-md-6  text-center mt-3">
		        		<h3 class="mt-3 mb-2">Campus Izcalli</h3>
		        		<p class="text-justify px-3">
		        			Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Hic odit dignissimos impedit officia, veritatis! Animi, rem, excepturi. Doloremque nemo modi aspernatur.
		        		</p>
		        	</div>
		        </div>	
		    </div> 
        </form>
      </div>
    </div>
  </div>
</div>

<style>
	.p-normal{
		color: #0d3b7c;
		font-size: 25px;
	}
	.hr_line{
		border-top: 3px solid rgb(148 116 30);
	    width: 85%;
	    margin-top: 5%;
	}
	.lines-mid{
		max-width: 33% !important;
		flex: 0 0 33%;
	}
	.lines-left-right{
		max-width: 33% !important;
		flex: 0 0 33%;
	}
	.h-sabias{
		font-size: 50px;
		color: #0d3b7c;
		font-weight: bolder;
	}
	.mar-obj{
		margin-top: 100px;
	}

	.col-half-offset{
	    margin-left:4.166666667%
	}
	.mini-banner{
		border-bottom: 2px solid black;
	    border-top: 2px solid black;
	    padding: 60px 0;
	    background: #00567c;
	    color: #f7f7f7;
	}
	.img-contact{
		width: 80px;
	}

	.p-pres{
		font-size: 18px;
	}
</style>

@endsection

@section('scripts')
	
	<script>

		document.addEventListener("DOMContentLoaded", function(){
			fixedTopNav();
		  window.addEventListener('scroll', function() {
		      fixedTopNav();
		  });
		}); 

		function fixedTopNav() {
			if (window.scrollY > 300) {
			  document.getElementById('navbar').classList.add('fixed-top');
			  // add padding top to show content behind navbar
			  navbar_height = document.querySelector('.navbar').offsetHeight;
			  document.body.style.paddingTop = navbar_height + 'px';
			} else {
			  document.getElementById('navbar').classList.remove('fixed-top');
			   // remove padding top from body
			  document.body.style.paddingTop = '0';
			} 
		}

		function goTo(section) {
			$('html, body').animate({
			    scrollTop: ($("#"+section).offset().top - 100)
			}, 800);
		}
	</script>

@endsection
