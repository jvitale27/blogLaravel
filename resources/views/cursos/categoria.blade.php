@extends('layouts.plantilla')

@section('title','Document')

@section('content')
		<h1>Bienvenidos al curso : <?php print $curso->name ." de la categoria : " . $categoria; ?> </h1>
@endsection
