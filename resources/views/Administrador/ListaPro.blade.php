
@extends('layaut')

@section('seccion', 'Listado de Venta')

@section('content')

<div>
        <div><a href="Produts/create" class="btn btn-primary">CREAR</a></div>

</div>

<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Desponible</th>
            <th scope="col">Acción</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $product)
            <tr>
            <th scope="row">{{$product->descripcion}}</th>
            <td>{{$product->precio_propuesto}}</td>
            <td>{{$product->disponibles}}</td>
            <td><li></li></td>


        </tr>
            @endforeach
        </tbody>
      </table>






@endsection
