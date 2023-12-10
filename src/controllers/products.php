<?php 

/**
 * Function Inside the class are Methods
 * Methods inside the Controller class re known as Actions
 */

class Products {
    public function index() {
        require "src/models/product.php";

        $model = new Product;

        $products = $model->getData();

        require "view.php";
    }
}

?>