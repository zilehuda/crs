@extends('base')

@section('js')

<script>
$(document).on("click", ".open-AddBookDialog", function () {

     var myBookId = $(this).data('id-car-name');
     $("#car-name").text( myBookId );
     $("#client-name").text( $(this).data('id-client-name'));
     $("#hire-cost").text( $(this).data('id-hire-cost') );
     $("#start-date").text( $(this).data('id-start-date'));
     $("#end-date").text( $(this).data('id-end-date'));
});
</script>

@endsection
@section('content')


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="car-name" class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <dl class="dl-horizontal">
          <dt>Client Name</dt>
          <dd id="client-name"></dd>
          <dt>Hire Cost</dt>
          <dd id="hire-cost"></dt>
          <dt>Start Date</dt>
          <dd id="start-date"></dd>
          <dt>End Date</dt>
          <dd id="end-date"></dd>




        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<section class="b-pageHeader">
  <div class="container">
    <h1 class=" wow zoomInLeft" data-wow-delay="0.3s">ADMIN PANEL</h1>

  </div>
</section>
<!--b-pageHeader-->
<div class="b-breadCumbs s-shadow">
  <div class="container wow zoomInUp" data-wow-delay="0.3s">
    <a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="compare.html" class="b-breadCumbs__page m-active">Compare Vehicles</a>
  </div>
</div>
<!--b-breadCumbs-->

<div class="b-infoBar">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-xs-12 wow zoomInUp" data-wow-delay="0.3s">
        <h5>CARS ON HIRED:</h5>
      </div>
    </div>
  </div>
</div>
<!--b-infoBar-->
<section class="b-compare s-shadow">
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>
            <h5>CAR NAME:</h5></th>
          <th>
            <h5>CLIENT NAME:</h5></th>
          <th>
            <h5>HIRE COST:</h5></th>
          <th>
            <h5>SEE MORE DETAIL:</h5></th>
        </tr>
      </thead>
      <tbody>
        @foreach($cb as $value)
        <tr>
          <td>{{ $value->car_name }}</td>
          <td>{{ $value->fname }}</td>
          <td>{{$value->hire_cost}} / day</td>
          <td><button type="button" class="open-AddBookDialog btn btn-info btn-sm"
            data-id-car-name="{{ $value->car_name }}"
            data-id-client-name="{{ $value->fname }}"
            data-id-hire-cost="{{ $value->hire_cost }}"
            data-id-start-date="{{ $value->hire_date }}"
            data-id-end-date="{{ $value->end_date }}"
             data-toggle="modal" data-target="#myModal">see more</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@endsection
