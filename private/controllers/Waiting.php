<?php

class Waiting extends Controller {
    function index (){
        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $account = new Account();

        if ($accountData = $account->where('email', $_SESSION['USER']->email)) {
            $accountData = $accountData[0];

            $checkDocs = $accountData->hasUploaded;
            if (!$checkDocs) {
                $this->view('documents/upload');
            }
        }

        $this->view('authentication/waiting');
    }
}