<?php

class Approve extends Controller {
    function index () {
        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $account = new Account();

        if ($_GET['action'] == 'approve') {
            $account->update($_GET['id'], ['status' => 'approved', 'hasUploaded' => true]);
        } else {
            $account->update($_GET['id'], ['status' => 'rejected']);
        }

        $this->redirect('Admin');
    }
}