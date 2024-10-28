<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        //partim la url
        $parts = explode('/', trim($uri,'/'));
        //indiquem ruta del controlador
        $controller = 'App\Controllers\FilmController';
        $controllerCine = 'App\Controllers\CineController';



        //Inici
        if ($uri === '/pelicules') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->index();

        }
        if ($uri === '/cines') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->indexCines();
        }
        if ($uri === '/') {
            require '../App/Controllers/CineController.php';
            $controllerInstance = new $controllerCine();
            return $controllerInstance->indexReal();
        }


        //create
        if($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        }
        if($parts[0] === 'createcine') {
            require '../App/Controllers/CineController.php';
            //creem nova instancia
            $controllerInstance = new $controllerCine();
            return $controllerInstance->create();
        }

        //Utilitzant POST guarde

        //delete en GET  mirem que sigue delete en la id
        if($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        }

        if($parts[0] === 'show' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->show($parts[1]);
        }


        //destroy en POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }


        //edit en GET
        if($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        }

        if($parts[0] === 'edit-cine' && $parts[1]) {
            require '../App/Controllers/CineController.php';
            $controllerInstance = new $controllerCine();
            return $controllerInstance->editCine($parts[1]);
        }


        //Actualitzar en POST
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        if ($parts[0] === 'updateCine' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/CineController.php';
            //creem nova instancia
            $controllerInstance = new $controllerCine();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }
        if($parts[0] === 'delete-cine' && $parts[1]) {
            require '../App/Controllers/CineController.php';
            //creem nova instancia
            $controllerInstance = new $controllerCine();
            return $controllerInstance->delete($parts[1]);
        }

        if($parts[0] === 'show-cine' && $parts[1]) {
            require '../App/Controllers/CineController.php';
            //creem nova instancia
            $controllerInstance = new $controllerCine();
            return $controllerInstance->show($parts[1]);
        }
        if ($parts[0] === 'destroycine' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/CineController.php';
            //creem nova instancia
            $controllerInstance = new $controllerCine();
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        if ($parts[0] === 'storecine' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerCine();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        return require '../resources/views/errors/404.blade.php';



    }

}