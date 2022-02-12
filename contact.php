<?php

require_once('connect.php');

global $conn;

if (isset($_POST['contact'])) {
    $email = $_POST['email'];
    $name = $_POST['f_name'];
    $message = $_POST['message'];


    if ($email == NULL && $message == NULL && $name == NULL) {
        echo "Function Working";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO contact (email,f_name,message) VALUES('$email','$name','$message')");

        header('location: Contact_thanks.html');
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <title>Car Rental</title>
  </head>
  <body>
<header>
    <section class="most-liked p-5">
        <div class="video-container">
            <video class="bg-video" autoplay muted loop>
                <source src="images/Kerala - The Real Beauty of Nature 4K! - Cinematic Video.mp4" type="video/mp4">
                <source src="images/Kerala - The Real Beauty of Nature 4K! - Cinematic Video.webm">    
            </video>
        </div>  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top nav-menu">
        <a href="Index.html"><i class="fas fa-car-side fa-3x"></i></a>
        <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbar">
            <div class="bg-light bar1"></div>
            <div class="bg-light bar2"></div>
            <div class="bg-light bar3"></div>
        </button>
        <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="navbar">
            <ul class="navbar-nav">
            <li class="nav-item"><a href="Index.html" class="nav-link m-2 menu">Home</a></li>
            <li class="nav-item"><a href="Services.html" class="nav-link m-2 menu">Services</a></li>
            <li class="nav-item"><a href="About.html" class="nav-link m-2 menu">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link m-2 menu">Contact Us</a></li>
            <li class="nav-item"><a href="Login.php" class="nav-link m-2 menu">Login</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- contact us -->
    <div class="contact">
            <div class="container">
                <div class="text-center py-5">
                    <h2 class="py-3" style="color: blanchedalmond;">Contact Us</h2>
                    <div class="mx-auto heading-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Google map -->
                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245055.2730423763!2d80.29477469206965!3d16.323524633091605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a755cb1787785%3A0x9f7999dd90f1e694!2sGuntur%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1616519980157!5m2!1sen!2sin" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <form action="" method="POST" class="col-lg-6">
                        <div class="form-group">
                            <label for="email" style="color: blanchedalmond;">Email</label>
                            <input id="email" class="form-control" type="Email" aria-describedat="emailhint" placeholder="Enter Your Email" style="background-color: #8a8a8a;" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: blanchedalmond;">Name</label>
                            <input id="name" class="form-control" type="text" placeholder="Your Name" style="background-color: #8a8a8a;" name="f_name">
                        </div>
                        <div class="form-group">
                            <label for="message" style="color: blanchedalmond;">Message</label><br>
                            <textarea id="message" class="form-contol" placeholder="Message"  rows="5" style="background-color: #8a8a8a;" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn hvr-right my-4 btn-lg" name="contact">Contact</button>
                    </form>
                    
                </div>
            </div>
    </div>
    </section>
</header> 
   
    <!-- footer's -->
    <div class="footer">
        <div class="container1">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png" >
                    </div>
                </div>
                <div class="footer-col-2">
                    <a href="Index.html"><i class="fas fa-car-side fa-3x"></i></a>
                    <p>Our Purpose Is To Sustainably make the Pleasure and 
                    Benifits of sports Accessible to the many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="">Coupons</a></li>
                        <li><a href="">Blogs Post</a></li>
                        <li><a href="">Return policy</a></li>
                        <li><a href="">Join Affiliates</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Social Media</h3>
                    <ul>
                        <li><a href="">FaceBook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">LinkedIn</a></li>
                        <li><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">CopyRight 2021 - Group - 3</p>
        </div>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    </html>