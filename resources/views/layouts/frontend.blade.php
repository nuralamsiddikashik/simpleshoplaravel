<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek">

    <!--favicon and touch icon-->
    <link rel="icon" type="image/png" href="{{asset('frontend')}}/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="{{asset('frontend')}}/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend')}}/assets/img/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend')}}/assets/img/favicon-114x114.png">

    <!--site title-->
    <title>Simple Shop</title>
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">

    <!--bootstrap-->
    <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="{{asset('frontend')}}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/vendor/bicon/css/bicon.css" rel="stylesheet">

    <!--woocommerce css-->
    <!--<link rel="stylesheet" href="assets/css/woocommerce-prev.css">-->

    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/woocommerce-layouts.css">
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='{{asset('frontend')}}/assets/css/woocommerce-small-screen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/woocommerce.css">

    <!--custom css-->
    <link href="{{asset('frontend')}}/assets/css/main.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/css/custom.css" rel="stylesheet">

</head>
<body class="archive  woocommerce woocommerce-account">

<!--header start-->
<header class="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg mainmenu">
                    <!--logo-->
                    <a class="navbar-brand mr-5 text-dark float-left" href="{{ route('home') }}">
                        <img class="" src="{{asset('frontend')}}/assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt=""/>
                    </a>
                    <!--logo-->

                    <!--responsive toggle icon-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"> </i>
                            </span>
                    </button>
                    <!--responsive toggle icon-->

                    <!--search start-->
                    {{-- <div id="form-search" class="form-search">
                        <div class="input-group">
                            <input id="product_search" type="search" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button id="form-search-close-btn" class="btn" type="button">
                                    <span class="svg svg--cross">
                                        <svg class="svg__icon" width="32px" height="32px" viewBox="0 0 32 32">
                                            <path d="M16.7,16L31.9,0.9c0.2-0.2,0.2-0.5,0-0.7s-0.5-0.2-0.7,0L16,15.3L0.9,0.1C0.7,0,0.3,0,0.1,0.1S0,0.7,0.1,0.9L15.3,16
                                            L0.1,31.1c-0.2,0.2-0.2,0.5,0,0.7C0.2,32,0.4,32,0.5,32s0.3,0,0.4-0.1L16,16.7l15.1,15.1c0.1,0.1,0.2,0.1,0.4,0.1s0.3,0,0.4-0.1
                                            c0.2-0.2,0.2-0.5,0-0.7L16.7,16z"/>
                                        </svg>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div> --}}
                    {{-- <div class="search-output"></div> --}}
                    <!--search end-->
                    <!--nav link-->
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul id="menu" class="navbar-nav ml-auto">
                            <li class=""><a href="index.html" class="" >Home</a></li>
                            <li class=""><a href="product-list-filter.html" class="" >Shop List</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Single Layouts</a>
                                        <ul class="dropdown-menu" >
                                            <li><a href="product-single-on-sale.html">Product Single - On Sale </a></li>
                                            <li><a href="product-single-group.html">Product Single - Group</a></li>
                                            <li><a href="product-single-variable.html">Product Single - Variable</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Pages</a>
                                        <ul class="dropdown-menu" >
                                            <li><a href="cart.html">Cart </a></li>
                                            <li><a href="checkout.html">Checkout </a></li>
                                            <li><a href="order-process.html">Order Process </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu" >
                                            <li><a href="my-account-dashbord.html">My Account - Dashboard </a></li>
                                            <li><a href="my-account-order.html">My Account - Order </a></li>
                                            <li><a href="my-account-downloads.html">My Account - Downloads </a></li>
                                            <li><a href="my-account-ac-details.html">My Account - Account Details </a></li>
                                            <li><a href="login-registration.html">Login / Registration </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="error.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="#" class="" id="search-icon"><i class="fa fa-search"></i></a></li>
                            @guest
                                <li><a href="{{route('login')}}" class="" >Login</a></li>
                                @else 
                                <li><a href="{{ route('user-dashboard') }}" class="" ><i class="fa fa-user"></i></a></li>
                            @endguest
                           
                            
                            <!--<li><a href="#" class="" ><i class="fa fa-shopping-basket"></i></a></li>-->
                            <li class="dropdown mini-cart">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-basket"></i><span class="cart-quantity-highlighter">{{ Cart::total_in_cart() }}</span></a>
                                <ul class="dropdown-menu dropdown-menu-right widget_shopping_cart_content woocommerce-mini-cart cart_list product_list_widget ">
                                    <div class="append-mini-cart-items">
                                    {!! Cart::getMarkUp() !!}
                                    </div>
                                </ul>

                            </li>
                        </ul>

                    </div>
                    <!--nav link-->
                </nav>
            </div>
        </div>
    </div>

