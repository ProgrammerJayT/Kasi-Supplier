<?php

class Market extends Controller {
    function index () {
        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $this->view('order/market');
    }
}