@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_servicios')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">SERVICIOS</h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="panel">
		<div class="panel-content">
			
			<div class="imagen-box">
				<div class="imagen-titulo">PREVIEW</div>
				<div class="imagen-cuerpo">
					<br>
					<div class="row">
						<div class="col-md-9">
							<h4 class="text-center">Desktop</h4>
							<img src="{{asset('static-admin/img/servicios-01.png')}}" style="width: 100%;">
						</div>
						<div class="col-md-3">
							<h4 class="text-center">Mobile</h4>
							<img src="{{asset('static-admin/img/servicios-mobile-01.png')}}" style="width: 100%;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN BACKGROUND (1280x719px)</div>
				<div class="imagen-cuerpo">
					@if($general->servicios_background != '')
					<img src="{{asset('storage/'.$general->servicios_background)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="servicios_background">Seleccionar archivo</label></a>
					<input type="file" name="servicios_background" id="servicios_background" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 1 (248x416px)</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_1 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_1)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_1">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_1" id="servicios_imagen_1" class="input-file">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 1</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_hover_1 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_hover_1)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_hover_1">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_hover_1" id="servicios_imagen_hover_1" class="input-file">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 2</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_2 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_2)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_2">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_2" id="servicios_imagen_2" class="input-file">
						</div>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 2</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_hover_2 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_hover_2)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_hover_2">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_hover_2" id="servicios_imagen_hover_2" class="input-file">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 3</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_3 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_3)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_3">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_3" id="servicios_imagen_3" class="input-file">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 3</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_hover_3 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_hover_3)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_hover_3">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_hover_3" id="servicios_imagen_hover_3" class="input-file">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 4</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_4 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_4)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_4">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_4" id="servicios_imagen_4" class="input-file">
						</div>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 4</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_hover_4 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_hover_4)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_hover_4">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_hover_4" id="servicios_imagen_hover_4" class="input-file">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 5</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_5 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_5)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_5">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_5" id="servicios_imagen_5" class="input-file">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="imagen-box">
						<div class="imagen-titulo">IMAGEN SERVICIO 5</div>
						<div class="imagen-cuerpo">
							@if($general->servicios_imagen_hover_5 != '')
							<img src="{{asset('storage/'.$general->servicios_imagen_hover_5)}}" class="img-responsive" style="max-height: 100px;">
							@endif
							<br>
							<a class="btn-label"><label for="servicios_imagen_hover_5">Seleccionar archivo</label></a>
							<input type="file" name="servicios_imagen_hover_5" id="servicios_imagen_hover_5" class="input-file">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">SERVICIO 1 MOBILE (200x500px)</div>
				<div class="imagen-cuerpo">
					@if($general->servicios_mobile_imagen_1 != '')
					<img src="{{asset('storage/'.$general->servicios_mobile_imagen_1)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="servicios_mobile_imagen_1">Seleccionar archivo</label></a>
					<input type="file" name="servicios_mobile_imagen_1" id="servicios_mobile_imagen_1" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">SERVICIO 2 MOBILE (200x500px)</div>
				<div class="imagen-cuerpo">
					@if($general->servicios_mobile_imagen_2 != '')
					<img src="{{asset('storage/'.$general->servicios_mobile_imagen_2)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="servicios_mobile_imagen_2">Seleccionar archivo</label></a>
					<input type="file" name="servicios_mobile_imagen_2" id="servicios_mobile_imagen_2" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">SERVICIO 3 MOBILE (200x500px)</div>
				<div class="imagen-cuerpo">
					@if($general->servicios_mobile_imagen_3 != '')
					<img src="{{asset('storage/'.$general->servicios_mobile_imagen_3)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="servicios_mobile_imagen_3">Seleccionar archivo</label></a>
					<input type="file" name="servicios_mobile_imagen_3" id="servicios_mobile_imagen_3" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">SERVICIO 4 MOBILE (200x500px)</div>
				<div class="imagen-cuerpo">
					@if($general->servicios_mobile_imagen_4 != '')
					<img src="{{asset('storage/'.$general->servicios_mobile_imagen_4)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="servicios_mobile_imagen_4">Seleccionar archivo</label></a>
					<input type="file" name="servicios_mobile_imagen_4" id="servicios_mobile_imagen_4" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">SERVICIO 5 MOBILE (200x500px)</div>
				<div class="imagen-cuerpo">
					@if($general->servicios_mobile_imagen_5 != '')
					<img src="{{asset('storage/'.$general->servicios_mobile_imagen_5)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="servicios_mobile_imagen_5">Seleccionar archivo</label></a>
					<input type="file" name="servicios_mobile_imagen_5" id="servicios_mobile_imagen_5" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button type="submit">Actualizar</button>
	</div>
</div>

<form>
@stop