<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .div_des{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px;
    }

    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th{
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: black;
    }

    td{
        border: 1px solid skyblue;
    }

    .cart_value{
        text-align: center;
        margin-bottom: 50px;
    }

    .order_des{
        padding-right: 100px;
        margin-top: -50px;

    }

    label{
        display: inline-block;
        width: 150px;
        /* margin-bottom: 10px;
        margin-top: 10px; */
    }

    .div_gap{
        padding: 20px;
    }

  </style>
</head>

<body>
  <div class="hero_area">
    
  @include('home.header')

  <div class="div_des">
    <div class="order_des">
        <form action="{{url('confirm_order')}}" method="Post">
            @csrf
            <div class="div_gap">
                <label for="">Reciever Name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="div_gap">
                <label for="">Reciever Address</label>
                <textarea name="address" id="">{{Auth::user()->address}}</textarea>
            </div>
            <div class="div_gap">
                <label for="">Reciever Contact</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <div class="div_gap">
                <input class="btn btn-primary" type="submit" value="Cash on Delivery">
            </div>
            <div class="div_gap">
                <a class="btn btn-success" href="">Select a Payment Method</a>
            </div>
        </form>
    </div>
    <table>
        <tr>
            <th> Product title </th>
            <th> Price </th>
            <th> Image </th>
            <th> Remove </th>
        </tr>

        <?php
        
        $value=0;

        ?>

        @foreach($cart as $cart)

        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td>
                <img width="100" src="/products/{{$cart->product->image}}" alt="">
            </td>
            <td>
                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_cart', $cart->id)}}">Remove</a>
            </td>        
        </tr>

        <?php

        $value = $value+$cart->product->price;

        ?>

        @endforeach

    </table>
  </div>

  <div class="cart_value">
    <h3>Total Price is: BDT {{$value}}Tk</h3>
  </div>
  
  @include('home.footer')
  
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>