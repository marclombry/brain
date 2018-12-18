
@if(Auth::check())
	@extends('partials.tuiles')
		@section('tuiles0')
			<h1 class="text-center">Outils</h1>
			<span class="welcomeCerebro hidden">Voici les outils que je peut mettre à votre disposition.</span>
			<div class="text-center"><q>Les outils</q></div>
		@endsection
		
		@section('tuiles1')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>Photothèque</p>
				  <i class="fa fa-picture-o fa-3x cBlack text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection
		@section('tuiles2')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>Générateur de signature</p>
				  <i class="fa fa-id-card fa-3x cBlue text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection
		@section('tuiles3')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>DEB</p>
				  <i class="fa fa-area-chart fa-3x cPink text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection

	@extends('layouts.app')
		@section('outils')
		@endsection
@endif