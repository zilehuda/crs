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
							@foreach ($cars as $car)
							<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__cars-one-img">
									<img src="media/270x230/nissanList.jpg" alt="nissan" />
								</div>
								<div class="b-items__cars-one-info">
									<header class="b-items__cars-one-info-header s-lineDownLeft">
										<h2>{{ $car->car_name }}</h2>
										<span>{{ $car->hire_cost }} / day</span>
									</header>
									<div class="b-items__cars-one-info-km">
										<span class="fa fa-tachometer"></span> {{ $car->mileage }} KM
									</div>
									<div class="b-items__cars-one-info-details">
										<div class="b-featured__item-links">
											<a href="#">manufacture year: {{ $car->manu_year }}</a>
											<a >{{ $car->fuel_type }}</a>
										</div>
										<a href="{{ route('single.car', $car->car_id) }}" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>
							@endforeach

						</div>
						<div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">
							{{ $cars->links() }}
						</div>
					</div>
					<div class="col-lg-3 col-sm-4 col-xs-12">
						<aside class="b-items__aside">
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
									<a href="submit1" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section><!--b-items-->



@endsection
