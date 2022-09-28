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
        /* ////////
          Images
        //////// */

        .icons_cart {
            width: 25px;
            height: 24px;
            margin-top: 8px;
        }

        .shop-white2 {
            margin-top: 6px;
        }
        /* ////////
          Inputs
        //////// */

        .search {
            width: 220px;
            height: 40px;
            border-radius: 35px;
            box-sizing: border-box;
            border: none;
            border-bottom: 1px solid #ccc;
            font-size: 16px;
            background-color: none;
            background-image: url('Images/search.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            outline: none;
        }
        .nav1 {
            color: #FF902B;
        }

        .nav23 {
            width: 32px;
        }
        /* ////////
          Divs
        //////// */

        .nav_div {
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            display: flex;
            justify-content: space-around;
        }

        .nav_search {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .nav_search_space {
            width: 26px;
        }
        .card_display {
            display: flex;
        }
        .coffee_card_hot {
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
            margin-top: -8px;
        }

        .coffee_card_cold {
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
            margin-top: -8px;
        }
        .menu {
            display: flex;
            justify-content: space-between;
            margin-left: 135px;
        }

        .menu_head {
            width: 355px;
            height: 550px;
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

        .menu_end {
            margin-left: 72px;
            width: 24px;
            height: 24px;
            border-radius: 64px;
            padding: 10px;
            gap: 10px;
            background-color: #FF902B;
            margin-top: -25px;
            text-align: center;
        }
        input[type='number']{
            width: 50px;
            position: absolute;
            margin-left: -40px;
        }
    </style>
</head>
<body>
<nav>
    <form action="{{route('home')}}" method="GET">
        <input type="image" src="{{ URL::to('/uploads') }}/logo.svg" alt="logo">
    </form>
    <div class="nav_div">
        @foreach($categories as $category)
        <a href="{{route('filter', ['category' => $category->name])}}"> <p class="nav1">{{$category->name}}</p></a>
        <div class="nav23"></div>
        @endforeach
    </div>
    <div class="nav_search">
        <form action="{{route('menu')}}" method="GET">
            <input type="text" name="search" placeholder="Cappuccino" class="search" >
        </form>
        <div class="nav_search_space"></div>
        <form action="{{route('cart')}}" method="GET">
            <input type="image" src="{{ URL::to('/uploads') }}/icons_cart.png" alt="" class="icons_cart">
        </form>
    </div>
</nav>
<section>
        @foreach($products as $product)
        <div class="menu">
            <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST">
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div>
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p>
                </div>
                @if($product->id === 5 || $product->id === 6 || $product->id === 7)
                            <div class="card_display">
                                <input type="radio" name="{{$product->id}}hot_or_cold" value="hot" checked>
                                <label for="hot" class="coffee_card_hot">Hot</label>
                                <input type="radio" name="{{$product->id}}hot_or_cold" value="cold">
                                <label for="cold" class="coffee_card_cold">Cold</label>
                            </div>
                @else
                    <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                @endif
                <div class="menu_left1">
                    <p class="menu_text3">{{$product->price}}K</p>
                    <div class="menu_end">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" name="shopCart" class="shop-white2">
                        {{ csrf_field() }}
                    </div>
                </div>
            </div>
        </div>
            </form>
        </div>
        @endforeach
</section>
</body>
