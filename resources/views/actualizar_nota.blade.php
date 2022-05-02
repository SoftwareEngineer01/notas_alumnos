@extends('layout')

@section('content')

    <div class="col-md-2 float-md-end">
        <a href="{{url('/')}}" class="btn btn-info">Listado de Notas</a>
    </div>

    <h2 class="text-center">Actualizar Nota</h2>

    @if ($errors->any())
        <div class="alert alert-warning">
            <strong>Advertencia!</strong> Por favor validar todos los campos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="my-5" action="{{ url('notas', $nota->id ) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')

        <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">*Nombres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="estudiante" value="{{$nota->estudiante}}" required>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="nota1" class="col-sm-2 col-form-label">*Parcial 1</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nota1" name="nota1" value="{{$nota->nota1}}" required>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="nota2" class="col-sm-2 col-form-label">*Parcial 2</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nota2" name="nota2" value="{{$nota->nota2}}" required>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="nota3" class="col-sm-2 col-form-label">*Parcial 3</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nota3" name="nota3" value="{{$nota->nota3}}" required>
            </div>
        </div>

        <br>

        <div class="my-3">
            <button type="submit" class="btn btn-success">Actualizar</button>
        </div>

    </form>

@endsection
