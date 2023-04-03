@extends('front.main')

	@section('content')

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyDY01ZRz3y488SxukwTEpNhpJ7pyGRXvgM"></script>



		<div id="page-header">

			<h1>@lang('main.contact-us')</h1>

			<div class="title-block3"></div>

			<p><a href="#">Home</a><i class="fa fa-angle-right"></i>@lang('main.contact-us')</p>

		</div>

		

		<!-- BEGIN .content-wrapper-outer -->

		<div class="content-wrapper-outer clearfix">

			

			<!-- BEGIN .main-content -->

			<div class="main-content main-content-full">

				

				<!-- BEGIN .clearfix -->

				<div class="clearfix">

					

					<!-- BEGIN .qns-one-half -->

					<div class="qns-one-half">

						

						<h4>@lang('main.get-in-touch')</h4>

						<div class="title-block7"></div>

							@if(Session::has('success'))

							<div class="alert alert-success">

							  {{ session()->get('message') }}

							</div>

						@endif

						

						

						<!-- BEGIN .contact-form-1 -->

						<form action="{{ route('contact-send') }}" class="contact-form-1" method="post">

							{{ csrf_field()}}

							<label>Name <span>*</span></label>

							<input type="text" name="name" name="accommodation-keywords" value=""  required="" />

    <div style="display:none">
  <label for="birthday">Birthday</label>
  <input type="text" name="birthday" id="birthday" value="" />
</div>

							<label>Email <span>*</span></label>

							<input type="text" name="email" name="accommodation-keywords" value=""  required="" />



							<label>@lang('main.subject')</label>

							<input type="text" name="subject" name="accommodation-keywords" value="" />



							<label>Message <span>*</span></label>

							<textarea cols="10" name="text" rows="9" required=""></textarea>	



							<button type="submit">

				 				@lang('main.send') <i class="fa fa-envelope"></i>

							</button>



						<!-- END .contact-form-1 -->

						</form>

						

					<!-- END .qns-one-half -->

					</div>

					

					<!-- BEGIN .qns-one-half -->

					<div class="qns-one-half qns-last">

						

						<h4>@lang('main.contact-details')</h4>

						<div class="title-block7"></div>

							

						<ul class="contact-details-list">

							<li class="cdw-address clearfix">Siebenhirtenst. 13/Obj. 213, 1230 Wien / Österreich</li>

							<li class="cdw-phone clearfix">+ 43 (0) 1 532 11 11</li>

							<li class="cdw-email clearfix">bestellung@opencab.at</li>

						</ul>

						

						<h4>Social Media</h4>

						<div class="title-block7"></div>

						

						<ul class="social-links clearfix">

							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>

							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>

							<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>

							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>

							<li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>

						</ul>

						

						<hr class="space5" />

						

						<!-- BEGIN #google-map -->

						<div id="google-map" style="height: 370px;margin: 0 0 70px 0;"></div>



						<script type="text/javascript">



							function initialize() {



								// Set Location

								var myLatlng = new google.maps.LatLng(48.198889,16.338991);



								// Set Style

								var styles = [

								    {

								      stylers: [

								        { hue: "#e8848e" },

								        { saturation: -50 }

								      ]

								    },{

								      featureType: "road",

								      elementType: "geometry",

								      stylers: [

								        { lightness: 100 },

								        { visibility: "simplified" }

								      ]

								    },{

								      featureType: "road",

								      elementType: "labels",

								      stylers: [

								        { visibility: "off" }

								      ]

								    }

								  ];



								// Set Map Options

								var mapOptions = {

									mapTypeControlOptions: {

										mapTypeIds: ['Styled']

									},

									center: myLatlng,

									zoom: 14,

									mapTypeId: 'Styled',

									scrollwheel: false,

									scaleControl: false,

									disableDefaultUI: false

								};



								// Build Map

								var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

								var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });

								map.mapTypes.set('Styled', styledMapType);



								// Set Map Marker

								var contentString = 'Opencab OG';

								var infowindow = new google.maps.InfoWindow({

									content: contentString

								});

								var marker = new google.maps.Marker({

									position: myLatlng,

									map: map,

									title: 'Map Marker 1',

									icon: {

									        path: fontawesome.markers.MAP_MARKER,

									        scale: 0.8,

									        strokeWeight: 0,

									        strokeColor: 'black',

									        strokeOpacity: 1,

									        fillColor: '#cc4452',

									        fillOpacity: 1,

									    },

								});



								// Display Map Marker

								google.maps.event.addListener(marker, 'click', function() {

									infowindow.open(map,marker);

								});



							}



							// Display Map

							google.maps.event.addDomListener(window, 'load', initialize);



						</script>

						

					<!-- END .qns-one-half -->

					</div>

				

				<!-- END .clearfix -->

				</div>

				

			<!-- END .main-content -->

			</div>

		

		<!-- END .content-wrapper-outer -->

		</div>

	@endsection