@extends('layouts.plantilla')

@section('title','Document')

@section('content')
		<h1>Bienvenidos al curso : <?php print $curso->name; ?> </h1>
		<a href="{{ route('cursos.index')}}">Volver a Cursos</a>
		<br>
		<a href="{{ route('cursos.edit', $curso)}}">Editar curso</a>
		<p><strong>Categoria: </strong>{{$curso->categoria}}</p>
		<p>{{$curso->descripcion}}</p>

		<form action="{{ route('cursos.destroy', $curso)}}" method="POST">
			<!-- creo y envio un token para seguridad del formulario -->
			@csrf
				<!-- debido a que HTML solo acepta metodos GET y POST, el metodo DELETE lo paso como directiva -->
			@method('delete')
			
			<button type="submit">Eliminar</button>
		</form>
@endsection
