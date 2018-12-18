@if(Auth::check() == true)
	@extends('partials.formStats')
	@extends('layouts.app')
	@section('post')
	@if($_POST)
		@foreach($_POST as $p)
			<p>{{$p}}</p>
		@endforeach
	@endif
	@stop
	@section('topVentes')
		<h2> <i class="fa fa-thumbs-o-up fa-x5" aria-hidden="true" ></i> Top Ventes</h2>
		<span class="welcomeCerebro hidden">Voici une liste des outils</span>
		<div id="topVentes"></div>
		@if($_POST)
			@columnchart('grid', 'topVentes')
		@endif							
	@stop
	@section('flopVentes')
		<h2> <i class="fa fa-thumbs-o-down fa-x5" aria-hidden="true" ></i> Flop ventes</h2>

	@stop
	@section('referencement')
		<h2> <i class="fa fa-line-chart fa-x5" aria-hidden="true" ></i> Référencement</h2>

	@stop
	@section('reliquats')
		<h2> <i class="fa fa-pie-chart fa-x5" aria-hidden="true" ></i> Ratio reliquats</h2>

	@stop
	@section('pays')
		<h2> <i class="fa fa-bar-chart fa-x5" aria-hidden="true" ></i> Comparatif pays</h2>
		
	@stop
@endif

<?php var_dump($_POST);?>