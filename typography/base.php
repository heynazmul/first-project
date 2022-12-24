<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nazmul Hossain</title>
    <link rel="icon" href="../images/demo/logos/logo.png" type="image/x-icon">
	<link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;0,600;0,700;0,800;0,900;1,800;1,900&display=swap"
    rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-extensions.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	
    <link rel="stylesheet" href="../css/theme.css">
</head>
<body>
    <header>
    </header>
        <main>
	<style>

		.bg-color {
			background-color: #222222 !important;
		}
		ul li a::before {
		  content: "\2022";
		  color: yellow;
		  font-weight: bold;
		  display: inline-block; 
		  width: 1em;
		  margin-left: -1em;
		}
		    * 
    ul {list-style-type: none;}
    
    .weekdays {
      margin: 0;
      padding: 10px 0;
    }
    
    .weekdays li {
      display: inline-block;
      width: 13.6%;
      text-align: center;
    }
    
    .days {
      padding: 10px 0;
      margin: 0;
    }
    
    .days li {
      list-style-type: none;
      display: inline-block;
      width: 13.6%;
      text-align: center;
      margin-bottom: 5px;
      font-size:12px;
    }
    
    .days li .active {
      padding: 5px;
      background: #1abc9c;
    }
    
    /* Add media queries for smaller screens */
    @media screen and (max-width:720px) {
      .weekdays li, .days li {width: 13.1%;}
    }
    
    @media screen and (max-width: 420px) {
      .weekdays li, .days li {width: 12.5%;}
      .days li .active {padding: 2px;}
    }
    
    @media screen and (max-width: 290px) {
      .weekdays li, .days li {width: 12.2%;}
    }
	</style>
