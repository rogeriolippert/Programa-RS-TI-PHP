<?php
class Home extends Controller {

    // Index of the home page (localhost/home(/index))
    public function index() {
        $this->view('home/index', []);
    }
}