<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        table{
            border: 2px solid skyblue;
            text-align: center;

        }

        th{
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: black;
            border: 1px solid blue;
        }

        td{
            color: white;
            padding: 10px;
            border: 1px solid blue;
        }

        .table_des{
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .button_gap{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            border: none;
            margin-top: 25px;
        }

    </style>

  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <div class="table_des">
            <table>
              <tr>
                  <th>Customer Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Product title</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Change Status</th>
              </tr>
              @foreach($data as $data)
              <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->address}}</td>
                  <td>{{$data->contact}}</td>
                  <td>{{$data->product->title}}</td>
                  <td>{{$data->product->price}}</td>
                  <td>
                    <img width="100" src="/products/{{$data->product->image}}" alt="">
                  </td>
                  <td>{{$data->status}}</td>
                  <td class="button_gap">
                    <a class="btn btn-danger" href="{{url('on_the_way', $data->id)}}">On the way</a>
                    <a class="btn btn-success" href="{{url('delivered', $data->id)}}">Delivered</a>
                  </td>

              </tr>
              @endforeach
            </table>
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