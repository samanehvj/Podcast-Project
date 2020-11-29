<?php

class UserController extends Controller
{

    public function login()
    {
        if(!isset($_POST['email']) || !isset($_POST['password'])) {
            $this->go('home', 'login');
        }

        $userModel = $this->model('User');
        $user = $userModel->get($_POST['email'], $_POST['password']);


        if($user->id) {
            $_SESSION['userId'] = $user->id;
            $_SESSION['userName'] = $user->name;
            $this->go('user', 'cms');
        }
    }

    public function logout()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
        $this->go('home', 'index');
    }

    public function cms()
    {
        if (!isset($_SESSION['userId'])) {
            $this->go('home', 'login');
        }

        $this->setView('cms/dashboard' );
        $this->view->render();
    }

}