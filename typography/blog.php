<main>
	<style>

	.bg-color {
		background-color: #222222 !important;
	}
	.dot ul li a::before {
	  content: "\2022";
	  color: yellow;
	  font-weight: bold;
	  display: inline-block; 
	  width: 1em;
	  margin-left: -1em;
	}
	 .bullet ul li::before {
		  content: "\2022";
		  color: #00e1dd;
		  margin-right:5px;
		} 
		.arrow ul li::before {
		  content: "\2192";
		  margin-right:5px;
		  size:2rem;
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
	.text-bg2 {
		background: -webkit-linear-gradient(#00e1dd, #e1f339);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
}
.table th {
	padding:13px;
}
.table td {
	padding:13px;
}
	</style>
	<section class="container pt-5 my-5">
		<div class="row">
			<div class="col-lg-8">
				<div>
					<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
					<p class="text-secondary py-5">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odt aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
				<div>
					<h1 class="display-4 fw-bold mb-5">H1 Heading</h1>
					 <p class="text-secondary pb-5"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
					 <h1 class="fw-bold mb-5">H2 Heading</h1>
				</div>
				<div>
					<p class="text-secondary pb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				</div>
				<div>
					<h3 class="fw-bold pb-3">H3 Heading</h3>
					<p class="text-secondary pb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. h3h4Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				</div>
				<div>
					<h4 class="fw-bold pb-3">H4 Heading</h4>
					<p class="text-secondary pb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				</div>
				<div>
					<h5 class="fw-bold pb-3">H5 Heading</h5>
					<p class="text-secondary pb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				</div>
				<div>
					<h6 class="fw-bold pb-3">H6 Heading</h6>
					<p class="text-secondary pb-5 mb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				</div>
				<div class="my-5 py-5 secondary">
					<h1 class="fw-bold mb-5">Standard Inline Elementsh</h1>
					<p><strong> Bold text</strong> dolor sit amet, consectetur <span class="text-info">accent color</span> adipisicing elit,hovered accents  sed do eiusmod tempor hovered ut labore et dolore magna aliqu quis nostrud exercitation ullamco laboris nisllum dolore eu fugiat nulla pariatur. Excepteur sint <span class=" text-white bg-info ">occaecat cupidatat</span>  non proident officia sunt in culpa qui deserunt mest laborum.  </p>
					<p>iste natus error sit voluptatem italic text example doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vei <u>architecto</u>  beatae explicabo. Nemo enptatem quia oluptas Tooltip Title aut odit aut fugit, sed quia consequuntur magni dolores eos quiet. </P>
				</div>
				<div class="row">
						<h1 class="fw-bold py-5">Dropcaps</h1>
					<div class="col-sm-12 col-md-6">
						<p><span class="display-1 fw-bold text-info" style="color:#4e3bc8">D</span> Lorem ipsum dolor sit amet, laboris nisi eiusmod tempor incididunt ut laboris nisi enim ad minim veniam, quis nostrud exer cit ation ullamco laboris nisi ut aliquip ex ea commodo consequatm, eaque ipsamany coy sit quae.</P>
					</div>
					<div class="col-sm-12 col-md-6">
						<p><span class="display-1 fw-bold fst-italic text-bg2">D</span> Lorem ipsum dolor sit amet, laboris nisi eiusmod tempor incididunt ut laboris nisi enim ad minim veniam, quis nostrud exer cit ation ullamco laboris nisi ut aliquip ex ea commodo consequatm, eaque ipsamany coy sit quae.</P>
					</div>
				</div>
				<div class="my-5 py-5">
					<h1 class="fw-bold py-5">Blockquote</h1>
					<P>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</P>
					<div class="bg-color2 my-5 p-4 text-white me-4 ">
						<div class="m-5 fw-bold">
							<h4 class="fw-bold">The difference between what we do and what we are capable of doing would suffice to solve most of the world’s problems</h4>
							<cite class="fw-bold">Mahatma Gandhi</cite>
						</div>
					</div>
					<p class="">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
				</div>
				<div class="my-5 py-5">
					<h1 class="fw-bold py-5">Image Alignment</h1>
					<P>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab
					illo inventore veritatis et quasi architecto</P>
					<div class="row ">
						<div class="col-md-7 ">
							<div class="card group-hover">
								<div class="positon-relative">
									<img src="../images/demo/post-10.jpg" class="card-img" alt="...">
									<div class="card-img-overlay p-0 top-auto">
										<div class="bg-dark bg-opacity-0 hover-bg-opacity-50 w-100 text-center text-white p-2">
											<p class="mb-0 opacity-0 hover-opacity-100">TITLE OF IMAGE</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<p class="pt-md-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incids nisi ut aliquip ex ea commodo conseq ipsa quae ab illo inventore.</p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius.</p>
						</div>
						<p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatm, eaque ipsa quae ab illo inventore.</p>
						<div class="col-md-5 ">
							<p class="pt-md-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incids nisi ut aliquip ex ea commodo conseq ipsa quae ab illo inventore.</p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius.</p>
						</div>
						
						<div class="col-md-7">
							<div>
								<img src="../images/demo/post-11.jpg" class="card-img" alt="...">
							</div>
						</div>
						<p class="py-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendecat cupidatat non proidem. Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore veritatis et quasi architecto</p>
					</div>
				</div>
				<div class="me-4 my-5 py-5">
					<h1 class="fw-bold pt-5">List</h1>
					<ul class="list-group fs-5 my-5 list-group-flush border-top border-bottom border-opacity-10 lh-2" style=" font-size:1.125em;line-height:3rem;">
						<li class="list-group-item" id="Fontsmall"><span class="fw-bold pe-3">1</span>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
						<li class="list-group-item" id="Fontsmall"><span class="fw-bold pe-3">2</span> Duis aute irure dolor in reprehendecat cupidatat non proidem</li>
						<li class="list-group-item" id="Fontsmall"><span class="fw-bold pe-3">3</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
						<li class="list-group-item" id="Fontsmall"><span class="fw-bold pe-3">4</span> Sed ut perspiciatis unde omnisperaque ipsauae ab illo inventore</li>
					</ul>
					<div class="row mb-5">
						<div class=" col-lg-6 bullet">
							<ul>
							  <li>Ut wisi enim ad minim</li>
							  <li>Veniam quis nostrud</li>
							  <li>Exerci tation ullamcorper</li>
							  <li>Ascipit lobortis nisl ut</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<div class=" col-6 arrow w-100">
							<ul>
							  <li>Ut wisi enim ad minim</li>
							  <li>Veniam quis nostrud</li>
							  <li>Exerci tation ullamcorper</li>
							  <li>Ascipit lobortis nisl ut</li>
							</ul>
						</div>
						</div>
					</div>
				</div>
				<div class="mb-5 pb-5">
					<h1 class="fw-bold py-5">Table</h1>
					<div class="me-3">
						<table class="table table-bordered  text-center">
						  <thead>
							  <tr class="bg-color2  text-white">
								<th>#</th>
								<th>Column 1</th>
								<th>Column 2</th>
								<th>Column 3</th>
								<th>Column 4</th>
							  </tr>
							</thead>
							<tbody class="bg-light">
							  <tr>
								<td>1</td>
								<td>Row 1 Cell 1</td>
								<td>Row 1 Cell 2</td>
								<td>Row 1 Cell 3</td>
								<td>Row 1 Cell 4</td>
							  </tr> <tr>
								<td>2</td>
								<td>Row 2 Cell 1</td>
								<td>Row 2 Cell 2</td>
								<td>Row 2 Cell 3</td>
								<td>Row 2 Cell 4</td>
							  </tr> <tr>
								<td>3</td>
								<td>Row 3 Cell 1</td>
								<td>Row 3 Cell 2</td>
								<td>Row 3 Cell 3</td>
								<td>Row 3 Cell 4</td>
							  </tr>     
							</tbody>
						</table>
					</div>
				</div>
				<div>
					<h1 class="fw-bold py-5">Table and Button</h1>
					<form class="row g-3 mb-5">
						<div class=" col-md-6 py-2">
							<input type="text" class="box-shadow-none form-control border-0 w-100 py-3 bg-light" placeholder="USERNAME">
						</div>
						<div class=" col-md-6 py-2">
							<input type="email" class="box-shadow-none form-control border-0 w-100 py-3 bg-light" placeholder="Email">
						</div>
					    <div class="mb-5">
							<textarea class="form-control border-0 bg-light box-shadow-none rounded-0 pt-2" placeholder="MESSAGE.." rows="4"></textarea>
					    </div>
					    <div class="d-flex justify-content-center mt-5">
							<p class="text-secondary">
								<input name="AGREE_TO_TERMS" type="checkbox" value="1" required="">
								I agree that my submitted data is being collected and stored.
							</p>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-secondary rounded-0 py-3 px-4">SEND YOUR MASSAGE</button>
						</div>
					</form>
				</div>
				<div class="text-whtie">
					<div>
					  <button type="button" class="btn btn-info btn-outline-dark py-3 px-3  text-white border-0 rounded-0 box-shadow-none">SMALL</button>
					  <button type="button" class="btn btn-info btn-outline-dark py-3 px-4 text-white border-0 rounded-0 box-shadow-none mx-2">NORMAL</button>
					  <button type="button" class="btn btn-info btn-outline-dark py-4 mb-3 text-white  border-0 rounded-0 box-shadow-none" style="width: 189px;" >LARGE</button>
					</div>
					<div class=" my-5">
					  <button type="button" class="btn btn2 py-3 px-5 text-white border-0 rounded-0 box-shadow-none">Link1</button>
					  <button type="button" class="btn btn2 py-3 px-5 text-white border-0 rounded-0 box-shadow-none mx-2 ">Link2</button>
					  <button type="button" class="btn btn-dark btn-outline-info  py-3 px-5 text-white border-0 rounded-0 box-shadow-none">Dark</button>
					</div>
					<div>
					  <button type="button" class="btn bg-color1 py-3 px-5 text-white border-0 rounded-0 box-shadow-none">EXTRA</button>
					  <button type="button" class="btn btn-dark btn-outline-warning py-3 px-5 text-white border-0 rounded-0 box-shadow-none mx-2 ">INVARSE</button>
					  <button type="button" class="btn btn-light btn-outline-warning border-0 py-3 px-4  rounded-0 box-shadow-none text-black ">LIGHT</button>
					</diV>
					<div class="my-5">
						<p class="mb-0 fw-bold">SIMPLE</P>
						<hr class=" cursor-pointer opacity-100 p-0 m-0 fw-bold text-info rounded-pill hover-text-secondary" style="height:5px;width:59px;">
					</div>
				</div>
			</div>
			<div class="col-lg-4 bg-color align-self-start sticky-top mb-5 py-3">
				<div class="row g-4">
						<div class="col-sm-6 col-md-4 col-lg-12">
							<div class="  p-lg-5">
								<h4 class="text-white fw-bold mb-5">Search</h4>
								<div class="input-group px-2">
								  <input type="search" class="form-control p-3 box-shadow-none rounded-0" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
								 <a class="text-black position-absolute start-auto end-0 pe-4 z-index-10" style="margin-top: 18px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" height="15" width="30">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
								</a>
								</div>
							</div>
							<hr class="my-4 text-white m-0">
						</div>
						<div class="col-sm-6 col-md-4 col-lg-12">
							<div class="  px-lg-5 text-white dot">
								<h4 class=" ms-3">Categories</h4>
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
								  <button class="btn btn-secondary btn-outline-warning text-white hover-text-dark box-shadow-none border-0 rounded-0" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">View</button>
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
											<div>
												<img src="../images/demo/post-8.jpg" class="card-img-top" alt="...">
												<div class="card-img-overlay text-end">
													<button class="btn btn-info btn-outline-warning border-0 text-white rounded-0 font-mr-Dafoe" href="#"> 02 <br> Oct </button>
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
											<div>
												<img src="../images/demo/post-9.jpg" class="card-img-top" alt="...">
												<div class="card-img-overlay text-end">
													<button class="btn btn-info btn-outline-warning border-0 text-white rounded-0 font-mr-Dafoe" href="#"> 02 <br> Oct </button>
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
										<div>
											<img src="../images/demo/post-9.jpg" class="card-img-top" alt="...">
											<div class="card-img-overlay text-end">
												<button class="btn btn-info btn-outline-warning border-0 text-white rounded-0 font-mr-Dafoe" href="#"> 02 <br> Oct </button>
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
										<div>
											<img src="../images/demo/post-8.jpg" class="card-img-top" alt="...">
											<div class="card-img-overlay text-end">
												<button class="btn btn-info btn-outline-warning border-0 text-white rounded-0 font-mr-Dafoe" href="#"> 02 <br> Oct </button>
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
											<div>
												<img src="../images/demo/post-8.jpg" class="card-img-top" alt="...">
												<div class="card-img-overlay text-end">
													<button class="btn btn-info btn-outline-warning border-0 text-white rounded-0 font-mr-Dafoe" href="#"> 02 <br> Oct </button>
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
							<h4 class=" ms-5 pb-5 fw-bold text-white"> Calendar</h4>
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
						<hr class="my-5 text-white m-0">
					</div>
					<div class="mx-lg-5 col-sm-6 col-md-4 col-lg-12 pb-5">
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