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

		<div class="b-infoBar">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="b-infoBar__progress wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-infoBar__progress-line clearfix">
								<div class="b-infoBar__progress-line-step">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
									</div>
								</div>
								<div class="b-infoBar__progress-line-step">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner"></div>
									</div>
								</div>
								<div class="b-infoBar__progress-line-step">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner"></div>
									</div>
								</div>
								<div class="b-infoBar__progress-line-step">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner"></div>
									</div>
									<div class="b-infoBar__progress-line-step-circle m-last">
										<div class="b-infoBar__progress-line-step-circle-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<div class="b-submit">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
						<aside class="b-submit__aside">
							<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.5s">
								<h3>Step 1</h3>
								<div class="b-submit__aside-step-inner m-active clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-car"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>Add YOUR Vehicle</h4>
										<p>Select your vehicle &amp; add info</p>
										<div class="b-submit__aside-step-inner-info-triangle"></div>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
								<h3>Step 2</h3>
								<div class="b-submit__aside-step-inner clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-list-ul"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>select details</h4>
										<p>Choose vehicle specifications</p>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
								<h3>Step 3</h3>
								<div class="b-submit__aside-step-inner clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-photo"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>Photos &amp; videos</h4>
										<p>Add images / videos of vehicle</p>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
								<h3>Step 4</h3>
								<div class="b-submit__aside-step-inner clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-user"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>Contact details</h4>
										<p>Choose vehicle specifications</p>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
								<h3>Step 5</h3>
								<div class="b-submit__aside-step-inner clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-globe"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>SUBMIT &amp; PUBLISH</h4>
										<p>Add images / videos of vehicle</p>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
						<div class="b-submit__main">
							<header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
								<h2 class="">Add Your Vehicle Details</h2>
							</header>
							<form id=submitForm class="s-submit clearfix" action="{{ route('submit1.submit') }}" method="POST">
                                {{ csrf_field() }}
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                        <label>Enter Make <span>*</span></label>
                                        <input placeholder="Company Name" type="text"  name="company" />
										</div>
										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                        <label>Vehicle Manufacturer Year <span>*</span></label>
                                        <input placeholder="e.g:        2010" type="text"  name="menu_year" />
										</div>




										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Select Fuel Type <span>*</span></label>
											<div class='s-relative'>
												<select class="m-select" name="fuel">
													<option>Select</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>



										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Enter Insurance Number <span>*</span></label>
											<input placeholder="xxx xxx xxx" type="text"  name="ins_no" />
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Enter Vehicle Model <span>*</span></label>
											<input placeholder="Car Name" type="text"  name="model" />
										</div>







										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Enter Engine Capacity <span>*</span></label>
											<input placeholder="e.g:     60 hp @ 6000 RPM" type="text" name="capacity" />
										</div>
										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Enter VIN/Chassis Number <span>*</span></label>
											<input placeholder="xxx xxx xxx" type="text"  name="chassis_no" />
										</div>
									</div>
								</div>
								<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp; PROCEED to next step<span class="fa fa-angle-right"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><<!--b-submit-->
            <section></section>
        </!--b-submit-->


@endsection
