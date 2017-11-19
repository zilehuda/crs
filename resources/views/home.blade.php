@extends('base')
@section('content')
<section class="b-slider">
	<div id="carousel" class="slide carousel carousel-fade">
		<div class="carousel-inner">
			<div class="item active">
				<img src="media/main-slider/1.jpg" alt="sliderImg" />
				<div class="container">
					<div class="carousel-caption b-slider__info">
						<h3>Find your dream</h3>
						<h2>Lamborghini Aventador</h2>
						<p>Model 2015 <span>$184,900</span></p>
						<a class="btn m-btn" href="detail.html">see details<span class="fa fa-angle-right"></span></a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="media/main-slider/2.jpg" alt="sliderImg" />
				<div class="container">
					<div class="carousel-caption b-slider__info">
						<h3>Find your dream</h3>
						<h2>Lamborghini Aventador</h2>
						<p>Model 2015 <span>$184,900</span></p>
						<a class="btn m-btn" href="detail.html">see details<span class="fa fa-angle-right"></span></a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="media/main-slider/3.jpg"  alt="sliderImg"/>
				<div class="container">
					<div class="carousel-caption b-slider__info">
						<h3>Find your dream</h3>
						<h2>Lamborghini Aventador</h2>
						<p>Model 2015 <span>$184,900</span></p>
						<a class="btn m-btn" href="detail.html">see details<span class="fa fa-angle-right"></span></a>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control right" href="#carousel" data-slide="next">
			<span class="fa fa-angle-right m-control-right"></span>
		</a>
		<a class="carousel-control left" href="#carousel" data-slide="prev">
			<span class="fa fa-angle-left m-control-left"></span>
		</a>
	</div>
</section><!--b-slider-->

