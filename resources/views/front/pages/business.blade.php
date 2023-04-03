@extends('front.main')
	@section('content')

		<div id="page-header">
			<h1>@lang('main.business')</h1>
			<div class="title-block3"></div>
			<p><a href="#">Home</a><i class="fa fa-angle-right"></i>@lang('main.business')</p>
		</div>
		
		<!-- BEGIN .content-wrapper-outer -->
		<div class="content-wrapper-outer clearfix">
			
			<!-- BEGIN .main-content -->
			<div class="main-content main-content-full">
				
				<!-- BEGIN .clearfix -->
				<div class="clearfix">
					
					<!-- BEGIN .qns-one-half -->
					<div class="qns-one-half">
						
						<h4>@lang('main.business')</h4>
						<div class="title-block7"></div>
					
						<p>@lang('main.business-desc')</p>

						<p>@lang('main.business-desc-f')</p>
						
					<!-- END .qns-one-half -->
					</div>
					
					<!-- BEGIN .qns-one-half -->
					<div class="qns-one-half qns-last">
						
						<!-- BEGIN .photo-gallery-wrapper -->
						<div class="photo-gallery-wrapper photo-gallery-2-col clearfix">
							
							<div class="photo-gallery-item"><a href="{{ url('front/images/image32.jpg') }}" data-gal="prettyPhoto"><img src="{{ url('front/images/image32.jpg') }}" alt="" /></a></div>
							<div class="photo-gallery-item"><a href="{{ url('front/images/image33.jpg') }}" data-gal="prettyPhoto"><img src="{{ url('front/images/image33.jpg') }}" alt="" /></a></div>
							<div class="photo-gallery-item"><a href="{{ url('front/images/image34.jpg') }}" data-gal="prettyPhoto"><img src="{{ url('front/images/image34.jpg') }}" alt="" /></a></div>
							<div class="photo-gallery-item"><a href="{{ url('front/images/image35.jpg') }}" data-gal="prettyPhoto"><img src="{{ url('front/images/image35.jpg') }}" alt="" /></a></div>

						<!-- END .photo-gallery-wrapper -->
						</div>
					
					<!-- END .qns-one-half -->
					</div>
				
				<!-- END .clearfix -->
				</div>
				
			
				<!-- BEGIN .clearfix -->
		
				<hr class="space3" />
				
			<!-- END .main-content -->
			</div>
		
		<!-- END .content-wrapper-outer -->
		</div>
	<script type="text/javascript" src="{{ url('front/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('front/js/jquery.prettyPhoto.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ url('front/css/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('front/css/prettyPhoto.css') }}">
	@endsection