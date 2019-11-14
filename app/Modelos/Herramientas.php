<?php


namespace App\Modelos;


class Herramientas
{

    public static function collectionToArray($data)
    {
        if (count($data) > 0) {
            return $data->toArray();
        }
        return [];
    }

}
