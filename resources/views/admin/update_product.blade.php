<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>

        .div_des{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    label{
        display: inline-block;
        width: 200px;
        padding: 20px;
        
    }

    input[type='text']{
        width: 300px;
        height: 60px;
    }

    textarea{
        width: 400px;
        height: 80px;
    }

    </style>
  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1>Update Product</h1>
          <div class="div_des">
            <form action="{{url('edit_product', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div>
                    <label for="">Description</label>
                    <textarea name="description" id="">{{$data->description}}</textarea>
                </div>
                <div>
                    <label for="">Category</label>
                    <select name="category" id="">
                        <option value="{{$data->category}}">{{$data->category}}</option>
                        @foreach($category as $category)
                        <option value="{{$category->category_name}}">
                            {{$category->category_name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="">Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                </div>
                <div>
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" value="{{$data->quantity}}">
                </div>
                <div>
                    <label for="">Current Image</label>
                    <img width="150" src="/products/{{$data->image}}" alt="">
                </div>
                <div>
                    <label for="">New Image</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" value="Save Changes">
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