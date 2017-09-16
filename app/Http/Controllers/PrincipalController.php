<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacto;

class PrincipalController extends Controller
{

  public function post_form(Request $request)
  {


    $nombre       = $request->nombre;
    $empresa      = $request->empresa;
    $telefono     = $request->telefono;
    $correo       = $request->correo;
    $mensaje      = $request->mensaje;

    $objeto = new Contacto();
    $objeto->nombre    = $nombre;
    $objeto->empresa   = $empresa;
    $objeto->telefono  = $telefono;
    $objeto->correo    = $correo;
    $objeto->mensaje   = $mensaje;
    $objeto->save();


date_default_timezone_set('America/Lima');

header("Content-Type: application/json; charset=utf-8");
$email_user = utf8_decode($correo);

if ($email_user == ''){
    return [ 'success' => false ];
}

$name_user = utf8_decode($nombre);
$empresa = utf8_decode($empresa);
$celular_user =utf8_decode($telefono);
$mensaje_user = utf8_decode($mensaje);

//---------------------------------------
$correo_01 = utf8_decode("administracion@dealbrandperu.com");



//-----------------------------------------
# Indicamos la dirección (nombre) del servidor
$server_name = "dealbrandperu.com";
 
# Indicamos el nombre de la persona que va a recibir el mensaje
$person_name = $name_user;
 
# Indicamos la dirección de correo de esa persona
$person_email ="$correo_01";
 
# Las tres líneas que vienen a continuación son necesarias
# para que la cabecera del mensaje esté en formato HTML
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .="From: formulario@$server_name";

 
# Esto que viene es el mensaje. (Fíjate en los tags HTML)

$mensaje = "<font face='verdana' size='2'><br /><br /> Estimados,<br />
Favor de atender el siguiente requerimiento Web:<br /><br />
Datos: <br />
- Nombres: $name_user <br />
- Empresa: $empresa <br />
- Telefonos: $celular_user <br />
- Email: $email_user <br />
- Mensaje: $mensaje_user.<br />
<br />
Favor de tomar nota de los datos.<br />
Gracias por todo.<br />
Deal Brand<br />
<br /><br />";

"\nResponder\na: administracion@dealbrandperu.com";
 
# Función de envío del mensaje
$envio = mail("$person_email","Requerimiento Deal Brand - $name_user $empresa","$mensaje","$header");





$correo_02 = utf8_decode("jsantamaria@ess.pe");

//-----------------------------------------
# Indicamos la dirección (nombre) del servidor
$server_name = "dealbrandperu.com";
 
# Indicamos el nombre de la persona que va a recibir el mensaje
$person_name = $name_user;
 
# Indicamos la dirección de correo de esa persona
$person_email ="$correo_02";
 
# Las tres líneas que vienen a continuación son necesarias
# para que la cabecera del mensaje esté en formato HTML
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .="From: formulario@$server_name";

 
# Esto que viene es el mensaje. (Fíjate en los tags HTML)

$mensaje = "<font face='verdana' size='2'><br /><br /> Estimados,<br />
Favor de atender el siguiente requerimiento Web:<br /><br />
Datos: <br />
- Nombres: $name_user <br />
- Empresa: $empresa <br />
- Telefonos: $celular_user <br />
- Email: $email_user <br />
- Mensaje: $mensaje_user.<br />
<br />
Favor de tomar nota de los datos.<br />
Gracias por todo.<br />
Deal Brand<br />
<br /><br />";

"\nResponder\na: administracion@dealbrandperu.com";
 
# Función de envío del mensaje
$envio = mail("$person_email","Requerimiento Deal Brand - $name_user $empresa","$mensaje","$header");









$correo_03 = utf8_decode("jsilva@ess.pe");

//-----------------------------------------
# Indicamos la dirección (nombre) del servidor
$server_name = "dealbrandperu.com";
 
# Indicamos el nombre de la persona que va a recibir el mensaje
$person_name = $name_user;
 
# Indicamos la dirección de correo de esa persona
$person_email ="$correo_03";
 
# Las tres líneas que vienen a continuación son necesarias
# para que la cabecera del mensaje esté en formato HTML
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .="From: formulario@$server_name";

 
# Esto que viene es el mensaje. (Fíjate en los tags HTML)

$mensaje = "<font face='verdana' size='2'><br /><br /> Estimados,<br />
Favor de atender el siguiente requerimiento Web:<br /><br />
Datos: <br />
- Nombres: $name_user <br />
- Empresa: $empresa <br />
- Telefonos: $celular_user <br />
- Email: $email_user <br />
- Mensaje: $mensaje_user.<br />
<br />
Favor de tomar nota de los datos.<br />
Gracias por todo.<br />
Deal Brand<br />
<br /><br />";

"\nResponder\na: administracion@dealbrandperu.com";
 
# Función de envío del mensaje
$envio = mail("$person_email","Requerimiento Deal Brand - $name_user $empresa","$mensaje","$header");




$correo_04 = utf8_decode("sergiosaavedratorres@gmail.com");

//-----------------------------------------
# Indicamos la dirección (nombre) del servidor
$server_name = "dealbrandperu.com";
 
# Indicamos el nombre de la persona que va a recibir el mensaje
$person_name = $name_user;
 
# Indicamos la dirección de correo de esa persona
$person_email ="$correo_04";
 
# Las tres líneas que vienen a continuación son necesarias
# para que la cabecera del mensaje esté en formato HTML
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .="From: formulario@$server_name";

 
# Esto que viene es el mensaje. (Fíjate en los tags HTML)

$mensaje = "<font face='verdana' size='2'><br /><br /> Estimados,<br />
Favor de atender el siguiente requerimiento Web:<br /><br />
Datos: <br />
- Nombres: $name_user <br />
- Empresa: $empresa <br />
- Telefonos: $celular_user <br />
- Email: $email_user <br />
- Mensaje: $mensaje_user.<br />
<br />
Favor de tomar nota de los datos.<br />
Gracias por todo.<br />
Deal Brand<br />
<br /><br />";

"\nResponder\na: administracion@dealbrandperu.com";
 
# Función de envío del mensaje
$envio = mail("$person_email","Requerimiento Deal Brand - $name_user $empresa","$mensaje","$header");





    if ( $envio=1 ) {
       return [ 'success' => true ];
    }
    else{
        return [ 'success' => false ];
    }


  }

}
