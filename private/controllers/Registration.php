<?php

class Registration extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo '<script>alert("Post")</script>';
        }

        $this->view('authentication/registration');
    }
}