<?php 

/**
 * Function Inside the class are Methods
 * Methods inside the Controller class re known as Actions
 */

class Controller {
    public function index() {
        require "model.php";

        $model = new Model;

        $products = $model->getData();

        require "view.php";
    }
}

?>