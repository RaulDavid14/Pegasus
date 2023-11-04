@extends('adminlte::page')

@section('title', 'Insumos')

@section('content_header')
    <h1>Insumos</h1>
@stop

@section('content')
<body>
    <div class="text-center">
        <h1>Índice de insumos</h1>
        <a href="{{route('insumo.create')}}">
            <div class="btn btn-success">Agregar nuevo insumo</div>
        </a>
    </div>
    {{-- Mensaje de éxito --}}
    @if(session('success'))
    <div class="alert alert-success mt-2" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    {{-- Mensaje de modificación --}}
    @if(session('update'))
    <div class="alert alert-warning mt-2" id="updateMessage">
        {{ session('update') }}
    </div>
    @endif
    {{-- Se agrega mensaje para la eliminación --}}
    @if (Session::get('deleted'))
        <div class="alert alert-danger mt-2">
            <strong>{{Session::get('deleted')}}</strong><br>
        </div>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Inventario</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($insumos as $insumo)
                <tr>
                    <td>{{$insumo->inventario->descripcion}}</td>
                    <td>{{$insumo->insumodescripcion}}</td>
                    <td>{{$insumo->insumocantidad}}</td>
                    <td><a href="{{route('insumo.edit', $insumo)}}">
                        <div class="btn btn-primary">Editar</div>
                    </a>
                    </td>
                    <td>
                        <form action="{{route('insumo.destroy', $insumo)}}" method="post" style="display: inline;">
                            {{-- Se usa para prevenir inyecciones de sql fuera del sistema local, es un token para confirmar que somos nosotros --}}
                            @csrf
                            {{-- También se debe cambiar como el patch para que se identifique en el route --}}
                            @method('DELETE')
                            {{-- Botón para accionar la eliminación --}}
                            <a class="btn btn-danger" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Borrar</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-around">
        <img src="{{asset('img/perrito.png')}}" alt="perrito.png">
    </div>
    @if ($insumos->isEmpty())
        <h3 class="text-center" style="margin-top: 40px">Nada por aquí...</h3>
    @endif
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        // Función para ocultar el mensaje después de 5 segundos (5000 milisegundos)
    //Esta función se usa para ejecutar una acción después de un cierto tiempo
    setTimeout(function(){ //Función anónima, no tiene un nombre, se declara y se ejecuta al mismo tiempo.
        //Esto selecciona un elemento HTML usando su id, le pasamos el del mensaje y se pone none (sin mostrar)
        //Y se le dice que espero 5 seg antes de ejecutar lo anterior
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);

    //El de modificación:
    setTimeout(function(){
        document.getElementById('updateMessage').style.display = 'none';
    }, 5000);

    //El de borrado:
    setTimeout(function(){
        document.getElementById('deleteMessage').style.display = 'none';
    }, 5000);
    </script>
@stop