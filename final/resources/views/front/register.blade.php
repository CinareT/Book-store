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
							<li class="breadcrumb-item active">Register</li>
						</ol>
					</nav>
				</div>
			</div>
</section>

<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
						<!-- register Form s-->
						<form method="POST" action="{{route('auth.register')}}">
							@csrf
							<div class="login-form">
								<h4 class="login-title">New Customer</h4>
								<p><span class="font-weight-bold">I am a new customer</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Full Name</label>
										<input name="name" class="mb-0 form-control" type="text" id="name"
											placeholder="Enter your full name">
											@error('name')
                                             <div style="font-size: 12px; margin-top: -20px; padding: 10px;" class="alert alert-danger" role="alert">
                                            {{$message}}</div>
                                            @enderror
									</div>
									<div class="col-12 mb--20">
										<label for="email">Email</label>
										<input class="mb-0 form-control" name="email" type="email" id="email" placeholder="Enter Your Email Address Here..">
										@error('email')
                                            <div style="font-size: 12px; margin-top: -20px; padding: 10px;" class="alert alert-danger" role="alert">
                                            {{$message}}</div>
                                            @enderror
									</div>
									<div class="col-lg-6 mb--20">
										<label for="password">Password</label>
										<input name="password" class="mb-0 form-control" type="password" id="password" placeholder="Enter your password">
										    @error('password')
                                            <div style="font-size: 12px; padding: 10px;" class="alert alert-danger" role="alert">
                                            {{$message}}</div>
                                            @enderror
									</div>
									<div class="col-lg-6 mb--20">
										<label for="password">Repeat Password</label>
										<input name="password__repeat" class="mb-0 form-control" type="password" id="repeat-password" placeholder="Repeat your password">
										    @error('password_repeat')
                                            <div style="font-size: 12px;  padding: 10px;" class="alert alert-danger" role="alert">
                                            {{$message}}</div>
                                            @enderror
									</div>
 


									<div class="col-md-12">
										<button href="#" class="btn btn-outlined">Register</button>
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