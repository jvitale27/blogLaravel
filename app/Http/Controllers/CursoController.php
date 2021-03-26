<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //
    public function index(){
//        $cursos = Curso::all();
//        $cursos = Curso::paginate(10, ['name', 'categoria']); //solo devuelve name y categoria de a 10
        $cursos = Curso::paginate();
//        return $cursos;
        return view('cursos.index', compact('cursos'));       //compact crea el array 'cursos' => $curso

//otra forma
//        $curs = new Curso;
//        $cursos = $curs->paginate();
//        return view('cursos.index', compact('cursos'));       //compact crea el array 'cursos' => $curso
    }


//    public function store(Request $request){
    public function store(StoreCurso $request){     //este ya viene validad desde app\Http\Request\StoreCurso.php
                                                    //cuando son muchas validaciones se caen por Request, sino 
                                                  //directamente las hacemos aqui
//        return $request->all();
/*
        //valida los datos segun las reglas que le paso. Si no se cumplen detiene el script me devuelve la pagina 
        //con una variable interna de error @error y $message
        $request->validate([
            'name'        => 'required|max:20',
            'descripcion' => 'required|min:10',
            'categoria'   => 'required'
        ]);

        $curso = new Curso();

        $curso->name        = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria   = $request->categoria;

//        return $curso;
        $curso->save();
*/

        $request['slug'] = strtolower( str_replace(' ', '-', $request->name));   //armo el slug de la url

        $curso = Curso::create( $request->all());   //insercion masiva en la BD,
                                                    //todo lo util de request y que es fillable.

//        return redirect()->route('cursos.show', $curso->id);
        return redirect()->route('cursos.show', $curso);    //aunque no le pase el id, Laravel lo extrae de $cursos
    }


    public function create(){
    	return view('cursos.create');
    }


//    public function show($id){
//        $curso = Curso::find($id);
    public function show(Curso $curso){

//      return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso'));       //compact crea el array 'curso' => $curso
    }


//    public function edit($id){
//        $curso = Curso::find($id);
    public function edit(Curso $curso){
//return $curso;

        return view('cursos.edit', compact('curso'));
    }


    public function update(Request $request, Curso $curso){

        $request->validate([
            'name'        => 'required|max:20',
            'descripcion' => 'required|min:10',
            'categoria'   => 'required'
        ]);
/*
        $curso->name        = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria   = $request->categoria;

        $curso->save();
*/
        $curso->update( $request->all());       //actualizacion masiva en la BD, lo que es fillable
                                                //este parece que no valida los datos

//        return view('cursos.show', compact('curso'));       //compact crea el array 'curso' => $curso
        return redirect()->route('cursos.show', $curso);    //aunque no le pase el id, Laravel lo extrae de $cursos
    }


    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');
    }



//estas dos no se utilizan. Solo las dejo como ejemplo

    public function categoria($id, $categoria){
//      return view('cursos.categoria', ['curso' => $id, 'categoria' => $categoria]);
        $curso = Curso::find($id);
        return view('cursos.categoria', compact('curso','categoria'));
    }

    public function showCat($id, $categoria = null){
//      return view('cursos.showCat', ['curso' => $id, 'categoria' => $categoria]);
        $curso = Curso::find($id);
        return view('cursos.showCat', compact('curso','categoria'));
    }

}
