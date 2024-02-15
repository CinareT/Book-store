@extends('front.layouts.master')
@section('page_title', "wishlist")
@section('content')

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Wishlist</li>
						</ol>
					</nav>
				</div>
			</div>
</section>
<div class="cart_area inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="./">
							<!-- Cart Table -->
							<div class="cart-table table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">Product</th>
											<th class="pro-price">Price</th>

											<th class="pro-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($products as $product)
                                                <tr>
                                                    <td class="pro-thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset($product->main_image($product->images)) }}"
                                                                alt="{{ $product->title }}" alt="Product"></a>
                                                    </td>
                                                    <td class="pro-title"><a href="#">{{ $product->title }}</a></td>
                                                    <td class="pro-price">
                                                        <span>{{ (float) $product->price - ((float) $product->price * (float) $product->percent) / 100 }}</span>
                                                    </td>
                                                    <td class="pro-remove">
                                                    <a href="{{route('wishitem-remove', $product->id)}}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="cart-buttons mt-4">
                                    <button type="submit" class="btn btn-primary">Update Wishlist</button>
                                </div> -->
                        </form>

					</div>
				</div>
			</div>
</div>

@include('front.layouts.includes.margin');

@endsection