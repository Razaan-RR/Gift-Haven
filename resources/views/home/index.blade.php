<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .home-design{
      background: linear-gradient(to right, #667eea, #764ba2);
    }
  </style>
</head>

<body>
  <div class="home-design">
  <div class="hero_area">
    
    @include('home.header')
    @include('home.slider')  
    </div>
    <!-- end hero area -->
  
    @include('home.product')
    
    @include('home.contact')
  
    @include('home.footer')
  </div>
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>