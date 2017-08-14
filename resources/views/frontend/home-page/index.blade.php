@extends('frontend._layout.basic')

@section('head-title')
<title>Astidama</title>
@endsection

@section('meta')
@endsection

@section('head-style')
	<link 
		rel="stylesheet" 
		type="text/css" 
		href="{{ asset('amadeo/css/home-page-index.css') }}"
	>
	<link 
		rel="stylesheet" 
		type="text/css" 
		href="{{ asset('plugin/owl-carousel/owl.theme.css') }}"
	>
	<link 
		rel="stylesheet" 
		type="text/css" 
		href="{{ asset('plugin/owl-carousel/owl.carousel.css') }}"
	>
@endsection

@section('body-content')
	<div id="navigasi">
		<div id="nav-wrapper">
			@php
				$arrName = [
					'our distillery',
					'collection',
					'cocktails',
					'',
					'events & articles',
					'where to find',
					'contact us'
				];
				$arrUrl = [
					'#our-distillery',
					'#collection',
					'#cocktails',
					'#banner',
					'#event-articel',
					'#footer',
					'#footer'
				];
			@endphp
			@for($i=0; $i<=6; $i++)
			<div class="nav-content">
				<a href="{{ $arrUrl[$i] }}" class="{{ $i == 3 ? 'title' : '' }}" >
				@if($i != 3)
					{{ $arrName[$i] }}
				@elseif($i == 3)
					<img src="{{ asset('amadeo/image/logo.png') }}">
				@endif
				</a>
				
			</div>
			@endfor
		</div>
	</div>

	<div id="banner" class="setup-wrapper">
		<div id="banner-img" style="background-image: url('{{ asset('amadeo/image/home-banner.jpg') }}');">
			<div id="banner-bottom-wrapper">
				<div id="banner-bottom-content">
					<div id="border" class="animation-element-scroller">
						<h1 id="title">
							astidama distillery
						</h1>
						<div id="sub-title-wrapper">
							<h4 id="sub-title">
								balinese premium whisky
							</h4>
						</div>
					</div>
					<a href="#our-distillery">
						<img class="chevron animation-element-scroller" src="{{ asset('amadeo/image/chevron-down.png') }}">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="our-distillery" class="style-one setup-wrapper">
		<div id="bg-img" style="background-image: url('{{ asset('amadeo/image/style-one-bg.jpg') }}');">
			<div class="content">
				<div id="midle">
					<div id="centered" class="animation-element-scroller">
						<h3>
							the first and only distillery in indonesia
						</h3>
						<p>
							Astidama Distillery, the first and only one distillery in Indonesia, is located in Tabanan area which is beautiful and fertile in Bali, Island of Gods. The exotism dan harmonism of Bali become a blending spirit in Astidama Distillery.
						</p>
						<a href="" class="my-btn">learn more</a>
					</div>
				</div>
			</div>
			<div class="content">
				<img id="img-display" class="animation-element-scroller" src="{{ asset('amadeo/image/prod-drum-whisky.png') }}">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div id="collection" class="style-two setup-wrapper">
		<div class="wrapper-display">
			@php
				$arrNama = [
					'Iceland Vodka',
					'Drum Green Label',
					'Drum Label'
				];
				$arrPic = [
					'prod-iceland',
					'prod-drum-whisky',
					'prod-drum'
				];
				$arrBg = [
					'bg-proud-iceland',
					'home-banner',
					'style-one-bg'
				];
			@endphp
			@for($i=0; $i<=2; $i++)
			<div id="{{ $arrPic[$i] }}" class="collection bg-img {{ $i == 0 ? 'active' : '' }}" style="background-image: url('{{ asset('amadeo/image/'.$arrBg[$i].'.jpg') }}');">
				<div class="content text-center">
					<img 
						class="img-display animation-element-scroller" 
						src="{{ asset('amadeo/image/'.$arrPic[$i].'.png') }}"
					>
				</div>
				<div class="content">
					<div class="content-decrip">
						<h1 class="title animation-element-scroller">our collection</h1>
						<div class="description animation-element-scroller">
							<h2 class="name">{{ $arrNama[$i] }}</h2>
							<p>
								Made From the best Quality of grains which growth in Bali - Indonesia. Water as a main ingredients was taken from pure springs in Bali and Filtrated with charcoal filtration to guarantee the purity of Iceland.
							</p>
						</div>
						<a href="" class="animation-element-scroller">
							LEARN MORE
						</a>
						<br>
						<a href="" class="animation-element-scroller">
							buy now
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			@endfor
		</div>
		<div class="wrapper-display">
			@for($i=0; $i<=2; $i++)
			<div class="collection list-display {{ $i == 0 ? 'active' : '' }}" data-target="{{ $arrPic[$i] }}">
				<div class="midle text-center">
					<img class="img-display animation-element-scroller" src="{{ asset('amadeo/image/'.$arrPic[$i].'.png') }}">
				</div>
				<div class="midle">
					<label class="animation-element-scroller">{{ $arrNama[$i] }}</label>
				</div>
			</div>
			@endfor
		</div>
	</div>

	<div id="cocktails" class="style-three setup-wrapper">
		@php
			$arrName = [
				'screwdriver',
				'sex on the beach',
				'cocktail creation',
				'long island'
			];
		@endphp
		@for($i=0; $i<=3; $i++)
		<div class="cocktails list-recipe {{ $i == 0 ? 'active' : '' }}">
			<h1 class="title animation-element-scroller">{{ $arrName[$i] }}</h1>
			<p class="animation-element-scroller">
				<a href="">see all recipe</a>
			</p>
			<div class="bottom">
				<img class="img-display animation-element-scroller" src="{{ asset('amadeo/image/rec-'.$i.'.png') }}">
			</div>
			<div class="gradient animation-element-scroller"></div>
		</div>
		@endfor
	</div>

	<div id="event-articel" class="setup-wrapper">
		<div id="bg-img" style="background-image: url('{{ asset('amadeo/image/bg-event-articel.png') }}');">
			<h1 id="title" class="animation-element-scroller">events & article</h1>

			<div id="owl-news-articel" class="animation-element-scroller">
				@for($i=0; $i<=6; $i++)
				<div class="item">
					<div class="bg-img" style="background-image: url('{{ asset('amadeo/image/ena'.$i.'.jpg') }}');">
						<div class="wrapper-screen"></div>
						<div class="wrapper-title">
							<p>22 July 2017</p>
							<h4>lorem ipsum dolor sit amet</h4>
						</div>
					</div>
				</div>
				@endfor
			</div>
			<p id="all-news-articel">
				<a href="" class="my-btn">all news & articles</a>
			</p>
		</div>
	</div>

	<div id="footer" class="setup-wrapper">
		<div id="box">
			<div class="wrapper-content for-pt">
				<h3 id="title">
					<a href="">astidama distillery</a>
				</h3>
				<p>
					PT Astidama Adhimukti
					Jl. Raya Penyalin no. 9
					Desa Samsam, Kerambitan
					Tabanan - BALI
				</p>
			</div>
			<div class="wrapper-content for-list">
				<h4 id="title">
					Navigation
				</h4>
				@php
					$arrName = [
						'Home',
						'Our Distillery',
						'Collection',
						'Cocktails',
						'News & Articles',
						'Where to Find',
						'Contact Us'
					]
				@endphp
				@for($i=0; $i<=6; $i++)
				<p>
					<a href="">
						{{ $arrName[$i] }}
					</a>
				</p>
				@endfor
			</div>
			<div class="wrapper-content for-list">
				<h4 id="title">
					products 
				</h4>
				@php
					$arrName = [
						'Drum Green Label',
						'Drum',
						'Iceland'
					]
				@endphp
				@for($i=0; $i<=2; $i++)
				<p>
					<a href="">
						{{ $arrName[$i] }}
					</a>
				</p>
				@endfor
			</div>
			<div class="wrapper-content for-form">
				<h4 id="title">
					quick inquiry
				</h4>
				<input class="form-control" type="text" placeholder="Full Name*">
				<input class="form-control" type="text" placeholder="Email Address*">
				<input class="form-control" type="text" placeholder="Subjet">
				<textarea class="form-control" rows="6" placeholder="Type your message here"></textarea>
				<button>Submit</button>
			</div>
			<div class="clearfix"></div>
			
			<p class="copyright">
				© 2017 Astidama Distillery
			</p>
			<p class="copyright">
				Web development by <a href="http://amadeo.id/"><img src="{{ asset('amadeo/image/logo-white-amadeo.png') }}" height="25px"></a>
			</p>
		</div>
	</div>
@endsection

@section('footer-script')
	<script src="{{ asset('plugin/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('amadeo/js/home-page-index.js') }}"></script>
@endsection
