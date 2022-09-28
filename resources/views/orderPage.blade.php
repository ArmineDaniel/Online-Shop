<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Street</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
        body {
            width: 1440px;
            margin: auto;
            font-family: 'Poppins';
        }

        header {
            background-color: #F6EBDA;
            padding-top: 41px;
            height: 970px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            margin: 0px 152px 0px 140px;
        }

        footer {
            margin-top: 220px;
        }

        form {
            text-align: center;
            margin-left: 115px;
        }
        .footer_div {
            text-align: center;
        }
        .email {
            width: 486px;
            height: 54px;
            border-radius: 42px;
            padding-left: 25px;
        }

        .email::placeholder {
            color: #7E7D7A;
            font-weight: 600px;
            font-size: 16px;
            line-height: 24px;
        }
        .order2 {
            left: -145px;
            background-color: #2F2105;
            height: 44px;
            border-radius: 33px;
            padding: 12px 32px 12px 32px;
            color: white;
        }
        select {

            /* styling */
            background-color: white;
            border: thin solid blue;
            border-radius: 4px;
            display: inline-block;
            font: inherit;
            line-height: 1.5em;
            padding: 0.5em 3.5em 0.5em 1em;

            /* reset */

            margin: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
        }


        /* arrows */

        select.classic {
            background-image:
                linear-gradient(45deg, transparent 50%, blue 50%),
                linear-gradient(135deg, blue 50%, transparent 50%),
                linear-gradient(to right, skyblue, skyblue);
            background-position:
                calc(100% - 20px) calc(1em + 2px),
                calc(100% - 15px) calc(1em + 2px),
                100% 0;
            background-size:
                5px 5px,
                5px 5px,
                2.5em 2.5em;
            background-repeat: no-repeat;
        }
        .price_total {
            margin-top: -1px;
            color: black;
            font-weight: 600;
            font-size: 14px;
            line-height: 21px;
            text-align: center;
        }
        .price_total_1 {
            width: 100px;
            height: 40px;
            border-radius: 42px;
            padding-left: 25px;
        }
    </style>
</head>
<body>
<nav>
    <form action="{{route('home')}}" method="GET">
        <input type="image" src="{{ URL::to('/uploads') }}/logo.svg" alt="logo">
    </form>
</nav>

<form action="{{route('checkout')}}" method="post">
   <h2><label for="deliveryService">Choose a delivery service:</label></h2>
    <div class="classic">
    <select name="deliveryService">
        @foreach($deliveryServices as $deliveryService)
            <option value="{{$deliveryService->id}}">{{$deliveryService->serviceName}}</option>
        @endforeach
    </select>
    </div>
<footer>

        <input type="text" name="email" placeholder="Email address" class="email" required>
        <input type="text" name="firstName" placeholder="First Name" class="email" required>
        <input type="text" name="phone" placeholder="Phone" class="email" required>
        <input type="text" name="lastName" placeholder="Last Name" class="email" required>
        <input type="text" name="addressLine1" placeholder="Shipping address Line1" class="email" required>
        <input type="text" name="addressLine2" placeholder="Shipping address Line2" class="email">
    <p class="price_total">Total amount:</p>
    <input type="text" name="total_price" value="{{$totalAmount}}" class="price_total_1" readonly>
</footer>
<button type="submit" class="order2">Checkout</button>
    {{ csrf_field() }}
</form>
</body>
