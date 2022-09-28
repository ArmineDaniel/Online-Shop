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
        .card {
            width: 486px;
            height: 54px;
            border-radius: 42px;
            padding-left: 25px;
        }

        .card::placeholder {
            color: #7E7D7A;
            font-weight: 600px;
            font-size: 16px;
            line-height: 24px;
        }

        form {
            text-align: center;
            margin-left: 115px;
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
<input type="hidden" name="order" value="{{$order}}">
<form action="{{route('pay', ['order' => $order])}}" method="post">
    <h2>Attach credit card</h2>
    <footer>
        <label for="ownerFirstName">First name</label>
        <input type="text" name="ownerFirstName" placeholder="First name" class="card" required>
        <label for="ownerLastName">Last name</label>
        <input type="text" name="ownerLastName" placeholder="Last name" class="card" required>
        <label for="ownerName">Card's numbers</label>
        <input type="text" name="cardsNumbers" placeholder="Card's numbers" class="card" required>
        <label for="expirationDate">Expiration date</label>
        <input type="date" name="expirationDate" placeholder="Expiration date" class="card" required>
        <label for="cvv">CVV</label>
        <input type="number" name="cvv" placeholder="cvv" class="card" required>
        <p class="price_total">Total amount:</p>
        <input type="text" name="total_price" value="{{$order->total_price}}" class="price_total_1" readonly>
    </footer>
    <button type="submit" formmethod="POST" name="pay" class="order2">Pay</button>
{{ csrf_field() }}
</form>
<form action="{{route('cancel', ['order' => $order])}}" method="post">
    <button type="submit" formmethod="POST" name="cancel" class="order2">Cancel</button>
    {{ csrf_field() }}
</form>
</body>
