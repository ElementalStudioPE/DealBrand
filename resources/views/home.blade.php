@extends('layouts.master')


@section('css')
<style type="text/css">
  .video-background {
    background: #000;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  .video-foreground,
  .video-background iframe {
    background: #000;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  <?php $general = App\General::where('id',1)->first(); ?>
  @if($general->principal_video_vimeo != '')
  .video-foreground,
  .video-background iframe {
    top: 0 !important;
  }
  @endif
  #wrapperVimeo{
    height: 100%;
    width: 100%;
  }
#vimelar-container {
    position: absolute !important;
}
  @media (min-aspect-ratio: 16/9) {
    .video-foreground { height: 300%; top: -100%; }
  }
  @media (max-aspect-ratio: 16/9) {
    /*.video-foreground { width: 300%; left: -100%; }*/
  }


  @media only screen and (max-width: 767px) {
    .video-foreground, .video-background iframe{
      display: none;
    }
  }

  @media only screen and (max-width: 767px) {
    .video-background {
      background: rgba(255, 255, 255, 0);
    }
  }
  .bloque-estatico .bloque-con-hover{
    display: none;
  }
  .bloque-estatico:hover .bloque-sin-hover{
    display: none;
  }
  .bloque-estatico:hover .bloque-con-hover{
    display: block;

  }
.content-md.contacto-section {
    padding-bottom: 60px;
}
</style>
@stop

@section('content')

<?php $general = App\General::where('id',1)->first(); ?>
<style type="text/css">
  @media only screen and (max-width: 767px){
    .interactive-slider-v2.interactive-slider-v3433-md {
      background: inherit !important;
      background-image: url({{ asset('storage/'.$general->principal_background) }}) !important;
background-size: cover !important;
background-position:center center !important;
}
}


.back-quienes-somos {
  background: url({{ asset('storage/'.$general->nosotros_imagen) }}) repeat fixed;
background-size: cover;
background-position: center center;
padding: 92px 0;
}

@media screen and (max-width: 767px){
  .back-quienes-somos {
    background: url({{ asset('storage/'.$general->nosotros_imagen) }}) repeat fixed;
background-size: cover;
background-position: center center;
padding: 20px 0;
background-attachment: scroll;
}
}

.back-contacto {
  background: url({{ asset('storage/'.$general->contacto_background) }}) repeat fixed;
background-size: 100% 850px;
background-position: center center !important;
padding: 60px 0;
}

@media only screen and (max-width: 480px){
  .back-contacto {
    background-size: 180% 650px !important;
  }
}


.back-servicios {
  background: url({{ asset('storage/'.$general->servicios_background) }}) no-repeat;
background-size: cover;
background-position: center center;
padding: 92px 0;
}
</style>
<div class="interactive-slider-v2 interactive-slider-v3433-md img-v3" id="inicio">
  <div class="video-background">
    <div class="video-foreground">
      @if($general->principal_video_vimeo != '')
      <div id="wrapperVimeo"></div>    
      @else
      <iframe width="1280" height="720" src="https://youtube.com/embed/{{$general->principal_video}}?%0D%0Arel=0&autoplay=1&controls=0&showinfo=0&autohide=1&playlist={{$general->principal_video}}&loop=1&feature=player_detailpage&VQ=HD720" frameborder="0" allowfullscreen></iframe>
      @endif
    </div>
  </div>
</div>

<div class="back-quienes-somos parallax-counter-v1 parallaxBg" id="quienes-somos">
  <div class="container content-md" style="position:relative;">
   <div class="row top-top-cd">

    <div class="col-md-2">

    </div>
    <div class="col-md-8 overflow-h">
      <div class="quienes-somos-dealbrand" style="background:white;">
        <h1 class="deal-somos-title">{!! $general->nosotros_titulo !!}</h1>
        <div style="text-align: center;padding-bottom: 10px;">
          <img style="width: 23px;" src="{{asset('img/rectangulo.png')}}">
        </div>
        <p class="text-bot-deal">{!! $general->nosotros_cuerpo !!}</p>
      </div>
      <div class="text-center ver-reel" style="max-width: 200px;margin: 40px auto 0 auto;">
        <div class="hov-red-deal">
          <a href="#" data-toggle="modal" data-target="#miReel" data-video="{{ $general->nosotros_modal }}" id="nosotros_modal"><h2 class="title-clientes-dead" style="color: white;background: black;">VER REEL</h2></a>
        </div>
      </div>

    </div>
    <div class="col-md-2"></div>






  </div>
</div>
</div>

