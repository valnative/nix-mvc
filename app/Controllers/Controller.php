<?php

namespace App\Controllers;

use App\Models\ProductModel;
use Framework\View;

class Controller
{
    public View $view;
    public ProductModel $model;

    public function __construct()
    {
        $this->view = new View();
    }
}
