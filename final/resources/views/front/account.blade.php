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
							<li class="breadcrumb-item active">My Account</li>
						</ol>
					</nav>
				</div>
			</div>
</section>
<div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<!-- My Account Tab Menu Start -->
							<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									<a href="#dashboad" class="active" data-toggle="tab"><i
											class="fas fa-tachometer-alt"></i>
										Dashboard</a>
									<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

									<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
										Adress</a>
									<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
										Details</a>
                                        <a onclick="return confirm('Are you sure?')" href="{{route('client.logout')}}" class="font-weight-bold" >Logout</a> 
								</div>
							</div>
							<!-- My Account Tab Menu End -->
							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-12 mt--30 mt-lg--0">
								<div class="tab-content" id="myaccountContent">
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
										<div class="myaccount-content">
											<h3>Dashboard</h3>
											<div class="welcome mb-20">
												<p>Hello, <strong>{{ auth()->user()->name}}</strong> (If Not <strong>{{ auth()->user()->name}}
														!</strong>                                      
											  <a onclick="return confirm('Are you sure?')" href="{{route('client.logout')}}" class="font-weight-bold" >Logout</a> 
)</p>
											</div>
											<p class="mb-0">From your account dashboard. you can easily check &amp; view
												your
												recent orders, manage your shipping and billing addresses and edit your
												password and account details.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="orders" role="tabpanel">
										<div class="myaccount-content">
											<h3>Orders</h3>
											<div class="myaccount-table table-responsive text-center">
												<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>No</th>
															<th>Name</th>
															<th>Date</th>
															<th>Total</th>
														</tr>
													</thead>
													<tbody>
													@foreach($orders as $order)

														<tr>
														
														
												          
														 <td>{{ $order->id }}</td>
														 <td>{{ $order->firstName }}</td>
															
														  
												           
													<td>  {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i:s') }}</td>
															<td><strong>£ {{ $order->total_amount}}</strong></td>
														</tr>
														@endforeach
														
														<!-- <tr>
															<td>2</td>
															<td>Katopeno Altuni</td>
															<td>July 22, 2018</td>
															<td>$100</td>
															<td><a href="cart.html" class="btn">View</a></td>
														</tr>
														<tr>
															<td>3</td>
															<td>Murikhete Paris</td>
															<td>June 12, 2017</td>
															<td>$99</td>
															<td><a href="cart.html" class="btn">View</a></td>
														</tr> -->
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->

									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="address-edit" role="tabpanel">
										<div class="myaccount-content">
											<h3>Billing Address</h3>
											<address>
											@if($lastOrder = $orders->last())
												<p><strong>{{ auth()->user()->name }}</strong></p>
												<p>{{ $lastOrder->countryName }} <br>
												{{ $lastOrder->city }} {{ $lastOrder->state }}</p>
												<p>{{ $lastOrder->phoneNo }}</p>
												@endif
											</address>
											<!-- <a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
												Address</a> -->
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="account-info" role="tabpanel">
										<div class="myaccount-content">
											<h3>Account Details</h3>
											<div class="account-details-form">
												<form action="{{ route('user.updatePassword') }}" method="post">
													@csrf
													<div class="row">
														<div class="col-lg-6 col-12  mb--30">
									 					<label for="name">First Name</label>
									                  	<input name="name" class="mb-0 form-control" type="text" id="name"
										            	placeholder="Enter your first name">
										            	@error('name')
                                                                  <div style="font-size: 12px; margin-top: -20px; padding: 10px;" class="alert alert-danger" role="alert">
                                                                 {{$message}}</div>
                                                                  @enderror														</div>
														<div class="col-lg-6 col-12  mb--30">
														<label for="name">Last Name</label>
									                    	<input name="name" class="mb-0 form-control" type="text" id="name"
											              placeholder="Enter your last name">
											              @error('name')
                                                                    <div style="font-size: 12px; margin-top: -20px; padding: 10px;" class="alert alert-danger" role="alert">
                                                                   {{$message}}</div>
                                                                    @enderror	</div>
														<div class="col-12  mb--30">
															<input id="display-name" placeholder="Display Name"
																type="text">
														</div>

														<div class="col-12  mb--30">
										                   <label for="email">Email</label>
										                    <input class="mb-0 form-control" name="email" type="email" id="email" placeholder="Enter Your Email Address Here..">
										                   @error('email')
                                                                     <div style="font-size: 12px; margin-top: -20px; padding: 10px;" class="alert alert-danger" role="alert">
                                                                     {{$message}}</div>
                                                                     @enderror														</div>


													    <div class="col-12  mb--30">
                                                                       <h4>Password change</h4>
                                                                     </div>
                                                                      <div class="col-12  mb--30">
                                                                       <input id="current-pwd" name="current_password" placeholder="Current Password" type="password">
                                                                      </div>
                                                                      <div class="col-lg-6 col-12  mb--30">
                                                                     <input name="password" class="mb-0 form-control" type="password" id="new_password" placeholder="New password">
                                                                       @error('password')
                                                                      <div style="font-size: 12px; padding: 10px;" class="alert alert-danger" role="alert">
                                                                        {{$message}}
                                                                       </div>
                                                                       @enderror
                                                                      </div>
                                                                      <div class="col-lg-6 col-12  mb--30">
                                                                      <input name="confirm_password" class="mb-0 form-control" type="password" id="confirm_password" placeholder="Confirm password">
                                                                        @error('confirm_password')
                                                                     <div style="font-size: 12px; padding: 10px;" class="alert alert-danger" role="alert">
                                                                      {{$message}}
                                                                  </div>
                                                                    @enderror
                                                               </div>

                                                                 <div class="col-12">
                                                                  <button class="btn btn--primary" type="submit" name="submit">Save Changes</button>
                                                                 </div>


                                                                  <!-- @if(session('password_mismatch'))
                                                                  <div class="col-12">
                                                                    <div style="font-size: 12px; padding: 10px;" class="alert alert-danger" role="alert">
                                                                     {{ session('password_mismatch') }}
                                                                    </div>
                                                                  </div>
                                                                 @endif -->


													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
								</div>
							</div>
							<!-- My Account Tab Content End -->
						</div>
					</div>
				</div>
			</div>
</div>

@include('front.layouts.includes.margin');

@endsection