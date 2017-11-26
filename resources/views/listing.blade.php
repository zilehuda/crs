@extends('base')
@section('content')
<section class="b-pageHeader">
			<div class="container">
				<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
					<h3>Your search returned 28 results</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.5s">
				<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="listings.html" class="b-breadCumbs__page m-active">Search Results</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-xs-12">
						<div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">
							<div class="dropdown">
								<a href="#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>RECENTLY VIEWED<span class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="detail.html">Item</a></li>
									<li><a href="detail.html">Item</a></li>
									<li><a href="detail.html">Item</a></li>
									<li><a href="detail.html">Item</a></li>
								</ul>
							</div>
							<a href="compare.html" class="b-infoBar__compare-item"><span class="fa fa-compress"></span>COMPARE VEHICLES: 2</a>
						</div>
					</div>
					<div class="col-lg-8 col-xs-12">
						<div class="b-infoBar__select">
							<form method="post" action="/">
								<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
									<span class="b-infoBar__select-one-title">SELECT VIEW</span>
									<a href="listingsTwo.html" class="m-list m-active"><span class="fa fa-list"></span></a>
									<a href="listTable.html" class="m-table"><span class="fa fa-table"></span></a>
								</div>
								<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
									<span class="b-infoBar__select-one-title">SHOW ON PAGE</span>
									<select name="select1" class="m-select">
										<option value="" selected="">10 items</option>
									</select>
									<span class="fa fa-caret-down"></span>
								</div>
								<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
									<span class="b-infoBar__select-one-title">SORT BY</span>
									<select name="select2" class="m-select">
										<option value="" selected="">Last Added</option>
									</select>
									<span class="fa fa-caret-down"></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<section class="b-items s-shadow">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-sm-8 col-xs-12">
						<div class="b-items__cars">
							<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__cars-one-img">
									<img src="media/270x230/nissanList.jpg" alt="nissan" />
								</div>
								<div class="b-items__cars-one-info">
									<header class="b-items__cars-one-info-header s-lineDownLeft">
										<h2>2016 Nissan Maxima</h2>
										<span>$32,115</span>
									</header>
									<p>
										Once billed as the "four-door sports car," the Maxima has grown bigger and heavier over the decades, detracting from its appeal. The current generation
									</p>
									<div class="b-items__cars-one-info-km">
										<span class="fa fa-tachometer"></span> 35,000 KM
									</div>
									<div class="b-items__cars-one-info-details">
										<div class="b-featured__item-links">
											<a href="#">Registered 2015</a>
											<a href="#">Used</a>
											<a href="#">7-Speed Automatic</a>
											<a href="#">Petrol</a>
										</div>
										<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__pagination-main">
								<a data-toggle="modal" data-target="#myModal" href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
								<span class="m-active"><a href="#">1</a></span>
								<span><a href="#">2</a></span>
								<span><a href="#">3</a></span>
								<span><a href="#">4</a></span>
								<a href="#" class="m-right"><span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-4 col-xs-12">
						<aside class="b-items__aside">
							<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">REFINE YOUR SEARCH</h2>
							<div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
								<form>
									<div class="b-items__aside-main-body">
										<div class="b-items__aside-main-body-item">
											<label>SELECT A MAKE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Make</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>SELECT A MODEL</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Make</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>PRICE RANGE</label>
											<div class="slider"></div>
											<input type="hidden" name="min" value="100" class="j-min" />
											<input type="hidden" name="max" value="1000" class="j-max" />
										</div>
										<div class="b-items__aside-main-body-item">
											<label>VEHICLE TYPE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Type</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>VEHICLE STATUS</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Status</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>FUEL TYPE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">All Fuel Types</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
									</div>
									<footer class="b-items__aside-main-footer">
										<button type="submit" class="btn m-btn">FILTER VEHICLES<span class="fa fa-angle-right"></span></button><br />
										<a href="">RESET ALL FILTERS</a>
									</footer>
								</form>
							</div>
							<div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__aside-sell-img">
									<h3>SELL YOUR CAR</h3>
								</div>
								<div class="b-items__aside-sell-info">
									<p>
										Nam tellus enimds eleifend dignis lsim
										biben edum tristique sed metus fusce
										Maecenas lobortis.
									</p>
									<a href="submit1.html" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section><!--b-items-->



@endsection
