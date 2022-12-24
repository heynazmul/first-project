
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
        <?php include('../nav-demo.php')?>
        <?php include('all-post.php')?>
        <?php include('blog.php')?>
        <?php include('../footer.php')?>
        </main>
    <footer>
    </footer>
   <script src="<?php echo $baseurl;?>js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo $baseurl;?>js/swiper-bundle.min.js"></script>
    <!-- wow js -->
	<script src="<?php echo $baseurl;?>js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo $baseurl;?>js/jquery.waypoints.min.js"></script>
	<script src="<?php echo $baseurl;?>js/jquery.counterup.min.js"></script>
    <script src="<?php echo $baseurl;?>js/wow.min.js"></script>
    <!-- custom wow -->
    <script src="<?php echo $baseurl;?>js/custom.js"></script>
</body>
</html>