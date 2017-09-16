@extends('admin.layouts.master')


@section('content')
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_portafolios_add')}}">
@if($portafolio != '')
<input type="hidden" name="id" value="{{ $portafolio->id }}">
@endif
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class='col-xs-12 col-sm-12 col-md-12 agregar'>
	<div class="">
		<h2 class="titulo-seccion">PORTAFOLIO&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.portafolios')}}" class="btn btn-success regresar-lista">&nbsp;Regresar a la lista</a></h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8 agregar'>
	<div class="panel">
		<div class="panel-content">
			<h4>Estado</h4>
			<div style="padding: 0 10px 10px 10px;">
				<select class="form-control input-admin" required="true" name="estado">
					@if($portafolio != '')
						@if($portafolio->estado == 1)
						<option value="1" selected="true">Activo</option>
						<option value="0">Inactivo</option>
						@else
						<option value="1">Activo</option>
						<option value="0" selected="true">Inactivo</option>
						@endif
					@else
						
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					@endif
				</select>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Orden</h4>
			<div>
				@if($portafolio != '')
				<input type="numeric" name="orden" placeholder="Orden" class="form-control input-admin" required="true" value="{{$portafolio->orden}}">
				@else
				<input type="numeric" name="orden" placeholder="Orden" class="form-control input-admin" required="true">
				@endif
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Categoría</h4>
			<div style="padding: 0 10px 10px 10px;">
				<select class="form-control input-admin" required="true" name="categoria_id">
					@if($portafolio != '')
						@if($portafolio->categoria_id == 1)
						<option value="1" selected>Impulso</option>
						<option value="2">Activaciones</option>
						<option value="3">Eventos</option>
						@elseif($portafolio->categoria_id == 2)
						<option value="1">Impulso</option>
						<option value="2" selected>Activaciones</option>
						<option value="3">Eventos</option>
						@else
						<option value="1">Impulso</option>
						<option value="2">Activaciones</option>
						<option value="3" selected>Eventos</option>
						@endif
					@else
					<option value="1">Impulso</option>
					<option value="2">Activaciones</option>
					<option value="3">Eventos</option>
					@endif
					
				</select>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Nombre</h4>
			<div>
				@if($portafolio != '')
				<input type="text" name="nombre" placeholder="Nombre" class="form-control input-admin" required="true" value="{{$portafolio->nombre}}">
				@else
				<input type="text" name="nombre" placeholder="Nombre" class="form-control input-admin" required="true">
				@endif
			</div>
		</div>
	</div>
<!-- 	<div class="panel">
		<div class="panel-content">
			<h4>Tipo Contenido</h4>
			<div style="padding: 0 10px 10px 10px;">
				<select class="form-control input-admin" required="true" name="tipo_contenido">
					<option value="1">Imagen</option>
					<option value="2">Video</option>
				</select>
			</div>
		</div>
	</div> -->
	<div class="panel">
		<div class="panel-content">
			<h4>Código Vimeo</h4>
			@if($portafolio != '')
			<input type="text" name="contenido_modal" placeholder="Nombre" class="form-control input-admin" required="true" value="{{$portafolio->contenido_modal}}">
			@else
			<input type="text" name="contenido_modal" placeholder="Nombre" class="form-control input-admin" required="true">
			@endif
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 agregar'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN PREVIEW (405x405px)</div>
				<div class="imagen-cuerpo">
					@if($portafolio != '')
					@if($portafolio->imagen != '')
					<img src="{{asset('storage/'.$portafolio->imagen)}}" class="img-responsive" style="max-height: 200px;">
					@endif
					@endif
					<br>
					<a class="btn btn-label"><label for="imagen">Seleccionar archivo</label></a>
					<input type="file" name="imagen" id="imagen" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button type="submit">Agregar</button>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
	<h4 class="text-right">Esta acción es irreversible</h4>
	@if($portafolio != '')
	<a href="{{route('admin.seccion.portafolios.add')}}?id={{$portafolio->id}}&accion=eliminar" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					@endif
</div>
</form>
@stop