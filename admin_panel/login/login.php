<?php 

require_once 'jslogin.php';

if(isset($_SESSION['adminlogin'])){
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>ILYASS BENHADDA | Web Developer</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/fontawesome-all.css" rel="stylesheet">
	<link href="../assets/css/styles.css" rel="stylesheet">
	<style>.form-control {border-radius: 0;}.form-control:focus {box-shadow: none;border-color: #ced4da;border-bottom: 1.5px solid #212529;}</style>
    
    <!-- Favicon  -->
    <link rel="icon" href="../../assets/images/black-logo.png">
</head>
<body>
<!-- Log Form -->
<div class="log-form">
    <h1>WELCOME BACK</h1>
    <form method="post">
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="pwd" placeholder="password" required="">
        </div>
        <div class="form-submit">
            <button class="btn-ily-mode" name="login" id="login" type="submit">LOG IN</button>
        </div>
    </form>
</div>
<!--end Log Form -->

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../assets/js/scripts.js"></script>

</body>
</html>