@extends('layouts.plantilla')

@section('title','Document')

@section('content')
		<h1>En esta pagina podras editar un curso</h1>
		<a href="{{ route('cursos.index') }}">Volver a Cursos</a>
		<form action="{{ route('cursos.update', $curso) }}" method="POST">
			
			<!-- creo y envio un token para seguridad del formulario -->
			@csrf

			<!-- debido a que HTML solo acepta metodos GET y POST, el metodo PUT lo paso como directiva -->
			@method('PUT')
			
			<label>
				Nombre:
				<br>					<!-- completa con el valor viejo o sino con el pasado como parametro -->
				<input type="text" name="name" value="{{ old('name', $curso->name) }}">
			</label>

			@error('name')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br>
			<label>
				Descripcion:
				<br>					<!-- completa con el valor viejo o sino con el pasado como parametro -->
				<textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion) }}</textarea>
			</label>

			@error('descripcion')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br>
			<label>
				Categoria:
				<br>					<!-- completa con el valor viejo o sino con el pasado como parametro -->
				<input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
			</label>

			@error('categoria')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br><br>
			<button type="submit">Actualizar Formulario</button>
			<input type="hidden" name="slug" value="aqui_va_el_slug">		<!-- esto hay que cambiarlo -->
		</form>
@endsection
