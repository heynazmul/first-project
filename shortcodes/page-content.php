<style>
  .swiper-slide img {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
  }
  .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
	content: '\2190' !important;
    color: white;
    font-weight: bold;
    font-size: 1.5rem !important;
}
.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after  {
	content: '\2192' !important;
    color: white;
    font-weight: bold;
    font-size: 1.5rem !important;
}
	.swiper-button-prev, .swiper-rtl .swiper-button-next {
	 left: 84% !important;
	 margin-top: 8px !important;
}
.swiper-button-next, .swiper-rtl .swiper-button-prev {
	 left: 84% !important;
	 margin-top: -62px !important;
}
</style>
<div class="container ">
	<div class="row my-4 py-4">
		<div class="col-md-6">
			<h1 class="fw-bold py-5">video</h1>
			<div class="d-flex position-relative">
				<img src="../images/demo/video.jpg" alt="video" class="img-fluid">
				<div class="card-img-overlay d-flex justify-content-center align-items-center bg-dark bg-opacity-40">
					<p class="display-4 mb-0 font-mr-Dafoe text-info">watch</p>
					<a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#videoModal">
					<svg xmlns="http://www.w3.org/2000/svg" class="bg-color1 p-5 mx-3 rounded-circle"height="140" width="140" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
					  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					</a>
					<p class="display-4 mb-0 font-mr-Dafoe text-warning">video</p>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="videoModal">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<iframe width="100%" height="500" src="https://www.youtube.com/embed/u044iM9xsWU" title="Learn flexbox the easy way" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
		  </div>
		</div>
		<div class="col-md-6">
			<h1 class="fw-bold py-5">Slider</h1>
			 <div class="swiper mySwiper cursor-pointer">
			  <div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="<?php echo $baseurl;?>images/demo/post-3-1170x658.jpg" alt="video" class="img-fluid">
				</div> 
				<div class="swiper-slide">
					<img src="<?php echo $baseurl;?>images/demo/post-3-1170x658.jpg" alt="video" class="img-fluid">
				</div> 
				<div class="swiper-slide">
					<img src="<?php echo $baseurl;?>images/demo/post-4-1170x658.jpg" alt="video" class="img-fluid">
				</div>
			  </div>
			  <div class="swiper-button-next bg-color1 p-4 rounded-circle"></div>
			  
			  <div class="swiper-button-prev bg-color1 p-4 rounded-circle"></div>
			</div>
		</div>
	</div>
	<hr class="my-3 my-lg-5">
</div>
	<script>
	  var swiper = new Swiper(".mySwiper", {
		loop: true,
		navigation: {
		  nextEl: ".swiper-button-next",
		  prevEl: ".swiper-button-prev",
		},
	  });
	</script>


