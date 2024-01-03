<?php 

namespace App\Controllers;

use App\Models\Product;

/**
 * Function Inside the class are Methods
 * Methods inside the Controller class re known as Actions
 */

class Products {
    public function index() {
        $model = new Product;

        $products = $model->getData();

        require "views/products_index.php";
    }

    public function show() {
        require "views/products_show.php";
    }
}

?>