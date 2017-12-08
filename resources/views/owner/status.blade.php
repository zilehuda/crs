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
    <thead>
      <tr>
        <th><h5>CAR NAME:</h5></th>
        <th><h5>ClIENT NAME</h5></th>
        <th><h5>START ON</h5></th>
      </tr>
    </thead>
    <tbody>
			@foreach($cb as $value)
      <tr>
        <td>{{ $value->car_name }}</td>
        <td>{{ $value->fname }} </td>
				<td>{{ $value->hire_date }}</td>
      </tr>
			@endforeach
    </tbody>
  </table>

      </div>
    </section>





@endsection
