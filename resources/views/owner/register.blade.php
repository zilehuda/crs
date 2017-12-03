@extends('base')

@section('js')
<script src="{{ asset('js/loginvalidate.js') }}"></script>
@endsection

@section('content')
<section class="b-pageHeader">
	<div class="container">
		<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Submit Your Vehicle</h1>
		<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
			<h3>Add Your Vehicle In Our Listings</h3>
		</div>
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
	<div class="container wow zoomInUp" data-wow-delay="0.5s">
		<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit1.html" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
	</div>
</div><!--b-breadCumbs-->


<div class="b-submit">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
				<aside class="b-submit__aside">
					<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.5s">
						<h3>REGISTER AS BUYER</h3>
						<div class="b-submit__aside-step-inner m-active clearfix">
							<div class="b-submit__aside-step-inner-icon">
								<span class="fa fa-car"></span>
							</div>

							<div class="b-submit__aside-step-inner-info">
								<h4>ENTER YOUR DETAIL</h4>
								<div class="b-submit__aside-step-inner-info-triangle"></div>
							</div>
						</div>
					</div>
					<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
						<h3>REGISTER AS AN OWNER</h3>
						<div class="b-submit__aside-step-inner clearfix">
							<div class="b-submit__aside-step-inner-icon">
								<span class="fa fa-list-ul"></span>
							</div>
							<a href="#">
							<div class="b-submit__aside-step-inner-info">
								<h4>select details</h4>
								<p>Choose vehicle specifications</p>
							</div>
							</a>
						</div>
					</div>
				</aside>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
				<div class="b-submit__main">
					<header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
						<h2 class="">CLIENT REGISTERATION</h2>
					</header>
					<form id="registerForm" class="s-submit clearfix" action="{{ route('owner.register') }}" method="POST">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Full Name <span>*</span></label>
									<input id="fname" placeholder="NAME" type="text" name="fname" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Email Address <span>*</span></label>
									<input id="email" placeholder="john@example.com" type="text" name="email" required/>
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label >Password <span>*</span></label>
									<input style="display: block;
								  width: 100%;
								  padding: 15px 20px;
								  font: 400 13px 'Open Sans',sans-serif;
								  border: 1px solid #eeeeee;
								  color:#444;
								  background: #f7f7f7!important;
								  text-transform: none;
								  border-radius: 30px;
								  padding-top: 13px;
								  padding-bottom: 13px;
								  height:46px;" placeholder="*******" id="password" type="password" name="password" />

								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>City<span>*</span></label>
									<input placeholder="Karachi" type="text" name="city" />
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Gender<span>*</span></label>
									<div class='s-relative'>
										<select class="m-select" name="gender">
											<option>Male</option>
											<option>Female</option>
										</select>
										<span class="fa fa-caret-down"></span>
									</div>
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Phone Number<span>*</span></label>
									<input placeholder="03211234567" type="text" name="phone" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label >Password <span>*</span></label>
									<input style="display: block;
								  width: 100%;
								  padding: 15px 20px;
								  font: 400 13px 'Open Sans',sans-serif;
								  border: 1px solid #eeeeee;
								  color:#444;
								  background: #f7f7f7!important;
								  text-transform: none;
								  border-radius: 30px;
								  padding-top: 13px;
								  padding-bottom: 13px;
								  height:46px;" placeholder="*******" type="password" name="confirm_password" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>NIC<span>*</span></label>
									<input placeholder="xxx xxx xxx" type="text" name="nic" />
								</div>
							</div>
						</div>
						<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">REGISTER<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!--b-submit-->

@endsection
