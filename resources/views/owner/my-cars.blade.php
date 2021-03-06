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
						<h5>YOUR CAR STATUS:</h5>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->
    <section class="b-compare s-shadow">
      <div class="container">
        <table class="table">
					@if(session('message'))
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
					<div class="alert alert-success wow zoomInUp" data-wow-delay="0.5s">
						<p style="text-align: center;">{{ session('message') }}</p>
					</div>
				</div>
				@endif
    <thead>
      <tr>
        <th><h5>CAR NAME:</h5></th>
        <th><h5>SUBMIT ON</h5></th>
        <th><h5>CAR STATUS:</h5></th>
      </tr>
    </thead>
    <tbody>
			@foreach($cb as $value)
      <tr>
        <td>{{ $value->car_name }}</td>
        <td>02-01-2016</td>
        <td><a  class="btn m-btn m-infoBtn">{{ $value->status }}<span class="fa fa-angle-right"></span></a></td>
      </tr>
			@endforeach
    </tbody>
  </table>

      </div>
    </section>





@endsection
