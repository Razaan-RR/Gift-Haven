
<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .contact-des{
        background: linear-gradient(to right, #667eea, #764ba2);
    }
    .contact_section{
      margin: 30px;
    }
    .col-gap{
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>

  <div class="contact-des">
  @include('home.header')
  @include('home.contact') 
  @include('home.footer') 
  
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>
  </div>

</body>

</html>


