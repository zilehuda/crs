@extends('base')
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
					<form class="s-submit clearfix" action="submit2.html" method="POST">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter Engine Capacity <span>*</span></label>
									<input placeholder="Enter Capacity" type="text" name="input1" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter Engine Capacity <span>*</span></label>
									<input placeholder="Enter Capacity" type="text" name="input1" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter Engine Capacity <span>*</span></label>
									<input placeholder="Enter Capacity" type="text" name="input1" />
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter VIN/Chassis Number <span>*</span></label>
									<input placeholder="Enter Number" type="text"  name="input2" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter Engine Capacity <span>*</span></label>
									<input placeholder="Enter Capacity" type="text" name="input1" />
								</div>
								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
									<label>Enter Engine Capacity <span>*</span></label>
									<input placeholder="Enter Capacity" type="text" name="input1" />
								</div>
							</div>
						</div>
						<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp; PROCEED to next step<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!--b-submit-->

@endsection
