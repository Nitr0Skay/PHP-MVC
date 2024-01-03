<?php 

namespace App\Controllers;

/**
 * Function Inside the class are Methods
 * Methods inside the Controller class re known as Actions
 */

class Products {
    public function index() {
        $model = new \App\Models\Product;

        $products = $model->getData();

        require "views/products_index.php";
    }

    public function show() {
        require "views/products_show.php";
    }
}

?>