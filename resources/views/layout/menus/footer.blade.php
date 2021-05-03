<footer class="footer container-fluid d-none">
		<div class="row">
			<div class="col-4">
				<div class="bottom0">
					<p class="mt-2 mb-2">
						<img src="{{ env('APP_URL') }}/assets/images/icon_whats.png" width="30px">
						<span class="text-phone">55 4068 1025</span>
					</p>
					<p class="mt-2 mb-2">
						<img src="{{ env('APP_URL') }}/assets/images/icon_mail.png" width="30px">
						<span class="text-mail">alanquiroz@clean-grace.com</span>
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="text-center">
					<img src="{{ env('APP_URL') }}/assets/images/logo_clean.png" class="mb-5 logo_footer">
				</div>
			</div>
			<div class="col-4">
				<div class="bottom0" style="right: 10px">
					<p class="mt-2 mb-2">
						<a href="https://www.facebook.com/Clean-Grace-101961094934416/" target="_blank">
							<img src="{{ env('APP_URL') }}/assets/images/icon_face_footer.png" class="social_footer">
						</a>
						<a href="https://www.instagram.com/cleangrace.mx/" target="_blank">
							<img src="{{ env('APP_URL') }}/assets/images/icon_insta_footer.png" class="social_footer">
						</a>
					</p>
				</div>
			</div>
		</div>
</footer>


<style>
	footer{
		background-image: url("{{ env('APP_URL') }}/assets/images/bg_footer.png");
	    background-repeat: no-repeat;
	    background-size: 100% 100%;
	    font-family: Palatino;
	    color: #ffffff;
	    min-height: 200px;
	}
	.logo_footer{ width: 300px; }
	.bottom0{ bottom: 0; position: absolute;}
	.text-phone, .text-mail{ font-size: 18px;}
	.social_footer{ width: 70px; }
	@media (max-width: 900px) {
		.text-phone, .text-mail{ font-size: 16px; }
		.logo_footer{ width: 200px }
		.social_footer{ width: 60px; }
	}
	@media (max-width: 600px) {
		.text-phone, .text-mail{ font-size: 12px; }
		.logo_footer{ width: 170px; margin-top: 20px; }
		.social_footer{ width: 50px; }
	}

</style>