@extends('front.layouts.master')
@section('page_title', "Pustok - Book Store HTML Templates")
@section('content')



@include('front.layouts.includes.breadcrumb');


<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container">
					<div class="page-section-title">
						<h1>Shopping Cart</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<th class="pro-remove">Delete</th>
												<th class="pro-quantity">Add</th>
												<th class="pro-thumbnail">Image</th>
												<th class="pro-title">Product</th>
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<!-- <th class="pro-subtotal">Total</th> -->
											</tr>
										</thead>
										<tbody>
											<!-- Product Row -->
                                            
                                              @foreach(Cart::content() as $cart)
                                                  <tr>
                                                    <td class="pro-remove"><a href="{{ route('cart.remove', $cart->rowId) }}"><i class="far fa-trash-alt"></i></a></td>
										  <td class="pro-quantity"><a href="{{ route('cart.increase', $cart->rowId) }}"><i class="fas fa-plus-circle" style="color: black;" onmouseover="this.style.color='green'" onmouseout="this.style.color='black'"></i></a></td>
                                                    <td class="pro-thumbnail"><a href="#"><img src="{{ asset($cart->options['image']) }}" alt="{{ $cart->name }}" class="img-fluid"></a></td>
                                                    <td class="pro-title"><a href="#">{{ $cart->name }}</a></td>
                                                    <td class="pro-price"><span>£{{ $cart->price }}</span></td>
	                                               <td class="pro-quantity"><span>{{ $cart->qty }}</span></td>

                                                  </tr>
                                              @endforeach


											<!-- Discount Row  -->

											
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb--30 mb-lg--0">
							<!-- slide Block 5 / Normal Slider -->
							<div class="cart-block-title">
								<h2>YOU MAY BE INTERESTED IN…</h2>
							</div>
							<div class="product-slider sb-slick-slider" data-slick-setting='{
							          "autoplay": true,
							          "autoplaySpeed": 8000,
							          "slidesToShow": 2
									  }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
								@foreach($products as $product)
								 <div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
											{{ $product->author }}
											</span>
											<h3><a href="{{route('client.product', $product->id)}}">S{{ $product->title }}</a></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
											<img src="{{asset($product->main_image($product->images))}}" alt="{{ $product->title }}">
												<div class="hover-contents">
													<a href="{{route('client.product', $product->id)}}" class="hover-image">
													<img src="{{asset($product->main_image($product->images))}}" alt="{{ $product->title }}">
													</a>
													<div class="hover-btns">
														<a href="{{route('client.cart')}}" class="single-btn">
															<i class="fas fa-shopping-basket"></i>
														</a>
														<a href="{{route('client.wishlist')}}" class="single-btn">
															<i class="fas fa-heart"></i>
														</a>
														<!-- <a href="compare.html" class="single-btn">
															<i class="fas fa-random"></i>
														</a> -->
														<a href="#" data-toggle="modal" data-target="#quickModal"
															class="single-btn">
															<i class="fas fa-eye"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="price-block">
											<span class="price">£{{ (float)$product->price - ((float)$product->price * (float)$product->percent / 100) }}</span>
                                             <del class="price-old">£{{ (float)$product->price }}</del>
                                             <span class="price-discount">{{ (float)$product->percent }}%</span>
											</div>
										</div>
									</div>
								 </div>
								 @endforeach
							</div>
						</div>
						<!-- Cart Summary -->
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Cart Summary</span></h4>
									<p>Sub Total <span class="text-primary">${{Cart::subtotal()}}</span></p>
									<!-- <h2>Grand Total <span class="text-primary">$1250.00</span></h2> -->
								</div>
								<div class="cart-summary-button">
									<a href="{{route('client.checkout')}}" class="checkout-btn c-btn btn--primary">Checkout</a>
									<!-- <button class="update-btn c-btn btn-outlined">Update Cart</button> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</main>


@include('front.layouts.includes.margin');



@endsection

