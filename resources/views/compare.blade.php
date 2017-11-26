@extends('base')
@section('content')
<section class="b-pageHeader">
			<div class="container">
				<h1 class=" wow zoomInLeft" data-wow-delay="0.3s">Auto Listings</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.3s">
					<h3>Compare Favourite Cars</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->



		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.3s">
				<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="compare.html" class="b-breadCumbs__page m-active">Compare Vehicles</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-xs-12 wow zoomInUp" data-wow-delay="0.3s">
						<h5>QUESTIONS? CALL US  :  <span>1-800- 624-5462</span></h5>
					</div>
					<div class="col-sm-7 col-xs-12">
						<div class="b-infoBar__btns wow zoomInUp" data-wow-delay="0.3s">
							<a href="#" class="btn m-btn m-infoBtn">SHARE THIS COMPARISON<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">ADD A VEHICLE<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<section class="b-compare s-shadow">
			<div class="container">
				<div class="b-compare__images">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-3">
							<div class="b-compare__images-item s-lineDownCenter wow zoomInUp" data-wow-delay="0.3s">
								<h3>Jaguar XJ 2015</h3>
								<img class="img-responsive center-block" src="media/270x180/jaguarComp.jpg" alt="jaguar" />
								<div class="b-compare__images-item-price m-right"><div class="b-compare__images-item-price-vs">vs</div>$90,600</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 ">
							<div class="b-compare__images-item s-lineDownCenter wow zoomInUp" data-wow-delay="0.3s">
								<h3>Mercedes E-Class 2015</h3>
								<img class="img-responsive center-block" src="media/270x180/mercComp.jpg" alt="merc" />
								<div class="b-compare__images-item-price m-right m-left"><div class="b-compare__images-item-price-vs">vs</div>$52,650</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="b-compare__images-item s-lineDownCenter wow zoomInUp" data-wow-delay="0.3s">
								<h3>Lexus LS 2015</h3>
								<img class="img-responsive center-block" src="media/270x180/lexusComp.jpg" alt="lexus" />
								<div class="b-compare__images-item-price m-left">$120,440</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-compare__block wow zoomInUp" data-wow-delay="0.3s">
					<div class="b-compare__block-title s-whiteShadow">
						<h3 class="s-titleDet">BASIC INFO</h3>
						<a class="j-more" href="#"><span class="fa fa-angle-left"></span></a>
					</div>
					<div class="b-compare__block-inside j-inside">
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Make / Year
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Jaugar 2015
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Mercedez-Benz 2015
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Lexus 2015
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Front Head Room
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									39.5 in
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									38.0 in
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									37.9 in
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Width / Height / Length
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									74.8 in  /  57.3 in  /  201.9 in
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									73.0 in  /  57.0 in  /  192.5 in
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									56.4 in  /  73.8 in  /  205.0 in
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Wheel Base
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									119.0 in
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									113.5 in
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									121.6 in
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Cargo capacity, all seats in place
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									15.2 cu.ft.
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									12.9 cu.ft.
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									13.0 cu.ft.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-compare__block wow zoomInUp" data-wow-delay="0.3s">
					<div class="b-compare__block-title s-whiteShadow">
						<h3 class="s-titleDet">MECHANICAL FEATURES</h3>
						<a class="j-more" href="#"><span class="fa fa-angle-left"></span></a>
					</div>
					<div class="b-compare__block-inside j-inside">
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Base Engine / Cylinders
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									5.0 L / V8
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									201 L / Inline 4
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									5.0 L / V8
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Fuel Capacity / Type
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									21.7 gal. / Flex-fuel
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									21.1 gal. / Diesel fuel
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									22.2 gal / Premium
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Fuel Economy (city / hwy)
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									15 / 23 mpg
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									28 / 42 mpg
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									19 / 23 mpg
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Horsepower
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									470 hp @ 6000 rpm
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									195 hp @ 3800 rpm
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									438 hp @ 6400 rpm
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Transmission
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									8-speed shiftable automatic
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									7-speed shiftable automatic
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Variable-speed automatic
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-compare__block wow zoomInUp" data-wow-delay="0.3s">
					<div class="b-compare__block-title s-whiteShadow">
						<h3 class="s-titleDet">WARRANTY FEATURES</h3>
						<a class="j-more" href="#"><span class="fa fa-angle-left"></span></a>
					</div>
					<div class="b-compare__block-inside j-inside">
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Fuel Economy (city / hwy)
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									15 / 23 mpg
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									28 / 42 mpg
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									19 / 23 mpg
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Horsepower
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									470 hp @ 6000 rpm
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									195 hp @ 3800 rpm
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									438 hp @ 6400 rpm
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Transmission
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									8-speed shiftable automatic
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									7-speed shiftable automatic
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Variable-speed automatic
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-compare__block wow zoomInUp" data-wow-delay="0.3s">
					<div class="b-compare__block-title s-whiteShadow">
						<h3 class="s-titleDet">EXTERIOR / INTERIOR FEATURES</h3>
						<a class="j-more" href="#"><span class="fa fa-angle-left"></span></a>
					</div>
					<div class="b-compare__block-inside j-inside">
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									All Season Tires
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Optional
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Power Glass Sunroof
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Tire Size
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									275/35R20 102Y tires
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									245/45R17 tires
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									245/45R V tires
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Wheels
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Painted alloy wheels
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Alloy wheels
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Painted alloy wheels
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									A/C With Climate Control
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Built-in Hard Drive
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Optional
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									N / A
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									HD Radio
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Heated / Cooled Seats
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Optional
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value">
									Standard
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-compare__block wow zoomInUp" data-wow-delay="0.3s">
					<div class="b-compare__block-title s-whiteShadow">
						<h3 class="s-titleDet">OTHER OPTIONS</h3>
						<a class="j-more" href="#"><span class="fa fa-angle-left"></span></a>
					</div>
					<div class="b-compare__block-inside j-inside">
						<div class="row">
							<div class="col-xs-3">
								<div class="b-compare__block-inside-title">
									Misc. Options
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value s-lineDownCenter">
									<ul>
										<li><span class="fa fa-check"></span>Security System</li>
										<li><span class="fa fa-check"></span>Air Conditioning</li>
										<li><span class="fa fa-check"></span>Alloy Wheels</li>
										<li><span class="fa fa-check"></span>Anti-Lock Brakes (ABS)</li>
										<li><span class="fa fa-check"></span>Anti-Theft</li>
										<li><span class="fa fa-check"></span>Anti-Starter</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value s-lineDownCenter">
									<ul>
										<li><span class="fa fa-check"></span>Security System</li>
										<li><span class="fa fa-check"></span>Air Conditioning</li>
										<li><span class="fa fa-check"></span>Alloy Wheels</li>
										<li><span class="fa fa-check"></span>Anti-Lock Brakes (ABS)</li>
										<li><span class="fa fa-check"></span>Anti-Theft</li>
										<li><span class="fa fa-check"></span>Anti-Starter</li>
										<li><span class="fa fa-check"></span>CD Player</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="b-compare__block-inside-value s-lineDownCenter">
									<ul>
										<li><span class="fa fa-check"></span>Security System</li>
										<li><span class="fa fa-check"></span>Air Conditioning</li>
										<li><span class="fa fa-check"></span>Alloy Wheels</li>
										<li><span class="fa fa-check"></span>CD Player</li>
										<li><span class="fa fa-check"></span>Driver Side Airbag</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-compare__links wow zoomInUp" data-wow-delay="0.3s">
					<div class="row">
						<div class="col-sm-3 col-xs-12 col-sm-offset-3">
							<a href="detail.html" class="btn m-btn">VIEW LISTINGS<span class="fa fa-angle-right"></span></a>
						</div>
						<div  class="col-sm-3 col-xs-12">
							<a href="detail.html" class="btn m-btn">VIEW LISTINGS<span class="fa fa-angle-right"></span></a>        
						</div>
						<div class="col-sm-3 col-xs-12">
							<a href="detail.html" class="btn m-btn">VIEW LISTINGS<span class="fa fa-angle-right"></span></a>      
						</div>
					</div>
				</div>
			</div>
		</section><!--b-compare-->



@endsection