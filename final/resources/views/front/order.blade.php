@extends('front.layouts.master')
@section('page_title', "order complete")
@section('content')
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Order Complete</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- order complete Page Start -->
<section class="order-complete inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="order-complete-message text-center">
                    <h1>Thank you !</h1>
                    <p>Your order has been received.</p>
                </div>

                <ul class="order-details-list">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif


                    <li>Total: <strong>£ {{ $order->total_amount}}</strong></li>
                            <li>Id: {{ $order->id }}</li>
                            <li>Name: {{ $order->firstName }}</li>
                            <li>Surname: {{ $order->lastName }}</li>
                            <li>Company Name: {{ $order->companyName }}</li>
					   <li>Country Name: {{ $order->countryName }}</li>
                            <li>Email: {{ $order->email }}</li>
                            <li>Phone: {{ $order->phoneNo }}</li>
                            <li>Address: {{ $order->address }}</li>
                            <li>Town/City: {{ $order->city }}</li>
                            <li>State: {{ $order->state }}</li>
                            <li>Zip Code: {{ $order->zipCode }}</li>
                            <li>Order Notes: {{ $order->orderNote }}</li>
                            <li>Subtotal: £ {{ $order->total_amount}}</li>
                            <hr>

                </ul>
                <h3 class="order-table-title">Order Details</h3>
                <div class="table-responsive">
                    <table class="table order-details-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                              @foreach ($cartItems as $cart)

                            <tr>
                                <td><a href="single-product.html">{{$cart->name}}</a> <strong>× {{$cart->qty}}</strong></td>
                                <td><span>{{$cart->price}}</span></td>
                            </tr>
                                 @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Subtotal:</th>
                                <td><span>£ {{ $order->total_amount }}</span></td>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- order complete Page End -->
</div>
<!--=================================
  Brands Slider
===================================== -->
<section class="section-margin">
    <h2 class="sr-only">Brand Slider</h2>
    <div class="container">
        <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-1.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-2.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-3.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-4.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-5.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-6.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-1.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('front/image/others/brand-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection