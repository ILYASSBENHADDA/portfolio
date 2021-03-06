<?php  require "assets/php/sendmail.php";?>
<?php require_once 'admin_panel/action.php';?>
<?php require_once 'admin_panel/jsabout.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="Ilyass Benhadda">

    <!-- Website Title -->
    <title>ILYASS BENHADDA | Web Developer</title>
    
    <!-- Styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="assets/images/black-logo.png">
</head>
<body>

    <!-- Icon Bar -->
    <div class="icon-bar">
        <a href="<?= $facebook; ?>" target="_blank" class="facebook wow fadeInRight" data-wow-delay="0.3s"><i class="fab fa-facebook-f"></i></a> 
        <a href="<?= $twitter;  ?>" target="_blank" class="twitter wow fadeInRight" data-wow-delay="0.5s"><i class="fab fa-twitter"></i></a> 
        <a href="<?= $github;   ?>" target="_blank" class="github wow fadeInRight" data-wow-delay="0.7s"><i class="fab fa-github"></i></a> 
        <a href="<?= $linked_in;?>" target="_blank" class="linkedin wow fadeInRight" data-wow-delay="0.9s"><i class="fab fa-linkedin-in"></i></a>
        <a href="<?= $instagram;?>" target="_blank" class="instagram wow fadeInRight" data-wow-delay="1.1s"><i class="fab fa-instagram"></i></a> 
    </div>
    <!-- end of Icon Bar -->


    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-md navbar-light">
        <a href="index.php" class="navbar-brand">
            <img src="assets/images/black-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-stretch" id="navbar6">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Me</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of Navbar -->
    

    <!-- Header -->
    <header class="header wow fadeInLeft" data-wow-delay="0.3s">
        <div class="header-content">
            <div class="container">
                <h2 class="hi wow fadeInUp" data-wow-delay="0.3s">HI! I'M,</h2>
                <h1 class="first-name wow fadeInUp" data-wow-delay="0.5s">ILYASS</h1>
                <h2 class="last-name wow fadeInUp" data-wow-delay="0.7s">BENHADDA</h2>
                <h2 class="job-name wow fadeInRight" data-wow-delay="0.9s">#WEB_DEVELOPER</h2>
                <a class="btn btn-ily-mode wow fadeInLeft" data-wow-delay="1.1s" href="#contact">CONTACT ME</a>
            </div>
        </div>
    </header>
    <!-- end of Header -->


    <!-- About Us -->
    <div class="about" id="about">
        <div class="img-area"></div>
        <div class="disc-area">
            <div class="about-infos">
                <h2 class="primary-h wow fadeInUp" data-wow-delay="0.3s"><span>01.</span>ABOUT</h2>
                <h3 class="wow fadeInUp" data-wow-delay="0.5s">Who Am I?</h3>
            <!-- <h2>I'm Ilyass Benhadda, a visual UX/UI Designer and Web Developer</h2> -->
            <h2 class="wow fadeInUp" data-wow-delay="0.7s"><?= $second_description; ?></h2>
            <p class="wow fadeInUp" data-wow-delay="0.9s"><?= $first_description; ?></p>
            <hr>
            <address class="content-info">
                <div class="row wow fadeInUp" data-wow-delay="0.3s">
                  <div class="col-12 col-md-6 single-info"><span>Name:</span>
                    <p><?= $full_name; ?></p>
                  </div>
                  <div class="col-12 col-md-6 single-info"><span>Email:</span>
                    <p><a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
                  </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.5s">
                  <div class="col-12 col-md-6 single-info"><span>Age:</span>
                    <p><?= $age; ?></p>
                  </div>
                  <div class="col-12 col-md-6 single-info"><span>From:</span>
                    <p><?= $location; ?></p>
                  </div>
                </div>
            </address>
            <a class="btn btn-ily-mode wow fadeInLeft" data-wow-delay="0.7s" href="admin_panel/<?= $cv; ?>" download> DOWNLOAD CV </a>
            </div>
        </div>
    </div>
    <!-- end of About Us -->


    <!-- Project -->
    <div class="slider-1" id="projects">
        <div class="container">
            <h2 class="primary-h mb-5 text-center"><span>02.</span>PROJECTS</h2>
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <?php
                                    $query = "SELECT * FROM projects";	
                                    $stmt = $conn->prepare($query);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                ?>

                                <?php while($row=$result->fetch_assoc()) { ?>
                                <!-- Slide -->
                                <div class="swiper-slide wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="card">
                                        <img class="card-image" src="admin_panel/<?= $row['project_image']; ?>" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text"><?= $row['project_description']; ?></p>
                                            <a class="btn btn-ily-mode" target="_blank" href="<?= $row['project_link']; ?>">View Project</a>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <?php } ?>
                                
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of Project -->

    <!-- Contact Us -->
    <div class="contact" id="contact">
        <div class="container">
            <h2 class="primary-h mb-5 text-center"><span>03.</span>CONTACT ME</h2>
            <div class="row">
                <!-- Contact form-->
                <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="0.3s">
                  <form method="post" class="contact-form" id="contact-form" action="">
                    <h4 class="content-title">GET IN TOUCH</h4>
                    <div class="row">
                        <div class="col-12 col-md-6 form-group">
                            <input class="form-control" id="contact-name" type="text" name="name" placeholder="Name" required="">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <input class="form-control" id="contact-email" type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="col-12 form-group">
                            <input class="form-control" id="contact-subject" type="text" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-12 form-group form-message">
                            <textarea class="form-control" id="contact-message" name="message" placeholder="Message" rows="5" required=""></textarea>
                        </div>
                        <div class="col-12 form-submit">
                            <button class="btn btn-ily-mode" id="contact-submit" name="send_message" type="submit">SEND MESSAGE</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Contact info-->
                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="0.3s">
                  <div class="contact-info">
                    <h4 class="content-title">CONTACT INFOS</h4>
                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                    <ul>
                        <li>
                            <table>
                                <tr>
                                    <th rowspan="2"><i class="fas fa-user"></i></th>
                                    <th>Name</th>
                                  </tr>
                                  <tr>
                                    <td><p> <?= $full_name; ?> </p></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <th rowspan="2"><i class="fas fa-map-marker-alt"></i></th>
                                    <th>Location</th>
                                  </tr>
                                  <tr>
                                    <td><p> <?= $location; ?> </p></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <th rowspan="2"><i class="fas fa-phone"></i></th>
                                    <th>Call Me</th>
                                  </tr>
                                  <tr>
                                    <td><p>+212 <?= $phone; ?></p></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <th rowspan="2"><i class="fas fa-envelope"></i></th>
                                    <th>Email ME</th>
                                  </tr>
                                  <tr>
                                    <td><p> <?= $email; ?> </p></td>
                                  </tr>
                            </table>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!-- end of Contact Us -->
    <!-- Copyright -->
        <!-- <div class="copyright">
            <p>Copyright © 2020 Made by <span>Ilyass Benhadda</span> - All rights reserved</p>
        </div> -->
    <!-- end of Copyright -->


    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/js/wow.min.js"></script> <!-- Wow.js Animation -->
    <script src="assets/js/scripts.js"></script>
      
</body>
</html>