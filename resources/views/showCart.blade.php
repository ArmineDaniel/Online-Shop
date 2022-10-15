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
        .shop-white2 {
            margin-top: 6px;
        }
        .confirm{
            margin-top: -5px;
            margin-left: 20px;
        }
        .quantity{
            margin-top: -5px;
            margin-left: -100px;
        }
        .order {
            display: flex;
            width: 170px;
            height: 46px;
            border-radius: 33px;
            padding: 12px 32px 12px 32px;
            gap: 10px;
            background-color: #2F2105;
        }
        .order_text {
            margin-top: -1px;
            color: white;
            font-weight: 600;
            font-size: 14px;
            line-height: 21px;
            text-align: center;
        }

        .header2 {
            display: flex;
            margin-top: 32px;
        }
        .menu {
            display: flex;
            justify-content: space-between;
            margin-left: 135px;
        }

        .menu_head {
            width: 355px;
            height: 575px;
            border-radius: 12px;
            background-color: white;
            margin-top: 60px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding-top: 15px;
        }

        .menu_img_div {
            text-align: center;
            margin-top: 24px;
        }

        .menu_img {
            margin: auto;
            border-radius: 10px;
        }

        .menu_display {
            display: flex;
        }

        .menu_text1 {
            font-weight: 600;
            font-size: 24px;
            line-height: 36px;
            margin-top: 19px;
            margin-left: 29px;
        }

        .menu_text2 {
            font-weight: 600;
            font-size: 14px;
            line-height: 21px;
            margin-top: -25px;
            margin-left: 29px;
            color: #7E7D7A;
        }

        .menu_left1 {
            margin-left: 30px;
        }

        .menu_text3 {
            font-weight: 700;
            font-size: 24px;
            line-height: 36px;
            margin-top: 19px;
            margin-left: 69px;
        }
        input[type='number']{
            width: 50px;
            position: absolute;
            margin-left: -40px;
        }
        .empty_cart{
            margin: auto;
            width: 400px;
            padding: 100px;
            font-size: 20px;
            font-weight: bold;
            color: #f44336;

        }
    </style>
</head>
<body>
<nav>
    @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button>Log Out</button>
            </form>
        </div>
    @endauth
    <form action="{{route('home')}}" method="GET">
        <input type="image" src="{{ URL::to('/uploads') }}/logo.svg" alt="logo">
    </form>
</nav>

<section>
    @php
    $count = 0;
    @endphp
    @foreach($products as $product)
        <div class="menu">
            <div class="menu_head">
                <div class="menu_img_div">
                    <img src="{{asset('/uploads')}}/{{$product['image'] ?? ''}}" alt="" class="menu_img">
                </div>
                <div class="menu_display">
                    <div>
                        <p class="menu_text1">{{ $product['name'] ?? ''}} {{ $product['coffeeType'] ?? ''}}</p>
                        <p class="menu_text2">{{$product['description'] ?? ''}}</p>
                    </div>
                    <div class="menu_left1">
                        <p class="menu_text3">{{$product['price'] ?? ''}}K</p>
                        <form action="{{route('confirmQuantity', ['product' => $product['id'], 'coffeeType' => $product['coffeeType'] ?? ''])}}" method="POST" class="quantity">
                        <input id="quantity" type="number" value="{{$product['quantity']}}" name="quantity" min="1" />
                            <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/check.png" alt="Submit" name="confirm" class="confirm">
                            {{ csrf_field() }}
                        </form>
                        <form action="{{route('deleteFromCart', ['product' => $product['id'], 'coffeeType' => $product['coffeeType'] ?? ''])}}" method="POST" >
                            <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/delete-icon.png" alt="Submit" name="delete" class="shop-white2">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" {{$count++}}>
    @endforeach
</section>
@if($count > 0)

    @if (Route::has('login'))
    @auth
        <form action="{{route('order')}}" method="GET">
            <div class="header2">
                <button class="order">
                    <p class="order_text">Order now</p>
                </button>
            </div>
        </form>
        @else
        <form action="{{route('register')}}" method="GET">
            <div class="header2">
                <button class="order">
                    <p class="order_text">Order now</p>
                </button>
            </div>
        </form>
    @endauth
    @endif

@else
    <div class="empty_cart">
    <p>You don't have items in your cart yet.</p>
    </div>
@endif
</body>