<div class="back-servicios" id="servicios">
  <div class="container content-md" style="position:relative;">




    <div class="row servicios-responsive-none">
      <div class="col-md-3">
        <img src="{{asset('img/servicios.png')}}" alt="" class="padd-bot-25">
        <div class="bloque-estatico">
          <a href="{{ route('web.home') }}/clientes-impulso">
          <img src="{{asset('storage/'.$general->servicios_imagen_1)}}" alt="" class="bloque-sin-hover servicios-hover">
          <img src="{{asset('storage/'.$general->servicios_imagen_hover_1)}}" alt="" class="bloque-con-hover servicios-hover">
          </a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12 mar-bottom-17">
            <div class="col-md-4">
              <div class="bloque-estatico">
                <img src="{{asset('storage/'.$general->servicios_imagen_2)}}" alt="" class="bloque-sin-hover">
                <img src="{{asset('storage/'.$general->servicios_imagen_hover_2)}}" alt="" class="bloque-con-hover">
              </div>
            </div>
            <div class="col-md-8">
              <div class="bloque-estatico">
                <a href="{{ route('web.home') }}/clientes-eventos">
                <img src="{{asset('storage/'.$general->servicios_imagen_3)}}" alt="" class="padd-left-20 width-100-respo bloque-sin-hover">
                <img src="{{asset('storage/'.$general->servicios_imagen_hover_3)}}" alt="" class="padd-left-20 width-100-respo bloque-con-hover">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-8">
              <div class="bloque-estatico">
                <img src="{{asset('storage/'.$general->servicios_imagen_4)}}" alt="" class="width-100-respo bloque-sin-hover">
                <img src="{{asset('storage/'.$general->servicios_imagen_hover_4)}}" alt="" class="width-100-respo bloque-con-hover">
              </div>
            </div>
            <div class="col-md-4">
              <div class="bloque-estatico">
                <a href="{{ route('web.home') }}/clientes-activaciones">
                <img src="{{asset('storage/'.$general->servicios_imagen_5)}}" alt="" class="mar-left-20 bloque-sin-hover">
                <img src="{{asset('storage/'.$general->servicios_imagen_hover_5)}}" alt="" class="mar-left-20 bloque-con-hover">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row servicios-responsive-block" style="margin:0;">
      <div style="padding-bottom: 5px;width: 60%;margin: 0 auto;">
        <img src="{{asset('img/servicios.png')}}" alt="" class="" style="width: 100%;">
      </div>
      <div style="width: 52.5%;float: left;margin-right: 1%;margin-left: 1.5%;">
        <a href="{{ route('web.home') }}/clientes-impulso">
        <img src="{{asset('storage/'.$general->servicios_mobile_imagen_1)}}" alt="" style="width:100%;margin-bottom: 3px;">
        </a>
      </div>
      <div style="width: 43.5%;float: left;">
        <div>
          <a href="{{ route('web.home') }}/clientes-activaciones">
          <img src="{{asset('storage/'.$general->servicios_mobile_imagen_2)}}" alt="" style="width:100%;margin-bottom: 3px;">
          </a>
        </div>
        <div>
          <img src="{{asset('storage/'.$general->servicios_mobile_imagen_3)}}" alt="" style="width:100%;">
        </div>
      </div>

      <div style="width: 52.5%;float: left;margin-right: 1%;margin-left: 1.5%;">
        <img src="{{asset('storage/'.$general->servicios_mobile_imagen_4)}}" alt="" style="width: 100%;">
      </div>
      <div style="width: 43.5%;float: left;">
        <a href="{{ route('web.home') }}/clientes-eventos">
        <img src="{{asset('storage/'.$general->servicios_mobile_imagen_5)}}" alt="" style="width: 99.1%;">
        </a>
      </div>

    </div>

  </div>
</div>

<div class="back-clientes" id="clientes">
  <div class="container content-md" style="position:relative;">


    <h1 class="deal-somos-title-white">CLIENTES</h1>
    <div style="text-align: center;padding-bottom: 10px;" class="mar-bott-clientes">
      <img src="{{ asset('img/rectangulo-white.png') }}" alt="" class="width-5-repon">
    </div>
    <div class="row">
      <div class="col-md-12 clientes-deadbrand">
        <img src="{{asset('storage/'.$general->clientes_imagen)}}" alt="" class="widthdead-80 responsive-clientes-none" style="margin: 0 auto;">
        <img src="{{asset('storage/'.$general->clientes_imagen_mobile)}}" alt="" class="widthdead-80 responsive-clientes-block" style="margin: 0 auto;width: 100%;">
      </div>
    </div>
    <div class="row padd-top-60">
      <div class="col-md-2 col-xs-2"></div>
      <div class="col-md-8 col-xs-8">
        <div class="col-md-4">
          <div class="hov-red-deal">
            <a href="{{ route('web.home') }}/clientes-impulso"><h2 class="title-clientes-dead">IMPULSO</h2></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="hov-red-deal">
            <a href="{{ route('web.home') }}/clientes-activaciones"><h2 class="title-clientes-dead">ACTIVACIONES</h2></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="hov-red-deal">
            <a href="{{ route('web.home') }}/clientes-eventos"><h2 class="title-clientes-dead">EVENTOS</h2></a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-xs-3"></div>
    </div>


  </div>