<section class="b-search">
	<div class="container">
		<form action="listings.html" method="POST" class="b-search__main">
			<div class="b-search__main-title wow zoomInUp" data-wow-delay="0.3s">
				<h2>UNSURE WHICH VEHICLE YOU ARE LOOKING FOR? FIND IT HERE</h2>
			</div>
			<div class="b-search__main-type wow zoomInUp" data-wow-delay="0.3s">
				<div class="col-xs-12 col-md-2 s-noLeftPadding">
					<h4>Select vehicle type</h4>
				</div>
				<div class="col-xs-12 col-md-10">
					<div class="row">
						<div class="col-xs-2">
							<input id="type1" type="radio" name="type" />
							<label for="type1" class="b-search__main-type-svg">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
									<g>
										<path d="M258.3,343.6H277v41.2h-25.2l7.8-40.8L258.3,343.6L258.3,343.6z M295.4,343.6h39.4c18.3,1.8,33,8.7,47.2,19.7
											c-1.4,0.5-2.7,1.4-4.1,2.3v0.5c-3.7,3.7-5.5,13.3-5.5,18.8h-76.9V343.6L295.4,343.6z"/>
										<path d="M107.6,476.4c-20.6,0-46.2-7.8-47.6-8.2l-2.7-1.4v-39.8l2.3-1.4c1.8-1.8,6.9-7.3,6.9-11v-7.8c0.5-5.5,0.5-11.9,0.9-17.4
											c0-3.7,6-11,11.9-13.3l1.8-0.5h146.5l7.3-38.9c1.4-6.9,6.9-11.4,14.2-11.4h86.5c27.5,2.3,43.5,15.6,61.4,29.8
											c8.2,6.4,16.5,15.1,26.1,21.1c4.1,0.5,10.5,0.5,17.9,0.9c43.5,1.8,83.3,4.6,87.5,24.3l4.1,34.8c2.7,1.8,6.4,5.5,6.4,10.5v15.1
											c0,4.1-0.5,6.4-4.1,9.2c-6.9,4.1-14.7,6-30.7,6h-6.4v-9.2h6.9c13.7,0,20.1-0.9,25.2-4.1c0,0,0,0.5,0-1.4V447c0-1.4-2.3-2.7-3.2-3.2
											l-2.7-0.9l-4.6-39.4c-3.2-13.3-54-15.1-78.3-16c-8.2-0.5-15.1-0.5-19.7-0.9l-1.8-0.5c-10.5-6.4-19.7-16-27.9-22.9
											c-16.9-13.7-31.6-25.6-55.4-27.5h-87.5c-2.3,0-4.1,0.9-4.6,3.2l-8.7,47.2H81.5c-2.7,1.4-5,4.1-5.5,5c0,4.6-0.5,11.4-0.5,16.9v7.3
											c0,6.9-6.4,13.3-9.2,16v28.4c7.3,2.7,26.6,8.7,41.7,8.2h8.7v9.2h-8.2C108.1,476.4,108.1,476.4,107.6,476.4L107.6,476.4z
											M423.6,476.4H185.5v-9.2h238.1V476.4L423.6,476.4z"/>
										<polygon points="529.3,444.3 523.4,407.7 515.1,407.7 515.1,444.3 	"/>
										<polygon points="327.4,398.5 304.5,398.5 304.5,393.9 327.4,393.9 	"/>
										<path d="M70.5,412.2h5c9.6,0,22.4-5.5,22.9-14.2v-8.7H72.3C72.3,397.6,71,406.3,70.5,412.2L70.5,412.2z"/>
										<path d="M381,368.7L381,368.7c-2.7,2.7-4.1,12.4-4.1,16c0,1.4,0.5,2.3,1.4,3.2c0.9,0.9,1.8,1.4,3.2,1.4H392c11.4,0-1.8-20.1-6-21.5
											C384.2,366.9,382.4,367.4,381,368.7L381,368.7z"/>
										<polygon points="222.1,443.4 222.1,453.5 394.3,453.5 	"/>
										<path d="M405.2,471.8h-4.6v-12.4c0-33.4,25.6-60.4,59.1-60.4s60,27,60,60.4v12.4h-4.6v-13.3c0-29.8-25.6-53.1-55.4-53.1
											c-29.8,0-54.5,24.3-54.5,54V471.8L405.2,471.8z"/>
										<path d="M460.7,457.1c-6,0-10.5,4.6-10.5,10.5s4.6,10.5,10.5,10.5c6,0,10.5-4.6,10.5-10.5S466.6,457.1,460.7,457.1L460.7,457.1z"/>
										<path d="M210.2,471.8h-6.4v-12.4c0-29.8-23.8-54-53.6-54s-51.7,24.3-51.7,54v12.4h-9.2V459c0-33.4,27-60,60.4-60
											s62.7,25.6,62.7,59.1L210.2,471.8L210.2,471.8z"/>
										<path d="M460.7,413.2L460.7,413.2c12.8,0,24.3,5,32.5,13.7h-0.9c8.2,8.2,13.7,19.7,13.7,32.5v14.2v3.2h-4.6H500
											c-2.3,7.8-6.9,15.1-12.8,20.1c-6.9,6-16,11.4-26.1,11.4s-19.2-3.7-26.1-9.6V497c-6-5-10.5-12.4-12.8-20.1h-2.3h-5v-4.6v-12.4
											c0-12.8,5-24.3,13.7-32.5h0.5C436.8,418.2,448.3,413.2,460.7,413.2L460.7,413.2L460.7,413.2z M460.7,440.6c-14.7,0-27,11.9-27,27
											c0,14.7,11.9,27,27,27c14.7,0,27-11.9,27-27C487.7,452.5,475.8,440.6,460.7,440.6L460.7,440.6L460.7,440.6z M152,440.6
											c-14.7,0-27,11.9-27,27c0,14.7,11.9,27,27,27c14.7,0,27-11.9,27-27C179,452.5,166.7,440.6,152,440.6L152,440.6L152,440.6z
											M152,413.2L152,413.2c12.8,0,24.3,5,32.5,13.7h0.9c8.2,8.2,13.7,19.7,13.7,32.5v14.2v3.2h-4.6h-3.7c-2.3,7.8-6.9,15.1-12.8,20.1
											c-6.9,6-16,11.4-26.1,11.4c-10.1,0-19.2-5.5-26.1-11.4c-6-5-10.5-12.4-12.8-20.1h-2.3h-3.2v-4.6v-12.4c0-12.8,5-24.3,13.7-32.5
											C129.6,418.2,139.2,413.2,152,413.2L152,413.2z"/>
										<path d="M152,457.1c-6,0-10.5,4.6-10.5,10.5s4.6,10.5,10.5,10.5c6,0,10.5-4.6,10.5-10.5S158,457.1,152,457.1L152,457.1z"/>
									</g>
								</svg>
							</label>
							<h5><label for="type1">Pickup</label></h5>
						</div>
						<div class="col-xs-2">
							<input id="type2" type="radio" name="type" />
							<label for="type2" class="b-search__main-type-svg">
								<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
									<g>
										<path d="M199.2,342.6h95.7c23.8,2.3,47.2,17.4,68.7,31.1c-0.5,0.5-0.9,0.9-1.4,1.4l0,0c-3.7,3.2-5.5,7.8-5.5,12.4
											c0,0.5,0,0.9,0,1.4l-218.4-8.2C161.2,361.9,174.9,342.6,199.2,342.6L199.2,342.6z"/>
										<path d="M115.4,475.4c-21.5,0-33.4-11.4-33.9-11.9l-1.4-1.4v-28.4l0.5-0.9c0.9-1.8,3.2-7.3,3.2-11.9c0-4.1,0.5-10.5,0.5-16.9v-11
											c0.5-7.3,27.5-36.6,36.6-44.9v-9.6l4.6-2.7c18.8-4.1,55.4-6.4,80.6-6.4h89.3c33.4,2.7,64.6,22.9,92,40.3c5,3.2,9.6,7.8,14.2,10.5
											c2.3,0,4.6,0.5,8.2,0.9c51.7,5,100.3,11.9,104.9,32.1v62.3l-3.7,2.7c-6.9,1.4-13.3,2.3-27.9,2.3h-13.7v-9.2h14.2
											c11.9,0,17.9-0.5,22.4-1.4v-56.3c-2.3-9.6-34.8-17.9-96.2-23.8c-3.7-0.5-6.9-0.5-9.6-0.9l-1.8-0.5c-5-3.2-10.1-8.2-15.6-11.4
											c-27.9-17.9-56.8-36.2-87.5-38.5h-89.7c-22.9,0-55.9,1.8-75.1,5.5v8.2l-4.1,1.8c-4.6,2.7-30.7,34.3-32.5,40.3v10.5
											c0,6.4-0.9,12.8-0.9,16.9c0,6.4-1.8,12.8-3.7,15.6v19.7c3.2,2.7,12.4,10.5,26.6,10.1h5.5v9.2L115.4,475.4
											C114.5,475.4,115.9,475.4,115.4,475.4L115.4,475.4z M396.1,475.4H194.6v-9.2h201.5V475.4L396.1,475.4z"/>
										<path d="M365.4,378.4L365.4,378.4c-2.7,2.7-4.1,6-4.1,9.6c0,1.4,0.5,2.7,1.4,3.7c0.9,0.9,1.8,1.4,3.2,1.4h10.5
											c1.8,0,3.2-0.9,4.1-2.3c0.9-1.4,0.9-3.7,0-5c-1.8-3.2-5-6.4-10.1-8.2C368.6,376.5,366.8,377,365.4,378.4L365.4,378.4z"/>
										<path d="M367.2,390.7c-0.9,0-1.8-0.5-2.7-1.4l-6-8.2c-0.9-1.4-0.9-3.2,0.9-4.6c1.4-0.9,3.2-0.9,4.6,0.9l6,8.2
											c0.9,1.4,0.9,3.2-0.9,4.6C368.2,390.3,367.7,390.7,367.2,390.7L367.2,390.7z"/>
										<path d="M90.2,406.7h8.2c7.8,0,17.9-5.5,18.3-12.4v-6H92.5C92.5,394.8,90.2,400.3,90.2,406.7L90.2,406.7z"/>
										<path d="M478.1,402.2l11,20.1c3.7-2.3,9.2-4.1,13.3-4.1l0,0l0,0l0,0l0,0l0,0l0,0c2.7,0,5.5-1.8,8.7-1.8c0-8.2,0.9-8.7-6.4-14.2
											H478.1L478.1,402.2z"/>
										<polygon points="299.9,406.7 277,406.7 277,402.2 299.9,402.2 	"/>
										<polygon points="194.6,402.2 171.7,402.2 171.7,397.6 194.6,397.6 	"/>
										<polygon points="222.1,450.7 222.1,457.1 371.4,457.1 	"/>
										<path d="M508.7,436.1c-6.9,0-10.1,0-16.9,0c-3.7,3.7-3.7,8.2-3.7,12.8c6.9,0,13.7,0,20.6,0C508.7,444.8,508.7,440.2,508.7,436.1
											L508.7,436.1z"/>
										<path d="M488.6,457.1c-1.4-2.7-1.4-6.4-1.4-9.2c6.9,0,7.3,0.5,14.2,0.5v8.7H488.6L488.6,457.1z"/>
										<path d="M138.3,347.7l-44.4,38.9v-8.7c9.2-12.4,28.4-33.4,32.1-35.7L138.3,347.7L138.3,347.7z"/>
										<path d="M126.8,500.2c-6-5-10.5-12.4-12.8-20.1h-2.3h-3.7v-4.6v-16c0-12.8,5-24.3,13.7-32.5c8.2-8.2,18.8-13.7,31.6-13.7l0,0
											c12.8,0,24.3,5,32.5,13.7h0.5c8.2,8.2,13.7,19.7,13.7,32.5v14.2v6.9h-4.6h-2.7c-2.3,7.8-6.9,15.1-12.8,20.1c-6.9,6-16,7.8-26.1,7.8
											s-19.2-3.7-26.1-9.6v1.4H126.8z M427.2,440.6c-14.7,0-27,11.9-27,27c0,14.7,11.9,27,27,27c14.7,0,27-11.9,27-27
											C453.8,452.5,441.9,440.6,427.2,440.6L427.2,440.6L427.2,440.6z M152.9,440.6c-14.7,0-27,11.9-27,27c0,14.7,11.9,27,27,27
											c14.7,0,27-11.9,27-27C179.5,452.5,167.6,440.6,152.9,440.6L152.9,440.6L152.9,440.6z M427.2,413.2L427.2,413.2
											c12.8,0,24.3,5,32.5,13.7h0.9c8.2,8.2,13.7,19.7,13.7,32.5v14.2v6.9h-4.6h-3.2c-2.3,7.8-6.9,15.1-12.8,20.1c-6.9,6-16,7.8-26.1,7.8
											s-19.2-3.7-26.1-9.6v1.8c-6-5-10.5-12.4-12.8-20.1h-2.3h-3.7v-4.6v-16c0-12.8,5-24.3,13.7-32.5
											C404.3,418.2,414.4,413.2,427.2,413.2L427.2,413.2L427.2,413.2z M427.2,457.1c6,0,10.5,4.6,10.5,10.5s-4.6,10.5-10.5,10.5
											c-6,0-10.5-4.6-10.5-10.5S421.3,457.1,427.2,457.1L427.2,457.1L427.2,457.1z M152.9,457.1c-6,0-10.5,4.6-10.5,10.5
											s4.6,10.5,10.5,10.5c6,0,10.5-4.6,10.5-10.5C163,461.7,158.4,457.1,152.9,457.1L152.9,457.1z"/>
									</g>
								</svg>
							</label>
							<h5><label for="type2">Suv</label></h5>
						</div>
						<div class="col-xs-2">
							<input id="type3" type="radio" name="type" />
							<label for="type3" class="b-search__main-type-svg">
								<svg  version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
									<g>
										<path d="M198.7,492.4v-9.2h21.1c65.9,0,134.2-0.5,198.7,0v9.2c-64.6,0-132.8,0-198.7,0H198.7L198.7,492.4z M152.9,493.8
											c-20.6-2.7-57.2-13.7-69.1-22.4l-4.1-1.4v-25.6l1.4-1.4c1.8-1.8,6-8.2,6-12.8l4.1-18.3L86.5,393l22,2.7h37.5
											c3.7-1.4,8.7-3.7,14.2-6c29.3-11.9,56.8-21.5,68.7-21.5h78.8c1.4,0,2.3,0,3.7,0.5c23.8,6.9,45.3,18.8,70.5,33.4h0.5
											c70.1,2.7,111.3,8.2,125.5,16.5l2.3,1.4v14.7l5.5,4.6v2.3c0,17.9-7.8,25.2-12.4,29.3c0,0.5-0.5,0.9,0,0.9c1.4,2.7,2.3,5,2.3,7.8
											v3.2l-5,1.4c-11,4.6-22.4,7.3-36.2,8.7v-9.6c11-0.9,21.1-3.2,30.2-6.4c0-0.5,0.9-0.5,0.9-0.9c-0.9-2.3-1.8-4.1-1.8-6v-2.3l0.9-0.9
											c0.9-0.9,1.4-1.4,2.3-2.3c4.1-3.7,9.2-7.8,9.6-20.1l-5.5-4.6v-16c-11-5-40.3-11-118.1-14.2h-3.7l-0.9-0.5
											c-24.7-14.7-46.2-24.7-69.1-31.1c-0.5,0-0.9,0-0.9,0H229c-10.5,0-44.9,13.7-65,22c-6.4,2.3-11.4,4.1-15.6,5.5l-1.4,0.5h-39.4h-8.2
											l1.4,5.5l-4.6,20.6c0,6.4-5,13.7-7.8,16.5v16.9c12.4,7.3,46.2,16.9,64.1,19.2v9.2H152.9z"/>
										<path d="M243.6,385.2c0.5,8.2,1.4,16,1.8,24.3c-12.4-2.7-25.2-5.5-37.5-8.7C223,390.7,225.7,385.2,243.6,385.2L243.6,385.2
											L243.6,385.2z M253.2,385.2c17.9,0,36.2,0,54,0c12.8,3.7,25.2,9.2,37.5,15.1l-0.5,0.5l0,0c-2.7,2.7-4.6,6.4-5.5,10.1
											c-9.2,0-19.7,0-30.7,0c-17.4,0-35.3,0-52.7,0C254.6,402.6,254.1,393.9,253.2,385.2L253.2,385.2z"/>
										<path d="M424.9,503.4c-4.6-2.3-8.2-6-11.4-10.1l-3.2-0.5c-1.8-0.5-5-0.9-6.9-0.9l-3.7-0.9v-3.7V475c0-11.9,2.7-22.4,10.5-30.2h1.4
											c6.4-6.4,16-10.5,30.2-10.5c13.7,0,23.4,4.1,30.2,10.5l0,0c7.8,7.8,10.5,18.3,10.5,30.2v7.8v4.1l-4.1,0.5c-1.4,0.5-2.7,0.5-4.1,0.9
											l0,0l-1.4,0.5c-2.7,5.5-6.4,10.1-11.4,13.7c-5.5,3.7-12.4,6-19.7,6C435.9,507.9,430,506.1,424.9,503.4L424.9,503.4L424.9,503.4
											L424.9,503.4z M441.9,449.3c-13.3,0-23.8,10.5-23.8,23.8s10.5,23.8,23.8,23.8c13.3,0,23.8-10.5,23.8-23.8
											C465.7,460.3,455.2,449.3,441.9,449.3L441.9,449.3L441.9,449.3z M174.5,449.3c-13.3,0-23.8,10.5-23.8,23.8s10.5,23.8,23.8,23.8
											c13.3,0,23.8-10.5,23.8-23.8C198.3,460.3,187.7,449.3,174.5,449.3L174.5,449.3L174.5,449.3z M145.2,444.3h-0.5
											c6.4-6.4,16-10.5,30.2-10.5c13.7,0,23.4,4.1,30.2,10.5h1.8c7.8,7.8,10.5,18.3,10.5,30.2v15.1v2.7h-4.6h-11.4
											c-2.7,3.7-6.4,6.9-11,9.2c-5,2.7-10.5,6-16,6c-6,0-11.9-1.4-16.5-4.6c-4.6-2.3-8.2-6-11.4-10.1l-3.2-0.5c-1.8-0.5-3.2-0.9-5-1.4
											l-3.7-0.9v-3.7v-12.4C134.6,462.6,137.4,452.1,145.2,444.3L145.2,444.3z"/>
										<path d="M174.5,464.9c-5,0-8.7,3.7-8.7,8.7c0,4.6,3.7,8.7,8.7,8.7c4.6,0,8.7-4.1,8.7-8.7C183.2,468.6,179,464.9,174.5,464.9
											L174.5,464.9z"/>
										<polygon points="281.2,423.7 258.3,423.7 258.3,419.1 281.2,419.1 	"/>
										<polygon points="230.8,465.4 230.8,474.1 388.8,474.1 	"/>
										<path d="M441.9,464.9c-4.6,0-8.7,3.7-8.7,8.7c0,4.6,3.7,8.7,8.7,8.7s8.7-4.1,8.7-8.7C450.6,468.6,446.5,464.9,441.9,464.9
											L441.9,464.9z"/>
										<path d="M464.3,396.2h-49.9l-21.1,9.2v2.3c21.5,1.4,47.6,3.2,71,6V396.2L464.3,396.2z"/>
										<path d="M347.1,404.5L347.1,404.5c-2.7,2.7-4.1,6-4.1,9.6c0,1.4,0.5,2.7,1.4,4.1c0.9,0.9,1.8,1.4,3.2,1.4h10.5
											c1.8,0,3.2-0.9,4.1-2.3c0.9-1.4,0.9-3.7,0-5c-1.8-3.2-5-6.4-10.1-8.2C350.3,402.6,348.5,403.1,347.1,404.5L347.1,404.5z"/>
										<path d="M355.8,423.7c-0.9,0-1.8-0.5-2.7-1.4l-6-8.2c-0.9-1.4-0.9-3.2,0.9-4.6c1.4-0.9,3.2-0.9,4.6,0.5l6,8.2
											c0.9,1.4,0.9,3.2-0.5,4.6C357.2,423.2,356.7,423.7,355.8,423.7L355.8,423.7z"/>
									</g>
								</svg>
							</label>
							<h5><label for="type3">Coupe</label></h5>
						</div>
						<div class="col-xs-2">
							<input id="type4" type="radio" name="type" />
							<label for="type4" class="b-search__main-type-svg">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
									<g>
										<path d="M249.1,378.4h-0.9c-4.1,0.5-6,4.1-7.3,8.2l-2.3,8.7c-4.1,12.8,19.2,12.8,18.8,1.8v-11.4
											C256.9,381.1,253.7,377.9,249.1,378.4L249.1,378.4z"/>
										<path d="M142,488.3c-21.1,0-41.7-14.2-42.6-14.7l-2.3-1.4v-32.1l2.3-1.4c0.9-1.8,2.3-7.3,2.3-11.9v-30.2l58.6-3.7
											c25.2-1.4,40.8,1.4,58.2,4.1c9.6,1.4,19.7,3.2,31.6,4.1h95.2c5.5,0,11-0.9,16.9-1.4c6-0.9,11.9-1.8,18.3-1.8
											c0.9,0,38.9,4.1,69.6,11.9c33,8.2,44,21.5,45.3,27.5l2.7,47.2l-4.1,0.9c-7.8,1.8-14.2,2.7-31.1,2.7h-18.3v-9.2h16
											c12.8,0,19.7-0.5,25.2-1.8v-2.7v-35.7c-0.5-1.4-9.6-11.9-38-19.2c-29.8-7.8-67.3-11.9-67.8-11.9c-5,0-10.5,0.5-16.5,1.4
											c-6,0.9-11.9,1.8-18.3,1.8h-95.7c-12.8-0.9-22.9-2.7-33-4.1c-16.5-2.7-31.6-4.6-55.9-3.7l-49.9,2.7v21.5c0,6.4-3.2,12.8-4.6,15.6
											v23.8c6,3.7,22.9,12.4,38,11.9h12.4v9.2h-14.2C142,488.3,142.4,488.3,142,488.3L142,488.3z M394.7,488.3H207v-9.2h187.7V488.3
											L394.7,488.3z"/>
										<path d="M106.2,415.9c0,4.6-1.8,9.6-1.8,12.4h6.4c7.8,0,17.9-6,18.3-12.4v-6h-22.9V415.9L106.2,415.9L106.2,415.9z"/>
										<path d="M458.8,433.3l9.2,16.5c3.2-1.8,7.3-2.7,11-2.7l0,0l0,0l0,0l0,0l0,0l0,0c4.6,0,9.6,0,14.2,0v-0.9c-0.5-1.4-5-9.2-9.6-12.8
											C475.3,433.3,467.1,433.3,458.8,433.3L458.8,433.3z"/>
										<path d="M213.4,488.3c-1.8,3.7-4.1,6.9-6.9,9.6l0,0c-6.4,6.4-14.7,10.1-24.3,10.1s-17.9-4.1-24.3-10.1c-2.7-2.7-5-6-6.9-9.6h-4.6
											h-3.7v-4.6v-12.4c0-11,4.6-21.5,11.9-28.8c7.3-7.3,16.5-11.9,27.5-11.9l0,0c11,0,21.1,4.1,28.8,11.4l0,0h2.3
											c7.3,7.3,11.9,17.4,11.9,28.8v12.4v4.6h-4.6h-7.3V488.3L213.4,488.3z M420.4,449.3c-13.3,0-23.8,10.5-23.8,23.8
											s10.5,23.8,23.8,23.8c13.3,0,23.8-10.5,23.8-23.8C444.6,460.3,433.6,449.3,420.4,449.3L420.4,449.3L420.4,449.3z M182.2,449.3
											c-13.3,0-23.8,10.5-23.8,23.8S169,497,182.2,497s23.8-10.5,23.8-23.8C206.5,460.3,195.5,449.3,182.2,449.3L182.2,449.3L182.2,449.3
											z M420.4,431L420.4,431c11,0,21.1,4.1,28.8,11.4l0,0h2.3c7.3,7.3,11.9,17.4,11.9,28.8v12.4v4.6h-4.6h-7.3c-1.8,3.7-4.1,6.9-6.9,9.6
											c-6.4,6.4-14.7,10.1-24.3,10.1c-9.6,0-17.9-3.7-24.3-10.1l0,0c-2.7-2.7-5-6-6.9-9.6h-4.6H381v-4.6v-12.4c0-11,4.6-21.1,11.9-28.8
											H392l0,0C399.3,435.6,409.4,431,420.4,431L420.4,431z"/>
										<path d="M420.4,464.9c-4.6,0-8.7,3.7-8.7,8.7c0,4.6,4.1,8.7,8.7,8.7s8.7-3.7,8.7-8.7C429.1,468.6,425.4,464.9,420.4,464.9
											L420.4,464.9z"/>
										<polygon points="266.5,424.2 243.6,424.2 243.6,419.6 266.5,419.6 	"/>
										<path d="M182.2,464.9c-5,0-8.7,3.7-8.7,8.7c0,4.6,3.7,8.7,8.7,8.7c4.6,0,8.7-3.7,8.7-8.7C190.9,468.6,187.3,464.9,182.2,464.9
											L182.2,464.9z"/>
										<polygon points="234.4,464 234.4,469.9 367.7,469.9 	"/>
										<polygon points="490.9,469.9 481.7,469.9 481.7,465.4 490.9,465.4 	"/>
										<path d="M483.1,460.8h-6.9c-1.8,0-3.2,1.8-3.2,3.7v2.3c0,1.8,1.4,3.2,3.2,3.2h6.9c1.8,0,3.2-1.4,3.2-3.2v-2.3
											C486.3,462.2,484.9,460.8,483.1,460.8L483.1,460.8z"/>
										<path d="M101.7,465.4v13.3h36.6v-0.9C123.6,476.4,107.6,469,101.7,465.4L101.7,465.4z"/>
										<path d="M185,376.1L185,376.1c-4.1,0.5-6,4.1-6.9,8.2l-2.7,8.7c-0.5,0.9-0.5,1.4-0.5,1.8c6.4,0.5,11.9,0.9,18.3,1.4
											c0-0.5,0-0.9,0-1.4v-11.4C192.8,378.8,189.6,375.6,185,376.1L185,376.1z"/>
										<path d="M383.3,398.5c0,0-46.7-28.4-65.9-34.3c-2.3-0.9-4.6-1.4-6.9-1.8l0,0c-2.3-0.5-5-0.9-7.8-1.4l-1.8,9.2
											c24.3,6,33.9,21.1,54.9,33.9c3.2,1.8,19.2,0.9,22.4,2.7L383.3,398.5L383.3,398.5z"/>
										<path d="M337.5,400.8L337.5,400.8c-2.7,2.7-4.1,6-4.1,9.6c0,1.4,0.5,2.3,1.4,3.2c0.9,0.9,1.8,1.4,3.2,1.4H348
											c1.8,0,3.2-0.9,4.1-2.3c0.9-1.4,0.9-3.2,0-4.6c-1.8-3.2-5-6.4-10.1-8.2C340.2,399,338.4,399.4,337.5,400.8L337.5,400.8z"/>
										<path d="M345.7,412.7c-0.9,0-1.8-0.5-2.7-1.4l-6-8.2c-0.9-1.4-0.9-3.2,0.5-4.6c1.4-0.9,3.2-0.9,4.6,0.9l6,8.2
											c0.9,1.4,0.9,3.2-0.9,4.6C347.1,412.7,346.6,412.7,345.7,412.7L345.7,412.7z"/>
									</g>
								</svg>
							</label>
							<h5><label for="type4">Convertible</label></h5>
						</div>
						<div class="col-xs-2">
							<input id="type5" type="radio" name="type" />
							<label for="type5" class="b-search__main-type-svg">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
									<g>
										<path d="M207.9,399.4c-9.2,0-34.8-2.3-48.1-9.6c20.6-11,57.2-23.8,76-23.8c16.5,0,36.6,0,52.7,0c25.2,0,46.2,9.2,66.9,20.6
											c-3.2,3.2-5,6.4-5.5,11.4c0,0.5,0,0.9,0,1.4H207.9L207.9,399.4z"/>
										<path d="M134.6,486.4c-21.1,0-45.3-12.4-46.7-12.8l-2.3-1.4v-32.1l-1.4-0.9c0.9-1.8,6-7.3,6-11.9v-29.8l17.9-4.1
											c24.3-11.4,90.7-34.3,134.6-34.3h54.9c12.4,0.9,22.9,3.2,32.1,5.5c17.9,5.5,58.6,30.2,65,34.3c6.4,0.9,40.3,5,67.8,11.9
											c33,8.2,44,21.5,45.3,27.5l2.7,47.2l-4.1-0.9c-7.8,1.8-14.2,2.7-31.1,2.7h-18.8v-9.2h13.7c12.8,0,22-0.5,27.5-1.8v-0.9v-35.7
											c-0.5-1.4-9.6-11.9-38-19.2c-29.8-7.8-66.9-11.9-67.3-11.9l-1.8-0.5c-0.5-0.5-45.8-28.8-64.1-34.3c-8.2-2.3-18.3-4.1-29.3-5.5h-54
											c-42.6,0-104.4,22.9-127.8,33.9l-4.6,1.4l-11,2.3v22c0,6.4-3.2,12.8-4.6,15.6v22.9c6,3.7,22.9,12.4,38,11.9h12.4v9.2h-12.4
											C132.8,486.4,135.1,486.4,134.6,486.4L134.6,486.4z M402,486.4H200.6v-9.2H402V486.4L402,486.4z"/>
										<path d="M99.8,414.1c0,4.6-2.3,9.6-2.7,12.4h6.9c7.8,0,17.9-6,18.3-12.4v-6H99.4L99.8,414.1L99.8,414.1L99.8,414.1z"/>
										<path d="M471.6,433.3l9.2,16.5c2.7-1.8,7.3-2.7,11-2.7l0,0l0,0l0,0l0,0l0,0l0,0c4.6,0,9.6,0,14.2,0v-0.9c-0.5-1.4-5-9.2-9.6-12.8
											C487.7,433.3,479.9,433.3,471.6,433.3L471.6,433.3z"/>
										<polygon points="310.5,426.9 287.6,426.9 287.6,422.3 310.5,422.3 	"/>
										<polygon points="214.3,426.9 191.4,426.9 191.4,422.3 214.3,422.3 	"/>
										<polygon points="232.6,459.9 232.6,468.1 381.9,468.1 	"/>
										<polygon points="502.8,468.1 493.6,468.1 493.6,463.5 502.8,463.5 	"/>
										<path d="M494.5,463.5h-6.9c-1.8,0-3.2-0.9-3.2,0.9v4.6c0,1.8,1.4,3.2,3.2,3.2h6.9c1.8,0,3.2-1.4,3.2-3.2v-2.3
											C498.2,464.9,496.8,463.5,494.5,463.5L494.5,463.5z"/>
										<path d="M359,396.2L359,396.2c-2.7,2.7-4.1,6-4.1,9.6c0,1.4,0.5,0.5,1.4,1.4c0.9,0.9,1.8,1.4,3.2,1.4H370c1.8,0,3.2-0.9,4.1-2.3
											c0.9-1.4,0.9-0.9,0-2.7c-1.8-3.2-5-6.4-10.1-8.2C362.2,394.4,360.4,394.8,359,396.2L359,396.2z"/>
										<path d="M367.7,415.5c-0.9,0-1.8-0.5-2.7-1.4l-6-8.2c-0.9-1.4-0.9-3.2,0.9-4.6c1.4-0.9,3.2-0.9,4.6,0.9l6,8.2
											c0.9,1.4,0.9,3.2-0.9,4.6C369.1,415,368.6,415.5,367.7,415.5L367.7,415.5z"/>
										<path d="M95.2,463.5v13.3h35.3l-0.5-0.9C115.4,474.5,101.2,467.2,95.2,463.5L95.2,463.5z"/>
										<path d="M175.4,431L175.4,431c11,0,21.1,4.6,28.8,11.9l0,0h-1.4c7.3,7.3,11.9,17.4,11.9,28.8v11.9v2.7h-4.6h-8.7
											c2.7-4.6,4.1-9.6,4.1-14.7c0-16-13.3-27.5-29.3-27.5s-29.3,11-29.3,27.5c0,5.5,1.4,10.5,4.1,14.7h-10.5h-3.2v-4.6v-10.5
											c0-11,4.6-21.1,11.9-28.8h-1.8l0,0C153.9,435.6,163.9,431,175.4,431L175.4,431z"/>
										<path d="M151.1,449.3c6.4-6.4,14.7-10.1,24.3-10.1c9.6,0,17.9,3.7,24.3,10.1l0,0c6.4,6.4,10.1,14.7,10.1,24.3
											c0,9.6-3.7,17.9-10.1,24.3l0,0c-6.4,6.4-14.7,10.1-24.3,10.1c-9.6,0-17.9-3.7-24.3-10.1c-6.4-6.4-10.1-14.7-10.1-24.3
											C141,464,144.7,455.3,151.1,449.3L151.1,449.3L151.1,449.3L151.1,449.3z M175.4,449.3c-13.3,0-23.8,10.5-23.8,23.8
											s10.5,23.8,23.8,23.8c13.3,0,23.8-10.5,23.8-23.8C199.2,460.3,188.7,449.3,175.4,449.3L175.4,449.3z"/>
										<path d="M175.4,464.9c-5,0-8.7,4.1-8.7,8.7c0,5,3.7,8.7,8.7,8.7c4.6,0,8.7-3.7,8.7-8.7C184.1,468.6,180,464.9,175.4,464.9
											L175.4,464.9z"/>
										<path d="M432.7,431L432.7,431c11,0,21.1,4.6,28.8,11.9l0,0h1.8c7.3,7.3,11.9,17.4,11.9,28.8v11.9v2.7h-4.6h-11.9
											c2.7-4.6,4.1-9.6,4.1-14.7c0-16-13.3-27.5-29.3-27.5s-29.3,11-29.3,27.5c0,5.5,1.4,10.5,4.1,14.7h-10.5h-4.6v-4.6v-10.5
											c0-11,4.6-21.1,11.9-28.8h-0.5l0,0C411.7,435.6,421.7,431,432.7,431L432.7,431z"/>
										<path d="M408.5,449.3c6.4-6.4,14.7-10.1,24.3-10.1c9.6,0,17.9,3.7,24.3,10.1l0,0c6.4,6.4,10.1,14.7,10.1,24.3
											c0,9.6-3.7,17.9-10.1,24.3l0,0c-6.4,6.4-14.7,10.1-24.3,10.1c-9.6,0-17.9-3.7-24.3-10.1c-6.4-6.4-10.1-14.7-10.1-24.3
											C398.8,464,402.5,455.3,408.5,449.3L408.5,449.3L408.5,449.3L408.5,449.3z M432.7,449.3c-13.3,0-23.8,10.5-23.8,23.8
											s10.5,23.8,23.8,23.8c13.3,0,23.8-10.5,23.8-23.8C457,460.3,446,449.3,432.7,449.3L432.7,449.3z"/>
										<path d="M432.7,464.9c-4.6,0-8.7,4.1-8.7,8.7c0,5,3.7,8.7,8.7,8.7c4.6,0,8.7-3.7,8.7-8.7C441.9,468.6,437.8,464.9,432.7,464.9
											L432.7,464.9z"/>
									</g>
								</svg>
							</label>
							<h5><label for="type5">Sedan</label></h5>
						</div>
						<div class="col-xs-2">
							<input id="type6" type="radio" name="type" />
							<label for="type6" class="b-search__main-type-svg">
								<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="47.6 310.9 500 220" enable-background="new 47.6 310.9 500 220" xml:space="preserve">
									<g>
										<path d="M367.7,491.9h-142v-9.2h142V491.9L367.7,491.9z M408.9,490.1v-9.2c8.2,0,14.2-0.9,18.3-1.4V448c-2.7-11-39.8-27.5-54-27.5
											l-0.9-1.4h-1.4h-5c-27.9-16.9-49.9-29.3-82-32.1h-25.6c-19.7,0-35.7,1.4-48.1,4.6l1.8,0.5l-4.1,2.7c-13.3,8.2-36.2,28.8-34.3,39.8
											c0,6.9-4.6,11.9-7.3,14.2v22.9c1.4,2.3,5.5,7.8,14.7,9.2l-2.3,9.2c-16-2.7-21.1-14.7-21.1-15.1l-0.5-1.8v-29.3l2.3-1.4
											c1.8-0.9,4.1-4.6,4.1-7.3c-2.3-16.5,22.4-37.1,35.7-46.2l-3.7-5.5l6,0.9c14.2-4.6,33-6.9,56.8-6.9h26.1
											c34.8,3.2,58.6,17.9,86.5,34.8l2.7-1.4c16.5,0.9,58.2,18.3,62.3,36.2l2.7,40.3h-6.4C425.9,488.7,420.4,489.6,408.9,490.1
											L408.9,490.1z"/>
										<path d="M202.4,442.9L202.4,442.9c9.2,0,17.9,3.7,24.3,10.1h-1.4c6,6,10.1,14.7,10.1,24.3v8.7v6.4h-4.6H229c-1.4,3.2-3.7,6.4-6,8.7
											v-1.4l0,0c-5,5-12.4,8.7-20.6,8.7c-7.8,0-15.1-3.2-20.6-8.7l0,0l0,0c-2.7-2.7-5-6.4-6.4-10.1c-1.4-0.5-5-0.9-6-1.4l-2.7-1.4v-3.2
											v-6.4c0-9.2,3.7-17.9,10.1-24.3h2.3C184.5,447,192.8,442.9,202.4,442.9L202.4,442.9L202.4,442.9z M388.3,459
											c-11,0-19.7,8.7-19.7,19.7c0,11,8.7,19.7,19.7,19.7c11,0,19.7-8.7,19.7-19.7C408,468.1,399.3,459,388.3,459L388.3,459L388.3,459z
											M202.4,459c-11,0-19.7,8.7-19.7,19.7c0,11,8.7,19.7,19.7,19.7s19.7-8.7,19.7-19.7C222.1,468.1,213.4,459,202.4,459L202.4,459
											L202.4,459z M388.3,442.9L388.3,442.9c9.2,0,17.9,3.7,24.3,10.1l0,0c6,6,10.1,14.7,10.1,24.3v8.2v6.4h-4.6c-0.9,0-1.8,0-3.2,0
											c-1.4,3.2-3.7,4.6-6,7.3l0,0l0,0c-5,5-12.4,8.7-20.6,8.7c-7.8,0-15.1-3.2-20.6-8.7l0,0v1.4c-2.7-2.7-4.6-5.5-6-8.7H359h-5v-4.6
											v-10.1c0-9.2,3.7-17.9,10.1-24.3h0.5C370.4,447,378.7,442.9,388.3,442.9L388.3,442.9z"/>
										<path d="M205.1,393.9c-9.2,5-23.4,12.8-30.2,20.1h16l21.5-22.9L205.1,393.9L205.1,393.9z"/>
										<path d="M212,416.4c14.7-16.5,24.7-25.2,37.1-25.2h34.8c20.6,1.8,37.5,8.7,54.5,17.9c-0.5,0-0.5-0.5-0.9,0l0,0
											c-3.2,3.2-5,6.9-5,11.4c0,0.9,0,1.4,0,2.3L212,416.4L212,416.4z"/>
										<path d="M166.2,425.5v0.9v11h13.3c0,0,8.2-9.6,7.8-15.1C186.8,421.9,177.7,422.3,166.2,425.5L166.2,425.5z"/>
										<path d="M202.4,471.8c-4.1,0-7.3,3.2-7.3,7.3c0,4.1,3.2,7.3,7.3,7.3c4.1,0,7.3-3.2,7.3-7.3C209.3,475,206.1,471.8,202.4,471.8
											L202.4,471.8z"/>
										<path d="M388.3,471.8c-4.1,0-7.3,3.2-7.3,7.3c0,4.1,3.2,7.3,7.3,7.3c4.1,0,7.3-3.2,7.3-7.3C395.6,475,392.4,471.8,388.3,471.8
											L388.3,471.8z"/>
										<polygon points="285.3,432.4 271.5,432.4 271.5,427.8 285.3,427.8 	"/>
										<path d="M339.8,411.3L339.8,411.3c-2.7,2.7-4.1,6-4.1,9.6c0,1.4,0.5,4.6,1.4,5.5c0.9,0.9,1.8,1.4,3.2,1.4h10.5
											c1.8,0,3.2-0.9,4.1-2.3c0.9-1.4,0.9-5.5,0-6.9c-1.8-3.2-5-6.4-10.1-8.2C343,409.5,341.1,410,339.8,411.3L339.8,411.3z"/>
										<path d="M348.5,430.6c-0.9,0-1.8-0.5-2.7-1.4l-6-8.2c-0.9-1.4-0.9-3.2,0.9-4.6c1.4-0.9,3.2-0.9,4.6,0.9l6,8.2
											c0.9,1.4,0.9,3.2-0.9,4.6C349.8,430.1,348.9,430.6,348.5,430.6L348.5,430.6z"/>
										<polygon points="225.7,427.8 212,427.8 212,423.2 225.7,423.2 	"/>
										<path d="M397,423.2c11.9,21.1,16,26.6,31.6,26.6v0.5l0,0l0,0l0,0l0,0h0.5h1.8v-2.7c-1.8-8.7-16-17.9-30.7-24.3H397L397,423.2z"/>
									</g>
								</svg>
							</label>
							<h5><label for="type6">Minicar</label></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<div class="m-firstSelects">
							<div class="col-xs-4">
								<select name="select1">
									<option value="" selected="">Any Make</option>
								</select>
								<span class="fa fa-caret-down"></span>
								<p>MISSING MANUFACTURER?</p>
							</div>
							<div class="col-xs-4">
								<select name="select2">
									<option value="" selected="">Any Model</option>
								</select>
								<span class="fa fa-caret-down"></span>
								<p>MISSING MODEL?</p>
							</div>
							<div class="col-xs-4">
								<select name="select3">
									<option value="" selected="">Vehicle Status</option>
								</select>
								<span class="fa fa-caret-down"></span>
								<p>E.G:  NEW, USED, CERTIFIED</p>
							</div>
						</div>
						<div class="m-secondSelects">
							<div class="col-xs-4">
								<select name="select4">
									<option value="" selected="">Min Year</option>
								</select>
								<span class="fa fa-caret-down"></span>
							</div>
							<div class="col-xs-4">
								<select name="select5">
									<option value="" selected="">Max Year</option>
								</select>
								<span class="fa fa-caret-down"></span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 text-left s-noPadding">
						<div class="b-search__main-form-range">
							<label>PRICE RANGE</label>
							<div class="slider"></div>
							<input type="hidden" name="min" class="j-min" />
							<input type="hidden" name="max" class="j-max" />
						</div>
						<div class="b-search__main-form-submit">
							<a href="#">Advanced search</a>
							<button type="submit" class="btn m-btn">Search the Vehicle<span class="fa fa-angle-right"></span></button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section><!--b-search-->

