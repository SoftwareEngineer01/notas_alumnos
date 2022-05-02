@extends('layout')

@section('content')

    <div class="col-md-2 float-md-end">
        <a href="{{url('registro_notas')}}" class="btn btn-success">Nuevo</a>
    </div>

    <h1 class="text-center">Listado de Notas</h1>

    <table class="table table-striped table-bordered table-hover my-5">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Parcial 1</th>
            <th>Parcial 2</th>
            <th>Parcial 3</th>
            <th>Final</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($notas as $nota)
            <tr>
                <td>{{ $nota->estudiante }}</td>
                <td>{{ $nota->nota1 }}</td>
                <td>{{ $nota->nota2 }}</td>
                <td>{{ $nota->nota3 }}</td>
                <td>{{ $nota->promedio }}</td>
                <td>
                    <form action="{{ url('eliminar',$nota->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Esta seguro de eliminar el registro?')" type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    Are you sure
@endsection
