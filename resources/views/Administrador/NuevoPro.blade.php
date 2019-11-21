<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Producto-Nuevo @yield('seccion')</title>
    </head>
    <body>
        <div class="container">


<!-- aqui empieza   -->
<div>
    <h1>craear un nuevo producto</h1>
    </div>
            <div>
        <form action="/Produts/{{$registro->id}}" method="POST">
          <input type="text" name="descripcion" id="descripcion">
            <input type="text" name="precio_propuesto" id="precio_propuesto">
            <input type="text" name="disponibles" id="disponibles">
            <input type="submit" value="Enviar">
                 @csrf
             </form>
     </div>




            @yield('content')
        </div>
    </body>
</html>
