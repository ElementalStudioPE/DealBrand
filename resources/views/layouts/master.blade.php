<!DOCTYPE html>
<html lang="en">
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php $general = App\General::where('id',1)->first(); ?>
 @section('head')                          
<title>{{$general->inicio_head_title}}</title>
<meta name="description" content="{{$general->inicio_head_description}}" />

<!-- Twitter Card data -->
<meta name="twitter:title" content="{{$general->inicio_head_title}}">
<meta name="twitter:description" content="{{$general->inicio_head_description}}">
<meta name="twitter:image" content="{{asset('storage/'.$general->inicio_head_image)}}">

<!-- Open Graph data -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{$general->inicio_head_title}}" />
<meta property="og:description" content="{{$general->inicio_head_description}}" />
<meta property="og:image" content="{{asset('storage/'.$general->inicio_head_image)}}" />
 @show
 
 <!-- Favicon -->
 <link rel="shortcut icon" href="{{asset('fonts/favicon-16x16.png')}}">
 <link rel="apple-touch-icon" sizes="57x57" href="{{asset('fonts/apple-icon-57x57.png')}}">
 <link rel="apple-touch-icon" sizes="60x60" href="{{asset('fonts/apple-icon-60x60.png')}}">
 <link rel="apple-touch-icon" sizes="72x72" href="{{asset('fonts/apple-icon-72x72.png')}}">
 <link rel="apple-touch-icon" sizes="76x76" href="{{asset('fonts/apple-icon-76x76.png')}}">
 <link rel="apple-touch-icon" sizes="114x114" href="{{asset('fonts/apple-icon-114x114.png')}}">
 <link rel="apple-touch-icon" sizes="120x120" href="{{asset('fonts/apple-icon-120x120.png')}}">
 <link rel="apple-touch-icon" sizes="144x144" href="{{asset('fonts/apple-icon-144x144.png')}}">
 <link rel="apple-touch-icon" sizes="152x152" href="{{asset('fonts/apple-icon-152x152.png')}}">
 <link rel="apple-touch-icon" sizes="180x180" href="{{asset('fonts/apple-icon-180x180.png')}}">
 <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('fonts/android-icon-192x192.png')}}">
 <link rel="icon" type="image/png" sizes="32x32" href="{{asset('fonts/favicon-32x32.png')}}">
 <link rel="icon" type="image/png" sizes="96x96" href="{{asset('fonts/favicon-96x96.png')}}">
 <link rel="icon" type="image/png" sizes="16x16" href="{{asset('fonts/favicon-16x16.png')}}">
 <link rel="manifest" href="{{asset('fonts/manifest.json')}}">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="{{asset('fonts/ms-icon-144x144.png')}}">
 <meta name="theme-color" content="#ffffff">
 <!-- Web Fonts -->
 <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,‌​100italic,300,300ita‌​lic,400italic,500,50‌​0italic,700,700itali‌​c,900italic,900' rel='stylesheet' type='text/css'>
 <meta name="csrf-token" content="{{ csrf_token() }}"/>
 <!-- CSS Global Compulsory -->
 <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <!-- CSS Header and Footer -->
 <link rel="stylesheet" href="{{asset('css/header-v6.css')}}">
 <link rel="stylesheet" href="{{asset('css/footer-v6.css')}}">
 <!-- CSS Implementing Plugins -->
 <link rel="stylesheet" href="{{asset('css/animate.css')}}">
 <link rel="stylesheet" href="{{asset('css/line-icons.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
 <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom-cubeportfolio.css')}}">
 <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
 <!-- CSS Theme -->
 <link rel="stylesheet" href="{{asset('css/default.css')}}" id="style_color">
 <link rel="stylesheet" href="{{asset('css/dark.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{asset('css/sky-forms.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom-sky-forms.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
 <style type="text/css">
  .contacto-input{
    display: table;
    width: 100%;
    position: relative;
  }
  .contacto-input label{
    width: 25%;
    float: left;
    font-size: 16px !important;
    border-color: #272727;
    border-top: 5px solid #272727;
    border-bottom: 5px solid #272727;
    border-left: 4px solid #272727;
    padding-left: 5px;
    padding-top: 3px;
    height: 40px;
    position: absolute;
    font-weight: 900;
    left: 0;
    top: 0;
    letter-spacing: 1.3px;
  }
  .contacto-input input,
  .contacto-input textarea{
    width: 77%;
    float: left;
    height: 40px;
    margin-left: 25%;
  }
  @media screen and (max-width: 560px){
    .contacto-input label{
      width: 100%;
      float: left;
      font-size: 16px !important;
      border-color: #272727;
      border-top: 5px solid #272727;
      border-bottom: 5px solid #272727;
      border-left: 4px solid #272727;
      border-right: 4px solid #272727;
      padding-left: 5px;
      padding-top: 3px;
      height: 40px;
      position: absolute;
      font-weight: 900;
      left: 0;
      top: 0;
      letter-spacing: 1.3px;
      text-align: center;
    }
    .contacto-input input,
    .contacto-input textarea{
      width: 100%;
      float: left;
      height: 40px;
      margin-top: 35px;
      margin-left: 0 !important;
    }
    .btn-enviar-info{
      width: 100%;
    }
    img.contacto-label{
      max-height: 70%;
      margin-top: 50px !important;
    }
  }
  .nombre label{
    background-color: #ed1e3e;
  }
  .empresa label{
    background-color: #4fc4c9;
  }
  .telefono label{
    background-color: #ed1e3e;
  }
  .correo label{
    background-color: #4fc4c9;
  }
  .mensaje label{
    background-color: #ed1e3e;
  }
  @media screen and (max-width: 480px){
    .bs-example-modal-lg {
      margin-top: 40% !important;
    }
  }
  .modal-content.fondo-form.gracias-cont{
    width: 280px;
    min-width: 280px;
    max-width: 280px;
  }

  @media screen and (max-width: 767px){
    .modal-dialog.modal-sm.modal-gracias{
      position: relative;
      width: 100%;
      height: 100%;
    }
    .modal-dialog.modal-sm.modal-gracias .gracias-cont{
      margin: 0 auto;
      top: 50%;
      position: absolute;
      left: 50%;
      margin-left: -140px;
      margin-top: -60px;
    }
  }
  .header-fixed .header-v6.header-fixed-shrink{
        height: 70px !important;
  }
  .header-fixed .header-v6.header-fixed-shrink.open{
        height: 100% !important;
  }
