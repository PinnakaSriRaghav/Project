<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Booking.CSS">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <title>Car Rental</title>
    
  </head>
  <body>
   <!-- Header -->

   <?php
    $price_unit = 0;
    if( isset($_POST['price_unit']) ){

      $price_unit = $_POST['price_unit'];              
      $car_name = $_POST['car_name'];              
    }
    else{
      header('Location:Services.html');
    }
    ?>
   
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
    <!--  -->
    <!--  -->
    <div class="container">
        <div class="py-5 text-center">
            <i class="fas fa-car-side fa-3x"></i>
          <h2>Booking Form</h2>
          <p class="lead">Please Ensure You are entering the correct details And Please check Prize While Checkout If you are comfortable<br> We Ensure You Book a Comfortable Car...&...Have a Safe Drive</p>
        </div>
      
        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <!-- <span class="badge badge-secondary badge-pill">3</span> -->
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Car Name</h6>
                  <small class="text-muted">Type of car</small>
                </div>
                <span class="text-muted"><?= $car_name; ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Car Prize</h6>
                </div>
                <span class="text-muted">Rs : <?= $price_unit; ?>/hr</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">How many hours Rented for:</h6>
                  <small class="text-muted">*(Fix and Book)*</small>
                </div>
                <span class="text-muted" id="show_total_hours">  </span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Tax</h6>
                  <small class="text-muted">GST</small>
                </div>
                <span class="text-muted">Rs : 0</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small></small>
                </div>
                <span class="text-success">Rs : 0</span>
              </li>
              <li class="list-group-item d-flex justify-content-between" id="total_fair">
                <span>Total Fare</span>
                <strong>Rs. : 0 </strong>
              </li>
            </ul>
          </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing Section</h4>

            <form class="needs-validation" action="confirmation.php" method="post">
              <input type="hidden" name="price_unit" id="price_unit" value="<?= $price_unit; ?>">
              <input type="hidden" name="car_name" value="<?= $car_name; ?>">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" name="fname" placeholder="First Name" required="required">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lname" placeholder="Last Name" required="required">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
            </div>
      
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="required">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
      
              <div class="mb-3">
                <label for="address">Picking Address</label>
                <input type="text" class="form-control" id="address" name="p_address" placeholder="Picking Address" required="required">
                <div class="invalid-feedback">
                  Please enter your Vechile picking address address.
                </div>
              </div>
      
              <div class="mb-3">
                <label for="address2">Dropping Address</label>
                <input type="text" class="form-control" id="address2" name="d_address" placeholder="Dropping Address" required="required">
                <div class="invalid-feedback">
                    Please enter your Vechile picking address address.
                </div>
              </div>

              
                <div class="row">
                    <div class="col-md-6">
                      <label for="state">State</label>
                      <select class="custom-select d-block w-100" id="state" name="state" required="required">
                        <option value="">Choose...</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Telangana">Telangana</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="zip">Zip</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zipcode" required="required">
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>

                  </div>
                
              <div class="clearfix">&nbsp;</div>
      
              <div class="row">

                <div class="col-md-6 mb-3">
                  <label for="country">Pickup Date & Time</label>
                  <div class="inpbox">
                    <!-- <span class="flaticon-calendar"></span> -->
                    <!-- <input type="date" placeholder="Pickup Date" name="p_date" required="required"> -->
                    <input class="form-control" id="p_date_time" type="datetime-local" placeholder="Pickup Date" name="p_date_time" required="required">
                  </div>
                  <div class="invalid-feedback">
                    Please select a valid Pickup Date.
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="country">Drop Date & Time</label>
                  <div class="inpbox">
                    <!-- <span class="flaticon-calendar"></span> -->
                    <!-- <input type="date" placeholder="Pickup Date" name="p_date" required="required"> -->
                    <input class="form-control" id="d_date_time" type="datetime-local" placeholder="Pickup Date" name="d_date_time" required="required">
                  </div>
                  <div class="invalid-feedback">
                    Please select a valid Pickup Date.
                  </div>
                </div>               
                
              </div>

              <hr class="mb-4">

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div>
              <hr class="mb-4">
      
              <h4 class="mb-3">Payment</h4>
      
              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required="required">
                  <label class="custom-control-label" for="credit">Credit card/Debit card</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="Name On Card" required="required">
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="Card Number" required="required">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <!-- <a href="Confirmation.html" class="btn hvr-right my-4 text-capitalize">
                Book
              </a> -->
              <input type="submit" name="book" value="Book" class="btn hvr-right my-4 text-capitalize">
            </form>
          </div>
        </div>
      
        <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">&copy; Copyright 2021 - Group 3</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </footer>
      </div>

    <!--  -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){

        $('#p_date_time').change(function(){

          var p_date_time = $(this).val();
          var d_date_time = $('#d_date_time').val();
          var price_unit = $('#price_unit').val();

          if(p_date_time != '' && d_date_time != ''){

            $.ajax({
              url : 'calculate.php',
              type : 'POST',
              data : {'p_date_time' : p_date_time, 'd_date_time' : d_date_time, 'price_unit' : price_unit},
              success : function(data){

                var temp = data.split('||');

                $('#show_total_hours').html(temp[0]);
                $('#total_fair').html('');
                $('#total_fair').html('<span>Total Fare</span><strong>Rs. : '+temp[1]+' </strong>');

              }

            });
          }

        });

        $('#d_date_time').change(function(){

          var price_unit = $('#price_unit').val();
          var p_date_time = $('#p_date_time').val();
          var d_date_time = $(this).val();

          if(p_date_time != '' && d_date_time != ''){

            $.ajax({
              url : 'calculate.php',
              type : 'POST',
              data : {'p_date_time' : p_date_time, 'd_date_time' : d_date_time, 'price_unit' : price_unit},
              success : function(data){

                var temp = data.split('||');

                $('#show_total_hours').html(temp[0]);
                $('#total_fair').html('');
                $('#total_fair').html('<span>Total Fare</span><strong>Rs. : '+temp[1]+' </strong>');
              }

            });
          }

        });
      });
    </script>
  </body>
</html>