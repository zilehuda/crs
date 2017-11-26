@extends('base')
@section('content')
<section class="b-detail s-shadow">
  <div class="container">
    <header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
      <div class="row">
        <div class="col-sm-9 col-xs-12">
          <div class="b-detail__head-title">
            <h1>Nissan Maxima SV Premium 2016</h1>
            <h3>Fully Redesigned Upscale Midsize Car</h3>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="b-detail__head-price">
            <div class="b-detail__head-price-num">$44,380</div>
            <p>Included Taxes &amp; Checkup</p>
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
            <div class="b-detail__main-info-characteristics wow zoomInUp" data-wow-delay="0.5s">
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-car"></span></div>
                  <p>Brand New</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  Status
                </div>
              </div>
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-trophy"></span></div>
                  <p>5,000KM</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  Warrenty
                </div>
              </div>
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-at"></span></div>
                  <p>Auto</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  Transmission
                </div>
              </div>
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-car"></span></div>
                  <p>FWD</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  Drivetrain
                </div>
              </div>
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-user"></span></div>
                  <p>5</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  Passangers
                </div>
              </div>
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-fire-extinguisher"></span></div>
                  <p>10.8L</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  In City
                </div>
              </div>
              <div class="b-detail__main-info-characteristics-one">
                <div class="b-detail__main-info-characteristics-one-top">
                  <div><span class="fa fa-fire-extinguisher"></span></div>
                  <p>7.5L</p>
                </div>
                <div class="b-detail__main-info-characteristics-one-bottom">
                  On Highway
                </div>
              </div>
            </div>
            <div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">
              <div class="b-detail__main-aside-about-form-links">
                <a href="#" class="j-tab m-active s-lineDownCenter" data-to='#info1'>GENERAL INQUIRY</a>
                <a href="#" class="j-tab" data-to='#info2'>SCHEDULE TEST DRIVE</a>
                <a href="#" class="j-tab" data-to='#info3'>GENERAL INQUIRY</a>
                <a href="#" class="j-tab" data-to='#info4'>SCHEDULE TEST DRIVE</a>
              </div>
              <div id="info1">
                <p>The 2016 Nissan Maxima is powered by a 3.5-liter V6 engine with 300 horsepower, 10 more than the engine in the outgoing
                  model. A continuously variable transmission and front-wheel drive are standard in all models. Nissan expects the 2016 Maxima
                  to return 22/30 mpg city/highway, which is an improvement over the previous model's EPA-estimated 19/26 mpg.</p>
                <p>
                  The 2016 Nissan Maxima seats five and comes with a power-adjustable driver,seat, an eight-speaker audio system, Bluetooth,
                  satellite radio, HD Radio, push-button start, a rearview camera, two USB ports, the NissanConnect infotainment system,
                  navigation, an 8-inch color display screen and voice controls for phone, audio and navigation functions. Leather upholstery,
                  heated and ventilated front seats, an 11-speaker Bose audio system, a 360-degree parking camera system, adaptive cruise
                  control, blind spot warning, rear cross traffic alert, front and rear parking sensors and forward collision warning with automatic
                  braking are available. The 2016 Nissan Maxima starts at $33,235 including destination fees.</p>
                <p>The full review of the 2016 Nissan Maxima is coming soon. In the meantime, you can see pictures, research prices or view and
                  compare specs for the 2016 Nissan Maxima. If you, considering the 2014 Nissan Maxima, you can read our review.</p>
                <p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
                  erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
                  convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
                  Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
                  Fusce ut felis. </p>
                <p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
                  faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
                  nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
              </div>
              <div id="info2">
                <p>The full review of the 2016 Nissan Maxima is coming soon. In the meantime, you can see pictures, research prices or view and
                  compare specs for the 2016 Nissan Maxima. If you‚considering the 2014 Nissan Maxima, you can read our review.</p>
                <p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
                  erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
                  convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
                  Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
                  Fusce ut felis. </p>
                <p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
                  faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
                  nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
              </div>
              <div id="info3">
                <p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
                  erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
                  convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
                  Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
                  Fusce ut felis. </p>
                <p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
                  faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
                  nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
              </div>
              <div id="info4">
                <p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
                  faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
                  nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
              </div>
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
                  <h4 class="b-detail__main-aside-desc-title">Make</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Nissan</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Model</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Maxima</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Kilometres</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">39,000 km</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Body Type</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Sedan</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Style/trim</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">SV Premium</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Engine</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">V-6 cyl</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Drivetrain</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">EWD</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Transmission</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Dual-Clutch Automatic</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Exterior Color</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Dark Grey</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Interior color</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Jet Black</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Passangers/Doors</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">5 Passengers / 4 Doors</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Fuel Type</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">Gasoline Fue</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">City Fuel Economy </h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">10.8L/100km</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <h4 class="b-detail__main-aside-desc-title">Hwy Fuel Economy</h4>
                </div>
                <div class="col-xs-6">
                  <p class="b-detail__main-aside-desc-value">7.7L/100km</p>
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
                <form  action="/" method="post">
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
