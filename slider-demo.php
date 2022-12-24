<!-- Slider part -->
<!-- Link Swiper's CSS -->


<!-- Demo styles -->
<style>

    #main-swiper-slider .swiper-slide img {
        display: flex;
        width: 100%;
        height: 600px;
        object-fit: cover;
    }

    #main-swiper-slider .swiper-pagination {
        text-align: left;
        transition: 3s opacity;
        transform: translate3d(0, 0, 0);
        z-index: 10;
        left:100px!important;
        margin-bottom: 20px;
    }
	#main-swiper-slider .swiper-pagination .swiper-pagination-bullet{
		background-color:aqua !important;
	}
	.swiper-pagination .swiper-pagination-bullet-active{
		height: 1rem;
		width:  1rem;
	}
    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 5%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 100px;
        color: #fff;
        text-align: left;
        margin-left: 50px;
    }

    .carousel-caption h1 {
        font-size: 3.5rem;
        color: rgb(255, 255, 255);
        font-weight: 700;
		
  }

    .accordion-button::after {
        filter: brightness(100);
        background-size: 15px;
    }
</style>

<section>
    <div>
        <div>
            <div class="col">
                <div class="swiper" id="main-swiper-slider" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/demo/slider-1-bg1.jpg" class="img-fluid" alt="Photo">
                            <div class="carousel-caption">
                                <h1 id="fontsmall" class=" text-center text-md-start">
                                    Make Your Workspase<br> Your Own Muse</h1>
                                <p class="d-none d-xl-block">At our coworking space center.we make emphasis on comfy condition<br> for creative minds that form groups of telented people </p>
                            </div>
                            <div class=" card-img-overlay d-flex justify-content-end text-white"
                                style="margin-top: 536px;margin-right: 116px;">
                                <!-- Facebook -->
                                <a><i class=" m-1 fab fa-facebook-f"></i></a>

                                <!-- Twitter -->
                                <i class=" m-1 fab fa-twitter"></i>
                                <!-- Instagram -->
                                <i class=" m-1 fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/demo/slider-1-bg2.jpg" alt="Photo">
                            <div class="carousel-caption">
                                <h1 id="fontsmall" class=" text-center text-md-start">
                                    Make Your Workspase<br> Your Own Muse</h1>
                                <p class="d-none d-xl-block">At our coworking space center.we make emphasis on comfy condition<br> for creative minds that form groups of telented people </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/demo/slider-1-bg3.jpg" alt="Photo">
                          <div class="carousel-caption">
                                <h1 id="fontsmall" class=" text-center text-md-start">
                                    Make Your Workspase<br> Your Own Muse</h1>
                                <p class="d-none d-xl-block">At our coworking space center.we make emphasis on comfy condition<br> for creative minds that form groups of telented people </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination d-flex align-items-center w-100"></div>
                </div>
            </div>
        </div>
</section>


