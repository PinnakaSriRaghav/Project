<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <title>Car Rental</title>
  </head>
  <body>
   <!-- Header -->
   <header>
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
    <!-- End od navbar -->
    <!-- Banner -->

    <?php

    if(isset($_POST['price_unit'])){

      include('connect.php');

      $price_unit = $_POST['price_unit'];
      $car_name = $_POST['car_name'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $p_address = $_POST['p_address'];
      $d_address = $_POST['d_address'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $p_date_time = $_POST['p_date_time'];
      $d_date_time = $_POST['d_date_time'];
      $cc_name = $_POST['cc-name'];
      $cc_number = $_POST['cc-number'];

      $time1 = strtotime($p_date_time);
      $time2 = strtotime($d_date_time);
      $difference = round(abs($time2 - $time1) / 3600,2);

      $total_cost = $difference*$price_unit;
      
      $sql = "INSERT INTO `bookings` (`fname`, `lname`, `email`, `pick_address`, `drop_address`, `state`, `zip`, `car_name`, `hourly_price`, `total_hours`, `total_cost`, `pickup_date_time`, `drop_date_time`, `name_on_card`, `card_number`) VALUES ('".$fname."', '".$lname."', '".$email."', '".$p_address."', '".$d_address."', '".$state."', '".$zip."', '".$car_name."', '".$price_unit."', '".$difference."', '".$total_cost."', '".$p_date_time."', '".$d_date_time."', '".$cc_name."', '".$cc_number."')";

      if ($conn->query($sql) === TRUE) {
        echo '<div class="text-light text-right banner">
                <h1 class="display-4 text-center font-weight-bold heading">
                    Thank you For Booking a wonderful Car <br>
                    Our Executive will reach you soon In next 20minutes Regarding the Order Placed <br>
                    Have Enjoyful and Happy Trip....Happy Journey
                </h1>
                <p class="main text-center">Drive Safe...Be Happy</p>
            </div>';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    }else{

      header('Location:index.html');
    }
    ?>
    
    <!-- end of banner -->
    </header>
    <!-- End of the header --> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>