</style>
@yield('css')


<!-- CSS Customization -->
<link rel="stylesheet" href="css/custom.css">
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

{!! $general->codigo_analytics !!}
</head>
<body class="header-fixed">
  <div class="izquierda-marco">

  </div>
  <div class="derecha-marco">

  </div>
  <div class="abajo-marco">

  </div>
  <div class="top-marco">

  </div>

  <a href="{{ $general->facebook_link }}" target="_blank">
    <div class="abajo-fb">
     <i class="fa fa-facebook" aria-hidden="true"></i>
   </div>
 </a>

 <a href="{{ $general->vimeo_link }}" target="_blank">
   <div class="abajo-vi">
     <i class="fa fa-vimeo" aria-hidden="true"></i>
   </div>
 </a>

 @include('layouts.nav')

 @yield('content')

 <a href="" data-toggle="modal" data-target="#myModalGracias" id="modal-gracias-btn" style="position: fixed;z-index: -99999;left: 0;top: 0;width: 0;height: 0;font-size: 0;">myModalGracias</a>

<!--  <footer style="height: 40px;padding: 20px 10px 48px 10px;background: #231f20;">
   <div class="text-center" style="color: #fff;"><strong>DEAL BRAND</strong> @ 2017. TODOS LOS DERECHOS RESERVADOS</div>
 </footer> -->

 <div id="myModalGracias" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm modal-gracias">

    <!-- Modal content-->
    <div class="modal-content fondo-form gracias-cont">
      <div class="modal-header" style="width: 100%;height: 30px;background: #fff;">
        <button type="button" class="close" data-dismiss="modal" style="position: absolute;width: 40px;height: 31px;right: 7px;top: 13px;background: #ed1e3e;border-left: 10px solid black;">
          <img src="{{ asset('img/close-gracias.png') }}" style="position: absolute;left: 3px;top: 4px;width: 25px;height: 25px;"></button>
        </div>
        <div class="modal-body-gracias" style="margin-top: 40px;">
          <div class="" style="position: relative;background: #4fc4c9;">
            <div class="imagen-bien" style="position: absolute;">
              <img src="{{ asset('img/check-gracias.png') }}" style="width: 60px;margin-top: 5px;">
            </div>
            <div class="mensaje" style="margin-left: 60px;background-color: #fff;border-left: 10px solid black;padding: 9px 15px;">
              <img src="{{ asset('img/cuerpo-gracias.png') }}" style="width: 100%;">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content fondo-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="form-close"><img src="{{ asset('img/close-contacto.png') }}" style="    position: absolute;
            left: 15%;
            top: 18px;
            width: 70%;"></button>
          </div>
          <div class="modal-body">
            <form name="formulario" enctype="multipart/form-data" method="POST" action="{{action('PrincipalController@post_form')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <small style="color: #ed1e3e;font-weight: 600;font-size: 15px;display: none;" id="error-nombre">* Ingresa Nombre</small>
              <div class="form-group contacto-input nombre">
                <label for="nombre">NOMBRE</label>
                <input required="true" name="nombre" type="text" class="form-control" id="nombre">
              </div>
              <small style="color: #ed1e3e;font-weight: 600;font-size: 15px;display: none;" id="error-empresa">* Ingresa empresa</small>
              <div class="form-group contacto-input empresa">
                <label for="empresa">EMPRESA</label>
                <input required="true" name="empresa" type="text" class="form-control" id="empresa">
              </div>
              <small style="color: #ed1e3e;font-weight: 600;font-size: 15px;display: none;" id="error-telefono">* Ingresa teléfono</small>
              <div class="form-group contacto-input telefono">
                <label for="telefono">TELÉFONO</label>
                <input required="true" name="telefono" type="number" class="form-control" id="telefono">
              </div>
              <small style="color: #ed1e3e;font-weight: 600;font-size: 15px;display: none;" id="error-correo">* Ingresa un correo válido</small>
              <div class="form-group contacto-input correo">
                <label for="correo">CORREO</label>
                <input required="true" name="correo" type="email" class="form-control" id="correo">
              </div>
              <small style="color: #ed1e3e;font-weight: 600;font-size: 15px;display: none;" id="error-mensaje">* Ingresa Mensaje</small>
              <div class="form-group contacto-input mensaje">
                <label for="mensaje">MENSAJE</label>
                <textarea required="true" name="mensaje" class="form-control" id="mensaje" style="min-height: 90px;"></textarea>
              </div>
              <div style="text-align: right;">
                <button type="submit" class="btn btn-default btn-enviar-info" id="enviar-info">ENVIAR</button>
              </div>
            </form>
          </div>
          <div class="modal-right">
            <span></span>
            <div class="flotante">
              <div class="white text-center">
                <img src="{{ asset('img/contacto-label.png')}} " style="height: 93%;margin-right: -4px;margin-top: 6px;" class="contacto-label">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>



    @yield('modal')

  </body>

  <!-- JS Global Compulsory -->
  <script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/back-to-top.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/smoothScroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.parallax.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/modernizr.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/animated-headline.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
  <!-- JS Customization -->
  <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
  <!-- JS Page Level -->
  <script type="text/javascript" src="{{asset('js/cube-portfolio-lightbox.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/owl-carousel.js')}}"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript">
   jQuery(document).ready(function() {
    App.init();
    new WOW().init();
    App.initCounter();
    App.initParallaxBg();
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $('.clientes-cuadro').click(function(){
      $('.clientes-cuadro-content').empty();
      var iframe = '<iframe webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0" src="//player.vimeo.com/video/'+ $(this).data("video") +'?api=1;title=0&amp;byline=0&amp;portrait=0&amp;color=d01e2f&amp;autoplay=1" width="640" height="360" class="note-video-clip"></iframe>';
      $('.clientes-cuadro-content').append(iframe);
    });

    $('.close-clientes-cuadro-content').click(function(){
      $('.clientes-cuadro-content').empty();
    });

    $('#nosotros_modal').click(function(){
      $('#video-reel').empty();
      var iframe = '<iframe webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0" src="//player.vimeo.com/video/'+ $(this).data("video") +'?api=1;title=0&amp;byline=0&amp;portrait=0&amp;color=d01e2f&amp;autoplay=1" width="640" height="360" class="note-video-clip"></iframe>';
      $('#video-reel').append(iframe);
    });

    $('#close-reel').click(function(){
      $('#video-reel').empty();
    });

  });
