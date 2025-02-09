<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            @include('admin.body')
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/adminPage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/adminPage/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/adminPage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/adminPage/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/adminPage/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/adminPage/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/adminPage/js/charts-home.js')}}"></script>
    <script src="{{asset('/adminPage/js/front.js')}}"></script>
  </body>
</html>