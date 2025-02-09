<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        .div_des{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        .input_text{
            width: 400px;
            height: 50px;
        }
    </style>
  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 style="color:white">Update Category</h1>
          <div class="div_des">
            <form action="{{url('update_category', $data->id)}}" method="post">
                @csrf
                <input class="input_text" type="text" name="category" value="{{$data->category_name}}">
                <input class="btn btn-primary" type="submit" value="Update Category">
            </form>
          </div>

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