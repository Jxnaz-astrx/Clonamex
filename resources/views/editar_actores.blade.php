@extends('layouts.plantilla')

@section('form')
<div class="container-sm bg-dark text-dark p-3 rounded text-center d-flex justify-content-center align-items-center min-vh-100">
 <form action="{{route('actualizar_actores', $actor)}}" method="POST" enctype="multipart/form-data" class="form-control form-agregar">
    @csrf
    @method('PUT')
    @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <center><h2>EDITAR</h2></center>
    <label class="form-label">
        Nombre:
        <input class="form-control" name="nombre" type="text" placeholder="Nombre del Actor" value="{{old('nombre', $actor->nombre)}}">
    </label>
    <br><br>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto del Actor:</label>

        <input type="file" name="foto" id="foto" class="form-control" required>

        <div class="mt-3">
        <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; height: 150px; width:150px; border-radius: 5px;">

        </div>
    </div>
    <center>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </center>
  
  </form>
</div>
@endsection
