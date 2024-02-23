<?php
namespace App\Controllers;
use App\Models\AuthModel;

class AuthController extends BaseController {

    public function __construct() {
        parent::__construct();
    }
   
    public function Logout() {
        $AuthModel = new AuthModel();
        $Logout = $AuthModel->Logout();
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function Login() {
        $AuthModel = new AuthModel();
        $Login = $AuthModel->Login();
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }
}