<section class="b-featured">
	<div class="container">
		<h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Featured Vehicles</h2>
		<div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/mers.jpg" alt="mers" />
						<span class="m-premium">Premium</span>
					</a>
					<div class="b-featured__item-price">
						$184,900
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">MERCEDES-AMG GT / GT S</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/audi.jpg" alt="audi" />
					</a>
					<div class="b-featured__item-price">
						$95,900
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">AUDI R8 SPYDER V-8</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0.00 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2015</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/aston.jpg" alt="aston" />
						<span class="m-leasing">LEASING AVAILABLE</span>
					</a>
					<div class="b-featured__item-price">
						$101,025
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">ASTON MARTIN VANTAGE</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/jaguar.jpg" alt="jaguar" />
					</a>
					<div class="b-featured__item-price">
						$130,825
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">JAGUAR F-TYPE R</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0.00</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2015</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/mers.jpg" alt="mers" />
						<span class="m-premium">Premium</span>
					</a>
					<div class="b-featured__item-price">
						$184,900
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">MERCEDES-AMG GT / GT S</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/audi.jpg" alt="audi" />
					</a>
					<div class="b-featured__item-price">
						$95,900
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">AUDI R8 SPYDER V-8</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0.00 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2015</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/aston.jpg" alt="aston" />
						<span class="m-leasing">LEASING AVAILABLE</span>
					</a>
					<div class="b-featured__item-price">
						$101,025
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">ASTON MARTIN VANTAGE</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/jaguar.jpg" alt="jaguar" />
					</a>
					<div class="b-featured__item-price">
						$130,825
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">JAGUAR F-TYPE R</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0.00</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2015</a>
						<a href="#">Manual</a>
						<a href="#">Orange</a>
						<a href="#">Petrol</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--b-featured-->

