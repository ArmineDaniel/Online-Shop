<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Street</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            width: 1440px;
            margin: auto;
            font-family: 'Nunito', sans-serif;
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
          Sections
        //////// */

        .section1 {
            display: flex;
        }

        .section2 {
            margin-top: 420px;
        }

        .section3 {
            margin-top: 100px;
        }

        .section4 {
            margin-top: 120px;
        }

        /* ////////
          Images
        //////// */

        .icons_cart {
            width: 25px;
            height: 24px;
            margin-top: 8px;
        }

        .shop-white {
            margin-top: 4px;
        }

        .img-hero {
            width: 600px;
            height: 416px;
        }

        .shop-white2 {
            margin-top: 6px;
        }

        .man {
            margin-left: 100px;
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

        /* ////////
          Buttons
        /////////*/

        .order {
            display: flex;
            width: 170px;
            height: 46px;
            border-radius: 33px;
            padding: 12px 32px 12px 32px;
            gap: 10px;
            background-color: #2F2105;
        }

        .get_coffee {
            margin-top: 30px;
            margin-left: 135px;
            width: 142px;
            height: 38px;
            border: 2px solid #2F2105;
            border-radius: 33px;
            padding: 10px 24px 10px 24px;
            gap: 10px;
            color: #F4AE26;
            background-color: #2F2105;
        }

        .order2 {
            position: relative;
            left: -145px;
            background-color: #2F2105;
            height: 44px;
            border-radius: 33px;
            padding: 12px 32px 12px 32px;
            color: white;
        }


        /* ////////
          Texts
        //////// */

        .nav1 {
            color: #FF902B;
        }

        .nav23 {
            width: 32px;
        }

        .header_text1 {
            font-weight: 600;
            font-size: 48px;
            line-height: 72px;
        }

        .header_text2 {
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            color: #7E7D7A;
        }

        .header_text_span {
            color: #FF902B;
        }

        .order_text {
            margin-top: -1px;
            color: white;
            font-weight: 600;
            font-size: 14px;
            line-height: 21px;
            text-align: center;
        }

        .more {
            font-weight: 700;
            font-size: 20px;
            line-height: 20px;
            text-align: center;
            color: #FF902B;
            margin-left: 50px;
        }

        .popular_text {
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
            margin-top: 143px;
            margin-left: 128px;
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

        .header1 {
            margin-left: 140px;
            margin-top: 145px;
        }

        .header2 {
            display: flex;
            margin-top: 32px;
        }

        .header_shop {
            border-radius: 50px;
            width: 22px;
            height: 22px;
            background-color: #FF902B;
        }

        .header3 {
            margin-left: 167px;
            margin-top: 82px;
        }

        .popular_div {
            width: 74px;
            height: 4px;
            background-color: #FF902B;
            margin-left: 259px;
            margin-top: -35px;
        }

        /* //////////////////////
        *********************
             Coffe Cards
        *********************
        ///////////////////// */

        .coffee_card {
            width: 1268px;
            height: 367px;
            border-radius: 64px;
            background-color: #F9D9AA;
            display: flex;
            justify-content: space-around;
            margin: auto;
            margin-top: 143px;
        }

        .coffee_card_1 {
            width: 355px;
            height: 385px;
            border-radius: 12px;
            background-color: white;
            margin-top: -87px;
        }

        .coffee_card_1_1 {
            text-align: center;
            margin-top: 24px;
        }

        .card_display {
            display: flex;
        }

        .coffee_card_header {
            font-weight: 600;
            font-size: 24px;
            line-height: 36px;
            margin-top: 19px;
            margin-left: 29px;
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

        .price1 {
            font-weight: 700;
            font-size: 24px;
            line-height: 36px;
            margin-top: 19px;
            margin-left: 29px;
        }

        .coffee_card_1_div {
            margin-top: -110px;
            margin-left: 245px;
        }
        .price2 {
            font-weight: 700;
            font-size: 24px;
            line-height: 36px;
            margin-top: 19px;
            margin-left: 95px;
        }

        .coffee_card_shop {
            margin-left: 22px;
            width: 24px;
            height: 24px;
            border-radius: 64px;
            padding: 10px;
            gap: 10px;
            background-color: #FF902B;
            margin-top: -8px;
            text-align: center;
        }

        .coffee_card_img {
            margin: auto;
            border-radius: 10px;
        }

        .coffee_card_shop2 {
            margin-left: 95px;
            width: 24px;
            height: 24px;
            border-radius: 64px;
            padding: 10px;
            gap: 10px;
            background-color: #FF902B;
            margin-top: -8px;
            text-align: center;
        }


        /* //////////////////////
        *********************
            Delivery Cards
        *********************
        ///////////////////// */

        .delivery_header {
            margin-left: 138px;
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
        }

        .delivery_header_1 {
            width: 115px;
            height: 4px;
            background-color: #FF902B;
            margin-left: 455px;
            margin-top: -38px;
        }

        .delivery_display {
            display: flex;
            justify-content: space-around;
        }

        .delivery_card_div {
            margin-top: 48px;
            text-align: center;
        }

        .delivery_card_heading {
            font-weight: 600;
            font-size: 24px;
            line-height: 36px;
        }

        .delivery_card_text {
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            margin-top: -20px;
        }

        /* //////////////////////
        *********************
            About us
        *********************
        ///////////////////// */

        .about_section {
            margin-top: 226px;
        }

        .about_section_head {
            display: flex;
            justify-content: space-around;
        }

        .about_section_head_1 {
            margin-top: -600px;
        }

        .about_img {
            border: 7px solid white;
            border-radius: 12px;
        }

        .about1 {
            margin-top: -450px;
            margin-left: -120px;
        }

        .about_text1 {
            margin-left: 138px;
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
            margin-top: 30px;
        }

        .about2 {
            width: 30px;
            height: 4px;
            background-color: #FF902B;
            margin-left: 245px;
            margin-top: -38px;
        }

        .about_text2 {
            margin-left: 138px;
            font-weight: 600;
            font-size: 24px;
            line-height: 36px;
            margin-top: 16px;
        }

        .about_text3 {
            margin-left: 138px;
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            color: #7E7D7A;
        }

        .about_text4 {
            font-weight: 700;
            font-size: 12px;
            line-height: 18px;
            color: #F4AE26;
            margin-top: -3px;
        }

        /* //////////////////////
        *********************
            Menu
        *********************
        ///////////////////// */

        .menu_heading {
            margin-left: 138px;
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
        }

        .menu_heading_under {
            width: 109px;
            height: 4px;
            background-color: #FF902B;
            margin-left: 365px;
            margin-top: -38px;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            margin-left: 135px;
        }

        .menu_head {
            width: 360px;
            height: 400px;
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

        .menu_left2 {
            margin-left: 60px;
        }

        .menu_left3 {
            margin-left: -20px;
        }

        .menu_left4 {
            margin-left: -10px;
        }

        .menu_left5 {
            margin-left: 50px;
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


        /* //////////////////////
        *********************
            About us 2
        *********************
        ///////////////////// */

        .about2_2 {
            display: flex;
            margin-left: 50px;
            margin-top: -400px;
        }

        .about_text1_2 {
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
            margin-top: 60px;
            margin-left: 69px;
        }

        .about_text2_2 {
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            margin-top: -16px;
            margin-left: 69px;
            color: #7E7D7A;
        }

        .about2_div_text1 {
            font-weight: 500;
            font-size: 18px;
            line-height: 27px;
            margin-top: -16px;
            margin-left: 10px;
        }

        .about2_div_text2 {
            font-weight: 400;
            font-size: 14px;
            line-height: 21px;
            margin-top: -16px;
            margin-left: 10px;
        }

        .about2_div1 {
            position: absolute;
            margin-left: 580px;
            margin-top: -140px;
            width: 230px;
            height: 60px;
            background-color: #FFCB7C;
            border: 6px solid #F6EBDA;
            border-radius: 12px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding-top: 20px;
        }

        .about2_div2 {
            position: absolute;
            margin-left: 900px;
            margin-top: -140px;
            width: 230px;
            height: 60px;
            background-color: #FFCB7C;
            border: 6px solid #F6EBDA;
            border-radius: 12px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding-top: 20px;
        }

        .about2_div3 {
            position: absolute;
            margin-left: 1230px;
            margin-top: -140px;
            width: 230px;
            height: 60px;
            background-color: #FFCB7C;
            border: 6px solid #F6EBDA;
            border-radius: 12px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding-top: 20px;
        }

        .paginate {
            display: flex;
            width: 40px;
            position: absolute;
            margin-top: 40px;
            margin-left: 1100px;
        }

        .paginate1 {
            background-color: #FF902B;
            border-radius: 35px;
            width: 8px;
            height: 8px;
        }

        .paginate2 {
            background-color: #F8E9D2;
            border-radius: 35px;
            width: 8px;
            height: 8px;
        }

        .paginate_space {
            width: 8px;
        }


        /* //////////////////////
        *********************
            Footer
        *********************
        ///////////////////// */

        .footer_div {
            text-align: center;
        }

        .footer_text {
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
            margin-top: -260px;
            text-align: center;
            color: white;
        }

        input[type='number']{
            width: 50px;
            position: absolute;
            margin-left: -40px;
            margin-top: 40px;
        }

        .btn {
            background-color: #2196F3;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            outline: none;
        }

        .dropdown {
            position: absolute;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .btn:hover, .dropdown:hover .btn {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
<!-- //////////////////////
*********************
         Header
*********************
////////////////////////// -->

<header>

    <!-- //////////////////////
    *********************
            Navbar
    *********************
    ////////////////////////// -->
    <div class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
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
    <nav>
        <form action="{{route('home')}}" method="GET">
        <input type="image" src="{{ URL::to('/uploads') }}/logo.svg" alt="logo">
        </form>
        <div class="nav_div">
            <a href="#about-us"> <p class="nav1">About us</p></a>
            <div class="nav23"></div>
            <a href="{{route('menu')}}" methods="GET"> <p class="nav1">Our Product</p></a>
            <div class="nav23"></div>
            <a href="#delivery"><p class="nav1">Delivery</p></a>
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
    <!-- //////////////////////
    *********************
        Navbar End
    *********************
    ////////////////////////// -->
    <section class="section1">
        <form action="{{route('menu')}}" method="GET" class="header1">
            <p class="header_text1">Enjoy your <span class="header_text_span"> coffee</span><br> before your activity</p>
            <p class="header_text2">Boost your productivity and build your <br> mood with a glass of coffee in the morning</p>
            <div class="header2">
                <button class="order">
                    <p class="order_text">Order now</p>
                    <div class="header_shop">
                        <img src="{{ URL::to('/uploads') }}/shop-white.png" alt="" class="shop-white">
                    </div>
                </button>
                <a href="{{route('menu')}}" methods="GET" class="more">More Menu</a>
            </div>
        </form>
        <div class="header3">
            <img src="{{ URL::to('/uploads') }}/img-hero.png" alt="" class="img-hero">
        </div>
    </section>

    <section>

        <p class="popular_text">Popular Now</p>
        <div class="popular_div"></div>
        <div class="coffee_card">
            <!-- //////////////////////
            *********************
            Coffe Card 1
            *********************
            ///////////////////// -->
            @php
            $product = \App\Models\Product::find(5);
            @endphp
            <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST">
            <div class="coffee_card_1">
                <div class="coffee_card_1_1">
                    <img src="{{URL::to('/uploads')}}/{{$product->image}}" alt="" class="coffee_card_img">
                </div>
                <div class="card-display">
                    <div>
                        <p class="coffee_card_header">{{$product->name}}</p>
                        <div class="card_display">
                            <input type="radio" name="{{$product->id}}hot_or_cold" value="hot" checked>
                               <label for="hot" class="coffee_card_hot">Hot</label>
                            <input type="radio" name="{{$product->id}}hot_or_cold" value="cold">
                            <label for="cold" class="coffee_card_cold">Cold</label>
                        </div>
                    </div>
                    <div class="coffee_card_1_div">
                        <p class="price1">{{$product->price}} K</p>
                       <div class="coffee_card_shop">
                            <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                           {{ csrf_field() }}
                       </div>
                    </div>
                </div>
            </div>
            </form>


            <!-- //////////////////////
            *********************
            Coffe Card 2
            *********************
            ///////////////////// -->
            @php
                $product = \App\Models\Product::find(6);
            @endphp
            <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST">
            <div class="coffee_card_1">
                <div class="coffee_card_1_1">
                    <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="coffee_card_img">
                </div>
                <div class="card_display">
                    <div>
                        <p class="coffee_card_header">{{$product->name}}</p>
                        <div class="card_display">
                            <input type="radio" name="{{$product->id}}hot_or_cold" value="hot" checked>
                            <label for="hot" class="coffee_card_hot">Hot</label>
                            <input type="radio" name="{{$product->id}}hot_or_cold" value="cold">
                            <label for="cold" class="coffee_card_cold">Cold</label>
                        </div>
                    </div>
                    <div>
                        <p class="price2">{{$product->price}} K</p>
                        <div class="coffee_card_shop2">
                            <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                            {{ csrf_field() }}
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- //////////////////////
            *********************
            Coffe Card 3
            *********************
            ///////////////////// -->
            @php
                $product = \App\Models\Product::find(7);
            @endphp
            <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST">
            <div class="coffee_card_1">
                <div class="coffee_card_1_1">
                    <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="coffee_card_img">
                </div>
                <div class="card_display">
                    <div>
                        <p class="coffee_card_header">{{$product->name}}</p>
                        <div class="card_display">
                            <input type="radio" name="{{$product->id}}hot_or_cold" value="hot" checked>
                            <label for="hot" class="coffee_card_hot">Hot</label>
                            <input type="radio" name="{{$product->id}}hot_or_cold" value="cold">
                            <label for="cold" class="coffee_card_cold">Cold</label>
                        </div>
                    </div>
                    <div>
                        <p class="price2">{{$product->price}} K</p>
                        <div class="coffee_card_shop2">
                            <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                            {{ csrf_field() }}
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>

</header>

<!-- //////////////////////
*********************
    Header end
*********************
////////////////////////// -->

<section class="section2">
    <p id="delivery" class="delivery_header">How to use delivery service</p>
    <div class="delivery_header_1"></div>

    <div class="delivery_display">

        <!-- //////////////////////
        *********************
        Delivery Card 1
        *********************
        ///////////////////// -->

        <div class="delivery_card_div">
            <img src="{{ URL::to('/uploads') }}/delivery1.png" alt="">
            <a href="{{route('menu')}}"> <p class="delivery_card_heading">choose your coffee</p> </a>
            <p class="delivery_card_text">there are 20+ coffees for you</p>
        </div>

        <!-- //////////////////////
        *********************
        Delivery Card 2
        *********************
        ///////////////////// -->

        <div class="delivery_card_div">
            <img src="{{ URL::to('/uploads') }}/delivery2.png" alt="">
            <p class="delivery_card_heading">we delivery it to you</p>
            <p class="delivery_card_text">Choose delivery service</p>
        </div>

        <!-- //////////////////////
        *********************
        Delivery Card 3
        *********************
        ///////////////////// -->

        <div class="delivery_card_div">
            <img src="{{ URL::to('/uploads') }}/delivery3.png" alt="">
            <p class="delivery_card_heading">Enjoy your coffee</p>
            <p class="delivery_card_text">Choose delivery service</p>
        </div>

    </div>

</section>

<section>
    <div class="about_section">
        <img src="{{ URL::to('/uploads') }}/about.png" alt="">
    </div>

    <!-- ////////
    content
    //////// -->

    <div class="about_section_head">
        <div class="about_section_head_1">
            <img src="{{ URL::to('/uploads') }}/about-coffee.png" alt="" class="about_img">
        </div>
        <div class="about1">
            <p id="about-us" class="about_text1">About us</p>
            <div class="about2"></div>

            <p class="about_text2">We provide quality coffee, <br> and ready to deliver.</p>
            <p class="about_text3">We are a company that makes and distributes <br> delicious drinks. our main product is made with a <br> secret recipe and available in stores worldwide.</p>
            <form action="{{route('menu')}}" method="GET">
            <button class="get_coffee">
                <p class="about_text4">Get your coffee</p>
            </button>
             </form>
        </div>
    </div>
</section>

<!-- ////////
    Menu
//////// -->

<section class="section3">
    <p class="menu_heading">Special menu for you</p>
    <div class="menu_heading_under"></div>

    <!-- //////////////////////
    *********************
    Menu Cards 3
    *********************
    ///////////////////// -->

    <div class="menu">
        @php
            $product = \App\Models\Product::find(8);
        @endphp
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div>
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p>

                </div>
                <div class="menu_left1">
                    <p class="menu_text3">{{$product->price}} K</p>
                    <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST" class="menu_end">
                        <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" name="shopCart" class="shop-white2">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

        @php
            $product = \App\Models\Product::find(1);
        @endphp
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div>
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p>
                </div>
                <div class="menu_left2">
                    <p class="menu_text3">{{$product->price}} K</p>
                    <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST" class="menu_end">
                        <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

        @php
            $product = \App\Models\Product::find(2);
        @endphp
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div>
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p>
                </div>
                <div class="menu_left3">
                    <p class="menu_text3">{{$product->price}} K</p>
                    <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST" class="menu_end">
                        <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- //////////////////////
     *********************
     Menu Cards 6
     *********************
     ///////////////////// -->

    <div class="menu">
        @php
            $product = \App\Models\Product::find(3);
        @endphp
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div class="menu_left4">
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p></div>
                <div class="menu_left5">
                    <p class="menu_text3">{{$product->price}} K</p>
                    <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST" class="menu_end">
                        <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

        @php
            $product = \App\Models\Product::find(4);
        @endphp
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div>
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p>
                </div>
                <div class="menu_left1">
                    <p class="menu_text3">{{$product->price}} K</p>
                    <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST" class="menu_end">
                        <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

        @php
            $product = \App\Models\Product::find(9);
        @endphp
        <div class="menu_head">
            <div class="menu_img_div">
                <img src="{{asset('/uploads')}}/{{$product->image}}" alt="" class="menu_img">
            </div>
            <div class="menu_display">
                <div>
                    <p class="menu_text1">{{$product->name}}</p>
                    <p class="menu_text2">{{$product->description}}</p>
                </div>
                <div class="menu_left4">
                    <p class="menu_text3">{{$product->price}} K</p>
                    <form action="{{route('addToCart', ['product' => $product->id])}}" method="POST" class="menu_end">
                        <input type="hidden" name="{{$product->id}}hot_or_cold" value=" ">
                        <input type="image" formmethod="POST" src="{{ URL::to('/uploads') }}/shop-white.png" alt="Submit" class="shop-white2">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- /////////////
About Us
//////////// -->

<section class="section4">
    <div>
        <img src="{{ URL::to('/uploads') }}/about.png" alt="" class="about_img">
    </div>
    <div class="about2_2">
        <div>
            <p class="about_text1_2">What they say about us</p>
            <p class="about_text2_2">We always provide the best service <br> and always maintain the quality of <br> coffee</p>
        </div>
        <div class="menu_left2">
            <div>
                <img src="{{ URL::to('/uploads') }}/man1.png" alt="">
                <img src="{{ URL::to('/uploads') }}/man2.png" alt="" class="man">
                <img src="{{ URL::to('/uploads') }}/man3.png" alt="" class="man">
            </div>
        </div>
    </div>
</section>

<section>

    <div>
        <div class="about2_div1">
            <p class="about2_div_text1">Naura</p>
            <p class="about2_div_text2">I really love the cappucino, <br> the coffee was very smooth</p>
        </div>
    </div>

    <div>
        <div class="about2_div2">
            <p class="about2_div_text1">John</p>
            <p class="about2_div_text2">this coffee shop is  <br> convenient</p>
        </div>
    </div>

    <div>
        <div class="about2_div3">
            <p class="about2_div_text1">Azura</p>
            <p class="about2_div_text2">the coffee menu here is <br> very much</p>
        </div>
    </div>

    <div class="paginate">
        <div class="paginate1"></div>
        <div class="paginate_space"></div>
        <div class="paginate2"></div>
        <div class="paginate_space"></div>
        <div class="paginate2"></div>
    </div>

</section>

<!-- /////////////
    Footer
//////////// -->

<footer>
    <div class="footer_div">
        <img src="{{ URL::to('/uploads') }}/footer.png" alt="">
    </div>
{{--    <p class="footer_text">Subscribe to get 50% discount price</p>--}}
{{--    <form action="{{route('subscribe')}}" method="post">--}}
{{--        <input type="text" name="email" placeholder="Email address" class="email">--}}
{{--        <button type="submit" formmethod="POST" class="order2">Order now</button>--}}
{{--        {{ csrf_field() }}--}}
{{--    </form>--}}
</footer>
</body>
</html>
