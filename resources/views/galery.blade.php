@extends('layout.principal')

@section('title')
	Galería
@endsection

@section('styles')
@endsection

@section('content')

	<!-- BANNER -->
	<div>
		<img src="{{ env('APP_URL') }}/assets/images/banner_3.png" width="100%">
	</div>


	<section >
		<div class="row mt-5 mb-5">
			@foreach ($images as $image)
				<div class="col-md-4 text-center mt-3 pt-4 pb-4">
					<img src="{{ env('APP_URL') }}/assets/images/galery/{{ $image }}" width="50%" class="img_zoom">
				</div>
			@endforeach

		</div>
	</section>

	<style>
		.img_zoom{
			transition: transform .5s;
			cursor: pointer;
			border-radius: 20px;
			border: 5px solid #ccb43c;
		}
		.img_zoom:hover {
		  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
		}
	</style>

@endsection

@section('scripts')
@endsection
