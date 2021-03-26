<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
    	return view('contactanos.index');
    }

    public function store(Request $request){

    	$request->validate([
			'name'    => 'required|regex:/^[\pL\pN ]+$/',
			'correo'  => 'required|email',
			'mensaje' => 'required',
    	]);
        //entre corchetes agrego los caracteres que permito en el array. Solo 5,6 o 7 caracteres, probar!!!!! 
        //'regex:/^[a-z0-9 .\-]+$/'     //esto es para la validation rules de Laravel
        //'regex:/^[\pL\pN +-]+$/'
        //'no_regex:/^[\pL\pN +-]+$/'   //impido esos caracteres
        //preg_match('/^[\pL\pN .-]+$/', $firstname)
        //\pL is any letter in any language, matches also Chinese, Hebrew, Arabic, ... characters.
        //\pN any kind of numeric character (means also e.g. roman numerals)
        //if you want to limit to digits, then use \pNd

 		$correo = new ContactanosMailable($request->all());

// 		return $request->all();

		Mail::to('jvitale27@hotmail.com')->send($correo);

//		return "Mensaje enviado.";
		return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado.'); //Envio un mensaje de sesion

    }
}