<section class="b-welcome">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
				<div class="b-welcome__text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
					<h2>WORLD'S LEADING CAR DEALER</h2>
					<h3>WELCOME TO AUTOCLUB</h3>
					<p>Curabitur libero. Donec facilisis velit eudsl est. Phasellus consequat. Aenean vita quam. Vivamus et nunc. Nunc consequat sem velde metus imperdiet lacinia. Dui estter neque molestie necd dignissim ac hendrerit quis purus. Etiam sit amet vec convallis massa scelerisque mattis. Sed placerat leo nec.</p>
					<p>Ipsum midne ultrices magn eu tempor quam dolor eustrl sem. Donec quis dolel Donec pede quam placerat alterl tristique faucibus posuere lobortis.</p>
					<ul>
						<li><span class="fa fa-check"></span>Donec facilisis velit eu est phasellus consequat </li>
						<li><span class="fa fa-check"></span>Aenean vitae quam. Vivamus et nunc nunc consequat</li>
						<li><span class="fa fa-check"></span>Sem vel metus imperdiet lacinia enean </li>
						<li><span class="fa fa-check"></span>Dapibus aliquam augue fusce eleifend quisque tels</li>
					</ul>
				</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="b-welcome__services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
					<div class="row">
						<div class="col-xs-6 m-padding">
							<div class="b-welcome__services-auto">
								<div class="b-welcome__services-img m-auto">
									<span class="fa fa-cab"></span>
								</div>
								<h3>AUTO LOANS</h3>
							</div>
						</div>
						<div class="col-xs-6 m-padding">
							<div class="b-welcome__services-trade">
								<div class="b-welcome__services-img m-trade">
									<span class="fa fa-male"></span>
								</div>
								<h3>Trade-Ins</h3>
							</div>
						</div>
						<div class="col-xs-12 text-center">
							<span class="b-welcome__services-circle"></span>
						</div>
						<div class="col-xs-6 m-padding">
							<div class="b-welcome__services-buying">
								<div class="b-welcome__services-img m-buying">
									<span class="fa fa-book"></span>
								</div>
								<h3>Buying guide</h3>
							</div>
						</div>
						<div class="col-xs-6 m-padding">
							<div class="b-welcome__services-support">
								<div class="b-welcome__services-img m-support">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="45px" height="45px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
										<g>
											<path d="M257.938,336.072c0,17.355-14.068,31.424-31.423,31.424c-17.354,0-31.422-14.068-31.422-31.424
												c0-17.354,14.068-31.423,31.422-31.423C243.87,304.65,257.938,318.719,257.938,336.072z M385.485,304.65
												c-17.354,0-31.423,14.068-31.423,31.424c0,17.354,14.069,31.422,31.423,31.422c17.354,0,31.424-14.068,31.424-31.422
												C416.908,318.719,402.84,304.65,385.485,304.65z M612,318.557v59.719c0,29.982-24.305,54.287-54.288,54.287h-39.394
												C479.283,540.947,379.604,606.412,306,606.412s-173.283-65.465-212.318-173.85H54.288C24.305,432.562,0,408.258,0,378.275v-59.719
												c0-20.631,11.511-38.573,28.46-47.758c0.569-84.785,25.28-151.002,73.553-196.779C149.895,28.613,218.526,5.588,306,5.588
												c87.474,0,156.105,23.025,203.987,68.43c48.272,45.777,72.982,111.995,73.553,196.779C600.489,279.983,612,297.925,612,318.557z
												M497.099,336.271c0-13.969-0.715-27.094-1.771-39.812c-24.093-22.043-67.832-38.769-123.033-44.984
												c7.248,8.15,13.509,18.871,17.306,32.983c-33.812-26.637-100.181-20.297-150.382-79.905c-2.878-3.329-5.367-6.51-7.519-9.417
												c-0.025-0.035-0.053-0.062-0.078-0.096l0.006,0.002c-8.931-12.078-11.976-19.262-12.146-11.31
												c-1.473,68.513-50.034,121.925-103.958,129.46c-0.341,7.535-0.62,15.143-0.62,23.08c0,28.959,4.729,55.352,12.769,79.137
												c30.29,36.537,80.312,46.854,124.586,49.59c8.219-13.076,26.66-22.205,48.136-22.205c29.117,0,52.72,16.754,52.72,37.424
												c0,20.668-23.604,37.422-52.72,37.422c-22.397,0-41.483-9.93-49.122-23.912c-30.943-1.799-64.959-7.074-95.276-21.391
												C198.631,535.18,264.725,568.41,306,568.41C370.859,568.41,497.099,486.475,497.099,336.271z M550.855,264.269
												C547.4,116.318,462.951,38.162,306,38.162S64.601,116.318,61.145,264.269h20.887c7.637-49.867,23.778-90.878,48.285-122.412
												C169.37,91.609,228.478,66.13,306,66.13c77.522,0,136.63,25.479,175.685,75.727c24.505,31.533,40.647,72.545,48.284,122.412
												H550.855L550.855,264.269z"/>
										</g>
									</svg>

								</div>
								<h3>24/7 support</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--b-welcome-->

