@extends('base')
@section('content')
<section class="b-pageHeader">
			<div class="container">
				<h1 class=" wow zoomInLeft" data-wow-delay="0.3s">ADMIN PANEL</h1>

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
						<h5>CLIENT REQUESTS:</h5>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->
    <section class="b-compare s-shadow">
      <div class="container">
        <table class="table">
    <thead>
      <tr>
        <th><h5>CLIENT NAME:</h5></th>
        <th><h5>CAR NAME:</h5></th>
        <th><h5>CAR STATUS:</h5></th>
				<th><h5>ACTION:</h5></th>
      </tr>
    </thead>
    <tbody>
			@foreach($cb as $value)
      <tr>
        <td>{{ $value->fname }}</td>
        <td>{{ $value->car_name }}</td>
				<td>{{ $value->status }}</td>
				<td><form  action="{{ route('car.approve') }}" method="post" onsubmit="return confirm('Do you really want to approve this car ?');">
					{{ csrf_field() }}
					<input type="hidden" name="car_id" value="{{$value->car_id}}">
					<input type="hidden" name="client_id" value="{{$value->client_id}}">
				<button type="submit" class="btn m-btn">APPROVE IT<span class="fa fa-angle-right"></span></button>
			</form></td>
      </tr>
			@endforeach
    </tbody>
  </table>
      </div>
    </section>
@endsection
