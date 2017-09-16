@if(Route::current()->getName() != 'web.home')
                     <?php $baseURL = route('web.home'); ?>
                  @else
                     <?php $baseURL = ''; ?>
                  @endif

<div class="header-v6 header-dark-transparent header-sticky">
   <!-- Navbar -->
   <div class="navbar mega-menu" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="menu-container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <!-- Navbar Brand -->
            <div class="navbar-brand page-scroll">
               <a id="a-inicio-logo" href="{{$baseURL}}#inicio">
                  <img class="default-logo" src="{{asset('img/logo.png')}}" alt="Logo">
                  <img class="shrink-logo" src="{{asset('img/logo.png')}}" alt="Logo">
                  <img class="shrink-fixed-logo reponsive-top-logo" src="{{asset('img/logo.png')}}" alt="Logo">
               </a>
            </div>
            <!-- ENd Navbar Brand -->

            <!-- End Header Inner Right -->
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse navbar-responsive-collapse">
            <div class="mobile-screen">
               <div class="header-menu">
                  <span>X</span>
               </div>
            </div>
            <div class="menu-container">
               <ul class="nav navbar-nav">
                  <div class="menu-redes-sociales">
                     <br><br>
                  </div>
                  <li class="dropdown page-scroll">
                     <a id="a-inicio" href="{{$baseURL}}#inicio" class="dropdown-toggle a-nav">
                        <span class="nav-color media-nav-menu display-none-menu">
                           INICIO
                        </span>
                     </a>
                  </li>
                  <!-- Home -->
                  <li class="dropdown page-scroll">
                     <a id="a-quienes-somos" href="{{$baseURL}}#quienes-somos" class="dropdown-toggle a-nav">
                        <span class="nav-color media-nav-menu">
                           QUIÉNES SOMOS
                        </span>
                     </a>
                  </li>
                  <li class="dropdown page-scroll">
                     <a id="a-servicios" href="{{$baseURL}}#servicios" class="dropdown-toggle a-nav">
                        <span class="nav-color media-nav-menu">
                           SERVICIOS
                        </span>
                     </a>
                  </li>
                  <!-- End Pages -->
                  <!-- Blog -->
                  <li class="dropdown page-scroll">
                     <a id="a-clientes" href="{{$baseURL}}#clientes" class="dropdown-toggle a-nav">
                        <span class="nav-color media-nav-menu">
                           CLIENTES
                        </span>
                     </a>
                  </li>
                  <!-- End Blog -->
                  <!-- Portfolio -->
                  <li class="dropdown page-scroll">
                     <a id="a-contacto" href="{{$baseURL}}#contacto" class="dropdown-toggle a-nav">
                        <span class="nav-color media-nav-menu">
                           CONTACTO
                        </span>
                     </a>
                  </li>
                  <?php $general = App\General::where('id',1)->first(); ?>
                  <!-- End Shortcodes -->
                  <div class="menu-redes-sociales">
                     <br><br>
                      <div>
                         <a href="{{ $general->facebook_link }}" target="_blank">
                       <div class="box-red">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </div>
                     </a>

                     <a href="{{ $general->vimeo_link }}" target="_blank">
                      <div class="box-red">
                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                      </div>
                      </a>
                      </div>
                  </div>
               </ul>
            </div>
         </div>
         <!--/navbar-collapse-->
      </div>
   </div>
   <!-- End Navbar -->
</div>