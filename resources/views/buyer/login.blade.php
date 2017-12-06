@extends('base')
@section('js')
<script src="{{ asset('js/loginvalidate.js') }}"></script>
@endsection
@section('content')
<section class="b-pageHeader">
	<div class="container">
		<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Submit Your Vehicle</h1>
		<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
			<h3>Login As a Client</h3>
		</div>
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
	<div class="container wow zoomInUp" data-wow-delay="0.5s">
		<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit1.html" class="b-breadCumbs__page m-active">client login</a>
	</div>
</div><!--b-breadCumbs-->


<div class="b-submit">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
				<aside class="b-submit__aside">
					<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.5s">
						<h3>LOGIN</h3>
						<div class="b-submit__aside-step-inner m-active clearfix">
							<div class="b-submit__aside-step-inner-icon">
								<span class="fa fa-car"></span>
							</div>
							<div class="b-submit__aside-step-inner-info">
								<h4>SIGN IN AS A CLIENT</h4>
								<div class="b-submit__aside-step-inner-info-triangle"></div>
							</div>
						</div>
					</div>
				</aside>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
				@if (Session::has('message'))
			<div class="alert alert-danger wow zoomInUp" data-wow-delay="0.5s">
				<p style="text-align: center;" >{{ session('message') }}</p>
			</div>
			@endif
			@if (Session::has('success'))
		<div class="alert alert-success wow zoomInUp" data-wow-delay="0.5s">
			<p style="text-align: center;" >{{ session('success') }}</p>
		</div>
		@endif
		</div>
			<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
				<div class="b-submit__main">
					<header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
						<h2 class="">Login as a Client</h2>
					</header>

					<form id="loginForm" class="s-submit clearfix" action="{{ route ('client.login.submit') }}" method="POST">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter email address <span>*</span></label>
									<input id="email" placeholder="Email Address" type="text" name="email" />
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label >Enter password <span>*</span></label>
									<input style="display: block;
								  width: 100%;
								  padding: 15px 20px;
								  font: 400 13px 'Open Sans',sans-serif;
								  border: 1px solid #eeeeee;
								  color:#444;
									outline: none;
								  background: #f7f7f7!important;
								  text-transform: none;
								  border-radius: 30px;
								  padding-top: 13px;
								  padding-bottom: 13px;
								  height:46px;"  placeholder="Password" id="password" type="password"  name="password" />
								</div>
							</div>
						</div>
						<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Login<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!--b-submit-->

@endsection
