@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_contacto')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">CONTACTO</h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-6'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">TÍTULO</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea class="form-control" name="contacto_titulo">{{ $general->contacto_titulo }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">CONTENIDO</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea class="form-control" name="contacto_cuerpo">{{ $general->contacto_cuerpo }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">ICONO</div>
				<div class="imagen-cuerpo">
					@if($general->contacto_icono != '')
					<img src="{{asset('storage/'.$general->contacto_icono)}}" class="img-responsive" style="max-height: 200px;">
					@endif
					<br>
					<a class="btn-label"><label for="contacto_icono">Seleccionar archivo</label></a>
					<input type="file" name="contacto_icono" id="contacto_icono" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">FOOTER TÍTULO</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea class="form-control" name="footer_titulo">{{ $general->footer_titulo }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">FOOTER CONTENIDO</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea class="form-control" name="footer_cuerpo">{{ $general->footer_cuerpo }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN BACKGROUND (1780x1100px)</div>
				<div class="imagen-cuerpo">
					@if($general->contacto_background != '')
					<img src="{{asset('storage/'.$general->contacto_background)}}" class="img-responsive" style="max-height: 200px;">
					@endif
					<br>
					<a class="btn-label"><label for="contacto_background">Seleccionar archivo</label></a>
					<input type="file" name="contacto_background" id="contacto_background" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button type="submit">Actualizar</button>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-6'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">PREVIEW</div>
				<div class="imagen-cuerpo">
					<div class="row">
						<div class="col-md-push-1 col-md-10">
							<h4 class="text-center">Desktop y mobile</h4>
							<img src="{{asset('static-admin/img/contacto-01.png')}}" style="width: 100%;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<form>
@stop