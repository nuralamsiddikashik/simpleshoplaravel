@extends('layouts.frontend')
@section('content')
    


    <!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold">My Account</h2>
                        <nav class="woocommerce-breadcrumb">
                            <a href="#">Home</a>
                            <span class="breadcrumb-separator"> / </span>My Account
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    <!--page title end-->

    <main class="site-main">
        <!--shop category start-->
        <section class="space-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="woocommerce">
                            
                            @include('frontend.dashboard.partials.nav')


                            <div class="woocommerce-MyAccount-content">
                                <div class="woocommerce-notices-wrapper"></div>

                                <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                    <thead>
                                    <tr>
                                      
                                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span class="nobr">Date</span></th>
                                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span class="nobr">Status</span></th>
                                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span class="nobr">Total</span></th>
                                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span class="nobr">Actions</span></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(count($orders) > 0)
                                    
                                    @foreach ($orders as $order)
                                        <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-processing order">
                                         
                                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Date">
                                                <time datetime="2019-06-12T06:25:27+00:00">{{ $order->created_at->diffForHumans() }}</time>
                                            </td>
                                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status" data-title="Status">
                                                {{ $order->order_status }}
                                            </td>
                                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $order->order_total}}</span> for 3 items
                                            </td>
                                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Actions">
                                                <a href="my-account-view-order.html" class="woocommerce-button button view">View</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>
@endsection

