<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

//	protect $table = "users";		//Hace que el modelo Curso administre la tabla 'users' en vez de la 'cursos'

//cuando hay insercion masiva, solo guardo en la BD estos campos indicados aqui. Es por seguridad
	protected $fillable = ['name','slug','descripcion','categoria']; 

//cuando hay insercion masiva, NO en la BD estos campos indicados aqui. Lo contrario al anterior
//	protected $guarded = ['status']; 
	protected $guarded = [];			//nada que proteger 

//esta funcion esta implementada en la clase Model y por defecto devuelve 'id'
//la sobreescribo para que las busquedas inteligentes dentro de la vble curso sean por campo 'slug' y no por 'id' 	
	public function getRouteKeyName(){
		//return $this->getKeyName();
		return 'slug';
	}
}
