<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{ asset('FrontEnd')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/vendor/bootstrap/css/bootstrap.min.css">
  <!--
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/css/util.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd')}}/css/main.css">
<!--===============================================================================================-->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/aos.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/style.css">
</head>
<body style="background-color: #666666;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action='userlogin'>
          
          @csrf
          <span class="login100-form-title p-b-43">
          <h2>  Login </h2>
          </span>
          
          
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pass">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>
      

          <div class="container-login100-form-btn">
        <button type="submit" class="btn btn-primary">Login  </button>

          </div>

          <div class="text-center p-t-46 p-b-20">
            <span class="txt2">
              or sign In using 
            </span>
          </div>
            <div class="custom-block" data-aos="fade-up">
              <center>
          <ul class="list-unstyled social-icons light">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
            <li><a href="#"><span class="icon-google"></span></a></li>
            <li><a href="#"><span class="icon-play"></span></a></li>
          </ul>
         

       <!-- </div> 
          <div class="text-center p-t-46 p-b-20"> -->
            <span class="txt2">
         u don't have  compte yet ? </BR></br>
        <button type="submit" class="btn btn-primary">Registre Now</button>
            </span>
             </center>
          </div>

        </form>

        <div class="login100-more" style="background-image: url('{{ asset('FrontEnd')}}/images/j1.jpg');">
        </div>
      </div>
    </div>
  </div>
  
  

  
  
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/vendor/bootstrap/js/popper.js"></script>
  <script src="{{ asset('FrontEnd')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/vendor/daterangepicker/moment.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('FrontEnd')}}/js/main.js"></script>
    <script src="{{ asset('FrontEnd')}}/js/jquery-3.4.1.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/popper.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/bootstrap.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/jquery.fancybox.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/aos.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/custom.js"></script>

</body>
</html>