@extends('front.layouts.master')
@section('page_title', "Pustok - Book Store HTML Templates")
@section('content')

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Checkout</li>
						</ol>
					</nav>
				</div>
			</div>
</section>



<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Checkout Form s-->
						<form action="{{route('client.order')}}" method="post" class="checkout-form">
							@csrf
							<div class="row row-40">
								@if($errors->any())
									<div class="col-lg-12">
									<ul>
										@foreach($errors->all() as $error)
										<li class="text-danger">
											{{$error}}
										</li>
										@endforeach
									</ul>
									</div>
								@endif
								<div class="col-lg-7 mb--20">
									<!-- Billing Address -->
									<div id="billing-form" class="mb-40">
										<h4 class="checkout-title">Billing Address</h4>
										<div class="row">
											<div class="col-md-6 col-12 mb--20">
												<label>First Name*</label>
												<input type="text" name="firstName"  placeholder="First Name">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Last Name*</label>
												<input type="text" name="lastName" placeholder="Last Name">
											</div>
											<div class="col-12 mb--20">
												<label>Company Name</label>
												<input type="text" name="companyName" placeholder="Company Name">
											</div>
											<div class="col-12 col-12 mb--20">
												<label>Country*</label>
												<select name="countryName" class="nice-select">
													<option>Bangladesh</option>
													<option>China</option>
													<option>country</option>
													<option>India</option>
													<option>Japan</option>
													<option>Azerbaijan</option>

												</select>
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Email Address*</label>
												<input type="email" name="email" placeholder="Email Address">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Phone no*</label>
												<input type="text" name="phoneNo" placeholder="Phone number">
											</div>
											<div class="col-12 mb--20">
												<label>Address*</label>
												<input type="text" name="address" placeholder="Address line 1">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Town/City*</label>
												<input type="text" name="city" placeholder="Town/City">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>State*</label>
												<input type="text" name="state" placeholder="State">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Zip Code*</label>
												<input type="text" name="zipCode" placeholder="Zip Code">
											</div>
											<div class="col-12 mb--20 ">
												
											</div>
										</div>
									</div>
									<!-- Shipping Address -->

									<div class="order-note-block mt--30">
										<label for="order-note">Order notes</label>
										<textarea name="orderNote" id="order-note" cols="30" rows="10" class="order-note"
											placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="row">
										<!-- Cart Total -->
										<div class="col-12">

										
                                 
											<div class="checkout-cart-total">
												<h2 class="checkout-title">YOUR ORDER</h2>
												<h4>Product <span>Total</span></h4>
                                                            @foreach(Cart::content() as $cart)
												<ul>
													<li><span class="left">{{ $cart->name }}</span> <span
															class="right">${{ $cart->price }}</span></li>
															@endforeach
															<!-- <li><span class="left">{{ $cart->name }}</span> <span
															class="right">${{ $cart->price }}</span></li> -->

													<!-- <li><span class="left">Condimentum posuere consectetur X 01</span>
														<span class="right">$29.00</span></li>
													<li><span class="left">Habitasse dictumst elementum X 01</span>
														<span class="right">$10.00</span></li> -->
												</ul>
												<p>Sub Total <span>${{Cart::subtotal()}}</span></p>
												<!-- <p>Shipping Fee <span>$00.00</span></p>
												<h4>Grand Total <span>$104.00</span></h4> -->
												<div class="method-notice mt--25">
													<article>
														<h3 class="d-none sr-only">blog-article</h3>
														Sorry, it seems that there are no available payment methods for
														your state. Please contact us if you
														require
														assistance
														or wish to make alternate arrangements.
													</article>
												</div>
												<div class="term-block">
													<input type="checkbox" id="accept_terms2">
													<label for="accept_terms2">I’ve read and accept the terms &
														conditions</label>
												</div>
												<button class="place-order w-100">Place order</button>
											</div>

                                                  

										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
</main>

@include('front.layouts.includes.margin');

@endsection