@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_dashboard')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
		<h2 class="titulo-seccion">DASHBOARD</h2>
		<br>
	</div>
<div class='col-xs-12 col-sm-8 col-md-6'>

	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">Metatags (Imagen Inicio): 1200x630px</div>
				<div class="imagen-cuerpo">
					@if($general->inicio_head_image != '')
					<img src="{{asset('storage/'.$general->inicio_head_image)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="inicio_head_image">Seleccionar archivo</label></a>
					<input type="file" name="inicio_head_image" id="inicio_head_image" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">Metatags (Título Inicio):</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<input type="text" name="inicio_head_title" placeholder="Title - title metatags" class="form-control input-admin" required="true" value="{{ $general->inicio_head_title }}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">Metatags (Descripción Inicio):</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea name="inicio_head_description" class="form-control" style="min-height: 200px;" placeholder="Description - description metatags">{{$general->inicio_head_description}}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">Metatags (Imagen Clientes): 1200x630px</div>
				<div class="imagen-cuerpo">
					@if($general->cliente_head_image != '')
					<img src="{{asset('storage/'.$general->cliente_head_image)}}" class="img-responsive" style="max-height: 100px;">
					@endif
					<br>
					<a class="btn-label"><label for="cliente_head_image">Seleccionar archivo</label></a>
					<input type="file" name="cliente_head_image" id="cliente_head_image" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">Metatags (Título Clientes):</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<input type="text" name="cliente_head_title" placeholder="Title - title metatags" class="form-control input-admin" required="true" value="{{ $general->cliente_head_title }}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">Metatags (Descripción Clientes):</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea name="cliente_head_description" class="form-control" style="min-height: 200px;" placeholder="Description - description metatags">{{$general->cliente_head_description}}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">CÓDIGO ANALYTICS</div>
				<div class="imagen-cuerpo">
					<h5 style="font-weight: 300;">Coloca Google Analytics de tu web</h5>
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<textarea name="codigo_analytics" class="form-control" style="min-height: 200px;">{{$general->codigo_analytics}}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Facebook Link</h4>
			<div>
				<input type="text" name="facebook_link" placeholder="Facebook Link" class="form-control input-admin" required="true" value="{{$general->facebook_link}}">
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Vimeo Link</h4>
			<div>
				<input type="text" name="vimeo_link" placeholder="Vimeo Link" class="form-control input-admin" required="true" value="{{$general->vimeo_link}}">
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