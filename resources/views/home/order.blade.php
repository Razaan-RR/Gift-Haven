<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    .div_des{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th{
        border: 2px solid skyblue;
        background-color: black;
        color: white;
        font-size: 19px;
        font-weight: bold;
        text-align: center;
    }

    td{
        border: 1px solid skyblue;
        padding: 10px;
    }

  </style>

</head>

<body>
  <div class="hero_area">
    
  @include('home.header')

  <div class="div_des">
    <table>
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Delivery Status</th>
            <th>Image</th>
        </tr>

        @foreach($order as $order)
        <tr>
            <td>{{$order->product->title}}</td>
            <td>{{$order->product->price}}</td>
            <td>{{$order->status}}</td>
            <td>
                <img width="100" src="products/{{$order->product->image}}" alt="">
            </td>
        </tr>
        @endforeach
    </table>
  </div>


  </div>

  @include('home.footer')
  
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>