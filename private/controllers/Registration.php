<?php

class Registration extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $customer = new Customer();
            $supplier = new Supplier();
            $account = new Account();
            $validation = new Validation();

            if ($validation->validate($_POST)){

                $gender = '';
                $genderPos = $_POST['id'];

                if ($genderPos[6] <=4){
                    $gender = 'female';
                } else {
                    $gender = 'male';
                }

                $userData['firstName'] = $_POST['name'];
                $userData['lastName'] = $_POST['surname'];
                $userData['email'] = $_POST['email'];
                $userData['phone'] = $_POST['phone'];
                $userData['idNum'] = $_POST['id'];
                $userData['gender'] = $gender;
                $userData['address'] = $_POST['address'];

                $accountData['email'] = $_POST['email'];
                $accountData['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $accountData['type'] = $_POST['user'];

                $account->insert($accountData);

                $toObject = (object) $accountData;
                Authentication::authenticate($toObject);

                if($_POST['user'] == 'customer'){
                    $customer->insert($userData);
                }
                else {
                    $supplier->insert($userData);
                }

                $this->redirect('Documents');
            }
        }

        $this->view('authentication/registration');
    }
}