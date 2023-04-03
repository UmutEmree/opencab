@extends('front.main')

	@section('content')

		

		<!-- BEGIN .large-header-wrapper -->

		<div class="large-header-wrapper">

			

			<!-- BEGIN .large-header -->

			<div class="large-header">

			

				<!-- BEGIN .header-booking-form-wrapper -->

				<div class="header-booking-form-wrapper">

					

					<!-- BEGIN #booking-tabs -->

					<div id="booking-tabs">



						<ul class="nav clearfix">

							<li><a href="#tab-cta">City to Airport</a></li>

							<li><a href="#tab-atc">Airport to City</a></li>

							<li><a href="#tab-ctc">City  to City</a></li>

						</ul>

						

						<!-- BEGIN #tab-one-way -->

						<div id="tab-cta">

							

							<!-- BEGIN .booking-form-1 -->

							<form action="{{ route('reservation') }}" class="booking-form-1" method="post">

								{{ csrf_field() }}

								<input type="text" name="pickupaddress" value="" placeholder="@lang('main.pickup-address')" required="" />
								
								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="zipcode" value="" placeholder="@lang('main.zipcode')" style="width: 80%"  required="" />
									</div>
								</div>

								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="stadt" value="" placeholder="@lang('main.stadt')" style="width: 80%"  required="" />
									</div>
								</div>

							

								<input type="text" name="dropoffaddress" value="Flughafen Wien Schwechat"  required="" />

								<input type="text" name="pickupdate" class="datepicker"  value="" placeholder="@lang('main.pickup-date')" required="" />
								<input type="hidden" name="code" value="{{ str_random(60) }}">

								<input type="hidden" name="status" value="0">

								<input type="hidden" name="service" value="City to Airport">

								<div class="booking-form-time">

									<label>@lang('main.pickup-time')</label>

								</div>



								<div class="booking-form-hour">

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="pickuphour" required="">

											<option value="00">00</option>

											<option value="01">01</option>

											<option value="02">02</option>

											<option value="03">03</option>

											<option value="04">04</option>

											<option value="05">05</option>

											<option value="06">06</option>

											<option value="07">07</option>

											<option value="08">08</option>

											<option value="09">09</option>

											<option value="10">10</option>

											<option value="11">11</option>

											<option value="12" selected="">12</option>

											<option value="13">13</option>

											<option value="14">14</option>

											<option value="15">15</option>

											<option value="16">16</option>

											<option value="17">17</option>

											<option value="18">18</option>

											<option value="19">19</option>

											<option value="20">20</option>

											<option value="21">21</option>

											<option value="22">22</option>

											<option value="23">23</option>

										</select>

									</div>

								</div>



								<div class="booking-form-min">

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="pickupminute" required="">

											<option value="00">00</option>

											<option value="05">05</option>

											<option value="10">10</option>

											<option value="15">15</option>

											<option value="20">20</option>
											
											<option value="25">25</option>
											
											<option value="30">30</option>
											
											<option value="35">35</option>
											
											<option value="40">40</option>
											
											<option value="45">45</option>
											
											<option value="50">50</option>
											
											<option value="55">55</option>
											
										</select>

									</div>

								</div>



								<button type="submit">

					 				<span>@lang('main.reservenow')</span>

								</button>



							<!-- END .booking-form-1 -->

							</form>

						

						<!-- END #tab-one-way -->

						</div>



						<!-- BEGIN #tab-hourly -->

						<div id="tab-atc">

							

							<!-- BEGIN .booking-form-1 -->

							<form action="{{ route('reservation') }}" class="booking-form-1" method="post">

								{{ csrf_field() }}

								<input type="text" name="pickupaddress" value="Flughafen Schwechat" />
									<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
								<input type="text" name="flightnumber" value="" placeholder="@lang('main.flightnumber')" style="width: 100%"  required="" />
									</div>
								</div>

								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="fromcity" value="" placeholder="@lang('main.fromcity')" style="width: 100%"  required="" />
									</div>
								</div>
								<input type="text" name="dropoffaddress" value="" placeholder="@lang('main.dropoff-address')" />

								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="zipcode" value="" placeholder="@lang('main.zipcode')" style="width: 80%"  required="" />
									</div>
								</div>

								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="stadt" value="" placeholder="@lang('main.stadt')" style="width: 80%"  required="" />
									</div>
								</div>

								<input type="text" name="pickupdate" class="datepicker" value="" placeholder="@lang('main.pickup-date')" />


								
								<input type="hidden" name="code" value="{{ str_random(60) }}">

								<input type="hidden" name="status" value="0">

								<input type="hidden" name="service" value="Airport to City">

								<div class="booking-form-time">

									<label>@lang('main.pickup-time')</label>

								</div>



								<div class="booking-form-hour">

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="pickuphour">

											<option value="00">00</option>

											<option value="01">01</option>

											<option value="02">02</option>

											<option value="03">03</option>

											<option value="04">04</option>

											<option value="05">05</option>

											<option value="06">06</option>

											<option value="07">07</option>

											<option value="08">08</option>

											<option value="09">09</option>

											<option value="10">10</option>

											<option value="11">11</option>

											<option value="12" selected="">12</option>

											<option value="13">13</option>

											<option value="14">14</option>

											<option value="15">15</option>

											<option value="16">16</option>

											<option value="17">17</option>

											<option value="18">18</option>

											<option value="19">19</option>

											<option value="20">20</option>

											<option value="21">21</option>

											<option value="22">22</option>

											<option value="23">23</option>

										</select>

									</div>

								</div>



								<div class="booking-form-min">

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="pickupminute">

											
											<option value="00">00</option>

											<option value="05">05</option>

											<option value="10">10</option>

											<option value="15">15</option>

											<option value="20">20</option>
											
											<option value="25">25</option>
											
											<option value="30">30</option>
											
											<option value="35">35</option>
											
											<option value="40">40</option>
											
											<option value="45">45</option>
											
											<option value="50">50</option>
											
											<option value="55">55</option>
											

										</select>

									</div>

								</div>



								<button type="submit">

					 				<span>@lang('main.reservenow')</span>

								</button>



							<!-- END .booking-form-1 -->

							</form>

						

						

							

						<!-- END #tab-hourly -->

						</div>

						

						<div id="tab-ctc">

							

							<!-- BEGIN .booking-form-1 -->

									<form action="{{ route('reservation') }}" class="booking-form-1" method="post">

								{{ csrf_field() }}

								<input type="text" name="pickupaddress" value="" placeholder="@lang('main.pickup-address')" />
								
								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="zipcode" value="" placeholder="@lang('main.zipcode')" style="width: 80%"  required="" />
									</div>
								</div>

								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="stadt" value="" placeholder="@lang('main.stadt')" style="width: 80%"  required="" />
									</div>
								</div>

								<input type="text" name="dropoffaddress" value="" placeholder="@lang('main.dropoff-address')" />
								
								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="zipcode2" value="" placeholder="@lang('main.zipcode')" style="width: 80%"  required="" />
									</div>
								</div>

								<div class="booking-form-hour" style="margin-right: 20px;">
									<div class="select-wrapper" style="height: 43px;">
										<input type="text" name="stadt2" value="" placeholder="@lang('main.stadt')" style="width: 80%"  required="" />
									</div>
								</div>

								<input type="text" name="pickupdate" class="datepicker" value="" placeholder="@lang('main.pickup-date')" />

								<input type="hidden" name="code" value="{{ str_random(60) }}">

								<input type="hidden" name="status" value="0">

								<input type="hidden" name="service" value="City to City">

								<div class="booking-form-time">

									<label>@lang('main.pickup-time')</label>

								</div>



								<div class="booking-form-hour">

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="pickuphour">

											<option value="00">00</option>

											<option value="01">01</option>

											<option value="02">02</option>

											<option value="03">03</option>

											<option value="04">04</option>

											<option value="05">05</option>

											<option value="06">06</option>

											<option value="07">07</option>

											<option value="08">08</option>

											<option value="09">09</option>

											<option value="10">10</option>

											<option value="11">11</option>

											<option value="12" selected="">12</option>

											<option value="13">13</option>

											<option value="14">14</option>

											<option value="15">15</option>

											<option value="16">16</option>

											<option value="17">17</option>

											<option value="18">18</option>

											<option value="19">19</option>

											<option value="20">20</option>

											<option value="21">21</option>

											<option value="22">22</option>

											<option value="23">23</option>

										</select>

									</div>

								</div>



								<div class="booking-form-min">

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="pickupminute">

										
											<option value="00">00</option>

											<option value="05">05</option>

											<option value="10">10</option>

											<option value="15">15</option>

											<option value="20">20</option>
											
											<option value="25">25</option>
											
											<option value="30">30</option>
											
											<option value="35">35</option>
											
											<option value="40">40</option>
											
											<option value="45">45</option>
											
											<option value="50">50</option>
											
											<option value="55">55</option>
											

										</select>

									</div>

								</div>



								<button type="submit">

					 				<span>@lang('main.reservenow')</span>

								</button>



							<!-- END .booking-form-1 -->

							</form>

						

						<!-- END #tab-hourly -->

						</div>

					<!-- END #booking-tabs -->

					</div>

					

				<!-- END .header-booking-form-wrapper -->

				</div>

			

			<!-- END .large-header -->

			</div>

			

		<!-- END .large-header-wrapper -->

		</div>

		

		<!-- BEGIN .content-wrapper-outer -->

		<section class="content-wrapper-outer content-wrapper clearfix our-fleet-sections">



			<h3 class="center-title">@lang('main.our-fleet')</h3>

			<div class="title-block2"></div>

			

			<!--<p class="fleet-intro-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod

			tempor incididunt ut labore et dolore magna aliqua. </p> -->



			<!-- BEGIN .fleet-block-wrapper -->

			<div class="owl-carousel1 fleet-block-wrapper">



				<!-- BEGIN .fleet-block -->

				<div class="fleet-block">

					<div class="fleet-block-image">

						<a href="#"><img src="{{ url('front/images/e-class.png') }}" class="img-responsive" alt="" /></a>

					</div>

					<div class="fleet-block-content">

						<div class="fleet-price">@lang('main.from') 37€</div>

						<h4><a href="#">Mercedes E-Class</a></h4>

						<div class="title-block3"></div>

						<ul class="list-style4">

							<li>3 @lang('main.passengers')</li>

							<li>2 @lang('main.bags')</li>

						</ul>

					</div>

				<!-- END .fleet-block -->

				</div>

					<!-- BEGIN .fleet-block -->

				<div class="fleet-block">

					<div class="fleet-block-image">

						<a href="#"><img src="{{ url('front/images/mondeo.png') }}" class="img-responsive" alt="" /></a>

					</div>

					<div class="fleet-block-content">

						<div class="fleet-price">@lang('main.from') 32€</div>

						<h4><a href="#">Ford Mondeo</a></h4>

						<div class="title-block3"></div>

						<ul class="list-style4">

							<li>3 @lang('main.passengers')</li>

							<li>2 @lang('main.bags')</li>

						</ul>

					</div>

				<!-- END .fleet-block -->

				</div>



				<!-- BEGIN .fleet-block -->

				<div class="fleet-block">

					<div class="fleet-block-image">

						<a href="#"><img src="{{ url('front/images/viano.jpg') }}"  class="img-responsive" alt="" /></a>

					</div>

					<div class="fleet-block-content">

						<div class="fleet-price">@lang('main.from') 49€</div>

						<h4><a href="#">Mercedes Vito</a></h4>

						<div class="title-block3"></div>

						<ul class="list-style4">

							<li>8 @lang('main.passengers')</li>

							<li>10 @lang('main.bags')</li>

						</ul>

					</div>

				<!-- END .fleet-block -->

				</div>

				

				<!-- BEGIN .fleet-block -->

				<div class="fleet-block">

					<div class="fleet-block-image">

						<a href="#"><img src="{{ url('front/images/inf.png') }}" class="img-responsive" alt="" /></a>

					</div>

					<div class="fleet-block-content">

						<div class="fleet-price">@lang('main.from') 37€</div>

						<h4><a href="#">Infiniti Q70</a></h4>

						<div class="title-block3"></div>

						<ul class="list-style4">

							<li>3 @lang('main.passengers')</li>

							<li>2 @lang('main.bags')</li>

						</ul>

					</div>

				<!-- END .fleet-block -->

				</div>

				

				<!-- BEGIN .fleet-block -->

			

			<!-- END .fleet-block-wrapper -->

			</div>



		<!-- END .content-wrapper-outer -->

		</section>

		

		<!-- BEGIN .content-wrapper-outer -->

		<section class=".content-wrapper-outer clearfix call-to-action-1-section">

		

			<div class="call-to-action-1-section-inner">

				

				<h3>@lang('main.price-wide')</h3>

				<a href="{{ url('/preise') }}" class="button0">@lang('main.view-price')</a>

				

			</div>

			

		<!-- END .content-wrapper-outer -->

		</section>

		

		<!-- BEGIN .content-wrapper-outer -->

		<section class="content-wrapper-outer home-icons-outer-wrapper-2">



			<!-- BEGIN .clearfix -->

			<div class="clearfix">



				<!-- BEGIN .qns-one-third -->

				<div class="qns-one-half home-icon-wrapper-2">

					<div class="qns-home-icon"><i class="fa fa-calendar-check-o"></i></div>

					<div class="home-icon-inner">

						<h4>Easy Online Booking</h4>

						<div class="title-block3"></div>

						<p>@lang('main.easy-desc')</p>

					</div>

				<!-- END .qns-one-third -->

				</div>



				<!-- BEGIN .qns-one-third -->

				<div class="qns-one-half home-icon-wrapper-2 qns-last">

					<div class="qns-home-icon"><i class="fa fa-star"></i></div>

					<div class="home-icon-inner">

						<h4>Professional Drivers</h4>

						<div class="title-block3"></div>

						<p>@lang('main.pro-drivers-desc')</p>

					</div>

				<!-- END .qns-one-third -->

				</div>



				<!-- BEGIN .qns-one-third -->

				<div class="qns-one-half home-icon-wrapper-2">

					<div class="qns-home-icon"><i class="fa fa-car"></i></div>

					<div class="home-icon-inner">

						<h4>@lang('main.big-fleet')</h4>

						<div class="title-block3"></div>

						<p>@lang('main.big-fleet-desc')</p>

					</div>

				<!-- END .qns-one-third -->

				</div>



				<!-- BEGIN .qns-one-third -->

				<div class="qns-one-half home-icon-wrapper-2 qns-last">

					<div class="qns-home-icon"><i class="fa fa-cc-visa"></i></div>

					<div class="home-icon-inner">

						<h4>@lang('main.credit-card')</h4>

						<div class="title-block3"></div>

						<p>@lang('main.credit-card-desc')</p>

					</div>

				<!-- END .qns-one-third -->

				</div>



			<!-- END .clearfix -->

			</div>



		<!-- END .content-wrapper-outer -->

		</section>

		

		<!-- BEGIN .clearfix -->

		<section class="clearfix">



			<!-- BEGIN .about-us-block -->

			<div class="about-us-block about-us-block-1">



				<h3>Business</h3>

				<div class="title-block4"></div>

				<p>@lang('main.business-desc') </p>



			<!-- END .about-us-block -->

			</div>



			<div class="video-wrapper video-wrapper-home">



				<div class="video-play">

					<a href="https://www.youtube.com/watch?v=Uv5ZRiAreHA" data-gal="prettyPhoto"><i class="fa fa-play"></i></a>

				</div>



			</div>



		<!-- END .clearfix -->

		</section>

		

	

		<!-- BEGIN .call-to-action-2-section -->

		<section class="clearfix call-to-action-2-section">

		

			<div class="call-to-action-2-section-inner">

				

				<h3>@lang('main.book-online')</h3>

				<div class="title-block5"></div>

				<p>@lang('main.call-us')</p>

				

				

			</div>

			

		<!-- END .call-to-action-2-section -->

		</section>


		

		<!-- BEGIN .footer -->

	@endsection