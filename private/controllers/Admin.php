<?php

class Admin extends Controller {
    function index () {
        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $account = new Account();

        $accountData = $account->findAll();

        $this->view('dashboard/admin', ['accountData' => $accountData]);

    }
}