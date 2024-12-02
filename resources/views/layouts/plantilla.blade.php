<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clonamex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="asset('assets/logo.jpg')" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .n{

          background-image: url(https://img.freepik.com/fotos-premium/fondo-rojo-abstracto_8466-4.jpg?semt=ais_hybrid);
          background-position: center;
          height: 70px;
          background-size: cover
        }


        .l{
            background-image: url(https://c4.wallpaperflare.com/wallpaper/621/859/641/peliculas-terror-wallpaper-preview.jpg);
          background-position: center;
          height: 70px;
          background-size: cover
        }
      .t{
        background-color: rgba(236, 7, 7, 0.387);
      }
      .k{
        background-color: rgba(0, 0, 0, 0.566);
      }

      .m{
            display: flex;
            justify-content: space-around;
            align-items: center;

        }
        .f{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .e{
            display: flex;
            width: 1000px;
        }
        .h{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .bg-image {
            background-image: url('');
            /* background-size: cover;  */
            background-position: center;
            height: 300px;
        }
        .bg-imagen {
            background-image: url('https://i.pinimg.com/originals/10/b1/ba/10b1bad21f79df5f462c1c09f12db6ff.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .zoom:hover {
      transform: scale(1.2);
      transition: transform 0.3s ease-in-out;
    }

    </style>
</head>
<body class="bg-imagen">
  {{-- @include('partials/mensaje') --}}
    <header class="t text-white border border-dark f  p-3 rounded text-center ">
      <img src="/assets/w.jpg" alt="" height="120px" class=" rounded w-25">
      {{-- <h2 class=" p-9 rounded text-center  f zoom">Clonamex </h2> --}}
      <img src="/assets/logo.jpg" alt="" height="120px" class="zoom rounded ">
    </header>

    <div>
        <nav class="navbar  k">
            <div class="container-sm ">
            <form class="d-flex e " id="searchForm" onsubmit="return search()" role="search" >
                <input class="form-control me-2 " type="search" id="searchInput" placeholder="Buscar" aria-label="Search" style="display: flex; with: 100px; ">
                <button class="btn btn-outline-success h" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            @yield('meter')
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('index')}}">Inicio</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{route('actores')}}">Actores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('peliculas')}}">Peliculas</a>
                    </li>
                  </ul>
                  <form class="d-flex mt-3" role="search" onsubmit="return search()">
                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>

                </div>
              </div>
            </div>
            </div>

        </nav>
    </div>

    <main class="h">

      <div class="m">
        @yield('ye')

      </div>


        @yield('botones')

        @yield('form')
    </main>










    <script>
        function search() {

        var query = document.getElementById('searchInput').value.trim().toLowerCase();


        var pages = {
            'peliculas': 'http://127.0.0.1:8000/peliculas',
            'actores': 'http://127.0.0.1:8000/actores',
            'Peliculas': 'http://127.0.0.1:8000/peliculas',

        };


        if (pages[query]) {
            window.location.href = pages[query];
        } else {
            alert('Erroooooooooooor esta mal, naaa no te creas solo que Página no encontrada');
        }
        return false;
    }

        document.getElementById('foto').addEventListener('change',

        function(event) {

        const fileInput = event.target;
        const preview = document.getElementById('preview');
        if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block'; // Mostrar la

        imagen

        };
        reader.readAsDataURL(fileInput.files[0]);
        } else {
        preview.style.display = 'none'; // Ocultar si no hay

        archivo

        }
    });



    </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