</div>

<div class="back-contacto parallax-counter-v1 parallaxBg" id="contacto">
    <div class="container content-md contacto-section" style="position:relative;">
     <div class="row top-top-cd">
       <div class="col-md-2"></div>
       <div class="col-md-8 overflow-h">
        <a href="#" data-toggle="modal" data-target="#myModal">
          <div class="quienes-somos-dealbrand" style="background:white;">
            <div style="text-align: center;">
             <img src="{{asset('storage/'.$general->contacto_icono)}}" alt="" class="responsive-mssj" style="max-width: 80px;">
           </div>
           <h1 class="deal-somos-title-2">{{$general->contacto_titulo}}</h1>
           <div style="text-align: center;padding-bottom: 10px;">
            <img src="{{asset('img/rectangulo-red.png')}}" alt="">
          </div>
          <p class="text-bot-deal-1">{{$general->contacto_cuerpo}}</p>
        </div>
      </a>
    </div>
    <div class="col-md-2"></div>
  </div>

  <div class="row top-top-cd">
   <div class="col-md-3"></div>
   <div class="col-md-6 overflow-h red-font-border">
    <h1 class="titulo-contact text-center">{{$general->footer_titulo}}</h1><br>
    <p class="text-bot-contact text-center">{{$general->footer_cuerpo}}</p>
  </div>
  <div class="col-md-3"></div>
</div>
</div>
</div>
@stop

@section('modal')

<?php $general = App\General::where('id',1)->first(); ?>

<div id="miReel" class="modal fade pdddisplay-text" role="dialog" style="text-align:center ">
  <div class="bs-example-modal-lg"  style="display: inline-block;margin: 5% auto 0 auto;">

    <!-- Modal content-->
    <div class="modal-content back-white-modal modal-lg" style="display: inline-block;">
      <button type="button" class="close close-css" data-dismiss="modal" aria-label="Close" id="close-reel"><span aria-hidden="true"><img src="{{asset('img/close.png')}}" style="width: 80% !important;
        position: absolute;
        left: 10%;
        top: 10%;
        height: 80%;"></span></button>
        <div class="videoWrapper" id="video-reel">
          

        </div>

      </div>

    </div>
  </div>

  @stop

  @section('js')

@if($general->principal_video_vimeo != '')

      <script>
      $(document).ready(function() {

        !function(e,i){var t={ratio:16/9,videoId:"8970192",width:e(i).width(),wrapperZIndex:99},a=function(a,r){var r=e.extend({},t,r),o=e(a);e("html,body").css({width:"100%",height:"100%"}),e("<iframe />",{name:"myFrame",id:"vimelar-player",src:"//player.vimeo.com/video/"+r.videoId+("undefined"!=typeof r.parameters?"?"+e.param(r.parameters):""),style:"position: absolute; width:100%; height: 100%;",frameborder:0,webkitallowfullscreen:1,mozallowfullscreen:1,allowfullscreen:1}).prependTo("#wrapperVimeo").wrap('<div id="vimelar-container" style="overflow: hidden; position: fixed; z-index: 1; width: 100%; height: 100%"></div>').after('<div id="vimelar-overlay" style="width: 100%; height: 100%; z-index: 2; position: absolute; left: 0; top: 0;"></div>'),o.css({position:"relative","z-index":r.wrapperZIndex});var d=function(){var t,a,o=e(i).width(),d=e(i).height(),n=e("#vimelar-player");o/r.ratio<d?(t=Math.ceil(d*r.ratio),n.width(t).height(d).css({left:(o-t)/2,top:0})):(a=Math.ceil(o/r.ratio),n.width(o).height(a).css({left:0,top:(d-a)/2}))};e(i).load(function(){d()}),e(i).on("resize.vimelar",function(){d()})};e.fn.vimelar=function(i){return this.each(function(){e.data(this,"vimelar_instantiated")||e.data(this,"vimelar_instantiated",a(this,i))})}}(jQuery,window);

          var options = {
              videoId: "{{$general->principal_video_vimeo}}",
              parameters: {
                  autopause: 1,
                  autoplay: 1,
                  badge: 1,
                  byline: 1,
                  color: '000',
                  loop: 1,
                  player_id: 'demo',
                  portrait: 1,
                  title: 1
              }
          };
          $('#wrapperVimeo').vimelar(options);
      });
      </script>
      @endif
  @stop