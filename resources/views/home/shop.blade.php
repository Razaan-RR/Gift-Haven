<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .shop-design{
      background: linear-gradient(to right, #667eea, #764ba2);
    }
  </style>
</head>

<body>
  <div class="shop-design">
  <div class="hero_area">
    
    @include('home.header')
    </div>
    <!-- end hero area -->
  
    @include('home.product')
      
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="{{asset('js/custom.js')}}"></script>
  </div>

</body>

</html>