</script>

<script type="text/javascript">
  $(document).ready(function(){

   function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
  }

  $( "#nombre" ).keyup(function() {
    $('#error-nombre').hide();
  });
  $( "#empresa" ).keyup(function() {
    $('#error-empresa').hide();
  });
  $( "#telefono" ).keyup(function() {
    $('#error-telefono').hide();
  });
  $( "#correo" ).keyup(function() {
    $('#error-correo').hide();
  });
  $( "#mensaje" ).keyup(function() {
    $('#error-mensaje').hide();
  });

  $('#enviar-info').click(function(evento){
    evento.preventDefault();
    evento.stopPropagation();

    $('#nombre').removeClass('con-error');
    $('#empresa').removeClass('con-error');
    $('#telefono').removeClass('con-error');
    $('#correo').removeClass('con-error');
    $('#mensaje').removeClass('con-error');

    var error = false;

    if ( $('#nombre').val()    == '' ) {
      $('#nombre').addClass('con-error');
      $('#error-nombre').show();
      error = true;
    }
    if ( $('#empresa').val()   == '' ) {
      $('#empresa').addClass('con-error');
      $('#error-empresa').show();
      error = true;
    }
    if ( $('#telefono').val()  == '' ) {
      $('#telefono').addClass('con-error');
      $('#error-telefono').show();
      error = true;
    }
    if ( $('#correo').val()    == '' || !validateEmail( $('#correo').val() ) ) {
      $('#correo').addClass('con-error');
      $('#error-correo').show();
      error = true;
    }
    if ( $('#mensaje').val()   == '' ) {
      $('#mensaje').addClass('con-error');
      $('#error-mensaje').show();
      error = true;
    }



    if (error === true) {

      return false;

    }

    $.ajax({
      type    :"POST",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url     :"{{action('PrincipalController@post_form')}}",
      dataType:"json",
      data: { "nombre": $('#nombre').val(),"empresa":$('#empresa').val(),"telefono":$('#telefono').val(),"correo":$('#correo').val(),"mensaje":$('#mensaje').val() },
      success: function(data) {
        console.log(data);
        $('#form-close').click();
        $('#modal-gracias-btn').click();
        $('#nombre').removeAttr('value');
        $('#empresa').removeAttr('value');
        $('#telefono').removeAttr('value');
        $('#correo').removeAttr('value');
        $('#mensaje').removeAttr('value');
      },
      error: function(e) {
        alert('¡Ha salido algo mal! Actualiza la página e intenta de nuevo.');
      }
    });

  });
});
</script>

