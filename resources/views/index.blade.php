@extends('layouts/plantilla')

@section('ye')

    @include('partials/clonamex')
    <div id="carouselExampleInterval" class="carousel slide bg-dark w-50 rounded " data-bs-ride="carousel" style="">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="/assets/fondo1.jpg" class="d-block  rounded" alt="..." style="height: 431px; width: 100%">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="/assets/fondo2.jpg" class="d-block  rounded" alt="..." style="height: 431px; width: 100%">
          </div>
          <div class="carousel-item">
            <img src="/assets/fondo3.jpg" class="d-block  rounded" alt="..." style="height: 431px; width: 100%">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>


      <div class="card mb-3 h" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/assets/logo.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Clonamex </h5>
              <p class="card-text">Esta sera una de las mejores experiencias visuales mas sorprendentes de tu vida.</p>
              <p class="card-text"><small class="text-body-secondary">¿Estas listo?</small></p>
            </div>
          </div>
        </div>
      </div>


@endsection
