<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    @include('home.css')
    <style>
        .div_gap {
            padding: 20px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')

        <div class="div_gap">
            <h3>Enter Payment Details</h3>
            <form action="{{ url('process_payment') }}" method="POST">
                @csrf
                <input type="hidden" name="amount" value="{{ $totalAmount }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="div_gap">
                    <label for="name">Receiver Name:</label>
                    <input type="text" name="name" value="{{ $user->name }}" required>
                </div>

                <div class="div_gap">
                    <label for="address">Receiver Address:</label>
                    <textarea name="address" required>{{ $user->address }}</textarea>
                </div>

                <div class="div_gap">
                    <label for="phone">Receiver Contact:</label>
                    <input type="text" name="phone" value="{{ $user->phone }}" required>
                </div>

                <!-- SSLCommerz Form Fields -->
                <div class="div_gap">
                    <label for="email">Receiver Email:</label>
                    <input type="email" name="email" value="{{ $user->email }}" required>
                </div>

                <div class="div_gap">
                    <label for="payment_method">Select Payment Method:</label>
                    <select name="payment_method" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="mobile_bank">Mobile Banking</option>
                        <option value="internet_banking">Internet Banking</option>
                    </select>
                </div>

                <div class="div_gap">
                    <button type="submit" class="btn">Proceed to Payment</button>
                </div>
            </form>
        </div>

        @include('home.footer')
    </div>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
