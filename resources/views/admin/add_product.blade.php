<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        .div_des{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        label{
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: white !important;
        }

        input[type=text]
        {
            width: 350px;
            height: 50px;
        }

        textarea{
            width: 450px;
            height: 80px;
        }

        .input_des{
            padding: 15px;
        }

    </style>
  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 style="color:white">Add Product</h1>

          <div class="div_des">
            <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input_des">
                    <label for="">Product Title</label>
                    <input type="text" name="title">
                </div>
                <div class="input_des">
                    <label for="">Product Description</label>
                    <textarea name="description" required></textarea>
                </div>
                <div class="input_des">
                    <label for="">Product Price</label>
                    <input type="text" name="price">
                </div>
                <div class="input_des">
                    <label for="">Product Quantity</label>
                    <input type="number" name="qty">
                </div>
                <div class="input_des">
                    <label for="">Product Category</label>
                    <select name="category" required>
                        <option value="">
                            Select
                        </option>
                        @foreach($category as $category)
                        <option value="{{$category->category_name}}">
                            {{$category->category_name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="input_des">
                    <label for="">Product Image</label>
                    <input type="file" name="image">
                </div>
                <div class="input_des">
                    <input class="btn btn-success" type="submit" value="Add Product">
                </div>
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