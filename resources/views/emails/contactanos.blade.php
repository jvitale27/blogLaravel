<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <style>
        	h1{
        		color: blue;
        	}
        </style>
        
    </head>
    </body>
    	<h1>Correo electronico</h1>
    	<p>Este es el primer correo que enviare por Laravel</p>

    	<!-- la vble $contacto proviene de la clase ContactosMailable.php -->
    	
    	<p><strong>Nombre:</strong> {{$contacto['name']}}</p>
    	<p><strong>Correo:</strong> {{$contacto['correo']}}</p>
		<p><strong>Mensaje:</strong> {{$contacto['mensaje']}}</p>
    </body>
</html>