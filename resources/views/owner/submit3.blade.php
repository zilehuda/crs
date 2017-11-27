@extends('base')
@section('content')


<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.3s">Submit Your Vehicle</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.3s">
					<h3>Add Your Vehicle In Our Listings</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.3s">
				<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit4.html" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="b-infoBar__progress wow zoomInUp" data-wow-delay="0.3s">
							<div class="b-infoBar__progress-line clearfix">
								<div class="b-infoBar__progress-line-step m-active">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
									</div>
								</div>
								<div class="b-infoBar__progress-line-step m-active">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
									</div>
								</div>
								<div class="b-infoBar__progress-line-step m-active">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
									</div>
								</div>
								<div class="b-infoBar__progress-line-step">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
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
							<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
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
							<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
								<h3>Step 2</h3>
								<div class="b-submit__aside-step-inner m-active clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-list-ul"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>select details</h4>
										<p>Choose vehicle specifications</p>
										<div class="b-submit__aside-step-inner-info-triangle"></div>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
								<h3>Step 3</h3>
								<div class="b-submit__aside-step-inner m-active clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-photo"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>Photos &amp; videos</h4>
										<p>Add images / videos of vehicle</p>
										<div class="b-submit__aside-step-inner-info-triangle"></div>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
								<h3>Step 4</h3>
								<div class="b-submit__aside-step-inner m-active clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-user"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>Contact details</h4>
										<p>Choose vehicle specifications</p>
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.3s">
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
							<form action="{{ route('submit3.submit') }}" method="post" class='s-submit'>
                                {{ csrf_field() }}
								<div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft">
										<h2>Upload Your Vehicle Photos</h2>
									</header>
									<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
									<div class="b-submit__main-contacts-price">
										<div class="row m-smallPadding">
											<div class="col-lg-4 col-xs-12">
												<h6>Enter Your Expected Price</h6>
											</div>
											<div class="col-lg-8 col-xs-12">
												<div class="b-submit__main-contacts-price-input">
													<span class="fa fa-car"></span>
													<input type='text' name="price"/>
													<span class="b-submit__main-contacts-price-input-usd">
														IN PAK RS
													</span>
												</div>
												<div class="b-submit__main-contacts-price-note">
													Price Guide Estimation: $25,000 - $35,000
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Enter Mileage <span>*</span></label>
												<div class="b-submit__main-contacts-inputSelect">
													<input type="text" name="milage"/>
													<div class="b-submit__main-contacts-select">
														<select name="km" class="m-select">
															<option>IN KMS</option>
														</select>
														<span class="fa fa-caret-down"></span>
													</div>
												</div>
											</div>
											<div class="b-submit__main-element">
												<label>Air Bags</label>
												<div class="s-relative">
													<select class="m-select" name="airbags">
														<option>Select</option>
													</select>
													<span class="fa fa-caret-down"></span>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>GPS:Global Positioning System <span></span></label>
												<div class="s-relative">
													<select class="m-select" name="gps">
														<option>Select</option>
													</select>
													<span class="fa fa-caret-down"></span>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft">
										<h2>Vehicle Registration Details</h2>
									</header>
									
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Enter Registerarion Plate Number  <span>*</span></label>
												<input placeholder="xxx xxx xxx" type="text" name="plate_no"/>
											</div>
											
                                            
                                            
                                            <div class="b-submit__main-element">
                                            <label>Select Registerarion Expiry Year <span>*</span></label>
												<div class="s-relative">
													<select class="m-select" name="reg_expy">
														<option>Select</option>
													</select>
													<span class="fa fa-caret-down"></span>
												</div>
											</div>




										</div>
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
                                            <label>Select Registerarion Expiry Month  <span>*</span></label>
                                            <div class="s-relative">
                                                <select class="m-select" name="reg_expm">
                                                    <option>Select</option>
                                                </select>
                                                <span class="fa fa-caret-down"></span>
                                            </div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
									
									
									
								</div>
								<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">PUBLISH MY LISTING NOW<span class="fa fa-angle-right"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-submit-->




@endsection