<section class="b-world">
	<div class="container">
		<h6 class="wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">EVERYTHING YOU NEED TO KNOW</h6><br />
		<h2 class="s-title wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">THE WORLD OF AUTOS</h2>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="b-world__item wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
					<img class="img-responsive" src="media/370x200/wolks.jpg" alt="wolks" />
					<div class="b-world__item-val">
						<span class="b-world__item-val-title">FIRST DRIVE REVIEW</span>
						<div class="b-world__item-val-circles">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="m-empty"></span>
						</div>
						<span class="b-world__item-num">4.1</span>
					</div>
					<h2>2016 Volkswagen Golf R SportWagen</h2>
					<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequ
						sem velde metus imperdiet lacinia.</p>
					<a href="article.html" class="btn m-btn">READ MORE<span class="fa fa-angle-right"></span></a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="b-world__item wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">
					<img class="img-responsive"  src="media/370x200/mazda.jpg" alt="mazda" />
					<div class="b-world__item-val">
						<span class="b-world__item-val-title">INSTRUMENTED TEST</span>
						<div class="b-world__item-val-circles">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span class="m-halfEmpty"></span>
						</div>
						<span class="b-world__item-num">4.5</span>
					</div>
					<h2>2016 Mazda CX-5 2.5L AWD</h2>
					<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequ
						sem velde metus imp         erdiet lacinia.</p>
					<a href="article.html" class="btn m-btn m-active">READ MORE<span class="fa fa-angle-right"></span></a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="b-world__item j-item wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">
					<img class="img-responsive"  src="media/370x200/chevrolet.jpg" alt="chevrolet" />
					<div class="b-world__item-val">
						<span class="b-world__item-val-title">BUYERS INFO</span>
						<div class="b-world__item-val-circles">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<span class="b-world__item-num">5.0</span>
					</div>
					<h2>Advantages of Buying New or Used Vehicle</h2>
					<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequ
						sem velde metus imp         erdiet lacinia.</p>
					<a href="article.html" class="btn m-btn">READ MORE<span class="fa fa-angle-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</section><!--b-world-->

