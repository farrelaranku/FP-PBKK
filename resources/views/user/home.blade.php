<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>TCare Hospital</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">

      <div class="container">
        <a class="navbar-brand" href=""><span class="text-primary">TCare Hospital</a>
          
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        {{-- <div class="collapse navbar-collapse" id="navbarSupport"> --}}
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item active">
              <a class="nav-link" href="home">Home</a>
            </li>
           
           
            <li>

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow; color: whiteh" href="{{ 'myappointment' }}">My Appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
              </li>

             
              @endauth

              @endif

              
           </li>
           
          </ul>
        {{-- </div> <!-- .navbar-collapse --> --}}
      </div> <!-- .container -->
    </nav>
  </header>


 

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">HEALTHY LIVING</span>
        <h1 class="display-4">HAPPY LIFE</h1>
       
      </div>
    </div>
  </div>


  <div class="bg-light">
    

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to TCare <br> Hospital </h1>
            <p class="text-grey mb-4">

              Selamat datang di Pusat Kesehatan Anda, tempat di mana kesehatan dan kesejahteraan menjadi prioritas utama. Kami berkomitmen untuk memberikan pelayanan kesehatan berkualitas tinggi dan perawatan yang peduli kepada semua pasien kami.
<br>
              Dengan tim profesional dan fasilitas medis yang modern, kami berupaya memastikan bahwa setiap kunjungan Anda dijamin kenyamanan dan keamanannya. Kami memahami betapa pentingnya perawatan kesehatan yang holistik, dan kami siap memberikan solusi yang sesuai dengan kebutuhan Anda.
            </p>
            
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')

  @include('user.latest')

 @include('user.appointment')

 

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Ads</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">TCare-Farmasi</a></li>
            <li><a href="#">TCare-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2"> Jl. Arief Rahman Hakim No.213, Keputih, Kec. Sukolilo, Surabaya</p>
          <a href="#" class="footer-link">081-234-5678</a>
          <br>
          <a href="#" class="footer-link">tcare@mail.net</a>

        
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>