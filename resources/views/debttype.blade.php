
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Denilink</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('public/assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset ('public/assets/img/Debt1.jpg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.9.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    html, body {
    min-height: 100%;
    padding: 0;
    margin: 0;
    font-family: Roboto, Arial, sans-serif;
    font-size: 20px;
    color: #666;
    }
    h1 {
    margin: 0 0 20px;
    font-weight: 400;
    color: #1c87c9;
    }
    p {
    margin: 0 0 5px;
    }
    .main-block {
    display: grid;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #e4e7e9;
    }
    form {
    padding: 25px;
    margin: 25px;
    box-shadow: 0 2px 5px #f5f5f5; 
    background: #f5f5f5; 
    }
    .fas {
    margin: 25px 10px 0;
    font-size: 72px;
    color: #fff;
    }
    .fa-envelope {
    transform: rotate(-20deg);
    }
    .fa-at , .fa-mail-bulk{
    transform: rotate(10deg);
    }
    input, textarea {
    width: calc(100% - 18px);
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #1c87c9;
    outline: none;
    }
    input::placeholder {
    color: #666;
    }
    button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #d0d5d8; 
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    }
    button:hover {
    background: #2371a0;
    }    
    @media (min-width: 568px) {
    .main-block {
    flex-direction: row;
    }
    .left-part, form {
    width: 50%;
    }
    .fa-envelope {
    margin-top: 0;
    margin-left: 20%;
    }
    .fa-at {
    margin-top: -10%;
    margin-left: 65%;
    }
    .fa-mail-bulk {
    margin-top: 2%;
    margin-left: 28%;
    }
    }
  </style>
  
</head>

<body>
    
    @include('includes.header')


  <!-- ======= Header ======= -->
  



    

<section id="claimdebt">
    
    <div class="main-block">
      <br>  
    <h2>We provide various Charges for Corporate and Personal Debt </h2>
    <p align="center">Click The Link below to choose</p>

<div class="dropdown">
  <!--<button onclick="myFunction()" class="dropbtn">Choose</button>-->
  <div id="myDropdown" class="dropdown-content" align="center">
    <a href="{{url('/claimdebt')}}">Personal Debt</a><br>
    <a href="{{url('/claimdebt')}}">Corporate Debt</a>
   
  </div>
  
</div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    </div>
</section>



  @include('includes.footer')

  

</body>

</html>