<script>
 $(document).ready(function(){
  $('#carousel-footer').owlCarousel({
   loop:true,
   margin:10,
   autoplay:true,
   responsiveClass:true,
   responsive:{
     0:{
       items:1,
       nav:false
     },
     600:{
       items:3,
       nav:false,
       slideBy: 3
     },
     1000:{
       items:5,
       nav:false,
       autoplayTimeout:4300,
       loop:false,
       slideBy: 5
     }
   }
 });
});
</script>


<script>
  $(document).ready(function(){
   $('#carousel-logos').owlCarousel({
     navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
     loop:true,
     margin:10,
     responsiveClass:true,
     responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true,
        loop:false
      }
    }
  });
 });
</script>




<script>
  $(function() {

    $(document).ready(function(){

      width = $(document).width();

      if ( width <= 767 ) {
        $('.video-foreground').empty();
      }

    });

    $('.mobile-screen').bind('click', function(event) {
      if ( $(this).parent().hasClass('in') == true ) {
        $('.navbar-toggle').click();
        $('.header-v6.header-fixed-shrink').toggleClass('open')
      }
    });


    $('.page-scroll a').bind('click', function(event) {
      var $anchor = $(this);

      if (  $(window).width() < 767 ) {

        if ($anchor.attr('id') == 'a-quienes-somos') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 41
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
          $('.header-v6.header-fixed-shrink').toggleClass('open')

        }

        else if ($anchor.attr('id') == 'a-servicios') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
          $('.header-v6.header-fixed-shrink').toggleClass('open')

        }


        else if ($anchor.attr('id') == 'a-inicio') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 10
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
          $('.header-v6.header-fixed-shrink').toggleClass('open')

        }

        else if ($anchor.attr('id') == 'a-inicio-logo') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 10
          }, 1500, 'easeInOutExpo');

        }


        else if ($anchor.attr('id') == 'a-clientes') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 40
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
          $('.header-v6.header-fixed-shrink').toggleClass('open')

        }

        else if ($anchor.attr('id') == 'a-contacto') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 42
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
          $('.header-v6.header-fixed-shrink').toggleClass('open')

        }

        else{

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutExpo');


        }

      }
      else{




        if ($anchor.attr('id') == 'a-quienes-somos') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top + 9
          }, 1500, 'easeInOutExpo');

        }

        else if ($anchor.attr('id') == 'a-servicios') {


          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top + 10
          }, 1500, 'easeInOutExpo');

        }

        else if ($anchor.attr('id') == 'a-inicio') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 10
          }, 1500, 'easeInOutExpo');

        }


        else if ($anchor.attr('id') == 'a-clientes') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top + 20
          }, 1500, 'easeInOutExpo');

        }

        else if ($anchor.attr('id') == 'a-contacto') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top + 8
          }, 1500, 'easeInOutExpo');

        }

        else if ($anchor.attr('id') == 'a-servicios') {

          $('html, body').stop().animate({

            scrollTop: $($anchor.attr('href')).offset().top - 190
          }, 1500, 'easeInOutExpo');

        }
        else{

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutExpo');

        }



      }



      event.preventDefault();
    });




    $('.page-scroll.scroll-down-style a').bind('click', function(event) {
      var $anchor = $(this);

      if (  $(window).width() < 767 ) {

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 18
        }, 1500, 'easeInOutExpo');
        $('.navbar-toggle').click();
        $('.header-v6.header-fixed-shrink').toggleClass('open')

      }
      else{

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 13
        }, 1500, 'easeInOutExpo');
        $('.navbar-toggle').click();
        $('.header-v6.header-fixed-shrink').toggleClass('open')

      }

      event.preventDefault();
    });

  });
</script>
<script>
  $(document).ready(function(){
    $('.navbar-toggle').click(function(e){
      e.preventDefault();
      e.stopPropagation(); 
      if ($('.navbar-responsive-collapse').hasClass('in')==true) {
        $('.navbar-responsive-collapse').removeClass('in');
      }
      else{
        $('.navbar-responsive-collapse').addClass('collapse');
        $('.navbar-responsive-collapse').addClass('in');
      }

    })
  })
</script>

<script>
  $(document).ready(function(){
    $('#miReel').click(function(e){
      e.preventDefault();
      e.stopPropagation(); 
      $('#close-reel').click();

    })
  })
</script>

<script>
  $(document).ready(function(){
    $('#myModalCliente').click(function(e){
      e.preventDefault();
      e.stopPropagation(); 
      $('.close-clientes-cuadro-content').click();

    })
  })
</script>


@yield('js')
</html>