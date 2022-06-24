<?php

class CustomerDashboard extends Controller {
    function index () {
        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $customer = new Customer();

        if ($customerData = $customer->where('email', $_SESSION['USER']->email)) {
            $customerData = $customerData[0];

            $fullName = $customerData->firstName . ' ' . $customerData->lastName;
            $name = $customerData->firstName;
        }

        $this->view('dashboard/customer', ['name' => $name]);
    }
}