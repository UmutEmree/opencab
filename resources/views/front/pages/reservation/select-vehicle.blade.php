@extends('front.main')

	@section('content')

		<div id="page-header">

			<h1>@lang('main.select-vehicle')</h1>

			<div class="title-block3"></div>

			<p><a href="#">Home</a><i class="fa fa-angle-right"></i>@lang('main.select-vehicle')</p>

		</div>

		

		<!-- BEGIN .content-wrapper-outer -->

		<div class="content-wrapper-outer clearfix">

			

			<!-- BEGIN .main-content -->

			<div class="main-content main-content-full">

				

				<!-- BEGIN .booking-step-wrapper -->

				<div class="booking-step-wrapper clearfix">



					<div class="step-wrapper clearfix">

						<div class="step-icon-wrapper">

							<div class="step-icon">1.</div>

						</div>

						<div class="step-title">@lang('main.trip-details')</div>

					</div>



					<div class="step-wrapper clearfix">

						<div class="step-icon-wrapper">

							<div class="step-icon step-icon-current">2.</div>

						</div>

						<div class="step-title">@lang('main.select-vehicle')</div>

					</div>



					<div class="step-wrapper clearfix">

						<div class="step-icon-wrapper">

							<div class="step-icon">3.</div>

						</div>

						<div class="step-title">@lang('main.view-order')</div>

					</div>



					<div class="step-wrapper qns-last clearfix">

						<div class="step-icon-wrapper">

							<div class="step-icon">4.</div>

						</div>

						<div class="step-title">@lang('main.confirmation')</div>

					</div>



					<div class="step-line"></div>



				<!-- END .booking-step-wrapper -->

				</div>

				

				<!-- BEGIN .clearfix -->

				<div class="clearfix">

				

					<!-- BEGIN .select-vehicle-wrapper -->

					<div class="select-vehicle-wrapper">

						

						<h4>@lang('main.select-vehicle')</h4>

						<div class="title-block7"></div>

						

						<!-- BEGIN .vehicle-section -->

				

						

						<!-- BEGIN .vehicle-section -->

						<div class="vehicle-section clearfix">

							

							<p>Van <strong>49 €</strong></p>

							<ul>

								<li class="vehicle-bag-limit">10</li>

								<li class="vehicle-passenger-limit">8</li>

							</ul>

							<img src="{{ url('front/images/viano.jpg') }}" alt="" />

						

						<!-- END .vehicle-section -->

						</div>

						

						<!-- BEGIN .vehicle-section -->

						<div class="vehicle-section clearfix">

							

							<p>Business <strong>37 €</strong></p>

							<ul>

								<li class="vehicle-bag-limit">2</li>

								<li class="vehicle-passenger-limit">3</li>

							</ul>

							<img src="{{ url('front/images/inf.png') }}" alt="" />

						

						<!-- END .vehicle-section -->

						</div>



							<div class="vehicle-section clearfix">

							

							<p>Business <strong>37 €</strong></p>

							<ul>

								<li class="vehicle-bag-limit">2</li>

								<li class="vehicle-passenger-limit">3</li>

							</ul>

							<img src="{{ url('front/images/e-class.png') }}" alt="" />

						

						<!-- END .vehicle-section -->

						</div>

						

						<!-- BEGIN .vehicle-section -->

					

						

					<!-- END .select-vehicle-wrapper -->

					</div>

					

					<!-- BEGIN .trip-details-wrapper -->

					<div class="trip-details-wrapper clearfix">

						

						<h4>@lang('main.trip-details')</h4>

						<div class="title-block7"></div>

					

						<!-- BEGIN .trip-details-wrapper-1 -->

						<div class="trip-details-wrapper-1">

								<input type="hidden" name="zipcode" value="{{ $rezervasyon->zipcode }}">
								<input type="hidden" name="flightnumber" value="{{ $rezervasyon->flightnumber }}">
								<input type="hidden" name="fromcity" value="{{ $rezervasyon->fromcity }}">
								<input type="hidden" name="stadt" value="{{ $rezervasyon->stadt }}">
								<input type="hidden" name="stadt2" value="{{ $rezervasyon->stadt2 }}">
								<input type="hidden" name="zipcode2" value="{{ $rezervasyon->zipcode2 }}">


							<p class="clearfix"><strong>@lang('main.service-type'):</strong> <span>{{ $rezervasyon->service }}</span></p>

							<p class="clearfix"><strong>@lang('main.r-from'):</strong> <span>{{ $rezervasyon->pickupaddress }}</span></p>

							<p class="clearfix"><strong>@lang('main.to'):</strong> <span>{{ $rezervasyon->dropoffaddress }}</span></p>

							

						<!-- END .trip-details-wrapper-1 -->

						</div>

						

						<!-- BEGIN .trip-details-wrapper-2 -->

						<div class="trip-details-wrapper-2">

							

							<p><strong>@lang('main.pickup-date'):</strong> {{ $rezervasyon->pickupdate }}</p>

							<p><strong>@lang('main.pickup-time'):</strong> {{ $rezervasyon->pickuphour}} : {{ $rezervasyon->pickupminute }}</p>

							

							

						<!-- END .trip-details-wrapper-2 -->

						</div>

						

						<div class="clearboth"></div>

						

						<!-- BEGIN .contact-form-1 -->

						<form action="{{ route('reservation2') }} " class="contact-form-1" method="post">

							{{ csrf_field() }}

							<input type="hidden" name="code" value="{{ $rezervasyon->code }}">

							<!-- BEGIN .clearfix -->

							<div class="clearfix">

								

								<!-- BEGIN .qns-one-half -->

								<div class="qns-one-half">

									

									<label>@lang('main.no-passengers')</label>

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="passengers">

											<option value="1">1</option>

											<option value="2">2</option>

											<option value="3">3</option>

											<option value="4">4</option>

											<option value="5">5</option>

											<option value="6">6</option>

											<option value="7">7</option>

											<option value="8">8</option>

										</select>

									</div>

								

								<!-- END .qns-one-half -->

								</div>

								

								<!-- BEGIN .qns-one-half -->

								<div class="qns-one-half last-col">

									

									<label>@lang('main.no-bags')</label>

									<div class="select-wrapper">

										<i class="fa fa-angle-down"></i>

									 	<select name="bags">

											<option value="1">1</option>

											<option value="2">2</option>

											<option value="3">3</option>

											<option value="4">4</option>

											<option value="5">5</option>

											<option value="6">6</option>

											<option value="7">7</option>

											<option value="8">8</option>

											<option value="9">9</option>

											<option value="10">10</option>

										</select>

									</div>

								

								<!-- END .qns-one-half -->

								</div>

							

							<!-- END .clearfix -->

							</div>

							

							<!-- BEGIN .clearfix -->

							<div class="clearfix">

								

								<!-- BEGIN .qns-one-half -->

								<div class="qns-one-half">

									

									<label>@lang('main.name')</label>

									<input type="text" name="name" value="" required="" />

								

								<!-- END .qns-one-half -->

								</div>

								

								<!-- BEGIN .qns-one-half -->

								<div class="qns-one-half last-col">

									

									<label>@lang('main.surname')</label>

									<input type="text" name="surname" value="" required="" />

								

								<!-- END .qns-one-half -->

								</div>

							

							<!-- END .clearfix -->

							</div>

							

							<!-- BEGIN .clearfix -->

							<div class="clearfix">

								

								<!-- BEGIN .qns-one-half -->

								<div class="qns-one-half">

									

									<label>@lang('main.email')</label>

									<input type="text" name="email" value="" required="" />

								

								<!-- END .qns-one-half -->

								</div>

								

								<!-- BEGIN .qns-one-half -->

								<div class="qns-one-half last-col">

									

									<label>@lang('main.phone')</label>

									<input type="text" name="phone" value="" required="" />

								

								<!-- END .qns-one-half -->

								</div>

								<div class="qns-one-half">

									

									<label>@lang('main.vehicle')</label>

									<select style="width: calc(100% + 5px) !important;" name="vechile">

										<option value="Van">Van</option>

										<option value="Business">Business</option>

									</select>

								

								<!-- END .qns-one-half -->

								</div>

								<div class="qns-one-half last-col" style="margin-bottom:20px">

									

									<label>@lang('main.payment')</label>

									<select style="width: calc(100% + 5px) !important;" name="payment">

										<option value="Bar">@lang('main.cash')</option>

										<option value="Kreditkarte">@lang('main.creditcard')</option>

										<option value="Rechnung">@lang('main.invoice')</option>

									</select>

								

								<!-- END .qns-one-half -->

								</div>
									<div class=" last-col" >

									

									<label>@lang('main.add-inf')</label>

									<textarea name="text" row="6"></textarea>
								

								<!-- END .qns-one-half -->

								</div>

							<!-- END .clearfix -->

							</div>



						



							<button type="submit" style="margin-top:20px">

				 				@lang('main.confirm') <i class="fa fa-angle-right"></i>

							</button>



						<!-- END .contact-form-1 -->

						</form>

						

					<!-- END .trip-details-wrapper -->

					</div>

				

				<!-- END .clearfix -->

				</div>

				

			<!-- END .main-content -->

			</div>

		

		<!-- END .content-wrapper-outer -->

		</div>

		

	@endsection