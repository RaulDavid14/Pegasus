@extends('adminlte::page')

@section('title', 'Índice')

@section('content_header')
    <h1>Citas</h1>
@stop

@section('content')
    {{-- Mensaje de confirmación --}}
    @if (session('success'))
        <div class="alert alert-success" id="successMessage">
            {{ session('success') }}
        </div>
    @endif
    <table border="1" class="text-center table table-bordered table-striped table-hover">
        <thead>
            <tr class="text-sm">
                <th>Paciente</th>
                <th>Psicólogo</th>
                <th>Fecha de la cita</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr>
                    <td class="text-sm">{{ $cita->patient->militaryElement->name }}</td>
                    <td class="text-sm">{{ $cita->patient->userPsicologo->name }}</td>
                    <td class="text-sm">{{ $cita->appointment_date }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('citas.show', $cita) }}">
                                <button class="btn btn-sm btn-secondary mt-2 mr-2">
                                    <i class="far fa-eye"></i>Detalles
                                </button>
                            </a>
                            <a href="{{ route('citas.edit', $cita) }}">
                                <button class="btn btn-sm btn-primary mt-2 mr-2">
                                    <i class="fas fa-edit"></i>Editar
                                </button>
                            </a>
                            <form action="{{ route('citas.destroy', $cita) }}" method="post"
                                style="display: inline;" class="formulario-eliminar">
                                {{-- Se usa para prevenir inyecciones de sql fuera del sistema local, es un token para confirmar que somos nosotros     --}}
                                @csrf
                                {{-- También se debe cambiar como el patch para que se identifique en el route --}}
                                @method('DELETE')
                                {{-- Botón para accionar la eliminación --}}
                                <button type="submit" class="btn btn-sm btn-danger mt-2 mr-2">
                                    <i class="fa fa-trash"></i> Borrar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="mt-2">
        {{ $elementos->links() }}
    </div> --}}
    <div class="text-center">
        <a href="{{ route('citas.create') }}">
            <button class="btn btn-sm btn-success mt-2 mr-2">
                <i class="fa fa-plus"></i> Agendar cita
            </button>
        </a>
    </div>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{-- Inclusión de scrip para los botones de confirmación --}}
    {{-- Mensaje de session en caso de confirmarse la eliminación --}}
    @if (session('deleted') == 'El elemento fue borrado con éxito')
        <script>
            Swal.fire({
                title: "!Es un hecho!",
                text: "El elemento fue borrado con éxito.",
                icon: "success"
            });
        </script>
    @endif
    {{-- Script que lleva acabo la pregunta de confirmación --}}
    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault(); //Se detiene el envío del formulario
            //En su lugar, saldrá la alerta
            Swal.fire({
                title: "¿Estás seguro?",
                text: "Esta es una acción definitiva D:",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Borrar"
            }).then((result) => {
                if (result.isConfirmed) {
                    //Se envía el formulario si es true, y se envía con submit para borrar el registro
                    this.submit();
                }
            });
        });
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 5000);
    </script>
@stop
