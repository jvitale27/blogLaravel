@extends('layouts.plantilla')

@section('title','Document')

@section('content')
		<h1>Bienvenidos al curso : <?php $categoria ? print $curso->name . ", de la categoria " . $categoria
								:  print $curso ?></h1>
@endsection
