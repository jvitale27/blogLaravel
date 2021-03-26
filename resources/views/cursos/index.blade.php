@extends('layouts.plantilla')

@section('title','Document')

@section('content')
		<h1>Bienvenidos a la pagina cursos</h1>
		<a href="{{ route('cursos.create') }}">Crear Curso</a>
		<ul>
			@foreach ($cursos as $cur)
			<li>
				<a href="{{ route('cursos.show', $cur) }}">{{$cur->name}}</a>
			</li>
			@endforeach
		</ul>

		{{$cursos->links()}}
@endsection
