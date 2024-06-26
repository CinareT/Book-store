@extends('front.layouts.master')
@section('page_title', "shopList")
@section("content")

<div class="shop-product-wrap with-pagination with-pagination row space-db--30 shop-border grid-four">
    @if(count($products) > 0)
    @foreach($products as $product)
    <div class="col-lg-4 col-sm-6">
        <div class="product-card ">
            <div class="product-grid-content">
                <div class="product-header">
                    <a href="" class="author">
                        {{$product->author}}
                    </a>
                    <h3><a href="{{route('client.shop', $product->id)}}">{{$product->title}}</a></h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                    <img src="{{asset($product->main_image($product->images))}}" alt="">
                        <div class="hover-contents">
                            <a href="{{route('client.shop', $product->id)}}" class="hover-image">
                               {{-- <img src="{{ asset($product->main_image) }}" alt="{{ $product->title }}"> --}}
                            </a>
                            <div class="hover-btns">
                                <a href="{{ route('add', ['id' => $product->id]) }}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{ route('wishlist-add', ['id' => $product->id]) }}" class="single-btn">  <i class="fas fa-heart"></i></a>


                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">₼{{$product->price}}</span>
                        <span class="price-discount">{{$product->percent}}%</span>
                    </div>
                </div>
            </div>
            <div class="product-list-content">
                <div class="card-image">
                    <img src="{{asset($product->main_image($product->images))}}" alt="">
                </div>
                <div class="product-card--body">
                    <div class="product-header">
                        <a href="" class="author">
                        {{$product->author}}
                        </a>
                        <h3><a href="{{route('client.shop', $product->id)}}">{{$product->title}}</a></h3>

                    </div>
                    <article>
                        <h2 class="sr-only">Card List Article</h2>
                        <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                            battery life, the new iPod classic
                            lets you enjoy
                            up to 40,000 songs or..</p>
                    </article>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="rating-block">
                        <span class="fas fa-star star_on"></span>
                        <span class="fas fa-star star_on"></span>
                        <span class="fas fa-star star_on"></span>
                        <span class="fas fa-star star_on"></span>
                        <span class="fas fa-star "></span>
                    </div>
                    <div class="btn-block">
                        <a href="" class="btn btn-outlined">Add To Cart</a>
                        <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div style="color: white; background-color:red; margin-left: 200px; width: 350px; margin-bottom: 70px;" class="alert alert-info" role="alert">
        <strong style="color: red;">Sorry!</strong> No products are currently available.
    </div>
    @endif

</div>

@endsection