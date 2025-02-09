
<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .contact_section{
      margin: 30px;
    }
    .col-gap{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .box{
      background-color: white;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    
  </div>
  <!-- end hero area -->

  <section class="contact_section">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contact Us
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
            <iframe 
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Dhanmondi+15,+Dhaka,+Bangladesh" 
              width="600" 
              height="300" 
              frameborder="0" 
              style="border:0; width: 100%; height:100%" 
              allowfullscreen>
            </iframe>
            </div>
          </div>
        </div>
        <div class=" col-gap col-md-6 col-lg-5 px-0">
          <div class="box">
          <div>
            <h6>Razaan Reza</h6>
          </div>
          <div>
            <h6>
              Email: razaanreza0705@gmail.com
            </h6>
          </div>
          <div>
            <h6>
              Contact: 0187*******
            </h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>


