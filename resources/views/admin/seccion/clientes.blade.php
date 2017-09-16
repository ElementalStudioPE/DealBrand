@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_clientes')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
								<img src="{{asset('static-admin/img/clientes-01.png')}}" style="width: 100%;">
							</div>
							<div class="col-md-3">
								<h4 class="text-center">Mobile</h4>
								<img src="{{asset('static-admin/img/clientes-mobile-01.png')}}" style="width: 100%;">
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
				<br>
				<div class="row">
					<div class="col-md-6">
						<div class="imagen-box">
							<div class="imagen-titulo">IMAGEN CLIENTES (658x227px)</div>
							<div class="imagen-cuerpo">
								@if($general->clientes_imagen != '')
								<img src="{{asset('storage/'.$general->clientes_imagen)}}" class="img-responsive" style="max-height: 100px;">
								@endif
								<br>
								<a class="btn-label"><label for="clientes_imagen">Seleccionar archivo</label></a>
								<input type="file" name="clientes_imagen" id="clientes_imagen" class="input-file">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="imagen-box">
							<div class="imagen-titulo">IMAGEN CLIENTES MOBILE (551x372px)</div>
							<div class="imagen-cuerpo">
								@if($general->clientes_imagen_mobile != '')
								<img src="{{asset('storage/'.$general->clientes_imagen_mobile)}}" class="img-responsive" style="max-height: 100px;">
								@endif
								<br>
								<a class="btn-label"><label for="clientes_imagen_mobile">Seleccionar archivo</label></a>
								<input type="file" name="clientes_imagen_mobile" id="clientes_imagen_mobile" class="input-file">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="box-accion">
			<button type="submit">Actualizar</button>
		</div>
	</div>
	<form>

		<!-- <div class="col-md-12">
			<div class="col-md-12"><br><br><br><br><br><br>
				<h2 class="text-center" style="color: #000 !important;font-weight: bold;">LOGOS CAROUSEL</h2><br>
			</div>
			@for( $k = 0; $k < 18 ; $k++ )
			<div class="col-md-2" style="position: relative;">
				<img src="http://www.solarpowereurope.org/fileadmin/user_upload/images/Logos/logo_grayscale_version.png" style="width: 100%;margin-bottom: 10px;">
				<div class="row">
					<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{-- action('Admin\SeccionController@post_clientes_carousel') --}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="accion" value="editar">
						<input type="hidden" name="id" value="1">
						<div class="col-xs-5" style="margin-bottom: 0 !important;">
							<input type="number" name="orden" value="{{ $k }}" class="form-control" style="width: 100% !important;margin-top: 5px !important;">
						</div>
						<div class="col-xs-7" style="margin-bottom: 0 !important;">
							<button class="btn btn-success" style="width: 100% !important;">Actualizar</button>
						</div>
					</form>

				</div>
				<div class="row" style="position: absolute;right: 30px;top: -25px;">
					<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{-- action('Admin\SeccionController@post_clientes_carousel') --}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="accion" value="eliminar">
						<input type="hidden" name="id" value="1">
						<div class="col-xs-12" style="margin-bottom: 0 !important;">
							<button class="btn btn-danger" style="position: absolute;width: 30px !important;height: 31px !important;right: 0;top: 0;padding: 5px 18px 17px 10px !important;">X</button>
						</div>
					</form>
				</div>
				<div class="row"><br><br></div>
			</div>
			@endfor
		</div>
		<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{-- action('Admin\SeccionController@post_clientes_carousel') --}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="col-xs-12 col-sm-12 col-md-12"><br><br><br></div>
			<div class='col-xs-12 col-sm-12 col-md-12'>
				<div class="panel">
					<div class="panel-content">
						<br>
						<div class="row">
							<div class="col-md-6 col-md-push-3">
								<div class="imagen-box">
									<div class="imagen-titulo">IMAGEN CLIENTES (658x227px)</div>
									<div class="imagen-cuerpo">
										<br>
										<a class="btn-label"><label for="clientes_imagen">Seleccionar archivo</label></a>
										<input type="file" name="clientes_imagen" id="clientes_imagen" class="input-file">
									</div>
								</div>
								<div class="box-accion">
									<button type="submit" style="background-color: #e4e4e4;border-color: #e4e4e4;">Actualizar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form> -->
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
						$('#clientes_cuerpo').summernote({
							height: 500,
							minHeight: null,
							maxHeight: null,
							focus: false 
						});
					})
				</script>
				@stop