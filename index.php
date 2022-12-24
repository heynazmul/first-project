<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nazmul Hossain</title>
    <link rel="icon" href="images/demo/logos/logo.png" type="image/x-icon">
	<link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;0,600;0,700;0,800;0,900;1,800;1,900&display=swap"
    rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-extensions.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	
    <link rel="stylesheet" href="css/theme.css">
    <style>
   

        body {
            box-shadow: none;
        }
        
    </style>
</head>

<body>
    <header>
        <!-- nav part -->
        <?php include('nav-demo.php');?>
    </header>
    <main>
        <!-- Section Name -->
        <!-- Slider part -->
        <?php include ('slider-demo.php');?>
        <!-- service part -->
        <?php include ('service.php');?>
        <?php include ('video.php');?>
        <!-- Amenitis part -->
        <?php include('amenitis.php');?>
        <!-- Hospitality part -->
        <?php include('hospitality.php');?>
        <!-- Offer part -->
        <?php include('offer.php');?>
        <!-- Events part -->
        <?php include('events.php');?>
        <!-- Trial part -->
        <?php include('trial.php');?>
        <?php include('membership.php');?>
        <!-- Benefits part -->
        <?php include('benefits.php');?>
        <!-- Swiper part -->
        <?php include('Swiper.php');?>
        <!-- Blog part -->
        <?php include('blog.php');?>
        <!-- Gallery part -->
        <?php include('gallery.php');?>
        <!-- Find part -->
        <?php include('find.php');?>
        <?php include('contact-us.php');?>
        <!-- Footer part -->
        <?php include('footer.php');?>
    </main>
    <footer>
    </footer>
	
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- custom wow -->
    <script src="js/custom.js"></script>
	<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper("#main-swiper-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
    }
    );
</script>
  <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            //direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
	<script>
	  window.onscroll = function(){
			var scrollValue = window.pageYOffset;
		if(scrollValue >800){
		  document.querySelector('#upper').classList.remove('opacity-0');
		  document.querySelector('#upper').classList.add('opacity-100');
		}else{
		  document.querySelector('#upper').classList.remove('opacity-100');
		  document.querySelector('#upper').classList.add('opacity-0');
		}
	  }
	  
	  document.querySelector('#upper').addEventListener("click",function(){
		window.scrollTo(0,0);
	  });
	</script>
</body>

</html>