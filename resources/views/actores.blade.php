@extends('layouts/plantilla')
 <body class="l">

    @section('meter')
    <div>
        <a href="{{route('agregar_actores')}}" class="btn btn-primary zoom">Agregar</a>
        <center>
          <h4 style="color: white;">Ordenar</h4>
          <a href="{{route('ordenar_2','nombre')}}"><button type="button" class="btn btn-secondary btn btn-primary zoom">A-Z</button></a>

          <a href="{{route('ordenar_2','nombre2')}}"><button type="button" class="btn btn-secondary btn btn-primary zoom">Z-A</button></a>
      </center>
    </div>
    @endsection

    @section('botones')



    <div class="d-flex  gap-5">
        @if ($actores->isEmpty())
        <div class="card  h-25" style="width: 18rem; ">
            <img src="/assets/agregar.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center bg-dark text-white">
              <h5 class="card-title">¿Quieres agregar un Actor?</h5>
              <p class="card-text">Agregar</p>
              <a href="{{route('agregar_actores')}}" class="btn btn-primary zoom"><i class="fa-solid fa-plus"></i></a>
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

          @foreach ($actores as $actor)
          <div class="card" style="width: 18rem; ">
            <img src="/imagenes/actores/{{$actor->foto}}" class="card-img-top" alt="...">
            <div class="card-body text-center bg-dark text-white">
                <h3>{{$actor->nombre}}</h3>
                <hr>
                    <a href="{{route('editar_actores', $actor)}}" class="btn btn-primary" style="height: 40px; width: 80px;">Editar</a>

                    <form action="{{route('borrar_actores', $actor)}}" method="post" style="margin: 15px;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" style="height: 40px; width: 100px;">Eliminar</button>

                    </form>


            </div>
          </div>

          @endforeach
        @endif


    </div>
    <div class="d-flex justify-content-center">
        {{$actores->links('pagination::bootstrap-5')}}
    </div>

  @endsection
 </body>
