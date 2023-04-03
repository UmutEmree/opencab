@extends('front.main')

	@section('content')

			<div id="page-header">

			<h1>@lang('main.view-order')</h1>

			<div class="title-block3"></div>

			<p><a href="#">Home</a><i class="fa fa-angle-right"></i>@lang('main.view-order')</p>

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

							<div class="step-icon">2.</div>

						</div>

						<div class="step-title"><a href="{{ url('reservation/'.$rezervasyon->code) }}">@lang('main.select-vehicle')</a></div>

					</div>



					<div class="step-wrapper clearfix">

						<div class="step-icon-wrapper">

							<div class="step-icon step-icon-current">3.</div>

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

				

				<!-- BEGIN .full-booking-wrapper -->

				<div class="full-booking-wrapper full-booking-wrapper-3 clearfix">

					

					<h4>@lang('main.trip-details')</h4>

					<div class="title-block7"></div>

						<form action="{{ route('reservation-final') }} " class="contact-form-1" method="post">

							<input type="hidden" name="status" value="1">

							<input type="hidden" name="code" value="{{ $rezervasyon->code }}">

							{{ csrf_field() }}

					<!-- BEGIN .clearfix -->

					<div class="clearfix">

						

						<!-- BEGIN .qns-one-half -->

						<div class="qns-one-half">

						

							<p class="clearfix"><strong>@lang('main.service-type'):</strong> <span>{{ $rezervasyon->service }}</span></p>

							<input type="hidden" name="service" value="{{ $rezervasyon->service }}">

							<p class="clearfix"><strong>@lang('main.r-from'):</strong> <span>{{ $rezervasyon->pickupaddress }}</span></p>

							<input type="hidden" name="pickupaddress" value="{{ $rezervasyon->pickupaddress }}">

							<p class="clearfix"><strong>@lang('main.to'):</strong> <span>{{ $rezervasyon->dropoffaddress }}</span></p>

							<input type="hidden" name="dropoffaddress" value="{{ $rezervasyon->dropoffaddress }}">

						<!-- END .qns-one-half -->

						</div>

						

						<!-- BEGIN .qns-one-half -->

						<div class="qns-one-half last-col">

							

							<p class="clearfix"><strong>@lang('main.vehicle'):</strong> <span>{{ $rezervasyon->vechile }}</span></p>

							<input type="hidden" name="vechile" value="{{ $rezervasyon->vechile }}">

							<p class="clearfix"><strong>@lang('main.pickup-date'):</strong> <span>{{ $rezervasyon->pickupdate }}</span></p>

							<input type="hidden" name="pickupdate" value="{{ $rezervasyon->pickupdate }}">

							<p class="clearfix"><strong>@lang('main.pickup-time'):</strong> <span>{{ $rezervasyon->pickuphour }}:{{ $rezervasyon->pickupminute }}</span></p>

							<input type="hidden" name="pickuphour" value="{{ $rezervasyon->pickuphour }}"><input type="hidden" name="pickupminute" value="{{ $rezervasyon->pickupminute }}">



						

						<!-- END .qns-one-half -->

						</div>

						

					<!-- END .clearfix -->

					</div>

					

					<hr class="space2" />

					

					<h4>@lang('main.passengers-det')</h4>

					<div class="title-block7"></div>

					

					<!-- BEGIN .clearfix -->

					<div class="clearfix">

						

						<!-- BEGIN .passenger-details-wrapper -->

						<div class="passenger-details-wrapper">

						

							<!-- BEGIN .clearfix -->

							<div class="clearfix">



								<!-- BEGIN .passenger-details-half -->

								<div class="passenger-details-half">



									<p class="clearfix"><strong>@lang('main.passengers'):</strong> <span>{{ $rezervasyon->passengers }}</span></p>

									<input type="hidden" name="passengers" value="{{ $rezervasyon->passengers }}">

									<p class="clearfix"><strong>@lang('main.bags'):</strong> <span>{{ $rezervasyon->bags }}</span></p>

									<input type="hidden" name="bags" value="{{ $rezervasyon->bags }}">

								<!-- END .passenger-details-half -->

								</div>



								<!-- BEGIN .passenger-details-half -->

								<div class="passenger-details-half last-col">



									<p class="clearfix"><strong>@lang('main.name') @lang('main.surname'):</strong> <span>{{ $rezervasyon->name }} {{ $rezervasyon->surname }}</span></p>

									<input type="hidden" name="name" value="{{ $rezervasyon->name }}">

									<input type="hidden" name="surname" value="{{ $rezervasyon->surname }}">

									<p class="clearfix"><strong>@lang('main.email'):</strong> <span>{{ $rezervasyon->email }}</span></p>

									<input type="hidden" name="email" value="{{ $rezervasyon->email }}">

									<p class="clearfix"><strong style="font-size: 12px">@lang('main.phone'):</strong> <span>{{ $rezervasyon->phone }}</span></p>

									<input type="hidden" name="phone" value="{{ $rezervasyon->phone }}">
									<input type="hidden" name="zipcode" value="{{ $rezervasyon->zipcode }}">
									<input type="hidden" name="flightnumber" value="{{ $rezervasyon->flightnumber }}">
									<input type="hidden" name="fromcity" value="{{ $rezervasyon->fromcity }}">
									<input type="hidden" name="payment" value="{{ $rezervasyon->payment }}">
									<input type="hidden" name="stadt" value="{{ $rezervasyon->stadt }}">
									<input type="hidden" name="stadt2" value="{{ $rezervasyon->stadt2 }}">
									<input type="hidden" name="zipcode2" value="{{ $rezervasyon->zipcode2 }}">

								<!-- END .passenger-details-half -->

								</div>



							<!-- END .clearfix -->

							</div>

							

						<!-- END .passenger-details-wrapper -->

						</div>

						

						<!-- BEGIN .passenger-details-wrapper -->

						<div class="passenger-details-wrapper additional-information-wrapper last-col">

						

							<p class="clearfix"><strong>@lang('main.add-inf'):</strong> <span>{{ $rezervasyon->text }} </span></p>

							<input type="hidden" name="text" value="{{ $rezervasyon->text }}">

						

						<!-- END .passenger-details-wrapper -->

						</div>

						

					<!-- END .clearfix -->

					</div>

					

					<div class="total-price-display clearfix">

						

						 <p>@lang('main.total-price'): 

						 	<strong>

						 		@if($rezervasyon->vechile =='Van') {{ ('49 €') }}@endif

						 		@if($rezervasyon->vechile =='Business') {{ ('37 €') }}@endif

						 		@if($rezervasyon->vechile =='Economy') {{ ('32 €') }}@endif

						 	</strong>

						 </p>

						

							<button class="payment-button" type="submit">

				 				@lang('main.confirm')  <i class="fa fa-angle-right"></i>

							</button>

						

					</div>

					</form>

				<!-- END .full-booking-wrapper -->

				</div>

				

			<!-- END .main-content -->

			</div>

		

		<!-- END .content-wrapper-outer -->

		</div>

	@endsection