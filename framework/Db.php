<?php

namespace Framework;

class Db
{
    public array $catalog;

    public function getDb(): array
    {
        $this->catalog = array(
            "beanie" => array(
                "id" => 1,
                "name" => "Beanie",
                "price" => "18.00",
                "photo" => "path_to_img"
            ),

            "belt" => array(
                "id" => 2,
                "name" => "Belt",
                "price" => "20.00",
                "photo" => "assets/img/belt-324x324.jpg"
            ),

            "cap" => array(
                "id" => 3,
                "name" => "Cap",
                "price" => "25.00",
                "photo" => "assets/img/cap-324x324.jpg"
            ),

            "hoodie" => array(
                "id" => 4,
                "name" => "Hoodie",
                "price" => "40.00",
                "photo" => "assets/img/hoodie-324x324.jpg"
            ),
        );
        return $this->catalog;
    }

}

