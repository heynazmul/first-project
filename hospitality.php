<!-- Hospitality part -->
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
<section>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-3 col-md-12">
                <div class="card text-white border-0 rounded-0 theme-btn-blink">
                    <div class="card-img bg-size-cover bg-no-repeat bg-position-center rounded-0" style=	"background-image:url('<?php echo $baseurl;?>images/demo/bg_cta3.jpg'); height: 316px;">
					</div>
                    <div class="card-img-overlay d-flex justify-content-center align-items-center bg-dark bg-opacity-20 hover-bg-opacity-60 transition-all duration-700">
                        <div class=" text-center">
                            <p class="card-title fs-1 fw-bold text-bg bg-info font-mr-Dafoe">Private Office</p>
                            <h6 class="m-0"> Book a Tour </h6>
                            <hr class=" w-50  px-auto m-auto pt-1 bg-info opacity-100 fw-bold">
                        </div>
                    </div>
                </div>
                <div class="card text-white border-0 rounded-0 theme-btn-blink">
                    <div class="bg-size-cover bg-no-repeat bg-position-center rounded-0" style="background-image:url('<?php echo $baseurl;?>images/demo/bg_cta4.jpg'); height: 316px;">
					</div>
                    <div class="card-img-overlay d-flex justify-content-center align-items-center bg-dark bg-opacity-20 hover-bg-opacity-60 transition-all duration-700">
                        <div class=" text-center">
                            <p class="card-title fs-1 fw-bold text-bg  font-mr-Dafoe" >Private Office</p>
                            <h6 class="mb-0"> Book a Tour </h6>
                            <hr class=" w-50  px-auto m-auto pt-1 bg-info opacity-100 fw-bold">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="card text-white p-0 m-0 border-0 rounded-0 theme-btn-blink">
                    <div class="bg-size-cover bg-no-repeat bg-position-center rounded-0" style="background-image:url('<?php echo $baseurl;?>images/demo/bg_cta2.jpg'); height:635px;"></div>
                    <div class="card-img-overlay bg-dark bg-opacity-20 hover-bg-opacity-60 transition-all duration-700">
                        <div class="card-img-overlay" style="margin-top:176px; margin-left:150px;">
                            <p class="card-text display-5 m-0 fw-bold">A Hospitality Inspired </p>
                            <p class="card-text display-5 fw-bold"> A Hospitality Inspired 
							<span class=" fw-bold p-0 text-warning">.</span> </p>
                            <div class="col-md-12">
                                 <button type="button"class=" btn bg-color1 py-4 px-5 border-0 text-white  rounded-0 text-uppercase fs-6 fw-bold">schedule a visit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>