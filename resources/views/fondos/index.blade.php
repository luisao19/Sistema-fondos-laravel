@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('fondos/create') }}" class="btn btn-success" >Registrar nuevo empleado</a>
<a href="{{ url('fondos/PDF') }}" class="btn btn-secondary" >PDF</a>
<br><br>
<table class="table table-striped">
    
    <thead class="thead-primary">
        <tr>
            <th>#</th>
            <th>Nombre del proyecto</th>
            <th>Fuente de fondos</th>
            <th>Monto planificado</th>
            <th>Monto patrocinado</th>
            <th>Monto fondos propios</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($fondos as $fondo)
            <tr>
                <td>{{ $fondo->id }}</td>
                <td>{{ $fondo->nombreProyecto }}</td>
                <td>{{ $fondo->fuenteFondos }}</td>
                <td>{{ $fondo->montoPlanificado }}</td>
                <td>{{ $fondo->montoPatrocinado }}</td>
                <td>{{ $fondo->montoFondosPropios }}</td>
                <td>
                    <a href="{{ url('/fondos/'.$fondo->id.'/edit' )}}" class="btn btn-warning">
                        Editar
                    </a>
                    
                    | 
                    
                    <form action="{{ url('/fondos/'.$fondo->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>
</div>
@endsection