@extends('layouts.frontend')
@section('content')

<section class="space-3 space-adjust">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <ul class="products columns-3">
                    @foreach($showProducts as $key => $singleProduct)
                   
                    <li class="product {{ ($key+1) % 3 == 0 ? 'last' : '' }}">
                        <div class="product-wrap">
                            <a href="#" class="">
                                <img src="{{ $singleProduct->product_image }}" alt="">
                            </a>
                            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                <i class="fa fa-shopping-basket"></i>
                            </a>
                        </div>
                        <div class="woocommerce-product-title-wrap">
                            <h2 class="woocommerce-loop-product__title">
                                <a href="#">{{ $singleProduct->product_title }}</a>
                            </h2>
                            <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <span class="onsale">Sale!</span>
                        <span class="price">
                            <del>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                    45.00
                                </span>
                            </del>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                    42.00
                                </span>
                            </ins>

                        </span>
                    </li>
                 @endforeach
                   
                </ul>
                <a href="#" class="view-all-product mt-md-5">View All Products</a>
            </div>

        </div>
    </div>
</section>
@endsection