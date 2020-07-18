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
                                <form class="woocommerce-EditAccountForm edit-account" action="" method="post">
                                    @csrf 
                                    @method('PUT')

                                    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <label for="first_name">First name&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="first_name" id="first_name" autocomplete="given-name" value="{{ auth()->user()->first_name}}">
                                    </p>

                                    <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <label for="last_name">Last name&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="last_name" id="last_name" autocomplete="family-name" value="{{ auth()->user()->last_name}}">
                                    </p>

                                    <div class="clear"></div>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="account_display_name">Display name&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="account_display_name" id="account_display_name" value="{{ auth()->user()->first_name}}"> <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                    </p>
                                    <div class="clear"></div>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="email">Email address&nbsp;<span class="required">*</span></label>
                                        <input disabled="disabled" type="email" class="woocommerce-Input woocommerce-Input--email input-text form-control" name="email" id="email" autocomplete="email" value="{{ auth()->user()->email}}">
                                    </p>                                    
                                    <div class="clear"></div>
                                    <p>
                                      
                                        <button type="submit" class="woocommerce-Button mt-2" name="save_account_details" value="Save changes">Update Profile</button>
                                      
                                    </p>

                                </form>

                                <form action="{{ route ('change-password') }}" method="post" style="pt-5">
                                    @csrf
                                    @method('PUT')
                                    <fieldset>
                                        <legend>Password change</legend>

                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password_current">Current password (leave blank to leave unchanged)</label>
                                            <input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control" name="password_current" id="password_current">
                                        </p>

                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password_1">New password (leave blank to leave unchanged)</label>
                                            <input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control" name="password" id="password" autocomplete="off">
                                        </p>

                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password_2">Confirm new password</label>
                                            <input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control" name="password_confirmation" id="password_confirmation" autocomplete="off">
                                        </p>

                                    </fieldset>

                                    <div class="clear"></div>
                                    <p>
                                     	
                                        
                                        <button type="submit" class="woocommerce-Button mt-2" value="Save changes">Change Password</button>
                                       
                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>

@endsection