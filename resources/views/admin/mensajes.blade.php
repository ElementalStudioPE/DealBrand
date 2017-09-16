@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Mensajes</h2>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
				<thead>
					<tr role="row">
						<th style="width: 92px;">Nombre</th>
						<th style="width: 61px;">Empresa</th>
						<th style="width: 575px;">Teléfono</th>
						<th style="width: 92px;">Correo</th>
						<th style="width: 69px;">Mensaje</th>
					</tr>
				</thead>
				<tbody>
					@foreach( App\Contacto::orderBy('created_at','desc')->get() as $contacto )
					<tr role="row">
						<td>
							<div class="readmore" style="max-height: none;">{{$contacto->nombre}}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{$contacto->empresa}}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{$contacto->telefono}}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{$contacto->correo}}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{$contacto->mensaje}}</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
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
			height: 450,
			minHeight: null,
			maxHeight: null,
			focus: false 
		});
		$('.regresar-agregar').click(function(){
			$('.lista').hide();
			$('.agregar').show();
		});
		$('.regresar-lista').click(function(){
			$('.lista').show();
			$('.agregar').hide();
		});
	});
</script>
@stop