</header>
<!--header end-->

@yield('content')

<footer class="space-2 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-md-0 mb-4">
                <img class="footer-logo" src="{{asset('frontend')}}/assets/img/logo.png" srcset="{{asset('frontend')}}/assets/img/logo@2x.png 2x" alt="">
            </div>
            <div class="col-md-4  mb-md-0 mb-4">
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <p class="mb-0">Built with Simple Shop & WooCommerce</p>
                <p class="mb-0">© YourCompany 2019</p>
            </div>
        </div>
    </div>
</footer>

<!--scripts-->
<script src="{{asset('frontend')}}/assets/vendor/jquery.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/popper.min.js"></script>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/frontend.js')}}"></script>


<!--init scripts-->
<script src="{{asset('frontend')}}/assets/js/scripts.js"></script>
<script>
    $(document).on('click', '.tabs li', function(e) {
        e.preventDefault()
        $('.tabs li').removeClass('active')
        $(this).addClass('active')
        $('.woocommerce-Tabs-panel').css('display', 'none')

        let current_id = $(this).attr('aria-controls')

        $('#'+current_id).css('display', 'block')
    })
</script>

<script>
    
    // Add To Cart 

    $(document).on('click', '.add-to-cart', function(e) {
        e.preventDefault()

        let p_id = $(this).data('id')
        let p_qty = $('#quantity_'+p_id).val()
        p_qty = p_qty == undefined ? 1 : p_qty

        axios.post('{{ route('add_to_cart') }}', {
            id: p_id,
            qty: p_qty
        })
            .then(res => {
                console.log(res.data.items)
                $('.cart-quantity-highlighter').text(res.data.count)
                $('.append-mini-cart-items').html(res.data.markup)
                $('.mini-cart-subtotal').text(res.data.subtotal)

            })
            .catch()
    })

    // Remove From Cart 

    $(document).on('click', '.remove_from_cart_button', function(e){
       
        e.preventDefault()
        let p_id = $(this).data('product_id')
        axios.post('{{ route('remove_product')}}',{
            id: p_id
        })
        .then(res => {

            console.log(res.data.items)
            $('.cart-quantity-highlighter').text(res.data.count)
            $('.append-mini-cart-items').html(res.data.markup)
            $('.mini-cart-subtotal').text(res.data.subtotal)
            $('#cart_item_' + p_id).remove()

            if(res.data.count == 0 && '{{ request()->route()->getName() }}' == 'cart') {
                window.location.href = '{{ route('shop') }}'
            }
        })
        .catch(err => console.log(err))

    })

 // Search Product On Header 
    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
            callback.apply(context, args);
            }, ms || 0);
        };
    }

    $(document).on('keyup','#product_search',delay(function(){
       
       if($(this).val().length >= 5){
           axios.post('{{ route('search')}}',{product_title:$(this).val()})
           .then(response => {
               console.log(response.data)
               $('.search-output').html(response.data); 
           })
       }

   }, 2000))

   // End Search Product 

</script>


@yield('script')
</body>
</html>
