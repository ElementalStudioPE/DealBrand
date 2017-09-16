<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\General;
use App\Portafolio;
use App\Testimonio;
use App\Cliente;
use \DomDocument;
use Image;

class SeccionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function post_dashboard(Request $request)
    {
        $objeto = General::find(1);

        $objeto->codigo_analytics           = $request->codigo_analytics;
        $objeto->facebook_link              = $request->facebook_link;
        $objeto->vimeo_link                 = $request->vimeo_link;
        if ( $request->hasFile('inicio_head_image') ){
            $filenameNombreOriginal = '';
            $file = $request->file('inicio_head_image');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('inicio_head_image') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);
            $objeto->inicio_head_image = $filenameNombreOriginal;

        }
        $objeto->inicio_head_title          = $request->inicio_head_title;
        $objeto->inicio_head_description    = $request->inicio_head_description;
        if ( $request->hasFile('cliente_head_image') ){
            $filenameNombreOriginal = '';
            $file = $request->file('cliente_head_image');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('cliente_head_image') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);
            $objeto->cliente_head_image = $filenameNombreOriginal;

        }
        $objeto->cliente_head_title         = $request->cliente_head_title;
        $objeto->cliente_head_description   = $request->cliente_head_description;
        $objeto->save();

        return redirect()->route('admin.main.panel');
    }

    public function principal()
    {
        return view('admin.seccion.principal');
    }

    public function post_principal(Request $request)
    {
        
        $objeto = General::find(1);

        if ( $request->hasFile('principal_background') ){

            $file = $request->file('principal_background');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('principal_background') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);
            $objeto->principal_background = $filenameNombreOriginal;

        }

        $objeto->principal_video        = $request->principal_video;
        $objeto->principal_video_vimeo  = $request->principal_video_vimeo;
        $objeto->save();

        return redirect()->route('admin.seccion.principal');
    }

    public function quienessomos()
    {
        return view('admin.seccion.quienessomos');
    }

    public function post_quienessomos(Request $request)
    {


        $objeto = General::find(1);

        if ( $request->hasFile('nosotros_imagen') ){

            $file = $request->file('nosotros_imagen');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('nosotros_imagen') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->nosotros_imagen = $filenameNombreOriginal;
        }

        $objeto->nosotros_titulo  = $request->nosotros_titulo;
        $objeto->nosotros_cuerpo  = $request->nosotros_cuerpo;
        $objeto->nosotros_modal   = $request->nosotros_modal;
        $objeto->save();


        return redirect()->route('admin.seccion.quienessomos');
    }

    public function servicios()
    {
        return view('admin.seccion.servicios');
    }

    public function post_servicios(Request $request)
    {
        
        $objeto = General::find(1);

        if ( $request->hasFile('servicios_background') ){

            $file = $request->file('servicios_background');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_background') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_background = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_1') ){

            $file = $request->file('servicios_imagen_1');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_1') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_1 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_2') ){

            $file = $request->file('servicios_imagen_2');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_2') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_2 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_3') ){

            $file = $request->file('servicios_imagen_3');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_3') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_3 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_4') ){

            $file = $request->file('servicios_imagen_4');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_4') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_4 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_5') ){

            $file = $request->file('servicios_imagen_5');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_5') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_5 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_hover_1') ){

            $file = $request->file('servicios_imagen_hover_1');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_hover_1') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_hover_1 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_hover_2') ){

            $file = $request->file('servicios_imagen_hover_2');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_hover_2') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_hover_2 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_hover_3') ){

            $file = $request->file('servicios_imagen_hover_3');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_hover_3') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_hover_3 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_hover_4') ){

            $file = $request->file('servicios_imagen_hover_4');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_hover_4') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_hover_4 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_imagen_hover_5') ){

            $file = $request->file('servicios_imagen_hover_5');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_imagen_hover_5') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_imagen_hover_5 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_mobile_imagen_1') ){

            $file = $request->file('servicios_mobile_imagen_1');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_mobile_imagen_1') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_mobile_imagen_1 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_mobile_imagen_2') ){

            $file = $request->file('servicios_mobile_imagen_2');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_mobile_imagen_2') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_mobile_imagen_2 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_mobile_imagen_3') ){

            $file = $request->file('servicios_mobile_imagen_3');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_mobile_imagen_3') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_mobile_imagen_3 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_mobile_imagen_4') ){

            $file = $request->file('servicios_mobile_imagen_4');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_mobile_imagen_4') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_mobile_imagen_4 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('servicios_mobile_imagen_5') ){

            $file = $request->file('servicios_mobile_imagen_5');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('servicios_mobile_imagen_5') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->servicios_mobile_imagen_5 = $filenameNombreOriginal;
        }

        $objeto->save();

        return redirect()->route('admin.seccion.servicios');
    }

    public function portafolios()
    {
        return view('admin.seccion.portafolios');
    }

    public function portafolios_add(Request $request)
    {
        $portafolio = '';
        if ( $request->id != '' ) {
          if ($request->accion == 'eliminar') {
            $objeto = Portafolio::find($request->id);
            $objeto->delete();
            return redirect()->back();
          }
          $portafolio = Portafolio::where('id',$request->id)->first();
        }
        return view('admin.seccion.portafolios_add',compact('portafolio'));
    }

    public function post_portafolios_add(Request $request)
    {

      if ($request->id != '') {
        $objeto = Portafolio::find($request->id);

      }
      else{
        $objeto = new Portafolio();
      }

      

        if ( $request->hasFile('imagen') ){

            $file = $request->file('imagen');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('imagen') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->imagen = $filenameNombreOriginal;
        }


        $objeto->contenido_modal  = $request->contenido_modal;
        $objeto->estado           = $request->estado;
        $objeto->nombre           = $request->nombre;
        $objeto->orden            = $request->orden;
        $objeto->tipo_contenido   = $request->tipo_contenido;
        $objeto->categoria_id     = $request->categoria_id;
        $objeto->save();




        return redirect()->route('admin.seccion.portafolios');
    }

    public function clientes()
    {
        return view('admin.seccion.clientes');
    }

    public function post_clientes(Request $request)
    {
        
        $objeto = General::find(1);

        if ( $request->hasFile('clientes_imagen') ){

            $file = $request->file('clientes_imagen');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('clientes_imagen') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->clientes_imagen = $filenameNombreOriginal;
        }

        if ( $request->hasFile('clientes_imagen_mobile') ){

            $file = $request->file('clientes_imagen_mobile');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('clientes_imagen_mobile') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->clientes_imagen_mobile = $filenameNombreOriginal;
        }

        $objeto->save();

        return redirect()->route('admin.seccion.clientes');
    }


    public function post_clientes_carousel(Request $request)
    {


        $objeto = new Cliente();
        $objeto->orden = $request->orden;
        if ( $request->hasFile('imagen') ){

            $file = $request->file('imagen');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('imagen') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->imagen = $filenameNombreOriginal;
        }
        $objeto->save();

        return redirect()->back();

    }


    public function contacto()
    {
        return view('admin.seccion.contacto');
    }

    public function post_contacto(Request $request)
    {
        
        $objeto = General::find(1);

        if ( $request->hasFile('contacto_background') ){

            $file = $request->file('contacto_background');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('contacto_background') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->contacto_background = $filenameNombreOriginal;
        }

        if ( $request->hasFile('contacto_icono') ){

            $file = $request->file('contacto_icono');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('contacto_icono') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->contacto_icono = $filenameNombreOriginal;
        }

        $objeto->contacto_titulo    = $request->contacto_titulo;
        $objeto->contacto_cuerpo    = $request->contacto_cuerpo;
        $objeto->footer_titulo      = $request->footer_titulo;
        $objeto->footer_cuerpo      = $request->footer_cuerpo;

        $objeto->save();

        return redirect()->route('admin.seccion.contacto');
    }


}