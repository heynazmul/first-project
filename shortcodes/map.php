<style>
.theme-btn-blink{
	position:relative!important;
	overflow:hidden!important;
}
.theme-btn-blink:before {
	content: "";
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	width: 200px;
	left: -300px;
	-webkit-transform: skewX(-30deg);
	-moz-transform: skewX(-30deg);
	-ms-transform: skewX(-30deg);
	transform: skewX(-30deg);
	-webkit-transition: 350ms ease all;
	-moz-transition: 350ms ease all;
	transition: 350ms ease all;
	background-color:rgba(0,0,0,0.5);
	opacity: 0;
}
.theme-btn-blink:hover:before{
	left: 135%;
	-webkit-transition: 800ms ease all;
	-moz-transition: 800ms ease all;
	transition: 800ms ease all;
	opacity: .7;
}
</style>
<div class="container my-5 pb-5">
	<div class="row">
		<hr class="my-3 my-lg-5">
		<div class="col-md-6">
			<h1 class="fw-bold py-5">Action</h1>
			 <div class="card text-white p-0 m-0 border-0 rounded-0 theme-btn-blink">
				<div class="bg-size-cover bg-no-repeat bg-position-center rounded-0" style="background-image:url('../images/demo/post-11.jpg'); height:305px;"></div>
				<div class="card-img-overlay bg-dark bg-opacity-50 hover-bg-opacity-60 transition-all duration-700">
					<div class="card-img-overlay">
						<p class="card-text display-5 d-flex justify-content-center fw-bold pt-5">Life Coaching
						<span class=" fw-bold p-0 text-warning">.</span> </p>
						<div class="d-flex justify-content-center pt-2">
							 <button type="button"class=" btn bg-color1 p-4 px-5 border-0 text-white  rounded-0 text-uppercase fs-6 fw-bold">More info</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="fw-bold py-5">Map</h1>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14612.962398285066!2d90.45967325!3d23.703100600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1665411909406!5m2!1sen!2sbd" width="100%" height="305" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>