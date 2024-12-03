<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use App\Models\Actores;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view('index');
    }

    public function peliculas(){

        $peliculas = Peliculas::all();

        $peliculas = Peliculas::paginate(2);

        return view('peliculas', compact('peliculas'));
    }

    public function guardar(Request $request, Peliculas $pelicula)
    {
    $request->validate([
    'nombre' => 'required',
    'sinopsis' => 'required',
    'duracion' => 'required',
    'trailer' => 'required',
    'foto' => 'required|image'
    ],[
    'nombre.required' => 'El campo Nombre es necesario',
    'sinopsis.required' => 'El campo Nombre es necesario',
    'duracion.required' => 'El campo Nombre es necesario',
    'trailer.required' => 'El campo Nombre es necesario',
    'foto.required' => 'El campo Foto es requerida'
    ]);


    $foto = time() . '.' . $request->foto->extension();
    $request->foto->move(public_path('imagenes/peliculas/'), $foto);
    $pelicula = Peliculas::create([
    'nombre' => $request->nombre,
    'sinopsis' => $request->sinopsis,
    'categoria' => $request->categoria,
    'duracion' => $request->duracion,
    'trailer' => $request->trailer,
    'foto' => $foto,
    ]);

    return redirect()->route('peliculas')->with('mensaje','Pelicula
    Agregada correctamente');
    }

    public function editar(Peliculas $pelicula)
    {
        return view('editar', compact('pelicula'));
    }

    public function actualizar(Request $request, Peliculas $pelicula)
    {

    $request->validate([
    'nombre' => 'required',
    'sinopsis' => 'required',
    'duracion' => 'required',
    'trailer' => 'required',
    'foto' => 'required|image'
    ],[
    'nombre.required' => 'El campo Nombre es necesario',
    'sinopsis.required' => 'El campo Nombre es necesario',
    'duracion.required' => 'El campo Nombre es necesario',
    'trailer.required' => 'El campo Nombre es necesario',
    'foto.required' => 'El campo Foto es requerida'
    ]);



    $image_path = public_path(). '/imagenes/peliculas/'. $pelicula->foto;
    unlink($image_path);

    $foto = time() . '.' . $request->foto->extension();

    $request->foto->move(public_path('imagenes/peliculas/'), $foto);

    $pelicula->update([
    'nombre' => $request->nombre,
    'sinopsis' => $request->sinopsis,
    'categoria' => $request->categoria,
    'duracion' => $request->duracion,
    'trailer' => $request->trailer,
    'foto' => $foto,
    ]);
    return redirect()->route('peliculas')->with('mensaje','PeliculaAgregada correctamente');
    }

    public function borrar($pelicula)
    {
        $peli = Peliculas::find($pelicula);
        $image_path = public_path(). '/imagenes/peliculas/'. $peli->foto;
        unlink($image_path);
        $peli->delete();
        return redirect()->route('peliculas');
    }

    public function agregar(){
        return view('agregar');
    }


    // Actores

    public function actores()
    {
        $actores = Actores::all();


        $actores = Actores::paginate(3);

        return view('actores', compact('actores'));
    }

    public function agregar_actores()
    {
        return view('agregar_actores');
    }

    public function guardar_actores(Request $request, Actores $actor)
    {
        $request->validate([
            'nombre' => 'required',
            'foto' => 'required|image'
            ],[
            'nombre.required' => 'El campo Nombre es necesario',
            'foto.required' => 'El campo Foto es requerida'
            ]);


            $foto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('imagenes/actores/'), $foto);
            $actor = Actores::create([
            'nombre' => $request->nombre,
            'foto' => $foto,
            ]);

            return redirect()->route('actores')->with('mensaje','Pelicula
            Agregada correctamente');
    }

    public function editar_actores(Actores $actor)
    {
        return view('editar_actores', compact('actor'));
    }

    public function borrar_actores($actor)
    {
        $act = Actores::find($actor);
        $image_path = public_path(). '/imagenes/actores/'. $act->foto;
        unlink($image_path);
        $act->delete();
        return redirect()->route('actores');
    }

    public function actualizar_actores(Request $request, Actores $actor)
    {

        $request->validate([
            'nombre' => 'required',
            'foto' => 'required|image'
            ],[
            'nombre.required' => 'El campo Nombre es necesario',
            'foto.required' => 'El campo Foto es requerida'
            ]);






            $foto = time() . '.' . $request->foto->extension();

            $image_path = public_path(). '/imagenes/actores/'. $actor->foto;
            unlink($image_path);

            $request->foto->move(public_path('imagenes/actores/'), $foto);

            $actor->update([
            'nombre' => $request->nombre,
            'foto' => $foto,
            ]);

    return redirect()->route('actores')->with('mensaje','Pelicula
    Agregada correctamente');
    }

    public function ordenar($orden)
    {
    switch ($orden) {
        case 'nombre':
            $peliculas = Peliculas::orderBy('nombre', 'asc')->paginate(2);
            break;
        case 'nombre2':
            $peliculas = Peliculas::orderBy('nombre', 'desc')->paginate(2);
            break;
        default:
            $peliculas = Peliculas::paginate(2);
            break;
    }

    return view('peliculas', compact('peliculas'));
    }

    public function ordenar_2($orden2)
{
    switch ($orden2) {
        case 'nombre':
            $actores = Actores::orderBy('nombre', 'asc')->paginate(3);
            break;
        case 'nombre2':
            $actores = Actores::orderBy('nombre', 'desc')->paginate(3);
            break;
        default:
            $actores = Actores::paginate(3);
            break;
    }
    return view('actores', compact('actores'));
}



}
