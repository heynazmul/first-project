<!doctype html>
<?php 
	$baseurl='http://localhost/project/';
?>


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nazmul Hossain</title>
    <link rel="icon" href="<?php echo $baseurl;?>images/demo/logos/logo.png" type="image/x-icon">
	<link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;0,600;0,700;0,800;0,900;1,800;1,900&display=swap"
    rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/bootstrap-extensions.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/theme.css">
</head>
<body>
    <header>
    </header>
        <main>
			<div class="col-4">
					 <div class="bg-white">
                    <div class="position-absolute text-color1 ms-5 pt-2">
                        <span class="display-1 fw-bold font-mr-Dafoe counter">655</span>
                    </div>
                    <div class="d-flex justify-content-center position-relative pt-5">
						<svg xmlns="http://www.w3.org/2000/svg" heigh="100" width="100" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M17.778 8.222c-4.296-4.296-11.26-4.296-15.556 0A1 1 0 01.808 6.808c5.076-5.077 13.308-5.077 18.384 0a1 1 0 01-1.414 1.414zM14.95 11.05a7 7 0 00-9.9 0 1 1 0 01-1.414-1.414 9 9 0 0112.728 0 1 1 0 01-1.414 1.414zM12.12 13.88a3 3 0 00-4.242 0 1 1 0 01-1.415-1.415 5 5 0 017.072 0 1 1 0 01-1.415 1.415zM9 16a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
						</svg>
					</div>
                    <div class="d-flex flex-column m-auto pt-5 pb-4 text-center">
                        <a class=" text-black text-uppercase fw-bold p-0 m-0 text-decoration-none " href="#">Free Fast Internet</a>
                        <hr class=" p-0 m-0 bg-warning mx-auto rounded-circle opacity-0 hover-opacity-100 transition-all duration-700" style="height:5px; width:163px">
                    </div>
                </div>
				</div>
        </main>
    <footer>
    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- wow js -->
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.counterup.min.js"></script>
	
	 <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>
</html>