<section class="b-asks">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
				<div class="b-asks__first wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
					<div class="b-asks__first-circle">
						<span class="fa fa-search"></span>
					</div>
					<div class="b-asks__first-info">
						<h2>ARE YOU LOOKING FOR A CAR?</h2>
						<p>Search Our Inventory With Thousands Of Cars  And More
							Cars Are Adding On Daily Basis</p>
					</div>
					<div class="b-asks__first-arrow">
						<a href="listingsTwo.html"><span class="fa fa-angle-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
				<div class="b-asks__first m-second wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">
					<div class="b-asks__first-circle">
						<span class="fa fa-usd"></span>
					</div>
					<div class="b-asks__first-info">
						<h2>DO YOU WANT TO SELL A CAR?</h2>
						<p>Search Our Inventory With Thousands Of Cars  And More
							Cars Are Adding On Daily Basis</p>
					</div>
					<div class="b-asks__first-arrow">
						<a href="listingsTwo.html"><span class="fa fa-angle-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<p class="b-asks__call wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">QUESTIONS? CALL US  : <span>1-800- 624-5462</span></p>
			</div>
		</div>
	</div>
</section><!--b-asks-->

<section class="b-auto">
	<div class="container">
		<h5 class="s-titleBg wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">GIVING OUR CUSTOMERS BEST DEALS</h5><br />
		<h2 class="s-title wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">BEST OFFERS FROM AUTOCLUB</h2>
		<div class="row">
			<div class="col-xs-5 col-sm-4 col-md-3">
				<aside class="b-auto__main-nav wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
					<ul>
						<li class="active"><a href="#">All Manufacturers</a><span class="fa fa-angle-right"></span></li>
						<li><a href="#">Chevrolet</a></li>
						<li><a href="#">Honda</a></li>
						<li><a href="#">Toyota</a></li>
						<li><a href="#">Bmw</a></li>
						<li><a href="#">Volkswagen</a></li>
						<li><a href="#">Ferrari</a></li>
						<li><a href="#">Audi</a></li>
					</ul>
					<div class="owl-buttons">
						<div class="owl-prev j-tab" data-to='#first'></div>
						<div class="owl-next j-tab" data-to='#second'></div>
					</div>
				</aside>
			</div>
			<div class="col-md-9 col-sm-8 col-xs-7">
				<div class="b-auto__main">
					<div class="col-md-11 col-md-offset-1 col-xs-12">
						<a href="#"  class="b-auto__main-toggle s-lineDownCenter m-active j-tab wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100" data-to="#first">MOST RESEARCHED MANUFACTURERS</a>
						<a href="#" class="b-auto__main-toggle j-tab wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100" data-to="#second">LATEST VEHICLES ON SALE</a>
					</div>
					<div class="clearfix"></div>
					<div class="row m-margin" id="first">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/nissan.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">2015 Nissan Juke</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$95,900
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>12,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura2016.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">2016 Acura NSX </a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$28,995
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>5,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/amg.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">2015 Mercedes-AMG C63</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$95,900
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>12,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/brabus.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Brabus 850 6.0 Biturbo Coupe</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$28,995
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>5,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/range.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Land Rover Range Rover</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row m-margin" id="second">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">
								<img class="img-responsive"  src="media/270x150/acura.jpg" alt="mazda" />
								<div class="b-world__item-val">
									<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
								</div>
								<h2><a href="detail.html">Acura RLX Sport Hybrid</a></h2>
								<div class="b-auto__main-item-info">
									<span class="m-price">
										$44,380
									</span>
									<span class="m-number">
										<span class="fa fa-tachometer"></span>35,000 KM
									</span>
								</div>
								<div class="b-featured__item-links m-auto">
									<a href="#">Used</a>
									<a href="#">2014</a>
									<a href="#">Manual</a>
									<a href="#">Orange</a>
									<a href="#">Petrol</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--b-auto-->

