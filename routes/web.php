<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;
use Illuminate\Routing\Router;
//use App\Mail\ContactanosMailable;
//use Illuminate\Support\Facades\Mail;

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


Route::get('/', HomeController::class)->name('home');
//para versiones anteriores a la 8 se utilizaba
//Route::get('/', 'HomeController');
//pero hay que editar app\Providers\RouteServiceProvider.php, dentro de 
//protected $namespace = 'App\Http\Controllers';
//y ver si se lo esta pasando antes de group(base_path('routes\web.app')); sino agregar
//->namespace($this->namespace)

/*
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

//este tiene el mismo nombre 'cursos' que el primero (linea 27), pero son diferentes los metodos GET y POST
//para update se recomienda utilizar el metodo post
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');   //******** ver NOTA  ****** 

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');   //******** 

//este tiene el mismo nombre 'cursos' que el store (linea 31), pero son diferentes los metodos POST y PUT
//para update se recomienda utilizar el metodo put
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');	

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');	




Route::get('cursos/{id}/{categoria}', [CursoController::class, 'categoria'])->name('cursos.categoria');   //******** ver NOTA  ****** 

//****** NOTA ******** este es el de la nota pero mas completo, cumple con los dos****** 
Route::get('cursos/{id}/{categoria?}', [CursoController::class, 'showCat'])->name('cursos.showCat');

//Route::get('cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');   //******** 

*/

//TODO LO ANTERIOR SE RESUME CON LO QUE SIGUE, LARAVEL YA SABE LAS RUTAS CONOCIENDO EL CONTROLADOR
Route::resource('cursos', CursoController::class);
//solo le pasamos el nombre de la url principal 'cursos' y el controlador. Mediante las convenciones que
//utilizamos, Laravel sabe como armar los links. Los nombres de vbles sabe que son el singular de la url (curso) y el
//nombre de los links los arma con '{curso}.{metodo}' donde el metodo lo saca del controlador.

//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');
//esto es si quiero cambiar el nombre las url pero que siga funcionando el proyecto. 

//Para mostrar vistas estaticas que no consultan base de datos, etc. utilizo el metodo view
Route::view('nosotros', 'nosotros')->name('nosotros');


/*
Route::get('contactanos', function () {
	$correo = new ContactanosMailable;

	Mail::to('jvitale27@hotmail.com')->send($correo);

	return "mensaje enviado.";
})->name('contactanos.index');
*/

//Route::get('contactanos', [ContactanosController::class , 'index'])->name('contactanos.index');
//Route::post('contactanos', [ContactanosController::class , 'store'])->name('contactanos.store');
//lo cual lo resumo en...
Route::resource('contactanos', ContactanosController::class);



/*
Route::get('/', function () {
//    return view('welcome');
		return "Bienvenidos a la pagina principal";
});
*/
//ahora toma el control el controlador, entonces ya no escribo codigo aqui
//Route::get('/', HomeController::class);

/*
Route::get('cursos', function () {
    return "Bienvenidos a la pagina cursos";
});
*/
//ahora toma el control el controlador, entonces ya no escribo codigo aqui
//Route::get('cursos', [CursoController::class, 'index']);

/*
Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});
*/
//ahora toma el control el controlador, entonces ya no escribo codigo aqui
//Route::get('cursos/create', [CursoController::class, 'create']);

/*
Route::get('cursos/{curso}', function ($curso) {		//envio una variable por url
    return "Bienvenidos al curso : $curso";
});
*/
//ahora toma el control el controlador, entonces ya no escribo codigo aqui
//Route::get('cursos/{curso}', [CursoController::class, 'show']);			******** ver NOTA al final ****** 


/*
Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {		//envio dos variable por url
    return "Bienvenidos al curso : $curso, de la categoria $categoria";
});
*/

/*
//las dos anteriores se resumen en esta, que espera 1 o 2 variables/argumentos
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {	//envio una o dos variable por url
    if($categoria)
    	return "Bienvenidos al curso : $curso, de la categoria $categoria";
    else
    	return "Bienvenidos al curso : $curso";
});
*/
//ahora toma el control el controlador, entonces ya no escribo codigo aqui
//****** NOTA ******** este es el de la nota pero mas completo, cumple con los dos****** 
//Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'showCat']);
