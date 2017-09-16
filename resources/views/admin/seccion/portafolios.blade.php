@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">PORTAFOLIO&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.portafolios.add')}}" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
		<br>
	</div>
</div>

<?php $categoriaId = 1; ?>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-header">
			<h5 style="color: #000;text-shadow: none;font-size: 25px;padding: 5px 10px 5px 20px;">Impulso</h5>
		</div>
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
				<thead>
					<tr role="row">
						<th style="width: 92px;">Estado</th>
						<th style="width: 92px;">Categoría</th>
						<th style="width: 60px;">Orden</th>
						<th style="width: 61px;">Nombre</th>
						<th style="width: 575px;">Imagen</th>
						<th style="width: 575px;">Código</th>
						<th style="width: 69px;">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach( App\Portafolio::where('categoria_id',$categoriaId)->orderBy('orden','asc')->get() as $portafolio )
					<tr role="row">
						<td>
							<div class="readmore" style="max-height: none;">
								@if( $portafolio->estado == 1 )
								<span>Activo</span>
								@else
								<span style="color: red;">No activo</span>
								@endif
							</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">
								@if( $portafolio->categoria_id == 1 )
								Impulso
								@elseif( $portafolio->categoria_id == 2 )
								Activaciones
								@else
								Eventos
								@endif
							</div>
						</td>
						<td>
							<div class="readmore">{{ $portafolio->orden }}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{!! $portafolio->nombre !!}</div>
						</td>
						<td>
							@if($portafolio->imagen != '')
							<img src="{{asset('storage/'.$portafolio->imagen)}}" class="img-responsive" style="width:100px">
							@endif
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{ $portafolio->contenido_modal }}</div>
						</td>
						<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">

							<a href="{{route('admin.seccion.portafolios.add')}}?id={{$portafolio->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
								<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php $categoriaId = 2; ?>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-header">
			<h5 style="color: #000;text-shadow: none;font-size: 25px;padding: 5px 10px 5px 20px;">Activaciones</h5>
		</div>
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
				<thead>
					<tr role="row">
						<th style="width: 92px;">Estado</th>
						<th style="width: 92px;">Categoría</th>
						<th style="width: 60px;">Orden</th>
						<th style="width: 61px;">Nombre</th>
						<th style="width: 575px;">Imagen</th>
						<th style="width: 575px;">Código</th>
						<th style="width: 69px;">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach( App\Portafolio::where('categoria_id',$categoriaId)->orderBy('orden','asc')->get() as $portafolio )
					<tr role="row">
						<td>
							<div class="readmore" style="max-height: none;">
								@if( $portafolio->estado == 1 )
								<span>Activo</span>
								@else
								<span style="color: red;">No activo</span>
								@endif
							</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">
								@if( $portafolio->categoria_id == 1 )
								Impulso
								@elseif( $portafolio->categoria_id == 2 )
								Activaciones
								@else
								Eventos
								@endif
							</div>
						</td>
						<td>
							<div class="readmore">{{ $portafolio->orden }}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{!! $portafolio->nombre !!}</div>
						</td>
						<td>
							@if($portafolio->imagen != '')
							<img src="{{asset('storage/'.$portafolio->imagen)}}" class="img-responsive" style="width:100px">
							@endif
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{ $portafolio->contenido_modal }}</div>
						</td>
						<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
							
							<a href="{{route('admin.seccion.portafolios.add')}}?id={{$portafolio->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
								<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $categoriaId = 3; ?>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-header">
			<h5 style="color: #000;text-shadow: none;font-size: 25px;padding: 5px 10px 5px 20px;">Eventos</h5>
		</div>
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
				<thead>
					<tr role="row">
						<th style="width: 92px;">Estado</th>
						<th style="width: 92px;">Categoría</th>
						<th style="width: 60px;">Orden</th>
						<th style="width: 61px;">Nombre</th>
						<th style="width: 575px;">Imagen</th>
						<th style="width: 575px;">Código</th>
						<th style="width: 69px;">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach( App\Portafolio::where('categoria_id',$categoriaId)->orderBy('orden','asc')->get() as $portafolio )
					<tr role="row">
						<td>
							<div class="readmore" style="max-height: none;">
								@if( $portafolio->estado == 1 )
								<span>Activo</span>
								@else
								<span style="color: red;">No activo</span>
								@endif
							</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">
								@if( $portafolio->categoria_id == 1 )
								Impulso
								@elseif( $portafolio->categoria_id == 2 )
								Activaciones
								@else
								Eventos
								@endif
							</div>
						</td>
						<td>
							<div class="readmore">{{ $portafolio->orden }}</div>
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{!! $portafolio->nombre !!}</div>
						</td>
						<td>
							@if($portafolio->imagen != '')
							<img src="{{asset('storage/'.$portafolio->imagen)}}" class="img-responsive" style="width:100px">
							@endif
						</td>
						<td>
							<div class="readmore" style="max-height: none;">{{ $portafolio->contenido_modal }}</div>
						</td>
						<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
							
							<a href="{{route('admin.seccion.portafolios.add')}}?id={{$portafolio->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
								<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>



@stop