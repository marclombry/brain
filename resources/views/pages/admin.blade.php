
@if(Auth::check() and Auth::user()->admin ==2)

		@extends('partials.tuiles')
		@section('tuiles0')
			<h1 class="text-center">Admin</h1>
			<span class="welcomeCerebro hidden">Bonjour Seigneur {{Auth::user()->name}}, que puis-je pour vous Aujourd'hui ?</span>
			<div class="text-center welcomeCerebr"><q>Tel dieu, je peut créer mais aussi vous détruire !</q></div>
		@endsection
		
		@section('tuiles1')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>Commandes</p>
				  <i class="fa fa-truck fa-3x cBrown text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection
		@section('tuiles2')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>Livrabilité</p>
				  <i class="fa fa-calendar fa-3x cRed text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection
		@section('tuiles3')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>Fin de préparation</p>
				  <i class="fa fa-snowflake-o fa-3x cBlue text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection
		@section('tuiles4')
			 <div class="col-md-2 blockGestionH grey a">
				<a class="clickableZone" href=""><p>Autres</p>
				  <i class="fa fa-cogs fa-3x cBlack text-right" aria-hidden="true"></i>			   
				</a>
			</div>
		@endsection

	@extends('layouts.app')
		@if(Auth::user()->admin ==2)
			@section('admin')

			@endsection
		@endif
@endif