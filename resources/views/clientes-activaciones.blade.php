@extends('layouts.master')

 @section('head')                          
 <?php $general = App\General::where('id',1)->first(); ?>
<title>{{$general->cliente_head_title}}</title>
<meta name="description" content="{{$general->cliente_head_description}}" />

<!-- Twitter Card data -->
<meta name="twitter:title" content="{{$general->cliente_head_title}}">
<meta name="twitter:description" content="{{$general->cliente_head_description}}">
<meta name="twitter:image" content="{{asset('storage/'.$general->cliente_head_image)}}">

<!-- Open Graph data -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{$general->cliente_head_title}}" />
<meta property="og:image" content="{{asset('storage/'.$general->cliente_head_image)}}" />
<meta property="og:description" content="{{$general->cliente_head_description}}" /> 
 @stop


@section('content')

<style>
  .mega-menu{
    background: #231f20 !important;
  }
  .content-md {
    padding-top: 5px !important;
    padding-bottom: 20px !important;
}
  .content-md .row{
margin-left: 30px !important;
    margin-right: 30px !important;
  }
  .pdd-top-100{
    min-height: 70vh;
    padding-top: 120px;
  }
  .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    padding-right: 10px !important;
    padding-left: 10px !important;
}
  @media screen and (max-width: 767px){
    .pdd-top-100{
    min-height: 70vh;
    padding-top: 56px;
  }
  .content-md .row{
    margin-left: 10px !important;
    margin-right: 10px !important;
    margin-top: 11px;
  }
  .header-fixed .header-sticky .shrink-fixed-logo {
    display: block !important;
}
  }

.bloque-estatico .bloque-con-hover{
    display: none;
  }
  @media screen and (min-width: 768px){
    .bloque-estatico .bloque-con-hover{
    display: none;
  }
  .bloque-estatico:hover .bloque-sin-hover{
    display: none;
  }
  .bloque-estatico:hover .bloque-con-hover{
    display: block;
  }
  }


@media screen and (min-width: 768px){
  .padding-bottom-desktop{
    padding-bottom: 20px;
  }
}
</style>

<div class="pdd-top-100">
  <div class=" content-md" style="position:relative;">
  <div class="row padding-bottom-desktop">
    @foreach( App\Portafolio::where('categoria_id','2')->orderBy('orden','asc')->get() as $portafolio )
    <div class="col-md-4 col-sm-6 col-xs-6 caja-contenedor">
      <a href="" data-toggle="modal" data-target="#myModalCliente" class="bloque-estatico clientes-cuadro" data-video="{{$portafolio->contenido_modal}}" >
        <img src="{{asset('storage/'.$portafolio->imagen)}}" alt="{{ $portafolio->nombre }}" class="padd-top-17 bloque-sin-hover"  style="width: 100%;">
         <img src="{{asset('/img/clientes-eventos-hover.png')}}" alt="{{ $portafolio->nombre }}" class="bloque-con-hover padd-top-17"  style="width: 100%;">
      </a>
    </div>
    @endforeach
  </div>
</div>
</div>
@stop

@section('modal')
<div id="myModalCliente" class="modal fade pdddisplay-text" role="dialog" style="text-align:center ">
  <div class="bs-example-modal-lg"  style="display: inline-block;margin: 5% auto 0 auto;">
    <div class="modal-content back-white-modal modal-lg" style="display: inline-block;">
      <button type="button" class="close close-css close-clientes-cuadro-content" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{asset('img/close.png')}}" style="width: 80% !important;position: absolute;left: 10%;top: 10%;height: 80%;"></span></button>
      <div class="videoWrapper clientes-cuadro-content">
        
      </div>
    </div>
  </div>
</div>
@stop



@section('js')
<script type="text/javascript">
  equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
     $(container).each(function() {

       $el = $(this);
       $($el).height('auto')
       topPostion = $el.position().top;

       if (currentRowStart != topPostion) {
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].height(currentTallest);
         }
         rowDivs.length = 0; // empty the array
         currentRowStart = topPostion;
         currentTallest = $el.height();
         rowDivs.push($el);
       } else {
         rowDivs.push($el);
         currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
      }
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
     });
    }

    $(window).load(function() {
      equalheight('.caja-contenedor');
    });


    $(window).resize(function(){
      equalheight('.caja-contenedor');
    });

</script>

@stop