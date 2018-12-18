@if(Auth::check())
<div class="container-fluid">
	<div class ="row">
		<div class='col-md-12'>
			<form method="post" action="">
				{{ csrf_field()}}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class ="col-md-offset-1  col-xs-12 col-md-4 ">
					<div class="form-group">
						<label for="pays">Pays <i class="fa fa-flag-o fa-x5" aria-hidden="true" ></i></label>

						<select id="pays" class="form-control" name="pays">
							<option value='fr'>Fr</option>
							<option value='es'>Es</option>
							<option value='be'>Be</option>

						</select>
					</div>
					<div class="form-group">
						<label for="fammile">Famile <i class="fa fa-object-ungroup fa-x5" aria-hidden="true" ></i></label>

						<select id="famille" class="form-control" name="famille">
							<option value='colorFinition'>color finition</option>
							<option value='origineMetal'>origine metal</option>
							<option value='betonMineral'>beton mineral</option>
						</select>
					</div>
					<div class="form-group">
						
						<label for="reference">Référence <i class="fa fa-barcode fa-x5" aria-hidden="true" ></i></label>
						<input type="text" class="form-control" name="reference">
					</div>
				</div>
				<div class ="col-xs-12 col-md-4">
					
					<div class="form-group">
						<label for="dates">Date debut</label>
						<span><i class="fa fa-calendar fa-x5" aria-hidden="true" ></i></span>
						<input id="dateBegin" type="text" class="form-control datepicker" name="dateBegin">
						<input id="" type="hidden" class="form-control" name="datesHidden" value="">
					</div>
					<div class="form-group">
						<label for="dates">Date de fin</label>
						<span><i class="fa fa-calendar fa-x5" aria-hidden="true" ></i></span>
						<input id="dateEnd" type="text" class="form-control datepicker" name="dateEnd">
						<input id="" type="hidden" class="form-control" name="datesHidden2" value="">
					</div>
				</div>
				<div class ="col-xs-12 col-md-2 text-right">
					<button class="btn btn-primary">Valider</button>
				</div>
					<div class ="col-md-offset-1"></div>
			<form>
		</div>
	</div>
</div>
<div class="">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 ">
			@yield('post')
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12 panel panel-default">
		@yield('topVentes')
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 panel panel-default">
		@yield('flopVentes')
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 panel panel-default">
		@yield('referencement')
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 panel panel-default">
		@yield('reliquats')
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 panel panel-default">
		@yield('pays')
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 panel panel-default">
		@yield('existepas')
		</div>
	</div>
</div>
@endif