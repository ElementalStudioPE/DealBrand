<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('web.home');

Route::get('/clientes-activaciones', function () {
    return view('clientes-activaciones');
})->name('clientes-activaciones');

Route::get('/clientes-impulso', function () {
    return view('clientes-campanas');
})->name('clientes-campanas');

Route::get('/clientes-eventos', function () {
    return view('clientes-eventos');
})->name('clientes-eventos');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout-ess-admin', function () {

    Auth::logout();

    return redirect()->route('login');

})->name('logout');

Route::get('/contacto', function () {
    return redirect()->route('web.home');
});
Route::get('/servicios', function () {
    return redirect()->route('web.home');
});
Route::get('/retail', function () {
    return redirect()->route('web.home');
});
Route::get('/eventos', function () {
    return redirect()->route('web.home');
});
Route::get('/mercado-tradicional', function () {
    return redirect()->route('web.home');
});
Route::get('/-btl---mkt', function () {
    return redirect()->route('web.home');
});
Route::get('/eventos', function () {
    return redirect()->route('web.home');
});
Route::get('/404.html', function () {
    return redirect()->route('web.home');
});

Route::post('/login/post', 'LoginController@post')->name('login.post');

Route::post('/form/post', 'PrincipalController@post_form')->name('form.post');


Route::group(['prefix' => 'administrador', 'middleware' => 'auth'], function () {

    include_once 'admin.php';

});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin/login', function(){
	return redirect()->route('login');
});