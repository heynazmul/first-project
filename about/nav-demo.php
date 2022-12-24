<style type="text/css">
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
} 

 
</style>
<!-- nav part -->
	<nav class="container-fluid pt-3 pb-2 navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/demo/logos/logo.png" alt=""></a>
            <button class="navbar-toggler border-0 box-shadow-none" btn-light ms-2 type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mainNavOffcanvas">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0 " id="underline">
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link " href="#" id="dropdown04" data-bs-toggle="dropdown"
                            aria-expanded="false">Home</a>
                        <ul class="dropdown-menu  py-3 p-2 pe-5 nav-bg border-0 rounded-0" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="#">Home Fullwidth</a></li>
                            <li><a class="dropdown-item" href="#">Home Boxed</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link " href="" data-bs-toggle="dropdown"
                            aria-expanded="false">FEATURES</a>
                        <ul class="dropdown-menu py-3 p-2 pe-5 nav-bg rounded-0" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="http://localhost/project/features/index.php" id="dropdown04">Typography</a></li>
                            <li><a class="dropdown-item" href="http://localhost/project/shortcodes/index.php">Shortcodes</a></li>
                           <li class="">
						   <a class="dropdown-item dropdown-toggle" href="">Google</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Submenu</a></li>
									<li><a class="dropdown-item" href="#">Submenu0</a></li>
								</ul>
							</li>
                            <li><a class="dropdown-item" href="#">HELP</a>
								<a class="text-black position-absolute" style="margin-top: -26px;margin-left: 112px;">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="currentColor"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
								</a>
								<ul class="dropdown-menu submanu nav-bg p-3 pe-5  rounded-0 ">
									<li><a href="#" class="dropdown-item">SERVICE PLUS</a></li>
									<li><a href="#" class="dropdown-item">PRIVACY POLICY</a></li>
								</ul>
							</li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link " href="#" id="dropdown04" data-bs-toggle="dropdown"
                            aria-expanded="false">ABOUT</a>
                        <ul class="dropdown-menu py-3 p-2 pe-5 nav-bg rounded-0" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="http://localhost/project/our-features/index.php">Our Features</a></li>
                            <li><a class="dropdown-item" href="http://localhost/project/our-benefits/index.php">Our Benefits</a></li>
                            <li><a class="dropdown-item" href="http://localhost/project/our-service/index.php">Our Service</a></li>
                            <li><a class="dropdown-item" href="http://localhost/project/our-team/index.php">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link " href="http://localhost/project/pricing/index.php" id="dropdown04" data-bs-toggle="dropdown"
                            aria-expanded="false">PRICING</a>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link " href="#" id="dropdown04" data-bs-toggle="dropdown"
                            aria-expanded="false ">BLOG</a>
                        <ul class="dropdown-menu py-3 p-2 pe-5 nav-bg rounded-0" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="http://localhost/project/all-post/index.php">ALL POSTS</a></li>
                            <li><a class="dropdown-item" href="#">CLASSIC STYLE</a>
								<a class="text-black position-absolute" style="margin-top: -26px;margin-left: 140px;">
									<svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="currentColor"
										viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M17 8l4 4m0 0l-4 4m4-4H3" />
									</svg>
								</a>
								<ul class="dropdown-menu submanu nav-bg p-3 pe-5  rounded-0 ">
									<li><a href="http://localhost/project/classic-2col/index.php" class="dropdown-item">2 COLUMNS</a></li>
									<li><a href="http://localhost/project/classic-3col/index.php" class="dropdown-item">3 COLUMNS</a></li>
								</ul>
							</li>
                            <li><a class="dropdown-item" href="#">CHESS STYLE</a>
								<a class="text-black position-absolute" style="margin-top: -26px;margin-left: 140px;">
									<svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="currentColor"
										viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M17 8l4 4m0 0l-4 4m4-4H3" />
									</svg>
								</a>
								<ul class="dropdown-menu submanu nav-bg p-3 pe-5  rounded-0 ">
									<li><a href="http://localhost/project/chess-style-2col/index.php" class="dropdown-item">2 COLUMNS</a></li>
									<li><a href="http://localhost/project/chess-style-4col/index.php" class="dropdown-item">4 COLUMNS</a></li>
									<li><a href="http://localhost/project/chess-style-6col/index.php" class="dropdown-item">6 COLUMNS</a></li>
								</ul>
							</li>
                            <li><a class="dropdown-item" href="#">PORTFOLIO</a>
								<a class="text-black position-absolute" style="margin-top: -26px;margin-left: 140px;">
									<svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="currentColor"
										viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M17 8l4 4m0 0l-4 4m4-4H3" />
									</svg>
								</a>
								<ul class="dropdown-menu submanu nav-bg p-3 pe-5  rounded-0 ">
									<li><a href="http://localhost/project/portfolio-2col/index.php" class="dropdown-item">2 COLUMNS</a></li>
									<li><a href="http://localhost/project/portfolio-4col/index.php" class="dropdown-item">4 COLUMNS</a></li>
									<li><a href="http://localhost/project/portfolio-6col/index.php" class="dropdown-item">6 COLUMNS</a></li>
								</ul>
							</li>	
                        </ul>
                    </li>
                    <li class="nav-item dropdown hover-dropdown ">
                        <a class="nav-link" href="http://localhost/project/events/index.php">EVENTS</a>
                    </li>
                    <li class="nav-item dropdown hover-dropdown d-none d-xl-block ">
                        <a class="nav-link" href="http://localhost/project/contact/index.php">CONTACT US</a>
                    </li>
                    <ul class="nav-item dropdown hover-dropdown  d-xl-none">
                        <a class="nav-link px-2 d-flex align-items-center nav-bg dropdown-toggle-split rounded-pill" href="#"
                            id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" color="black"
                                fill="currentColor" viewBox="0 0 192 512">
                                <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path
                                    d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end nav-bg rounded-0">
                            <li><a class="dropdown-item" href="http://localhost/project/contact/index.php">CONTACT US</a></li>
                            <li><a class="dropdown-item" href="http://localhost/project/book/index.php">BOOK A TOUR</a></li>
                        </ul>
                    </ul>
                    <div class="nav-item mt-3 d-none d-xl-block">
                        <a class="  bg-color1 border1" href="http://localhost/project/book/index.php">BOOK A TOUR</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
      <!-- offcanvas -->
    <?php include('offcanvas.php');?>
      