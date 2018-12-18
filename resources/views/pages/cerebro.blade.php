
@if(Auth::check())
	@extends('layouts.app')
		@section('cerebro')
			<div class="row">
				<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="fadeBegin1">
							<h1 class="text-center">Cérébro</h1>
							<span class="welcomeCerebro hidden">Bienvenue dans cérébro, je suis le cerveau de toutes cette application, regardez les outils mis a votre disposition et faite votre choix</span>
							<div class="text-center"><q>Un outil pour les gouverner tous!</q></div>
						</div>
						<div class="fadeBegin2">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="links">
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/portefeuille') }}"><p>Portefeuille</p>
									   		  <i class="fa fa-briefcase fa-3x cBrown text-right" aria-hidden="true"></i>
									   		</a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/clientele') }}"><p>Clientèle</p>
									           <i class="fa fa-users fa-3x cBlue text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/commerciaux') }}"><p>Commerciaux</p>
									        	<i class="fa fa-car fa-3x cOrange text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/stock') }}"><p>Stock</p>
									        	<i class="fa fa-cubes fa-3x cBlack text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/articles') }}"><p>Articles</p>
									        	<i class="fa fa-cube fa-3x cGreen text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/achats') }}"><p>Achats</p>
									        	<i class="fa fa-eur fa-3x cYellow text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/ca') }}"><p>CA</p>
									          <i class="fa fa-university fa-3x cPink text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/promos') }}"><p>Promos</p>
									        	<i class="fa fa-gift fa-3x cPurple text-right" aria-hidden="true"></i>
									        </a>
									    </div>
									    <div class="col-md-2 blockGestionH grey a">
									        <a class="clickableZone" href="{{ url('/reliquats') }}"><p>Reliquats</p>
									        	<i class="fa fa-window-close fa-3x cRed text-right" aria-hidden="true"></i>
									        </a>
									    </div>
								    </div>
								</div>
					        </div>
				    </div>
					</div>
				<div class="col-md-2"></div>
			</div>
		@endsection
@endif
