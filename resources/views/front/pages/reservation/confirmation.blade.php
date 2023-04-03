@extends('front.main')
	@section('content')
			<div id="page-header">
			<h1>@lang('main.confirmation')</h1>
			<div class="title-block3"></div>
			<p><a href="#">Home</a><i class="fa fa-angle-right"></i>@lang('main.confirmation')</p>
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
						<div class="step-title">@lang('main.select-vehicle')</div>
					</div>

					<div class="step-wrapper clearfix">
						<div class="step-icon-wrapper">
							<div class="step-icon ">3.</div>
						</div>
						<div class="step-title">@lang('main.view-order')</div>
					</div>

					<div class="step-wrapper qns-last clearfix">
						<div class="step-icon-wrapper">
							<div class="step-icon step-icon-current">4.</div>
						</div>
						<div class="step-title">@lang('main.confirmation')</div>
					</div>

					<div class="step-line"></div>

				<!-- END .booking-step-wrapper -->
				</div>
				
				<!-- BEGIN .full-booking-wrapper -->
				<div class="full-booking-wrapper full-booking-wrapper-3 clearfix">
					
					<h4>@lang('main.order-sucs')</h4>
					<div class="title-block7"></div>
					
					<p style="font-size: 18px">@lang('main.order-sent')</p>
					
					<hr class="space7" />
					
					<h4>@lang('main.trip-details')</h4>
					<div class="title-block7"></div>
					
					<!-- BEGIN .clearfix -->
					<div class="clearfix">
						
						<!-- BEGIN .qns-one-half -->
						<div class="qns-one-half">
						
							<p class="clearfix"><strong>@lang('main.service-type'):</strong> <span>{{ $rezervasyon->service }}</span></p>
							<p class="clearfix"><strong>@lang('main.r-from'):</strong> <span>{{ $rezervasyon->pickupaddress }}</span></p>
							<p class="clearfix"><strong>@lang('main.to'):</strong> <span>{{ $rezervasyon->dropoffaddress }}</span></p>
						
						<!-- END .qns-one-half -->
						</div>
						
						<!-- BEGIN .qns-one-half -->
						<div class="qns-one-half last-col">
							
							<p class="clearfix"><strong>@lang('main.vehicle'):</strong> <span>{{ $rezervasyon->vechile }}</span></p>
							<p class="clearfix"><strong>@lang('main.pickup-date'):</strong> <span>{{ $rezervasyon->pickupdate }}</span></p>
							<p class="clearfix"><strong>@lang('main.pickup-time'):</strong> <span>{{ $rezervasyon->pickuphour }}:{{ $rezervasyon->pickupminute }}</span></p>
							
						
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
									<p class="clearfix"><strong>@lang('main.bags'):</strong> <span>{{ $rezervasyon->bags }}</span></p>

								<!-- END .passenger-details-half -->
								</div>

								<!-- BEGIN .passenger-details-half -->
								<div class="passenger-details-half last-col">

									<p class="clearfix"><strong>@lang('main.nane'):</strong> <span>{{ $rezervasyon->name }} {{ $rezervasyon->surname }}</span></p>
									<p class="clearfix"><strong>@lang('main.email'):</strong> <span>{{ $rezervasyon->email }}</span></p>
									<p class="clearfix"><strong style="font-size: 12px">@lang('main.phone'):</strong> <span>{{ $rezervasyon->phone }}</span></p>
									
								<!-- END .passenger-details-half -->
								</div>

							<!-- END .clearfix -->
							</div>
							
						<!-- END .passenger-details-wrapper -->
						</div>
						
						<!-- BEGIN .passenger-details-wrapper -->
						<div class="passenger-details-wrapper additional-information-wrapper last-col">
						
							<p class="clearfix"><strong>@lang('main.add-inf'):</strong> <span>{{ $rezervasyon->text }} </span></p>
						
						<!-- END .passenger-details-wrapper -->
						</div>
						
					<!-- END .clearfix -->
					</div>
					
				<!-- END .full-booking-wrapper -->
				</div>
				
			<!-- END .main-content -->
			</div>
		
		<!-- END .content-wrapper-outer -->
		</div>
		
	@endsection