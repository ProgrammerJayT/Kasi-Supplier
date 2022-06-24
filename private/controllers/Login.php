<?php

class Login extends Controller
{
    public function index() {
        $account = new Account();

        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            unset($_SESSION['USER']);
            $this->redirect('Login');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($accountData = $account->where('email', $_POST['email'])) {
                $accountData = $accountData[0];

                $user = $_POST['user'];

                if ($user == 'admin') {
                    if ($accountData->type == 'admin') {
                        if (password_verify($_POST['password'], $accountData->password)) {
                            Authentication::authenticate($accountData);
                            $this->redirect('Admin');
                        } else {
                            echo '<script>alert("Wrong password")</script>';
                        }
                    }
                } else {
                    if ($accountData->type == 'customer') {
                        if (password_verify($_POST['password'], $accountData->password)) {
                            Authentication::authenticate($accountData);
                            if (!$accountData->hasUploaded) {
                                $this->redirect('Documents');
                            } else {
                                $this->redirect('CustomerDashboard');
                            }
                        } else {
                            echo '<script>alert("Wrong password")</script>';
                        }
                    } else {
                        if ($accountData->type == 'supplier') {
                            if (password_verify($_POST['password'], $accountData->password)) {
                                Authentication::authenticate($accountData);
                            } else {
                                echo '<script>alert("Wrong password")</script>';
                            }
                        }
                    }
                }
            } else {
                echo '<script>alert("Email does not exist")</script>';
            }
        }

        $this->view('authentication/login');
    }
}