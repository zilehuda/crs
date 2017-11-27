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
                <div class="col-xs-2 pagerSlider pagerVertical">
                  <div class="b-detail__main-info-images-small" id="bx-pager">
                    <a href="#" data-slide-index="0" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small1.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="1" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small2.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="2" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small3.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="3" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small4.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="4" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small5.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="5" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small1.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="6" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small2.jpg" alt="nissan" />
                    </a>
                    <a href="#" data-slide-index="7" class="b-detail__main-info-images-small-one">
                      <img class="img-responsive" src="media/115x85/small3.jpg" alt="nissan" />
                    </a>

                  </div>
                </div>
              </div>
            </div>

            <div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">

            </div>
            <div class="b-detail__main-info-extra wow zoomInUp" data-wow-delay="0.5s">
              <h2 class="s-titleDet">EXTRA FEATURES</h2>
              <div class="row">
                <div class="col-xs-4">
                  <ul>
                    <li><span class="fa fa-check"></span>Security System</li>
                    <li><span class="fa fa-check"></span>Air Conditioning</li>
                    <li><span class="fa fa-check"></span>Alloy Wheels</li>
                    <li><span class="fa fa-check"></span>Anti-Lock Brakes (ABS)</li>
                    <li><span class="fa fa-check"></span>Anti-Theft</li>
                    <li><span class="fa fa-check"></span>Anti-Starter</li>
                  </ul>
                </div>
                <div class="col-xs-4">
                  <ul>
                    <li><span class="fa fa-check"></span>Dual Airbag</li>
                    <li><span class="fa fa-check"></span>Intermittent Wipers</li>
                    <li><span class="fa fa-check"></span>Keyless Entry</li>
                    <li><span class="fa fa-check"></span>Power Mirrors</li>
                    <li><span class="fa fa-check"></span>Power Seat</li>
                    <li><span class="fa fa-check"></span>Power Steering</li>
                  </ul>
                </div>
                <div class="col-xs-4">
                  <ul>
                    <li><span class="fa fa-check"></span>CD Player</li>
                    <li><span class="fa fa-check"></span>Driver Side Airbag</li>
                    <li><span class="fa fa-check"></span>Power Windows</li>
                    <li><span class="fa fa-check"></span>Remote Start</li>
                  </ul>
                </div>
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
