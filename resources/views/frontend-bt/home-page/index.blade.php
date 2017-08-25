@extends('frontend-bt._layout.basic')

@section('head-title')
<title>Astidama</title>
@endsection

@section('meta')
@endsection

@section('head-style')
	<link 
		rel="stylesheet" 
		type="text/css" 
		href="{{ asset('amadeo/css-bt/home-page-index.css') }}"
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
			<div class="position left">
				@for($i=0; $i<=2; $i++)
				<div class="nav-content">
					<a href="{{ $NavTarget[$i] }}">
						{{ $navTitle[$i] }}
					</a>
				</div>
				@endfor
			</div>
			<div class="position right">
				@for($i=4; $i<=6; $i++)
				<div class="nav-content">
					<a href="{{ $NavTarget[$i] }}">
						{{ $navTitle[$i] }}
					</a>
				</div>
				@endfor
			</div>
			<div class="position center">
				<div class="nav-content title">
					<a href="{{ $NavTarget[3] }}" class="title" >
						<img src="{{ asset('amadeo/image/logo.png') }}">
					</a>
				</div>
			</div>
				
		</div>
	</div>

	<div id="banner" class="setup-wrapper">
		<div id="banner-img" class="animation-element-scroller" style="background-image: url('{{ asset('amadeo/image/home-banner.jpg') }}');">
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
		<div id="bg-img" style="background-image: url('{{ asset('amadeo/image/bg-our-dist.jpg') }}');">
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
		</div>
	</div>

	<div id="collection" class="style-two setup-wrapper">
		<div id="cover">
			<div class="content">
				<div id="collection-greating-wrapper">
					<h1 class="animation-element-scroller">our collection</h1>
					<p class="animation-element-scroller">
						In the distillation process, there are 3 parts output; the “Head”, “Heart” and “Tail”. At Astidama Distillery only the “Heart”, the part which has between 63 and 72% of alcohol – the purest and the best of all will be casked.
					</p>
				</div>
				<div id="collection-list-item-wrapper">
					@for($a=0; $a<=2; $a++)
					<div class="list-item-wrapper">
						<div class="img-display animation-element-scroller" style="background-image: url('{{ asset('amadeo/image/'.$collectionPic[$a].'.png') }}');">
							<div class="item-content">
								<h2>{{ $collectionNama[$a] }}</h2>
								<p>{{ $collectionDesc[$a] }}</p>
								<a href="">
									LEARN MORE
								</a>
								<br>
								<a href="">
									buy now
								</a>
							</div>
						</div>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>

	<div id="cocktails" class="style-three setup-wrapper animation-element-scroller">
		<hr id="line">
		<h1 id="title">cocktail creation</h1>
		<div id="cocktails-list-recipe">
			@for($i=0; $i<=3; $i++)
			<div class="list-recipe">
				<div class="img-display" style="background-image: url('{{ asset('amadeo/image/'.$cocktailsImg[$i].'.png') }}');">
				</div>
				<h2>{{ $cocktailsName[$i] }}</h2>
			</div>
			@endfor
		</div>
		<div id="see-all-btn">
			<a href="" class="my-btn">see all recipe</a>
		</div>
	</div>

	<div id="event-articel" class="setup-wrapper animation-element-scroller">
		<div id="bg">
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
		<div id="bg">
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
	</div>
@endsection

@section('footer-script')
	<script src="{{ asset('plugin/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('amadeo/js-bt/home-page-index.js') }}"></script>
@endsection
