<?php
class Home extends Controller {

    // Index of the home page (localhost/home(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        
        // Initialize Home model
        $home = $this->model('HomeModel');

        // Call function from the model
        $homeData = $home->getPessoas();

        $this->view('home/index', ['pessoas' => $homeData, 'parameters' => [$param1, $param2, $param3]]);
    }
}

?>