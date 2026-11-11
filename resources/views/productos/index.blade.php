@extends('layouts.layout')

@section('contenido')
    <div class="grid grid-cols-6 gap-3">

        <div class="col-span-2">
    <h1 class="text-3xl font-bold text-white">
    Lista de Productos</h1>

    <p class="text-yellow-300 italic">Bienvenido a la página de productos.</p>

        <div class="mt-5">
          
            <form action="{{ route('productos.store') }}" method="POST" class="flex flex-col">
                @csrf
            <input type="text" id="nombre" name="nombre" placeholder="Nombre.." class="border border-gray-300 rounded py-2 px-4 w-full mt-3 hover:bg-white hover:text-black">
            
            <input type="text" id="descripcion" name="descripcion" placeholder="Descripciòn..." class="border border-gray-300 rounded py-2 px-4 w-full mt-3 hover:bg-white hover:text-black">

            <input type="text" id="precio" name="precio" placeholder="Precio..." class="border border-gray-300 rounded py-2 px-4 w-full mt-3 hover:bg-white hover:text-black">

            <input type="submit" value="Agregar Producto" class="bg-yellow-300 text-black font-bold py-2 px-4 rounded mt-3 hover:bg-yellow-400 hover:text-white">
            </form>
        </div>
</div>

<div class="col-span-4">
    <table class="table-auto w-full border border-gray-100 rounded-lg shadow-md">
        <thead class="text-white bg-gray-950 bg-opacity-25 p-4">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad->sum('stock') }}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $productos->links() }}
    </div>
    </div>
@endsection