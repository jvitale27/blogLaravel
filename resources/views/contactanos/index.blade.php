@extends('layouts.plantilla')

@section('title','Contáctanos')

@section('content')
		<h1>Déjanos un mensaje</h1>

		<form action="{{ route('contactanos.store') }}" method="post">

			<!-- creo y envio un token para seguridad del formulario -->
			@csrf

			<label>
				Nombre:
				<br>
				<input type="text" name="name" value="{{ old('name') }}">
			</label>

			@error('name')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br>
			<label>
				Correo:
				<br>
				<input type="text" name="correo" value="{{ old('correo') }}">
			</label>

			@error('correo')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br>
			<label>
				Mensaje:
				<br>
				<textarea name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
			</label>

			@error('mensaje')
			<br>
			<small>*{{ $message }}</small>
			<br>
			@enderror

			<br>
			<button type="submit">Enviar mensaje</button>
		</form>

		<!-- Envio un mensaje de sesion de 'Correo enviado' -->
		
		@if (session('info'))
			{{-- expr --}}
			<script>
				alert('{{session('info')}}')
			</script>
		@endif
@endsection
