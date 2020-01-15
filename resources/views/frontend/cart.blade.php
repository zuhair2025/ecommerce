@extends('frontend.main')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('styles/cart.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/cart_responsive.css')}}">
@endsection
@section('home')
    <div class="home_container">
        <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="categories.html">Categories</a></li>
                                    <li>Shopping Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('cart')
    <div class="cart_info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">Product</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Total</div>
                    </div>
                </div>
            </div>
            @if(Session::has('cart'))
            @foreach($products as $product)
            <div class="row cart_items_row">
                <div class="col">

                    <!-- Cart Item -->
                    <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                        <!-- Name -->
                        <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                            <div class="cart_item_image">
                                <div><img src="images/cart_1.jpg" alt=""></div>
                            </div>
                            <div class="cart_item_name_container">
                                <div class="cart_item_name"><a href="#">{{$product['item']['name']}}</a></div>
                                <div class="cart_item_edit"><a href="#">Edit Product</a></div>
                            </div>
                        </div>
                        <!-- Price -->
                        @dd($product)
                    <div class="cart_item_price">$</div>
                        <!-- Quantity -->
                        <div class="cart_item_quantity">
                                   <strong>{{$product['qty']}}</strong>  
                        </div>
                        <!-- Total -->
                        {{-- @php
                            $total = $product['price'] * $product['qty']
                        @endphp --}}
                    <div class="cart_item_total">${{$product['price']}}</div>
                    </div>

                </div>
            </div>
            @endforeach
            
            <div class="row row_cart_buttons">
                <div class="col">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="#">Continue shopping</a></div>
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button"><a href="#">Clear cart</a></div>
                            <div class="button update_cart_button"><a href="#">Update cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_extra">
                <div class="col-lg-4">

                    <!-- Delivery -->
                    <div class="delivery">
                        <div class="section_title">Shipping method</div>
                        <div class="section_subtitle">Select the one you want</div>
                        <div class="delivery_options">
                            <label class="delivery_option clearfix">Next day delivery
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                <span class="delivery_price">$4.99</span>
                            </label>
                            <label class="delivery_option clearfix">Standard delivery
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                <span class="delivery_price">$1.99</span>
                            </label>
                            <label class="delivery_option clearfix">Personal pickup
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                <span class="delivery_price">Free</span>
                            </label>
                        </div>
                    </div>

                    <!-- Coupon Code -->
                    <div class="coupon">
                        <div class="section_title">Coupon code</div>
                        <div class="section_subtitle">Enter your coupon code</div>
                        <div class="coupon_form_container">
                            <form action="#" id="coupon_form" class="coupon_form">
                                <input type="text" class="coupon_input" required="required">
                                <button class="button coupon_button"><span>Apply</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-2">
                    <div class="cart_total">
                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Subtotal</div>
                                   
                                <div class="cart_total_value ml-auto">${{$totalPrice}}</div>
                                   
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Shipping</div>
                                    <div class="cart_total_value ml-auto">Free</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Total</div>
                                    <div class="cart_total_value ml-auto">$790.90</div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button"><a href="#">Proceed to checkout</a></div>
                    </div>
                </div>
                @else
            @endif
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('js/cart.js')}}"></script>
@endsection