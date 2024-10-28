<?php

namespace App\Controllers;

use App\Models\Cines;

class CineController
{
    public function editCine($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /');
            exit;
        }

        //busquem la peli
        $cine = Cines::find($id);

        if (!$cine) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('cines/edit', ['cine' => $cine]);
    }
    public function indexReal()
    {
        //obtenim totes les pelis
        $cines = Cines::getAll();

        //pasem les pelis a la vista
        return view('home', ['cines' => $cines]);
    }

    public function update($id, $data)
    {
        //modifiquem
        Cines::update($id, $data);

        //retonem a la pàgina principal
        header('location: /');
        exit;
    }
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /');
            exit;
        }

        //busquem la peli
        $cine = Cines::find($id);
        //retornem la vista en la peli
        return view('cines/delete', ['cine' => $cine]);

    }

    public function show($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /');
            exit;
        }

        //busquem la peli
        $cine = Cines::find($id);
        //retornem la vista en la peli
        return view('cines/show', ['cine' => $cine]);

    }
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Cines::delete($id);

        //retornar a la vista
        header('location: /');
    }
    public function create()
    {
        return view('cines/create');
    }
    public function store($data)
    {
        //cridem funcio create del model
        cines::create($data);
        //retornar a la vista principal
        header('location: /');
        exit;
    }

}