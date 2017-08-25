<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	function indexBlackTheme(){
		$navTitle = [
			'our distillery',
			'collection',
			'cocktails',
			'',
			'events & articles',
			'where to find',
			'contact us'
		];
		$NavTarget = [
			'#our-distillery',
			'#collection',
			'#cocktails',
			'#banner',
			'#event-articel',
			'#footer',
			'#footer'
		];
		$collectionNama = [
			'Drum Green Label',
			'Drum Label',
			'Iceland Vodka'
		];
		$collectionPic = [
			'prod-drum-whisky',
			'prod-drum',
			'prod-iceland'
		];
		$collectionDesc = [
			"Our Premium Whisky product was produced based on international quality standard and its proven by achieving SIP Award Gold Medal Drum Green Label was made from the best barley grains that we direct imported from the land of England.",
			"Drum Whisky is the purest whisky which made from the distillation of malt fermentation, hops, rice and caramel. Ageing Process using the best quality oak chip and without adding any flavor essence and food coloring made high quality whisky compared with products in the market",
			"Made From the best Quality of grains which growth in Bali - Indonesia. Water as a main ingredients was taken from pure springs in Bali and Filtrated with charcoal filtration to guarantee the purity of Iceland."
		];
		$cocktailsName = [
			'screwdriver',
			'sex on the beach',
			'long island',
			'bloody mary'
		];
		$cocktailsImg = [
			'cocktails-screwdriver',
			'cocktails-sex-on-the-beach',
			'cocktails-long-island',
			'cocktails-bloody-mary'
		];
		return view('frontend-bt.home-page.index', compact(
			'navTitle',
			'NavTarget',
			'collectionNama',
			'collectionPic',
			'collectionDesc',
			'cocktailsName',
			'cocktailsImg'
		));
	}
	function indexWhiteTheme(){
		$navTitle = [
			'our distillery',
			'collection',
			'cocktails',
			'',
			'events & articles',
			'where to find',
			'contact us'
		];
		$NavTarget = [
			'#our-distillery',
			'#collection',
			'#cocktails',
			'#banner',
			'#event-articel',
			'#footer',
			'#footer'
		];
		$collectionNama = [
			'Iceland Vodka',
			'Drum Green Label',
			'Drum Label'
		];
		$collectionPic = [
			'prod-wt-iceland',
			'prod-wt-drum-whisky',
			'prod-wt-drum'
		];
		$collectionDesc = [
			"Made From the best Quality of grains which growth in Bali - Indonesia. Water as a main ingredients was taken from pure springs in Bali and Filtrated with charcoal filtration to guarantee the purity of Iceland.",
			"Our Premium Whisky product was produced based on international quality standard and its proven by achieving SIP Award Gold Medal Drum Green Label was made from the best barley grains that we direct imported from the land of England.",
			"Drum Whisky is the purest whisky which made from the distillation of malt fermentation, hops, rice and caramel. Ageing Process using the best quality oak chip and without adding any flavor essence and food coloring made high quality whisky compared with products in the market"
		];
		$cocktailsName = [
			'screwdriver',
			'sex on the beach',
			'long island',
			'bloody mary'
		];
		$cocktailsImg = [
			'cocktails-screwdriver',
			'cocktails-sex-on-the-beach',
			'cocktails-long-island',
			'cocktails-bloody-mary'
		];
		return view('frontend-wt.home-page.index', compact(
			'navTitle',
			'NavTarget',
			'collectionNama',
			'collectionPic',
			'collectionDesc',
			'cocktailsName',
			'cocktailsImg'
		));
	}
}
