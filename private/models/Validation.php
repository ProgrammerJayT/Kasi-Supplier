<?php

class Validation extends Model{

    public function validate($DATA){

        $account = new Account();

        $this->errors = array();

        if($account->where('email', $_POST['email'])){
            $this->errors['email_exists'] = "Email already exists";
            echo '<script>alert("Email already exists")</script>';
        }

        if(!preg_match('/^[a-zA-Z]+$/', $DATA['name'])){
            $this->errors['name'] = "Non-alpha characters not allowed\n";
        }
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['surname'])){
            $this->errors['surname'] = "Non-alpha characters not allowed\n";
        }

        $userType = ['supplier', 'customer'];
        if(empty($DATA['user']) || !in_array($DATA['user'], $userType)){
            $this->errors['user'] = "Select user type!";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}