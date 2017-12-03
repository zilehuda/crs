@extends('base')
@section('content')
<section class="b-detail s-shadow">
  <div class="container">
    <header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
      <div class="row">
        <div class="col-sm-9 col-xs-12">
          <div class="b-detail__head-title">
            <h1>{{ $car->car_name }}</h1>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="b-detail__head-price">
            <div class="b-detail__head-price-num">Rs.{{ $car->hire_cost }}</div>
            <p>per day cost</p>
          </div>
        </div>
      </div>
    </header>
    <div class="b-detail__main">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <div class="b-detail__main-info">
            <div class="b-detail__main-info-images wow zoomInUp" data-wow-delay="0.5s">
              <div class="row m-smallPadding">
                <div class="col-xs-10">
                  <ul class="b-detail__main-info-images-big bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="horizontal" data-pager-slide="true" data-mode-pager="vertical" data-pager-qty="5">
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big1.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big2.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big3.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big4.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big5.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big1.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big2.jpg" alt="nissan" />
                    </li>
                    <li class="s-relative">
                      <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                      <img class="img-responsive center-block" src="media/620x485/big3.jpg" alt="nissan" />
                    </li>

                  </ul>
                </div>

              </div>
            </div>

            <div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">

            </div>
            <div class="b-detail__main-info-extra wow zoomInUp" data-wow-delay="0.5s">
              <h2 class="s-titleDet">EXTRA FEATURES</h2>
              <div class="row">

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <aside class="b-detail__main-aside">
            <div class="b-detail__main-aside-desc wow zoomInUp" data-wow-delay="0.5s">
              <h2 class="s-titleDet">Description</h2>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Company</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">{{$car->company}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Kilometres</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">{{$car->mileage}} km</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Fuel Type</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">{{$car->fuel_type}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Capacity</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">{{$car->capacity}}</p>
                </div>
              </div>
            </div>

            <div class="b-detail__main-aside-about wow zoomInUp" data-wow-delay="0.5s">
              <h2 class="s-titleDet">BOOK YOUR SCHEDULE</h2>
              <div class="b-detail__main-aside-about-call">
                <span class="fa fa-phone"></span>
                <div>1-888-378-4027</div>
                <p>Call the seller 24/7 and they would help you.</p>
              </div>
              <div class="b-detail__main-aside-about-seller">
                <p>Seller Info: <span>NissanCarDealer</span></p>
              </div>
              <div class="b-detail__main-aside-about-form">
                @if (Auth::guest())
                <form  action="/" method="post">
                  <button type="submit" class="btn m-btn">REGISTER ACCOUNT TO SCHEDULE<span class="fa fa-angle-right"></span></button>
                </form>
                @elseif(Auth::guard('client')->check())
                <form  action="{{ route('book.submit') }}" method="post">
                  {{ csrf_field() }}
    								<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
    									<label >Start Date <span>*</span></label>
    									<input style="display: block;
    								  width: 100%;
    								  padding: 15px 20px;
    								  font: 400 13px 'Open Sans',sans-serif;
    								  border: 1px solid #eeeeee;
    								  color:#444;
    									outline: none;
    								  background: #f7f7f7!important;
    								  text-transform: none;
    								  border-radius: 30px;
    								  padding-top: 13px;
    								  padding-bottom: 13px;
    								  height:46px;"  placeholder="Password" id="password" type="date"  name="hire_date" required>
    								</div>
                    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
    									<label >End Date <span>*</span></label>
    									<input style="display: block;
    								  width: 100%;
    								  padding: 15px 20px;
    								  font: 400 13px 'Open Sans',sans-serif;
    								  border: 1px solid #eeeeee;
    								  color:#444;
    									outline: none;
    								  background: #f7f7f7!important;
    								  text-transform: none;
    								  border-radius: 30px;
    								  padding-top: 13px;
    								  padding-bottom: 13px;
    								  height:46px;"  placeholder="Password" id="password" type="date"  name="end_date" required>
    								</div>
                  <button type="submit" class="btn m-btn">BOOK MY SCHEDULE<span class="fa fa-angle-right"></span></button>
                </form>
                @endif
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section><!--b-detail-->


@endsection
