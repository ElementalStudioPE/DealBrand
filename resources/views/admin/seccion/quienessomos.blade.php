@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_quienessomos')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">QUIÉNES SOMOS</h2>
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
						<textarea class="form-control" name="nosotros_titulo">{{ $general->nosotros_titulo }}</textarea>
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
						<textarea class="form-control" name="nosotros_cuerpo">{{ $general->nosotros_cuerpo }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">CÓDIGO VIMEO</div>
				<div class="imagen-cuerpo">
					<div class="" style="padding-right: 10px;padding-bottom: 10px;">
						<input type="text" name="nosotros_modal" placeholder="Código Vimeo" class="form-control input-admin" required="true" value="{{ $general->nosotros_modal }}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN BACKGROUND (1280x719px)</div>
				<div class="imagen-cuerpo">
					@if($general->nosotros_imagen != '')
					<img src="{{asset('storage/'.$general->nosotros_imagen)}}" class="img-responsive" style="max-height: 200px;">
					@endif
					<br>
					<a class="btn-label"><label for="nosotros_imagen">Seleccionar archivo</label></a>
					<input type="file" name="nosotros_imagen" id="nosotros_imagen" class="input-file">
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
							<img src="{{asset('static-admin/img/quienes-somos-01.png')}}" style="width: 100%;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<form>
@stop


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/summernote/summernote.css')}}">
<style type="text/css">
	#summernote{
		min-height: 200px;
	}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{asset('static-admin/assets/summernote/summernote.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#summernote').summernote({
		  height: 400,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: false                  // set focus to editable area after initializing summernote
		});
		$('#summernote-2').summernote({
		  height: 400,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: false                  // set focus to editable area after initializing summernote
		});
	})
</script>
@stop