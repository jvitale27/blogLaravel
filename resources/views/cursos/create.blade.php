@extends('layouts.plantilla')

@section('title','Document')

@section('content')
		<h1>En esta pagina podras crear un curso</h1>
		<a href="{{ route('cursos.index') }}">Volver a Cursos</a>
		<form action="{{ route('cursos.store') }}" method="POST">
			
			<!-- creo y envio un token para seguridad del formulario -->
			@csrf
			
			<label>
				Nombre:
				<br>					<!-- completa con el valor viejo o sino con el pasado como parametro -->
				<input type="text" name="name" value="{{ old('name') }}">
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
				<textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
			</label>

			@error('descripcion')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br>
			<label>
				Categoria:
				<br>
				<input type="text" name="categoria" value="{{ old('categoria') }}">
			</label>
			
			@error('categoria')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br><br>
			<button type="submit">Enviar formulario</button>
			<input type="hidden" name="slug" value="este_es_el_slug">  <!-- esto despues se reemplaza -->
		</form>
@endsection