<section class="container mt-5">
	<div class="row">
		<div class="col-lg-8">
			<div>
				<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				<p class="pt-4">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odt aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
			</div>
			<div>
				<h1 class="display-4 fw-bold mb-5">H1 Heading</h1>
				 <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				 <h1 class="fw-bold mb-5">H2 Heading</h1>
			</div>
			<div>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
			</div>
		</div>
		<div class="col-lg-4 bg-color py-3 ">
			<div class="row g-4">
					<div class="col-sm-6 col-md-4 col-lg-12">
						<div class="  p-lg-5">
							<h4 class="text-white fw-bold mb-5">Search</h4>
							<div class="input-group px-2">
							  <input type="search" class="form-control p-3 box-shadow-none rounded-0" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
							 <a class="text-black position-absolute start-auto end-0 pe-4 z-index-10" style="margin-top: 18px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" height="15" width="30">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
							</svg>

							</a>
							</div>
						</div>
						<hr class="my-5 text-white m-0">
					</div>
					<div class="col-sm-6 col-md-4 col-lg-12">
						<div class="  p-lg-5 text-white">
							<h4 class=" py-3 ms-3">Categories</h4>
							<ul>
								<li><a class="text-decoration-none text-white hover-text-warning" href="#">Big City Facilities</a></li>
								<li><a class="text-decoration-none text-white hover-text-warning" href="#">Lifestyle News</a></li>
								<li><a class="text-decoration-none text-white hover-text-warning" href="#">Offers & Research</a></li>
								<li><a class="text-decoration-none text-white hover-text-warning" href="#">The Future of Work</a></li>
								<li><a class="text-decoration-none text-white hover-text-warning" href="#">Usefull Tips</a></li>
								<li><a class="text-decoration-none text-white hover-text-warning" href="#">Where Startups Lead</a></li>
							</ul>
						</div>
						<hr class="my-5 text-white m-0">
					</div>
				<div class="col-sm-6 col-md-4 col-lg-12">
							<h4 class=" ms-5 fw-bold text-white"> Most Popular</h4>
						 <ul class="nav nav-pills mb-3 d-flex justify-content-center align-items-center " id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
							  <button class=" btn btn-warning text-white hover-text-dark box-shadow-none border-0 rounded-0" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">View</button>
							</li>
							<li class="nav-item" role="presentation">
							  <button class=" btn btn-secondary btn-outline-warning text-white hover-text-dark box-shadow-none border-0 rounded-0 mx-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
							</li>
							<li class="" role="presentation">
							  <button class="btn btn-secondary btn-outline-warning text-white hover-text-dark box-shadow-none border-0 rounded-0" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
							</li>
						  </ul>
					<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
								<div class="mx-lg-5">
									<div class="card mx-auto mt-3 border-0 rounded-0">
										<div class="card-img-overly">
											<img src="../images/demo/post-8.jpg" class="card-img-top" alt="...">
											<div class="card-img-overlay d-flex justify-content-end">
												<a class="text-center text-white mb-5 p-3 bg-info text-decoration-none font-mr-Dafoe" href="#"> 02 <br> Oct </a>
											</div>
										</div>
									</div>
									<div>
									  <ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a class="text-color1 hover-text-info text-decoration-none" href="#">USFULL TIPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">by John</li>
									  </ol>
									  <a class="text-secondary hover-text-info text-decoration-none" href="#"> Howard</a>
									  <h6><a class="text-white fw-bold hover-text-warning text-decoration-none" href="#"> Visitor Management Systems: What They ...</a></h6>
									</div>
								</div>
								<div class="mx-lg-5 pt-5">
									<div class="card mx-auto mt-3 border-0 rounded-0">
										<div class="card-img-overly">
											<img src="../images/demo/post-9.jpg" class="card-img-top" alt="...">
											<div class="card-img-overlay d-flex justify-content-end">
												<a class="text-center text-white mb-5 p-3 bg-info text-decoration-none font-mr-Dafoe" href="#"> 02 <br> Oct </a>
											</div>
										</div>
									</div>
									<div>
									  <ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a class="text-color1 hover-text-info text-decoration-none" href="#">USFULL TIPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">by John</li>
									  </ol>
									  <a class="text-secondary hover-text-info text-decoration-none" href="#"> Howard</a>
									  <h6><a class="text-white fw-bold hover-text-warning text-decoration-none" href="#"> Visitor Management Systems: What They ...</a></h6>
									</div>
								</div>
							</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
							<div class="mx-lg-5">
								<div class="card mx-auto mt-3 border-0 rounded-0">
									<div class="card-img-overly">
										<img src="../images/demo/post-9.jpg" class="card-img-top" alt="...">
										<div class="card-img-overlay d-flex justify-content-end">
											<a class="text-center text-white mb-5 p-3 bg-info text-decoration-none font-mr-Dafoe" href="#"> 02 <br> Oct </a>
										</div>
									</div>
								</div>
								<div>
								  <ol class="breadcrumb m-0">
									<li class="breadcrumb-item"><a class="text-color1 hover-text-info text-decoration-none" href="#">USFULL TIPS</a></li>
									<li class="breadcrumb-item active" aria-current="page">by John</li>
								  </ol>
								  <a class="text-secondary hover-text-info text-decoration-none" href="#"> Howard</a>
								  <h6><a class="text-white fw-bold hover-text-warning text-decoration-none" href="#"> Visitor Management Systems: What They ...</a></h6>
								</div>
							</div>
							<div class="mx-lg-5 pt-4">
								<div class="card mx-auto mt-3 border-0 rounded-0">
									<div class="card-img-overly">
										<img src="../images/demo/post-8.jpg" class="card-img-top" alt="...">
										<div class="card-img-overlay d-flex justify-content-end">
											<a class="text-center text-white mb-5 p-3 bg-info text-decoration-none font-mr-Dafoe" href="#"> 02 <br> Oct </a>
										</div>
									</div>
								</div>
								<div>
								  <ol class="breadcrumb m-0">
									<li class="breadcrumb-item"><a class="text-color1 hover-text-info text-decoration-none" href="#">USFULL TIPS</a></li>
									<li class="breadcrumb-item active" aria-current="page">by John</li>
								  </ol>
								  <a class="text-secondary hover-text-info text-decoration-none" href="#"> Howard</a>
								  <h6><a class="text-white fw-bold hover-text-warning text-decoration-none" href="#"> Visitor Management Systems: What They ...</a></h6>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
							<div>
								<div class="mx-5">
								  <ol class="breadcrumb py-2 m-0 cursor-pointer">
									<li class="breadcrumb-item"><a class="text-color1 hover-text-info text-decoration-none" href="#">The Future of Work</a></li>
									<li class="breadcrumb-item active" aria-current="page">by John</li>
								  </ol>
								  <a class="text-secondary hover-text-info text-decoration-none" href="#"> Howard</a>
								  <h6><a class="text-white fw-bold hover-text-warning text-decoration-none" href="#">Photography City Tour...</a></h6>
							  </div>
								<div class="mx-lg-5 pt-2">
									<div class="card mx-auto mt-3 border-0 rounded-0">
										<div class="card-img-overly">
											<img src="../images/demo/post-8.jpg" class="card-img-top" alt="...">
											<div class="card-img-overlay d-flex justify-content-end">
												<a class="text-center text-white mb-5 p-3 bg-info text-decoration-none font-mr-Dafoe" href="#"> 02 <br> Oct </a>
											</div>
										</div>
									</div>
									<div>
									  <ol class="breadcrumb m-0 cursor-pointer">
										<li class="breadcrumb-item"><a class="text-color1 hover-text-info text-decoration-none" href="#">USFULL TIPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">by John</li>
									  </ol>
									  <a class="text-secondary hover-text-info text-decoration-none" href="#"> Howard</a>
									  <h6><a class="text-white fw-bold hover-text-warning text-decoration-none" href="#"> Visitor Management Systems: What They ...</a></h6>
									</div>
								</div>
							</div>
						</div>
						<hr class="my-5 text-white m-0">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-12">
					<div class="row">
						<div class="col col-sm-12">
							<div class="card mb-3 bg-color">
							  <div class="row g-4 px-lg-5">
								<div class="col-lg-5">
									<img src="../images/demo/post-8.jpg" class="rounded-0 card-img" alt="">
								</div>
								<div class="col-lg-7 cursor-pointer">
								  <div class="text-white">
									<p class="card-title text-color1 hover-text-info">USFULL TIPS</p>
									<p class="card-text hover-text-warning">Visitor Management Systems: What They ...</p>
								  </div>
								</div>
							  </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col-sm-12">
							<div class="card mb-3 bg-color">
							  <div class="row g-4 px-lg-5">
								<div class="col-lg-5">
									<img src="../images/demo/post-8.jpg" class="rounded-0 card-img" alt="">
								</div>
								<div class="col-lg-7 cursor-pointer">
								  <div class="text-white">
									<p class="card-title text-color1 hover-text-info">USFULL TIPS</p>
									<p class="card-text hover-text-warning">Visitor Management Systems: What They ...</p>
								  </div>
								</div>
							  </div>
							</div>
						</div>
						<hr class="my-5 text-white m-0">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-12">
						<h4h4 class=" ms-5 pb-5 fw-bold text-white"> Calendar</h4h4>
						 <p class="text-center text-white"><big> September 2022</big></p>
					<div class="mx-5 bg-color">
						<ul class="days d-flex  text-color1 ">
						  <li>Mon</li>
						  <li>Tue</li>
						  <li>Wed</li>
						  <li>Thu</li>
						  <li>Fri</li>
						  <li>Sat</li>
						  <li>Sun</li>
						</ul>
						
						<ul class="days text-white ">  
						  <li></li>
						  <li></li>
						  <li></li>
						  <li>1</li>
						  <li>2</li>
						  <li>3</li>
						  <li>4</li>
						  <li>5</li>
						  <li>6</li>
						  <li>7</li>
						  <li>8</li>
						  <li>9</li>
						  <li>10</li>
						  <li>11</li>
						  <li>12</li>
						  <li>13</li>
						  <li>14</li>
						  <li>15</li>
						  <li>16</li>
						  <li>17</li>
						  <li>18</li>
						  <li>19</li>
						  <li>20</li>
						  <li>21</li>
						  <li>22</li>
						  <li>23</li>
						  <li>24</li>
						  <li>25</li>
						  <li>26</li>
						  <li><span class="active">27</span></li>
						  <li>28</li>
						  <li>29</li>
						  <li>30</li>
						</ul>
					</div>
					<div class="ms-5 text-color1 hover-text-info cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="yellow" height="20" width="20">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
						</svg>
						<span> Oct</span>
					</div>
					<hr class="my-4 text-white m-0">
				</div>
				<div class="mx-lg-5 col-sm-6 col-md-4 col-lg-12 ">
					<h4 class="h4 pb-4 fw-bold text-white"> Tags</h4>
					<div>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">BUSINESS</button>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">COWORKING</button>
					</div>
					<div class="my-1">
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">CREATIVE</button>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">JOB</button>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">PROJECT</button>
					</div>
					<div class="mb-1">
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">SPACE</button>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">SUPPORT</button>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">TEAM</button>
					</div>
					<div>
						<button class="btn btn-secondary btn-outline-info border-0 fw-bold rounded-0 text-white box-shadow-none" href="#" style="font-size: 13px;">WEB DESIGN</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		
        </main>
    <footer>
    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- wow js -->
    <script src="../js/wow.min.js"></script>
    <!-- custom wow -->
    <script src="../js/custom.js"></script>
</body>
</html>