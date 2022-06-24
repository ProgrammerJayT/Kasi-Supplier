<?php

class Documents extends Controller {
    function index () {

        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $this->view('documents/upload');
    }
}