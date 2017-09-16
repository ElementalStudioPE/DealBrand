@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_principal')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
		<h2 class="titulo-seccion">PRINCIPAL</h2>
		<br>
	</div>
<div class='col-xs-12 col-sm-8 col-md-6'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">VIDEO BACKGROUND YOUTUBE</div>
				<div class="imagen-cuerpo">
					<h5 style="font-weight: 300;">Coloca el código único de tu video de youtube</h5>
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<input class="form-control" type="text" name="principal_video" value="{{ $general->principal_video }}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">VIDEO BACKGROUND</div>
				<div class="imagen-cuerpo">
					<h5 style="font-weight: 300;">Coloca el código único de tu video de vimeo</h5>
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<input class="form-control" type="text" name="principal_video_vimeo" value="{{ $general->principal_video_vimeo }}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN (640x1057px)</div>
				<div class="imagen-cuerpo">
					@if($general->principal_background != '')
					<img src="{{asset('storage/'.$general->principal_background)}}" class="img-responsive" style="max-height: 200px;">
					@endif
					<br>
					<a class="btn-label"><label for="principal_background">Seleccionar archivo</label></a>
					<input type="file" name="principal_background" id="principal_background" class="input-file">
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


@section('css')

@stop

@section('js')

@stop