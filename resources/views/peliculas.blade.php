@extends('layouts/plantilla')
 <body class="l">

    @section('meter')
    <div>
        <a href="{{route('agregar')}}" class="btn btn-primary zoom">Agregar</a>
        <center>
            <h4 style="color: white;">Ordenar</h4>
            <a href="{{route('ordenar','nombre')}}"><button type="button" class="btn btn-secondary">A-Z</button></a>

            <a href="{{route('ordenar','nombre2')}}"><button type="button" class="btn btn-secondary">Z-A</button></a>
        </center>

    </div>
    @endsection

    @section('botones')

    <div class="d-flex  gap-5">
        @if ($peliculas->isEmpty())
        <div class="card  h-25" style="width: 18rem; ">
            <img src="/assets/agregar.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center bg-dark text-white">
              <h5 class="card-title">¿Quieres agregar una Pelicula?</h5>
              <p class="card-text">Agregar</p>
              <a href="{{route('agregar')}}" class="btn btn-primary zoom"><i class="fa-solid fa-plus"></i></a>
            </div>
          </div>

          <div class="card  h-25" style="width: 18rem;">
            <img src="/assets/chill.png" class="card-img-top" alt="..." height="287px">
            <div class="card-body text-center bg-dark text-white">
              <h6 class="card-title">Eres un tipo chill de cojones</h6>
              <p class="card-text">Regresar</p>
              <a href="{{route('index')}}" class="btn btn-primary zoom"><i class="fa-solid fa-arrow-left" ></i></a>
            </div>
          </div>
        @else
          @foreach ($peliculas as $pelicula)
          <div class="card" id="a" style="width: 18rem; ">
            {{-- <img src="/imagenes/peliculas/{{$pelicula->foto}}" class="card-img-top" alt="..."> --}}
            <img class="card-img-top" src="{{ asset('imagenes/peliculas/' . $pelicula->foto) }}" alt="Card image cap">
            <div class="card-body text-center bg-dark text-white">
                    <a href="{{route('editar', $pelicula)}}" class="btn btn-primary" style="height: 40px; width: 80px;">Editar</a>

                    <form action="{{route('borrar', $pelicula)}}" method="post" style="margin: 15px;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" style="height: 40px; width: 100px;">Eliminar</button>

                    </form>


                <hr>
              <a href="{{$pelicula->trailer}}" class="" target="_blank">Trailer</a>
            </div>
          </div>

          <div class="card" id="b" style="width: 18rem;">
            <div class="card-body text-center bg-dark text-white">
              <h3 class="card-title">{{$pelicula->nombre}}</h3>
              <p class="card-text">{{$pelicula->sinopsis}}</p>
              <hr>
              <p class="card-text">Categoria: {{$pelicula->categoria}}</p>
              <hr>
              <p class="card-text">Duracion: {{$pelicula->duracion}} Minutos</p>


            </div>
          </div>
          @endforeach

        @endif
    </div>



    <div class="d-flex justify-content-center mt-4">
        {{$peliculas->links('pagination::bootstrap-5')}}
        </div>

  @endsection
 </body>
