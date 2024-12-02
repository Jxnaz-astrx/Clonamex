@extends('layouts.plantilla')

@section('form')
<form action="{{route('actualizar', $pelicula)}}" method="POST" enctype="multipart/form-data" class="form-control">
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
        <input class="form-control" name="nombre" type="text" placeholder="Nombre de la Pelicula" value="{{old('nombre', $pelicula->nombre)}}">
    </label>
    <br><br>
    <label class="form-label">
        Sinopsis: <br>
        <textarea class="form-control" name="sinopsis" id="" cols="40" rows="5" placeholder="Sinopsis:">{{($pelicula->sinopsis)}}</textarea>
    </label>
    <br><br>
    <label class="form-label">
        Categoria:
        <select class="form-control" name="categoria" id="">
            <option value="Accion" {{ $pelicula->categoria == 'Accion' ? 'selected' : '' }}>Accion</option>
            <option value="Ciencia Ficcion" {{ $pelicula->categoria == 'Ciencia Ficcion' ? 'selected' : '' }}>Ciencia Ficcion</option>
            <option value="Aventura" {{ $pelicula->categoria == 'Aventura' ? 'selected' : '' }}>Aventura</option>
            <option value="Comedia" {{ $pelicula->categoria == 'Comedia' ? 'selected' : '' }}>Comedia</option>
        </select>
    </label>
    <br><br>
    <label class="form-label">
        Duracion (minutos):
        <input class="form-control" name="duracion" type="number" placeholder="Duracion de la pelicula" value="{{old('duracion', $pelicula->duracion)}}">
    </label>
    <br><br>
    <label class="form-label">
        Trailer:
        <input class="form-control" name="trailer" type="text" placeholder="Enlace del trailer" value="{{old('trailer', $pelicula->trailer)}}">
    </label>
    <br><br>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto de la

        Pelicula:</label>

        <input type="file" name="foto" id="foto" class="form-control" required>

        <div class="mt-3">
        <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; height: 150px; width:150px; border-radius: 5px;">

        </div>
    </div>
    <center>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </center>

</form>
@endsection