<section class="b-count">
	<div class="container">
		<div class="row">
			<div class="col-md-11 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="b-count__item">
							<div class="b-count__item-circle">
								<span class="fa fa-car"></span>
							</div>
							<div class="chart" data-percent="5000">
								<h2  class="percent">5000</h2>
							</div>
							<h5>vehicles in stock</h5>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="b-count__item">
							<div class="b-count__item-circle">
								<span class="fa fa-users"></span>
							</div>
							<div class="chart" data-percent="3100">
								<h2  class="percent">3100</h2>
							</div>
							<h5>HAPPY CUSTOMER REVIEWS</h5>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="b-count__item">
							<div class="b-count__item-circle">
								<span class="fa fa-building-o"></span>
							</div>
							<div class="chart" data-percent="54">
								<h2  class="percent">54</h2>
							</div>
							<h5>DEALER BRANCHES</h5>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="b-count__item j-last">
							<div class="b-count__item-circle">
								<span class="fa fa-suitcase"></span>
							</div>
							<div class="chart" data-percent="547">
								<h2  class="percent">547</h2>
							</div>
							<h5>FREE PARTS GIVEN</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--b-count-->

<section class="b-contact">
	<div class="container">
		<div class="row wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
			<div class="col-xs-4">
				<div class="b-contact-title">
					<h5>LATEST NEWS &amp; DEALS</h5><br />
					<h2>NEWSLETTER SIGNUP</h2>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="b-contact__form">
					<p>WE SEND GREAT DEALS AND LATEST AUTO NEWS TO OUR SUBSCRIBED USERS EVERY WEEK. ITS FREE SO SUBSCRIBE TODAY!</p>
					<form action="/" method="POST">
						<div><span class="fa fa-user"></span><input type="text" name="user" value="" placeholder="Your Name" /></div>
						<div><span class="fa fa-envelope"></span><input type="text" name="email" value="" placeholder="Your Email" /></div>
						<button type="submit"><span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section><!--b-contact-->

