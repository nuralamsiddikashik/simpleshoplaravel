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
                                <p>Hello <strong>admin</strong> (not <strong>admin</strong>? <a href="#">Log out</a>)</p>

                                <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>
@endsection
    