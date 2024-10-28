<?php

namespace App\Models;

use Core\App;

class Cines
{
    protected static $table = 'Cines';
    protected static $filmTable = 'Peliculas';
    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public static function findFilm()
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT nombre FROM ' . self::$filmTable . ' WHERE id = :id');
        $statement->execute(array('id' => self::$pelicula_id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $data['pelicula_id'] = $data['pelicula_id'] === '' ? null : $data['pelicula_id'];

        $statement = $db->prepare('INSERT INTO '. static::$table . "(localidad, clientes, peliculas_mostradas, pelicula_id) VALUES (:localidad, :clientes, :peliculas_mostradas, :pelicula_id)");
        $statement->bindValue(':localidad', $data['localidad']);
        $statement->bindValue(':clientes', $data['clientes']);
        $statement->bindValue(':peliculas_mostradas', $data['peliculas_mostradas']);
        $statement->bindValue(':pelicula_id', $data['pelicula_id']);
        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET localidad = :localidad, clientes = :clientes, peliculas_mostradas = :peliculas_mostradas, pelicula_id = :pelicula_id  WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':localidad', $data['localidad']);
        $statement->bindValue(':clientes', $data['clientes']);
        $statement->bindValue(':peliculas_mostradas', $data['peliculas_mostradas']);
        $statement->bindValue(':pelicula_id', $data['pelicula_id']);

        $statement->execute();
    }

    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}