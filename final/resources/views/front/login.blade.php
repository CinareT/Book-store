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
							<li class="breadcrumb-item active">Login</li>
						</ol>
					</nav>
				</div>
			</div>
</section>
<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					
				
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
						     <!-- login Form s-->
							 @if(session()->has('error'))
                     <div class="alert alert-danger">
                      {{ session('error') }}
                         </div>
                    @endif
						<form method="POST" action="{{route('auth.login')}}">
							@csrf
							<div class="login-form">
								<h4 class="login-title">Returning Customer</h4>
								<p><span class="font-weight-bold">I am a returning customer</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input name="email" class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here...">
											@error('email')
                                            <div style="font-size: 12px; margin-top: -20px; padding: 10px;" class="alert alert-danger" role="alert">
                                            {{$message}}</div>
                                            @enderror
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input name="password" class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password">
									</div>
					
									<div>
                                        <input type="checkbox" name="remember" id="">
										<label for="">Remember me</label>
                                    </div>
				
									<div class="col-md-12">
										<button href="#" class="btn btn-outlined">Login</button>
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