<section class="b-review">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1 col-xs-12">
			<div id="carousel-small-rev" class="owl-carousel enable-owl-carousel" data-items="1" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-tablet-small="1">
				<div class="b-review__main">
					<div class="b-review__main-person">
						<div class="b-review__main-person-inside">
						</div>
					</div>
					<h5><span>DONALD BROOKS</span>, Customer, Ferrari 488 GTB 2 Owner<em>"</em></h5>
					<p>Donec facilisis velit eust. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem
						velde metus imperdiet lacinia.  Nam rutrum congue diam. Vestibulum acda risus eros auctor egestas. Morbids sem magna, viverra quis sollicitudin quis consectetuer quis nec magna.</p>
				</div>
				<div class="b-review__main">
					<div class="b-review__main-person">
						<div class="b-review__main-person-inside">
						</div>
					</div>
					<h5><span>DONALD BROOKS</span>, Customer, Ferrari 488 GTB 2 Owner<em>"</em></h5>
					<p>Donec facilisis velit eust. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem
						velde metus imperdiet lacinia.  Nam rutrum congue diam. Vestibulum acda risus eros auctor egestas. Morbids sem magna, viverra quis sollicitudin quis consectetuer quis nec magna.</p>
				</div>
				<div class="b-review__main">
					<div class="b-review__main-person">
						<div class="b-review__main-person-inside">
						</div>
					</div>
					<h5><span>DONALD BROOKS</span>, Customer, Ferrari 488 GTB 2 Owner<em>"</em></h5>
					<p>Donec facilisis velit eust. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem
						velde metus imperdiet lacinia.  Nam rutrum congue diam. Vestibulum acda risus eros auctor egestas. Morbids sem magna, viverra quis sollicitudin quis consectetuer quis nec magna.</p>
				</div>
			</div>
		</div>
	</div>
	<img src="images/backgrounds/reviews.jpg" alt="" class="img-responsive center-block" />
</section><!--b-review-->

@endsection
