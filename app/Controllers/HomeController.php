<?php
namespace App\Controllers;
class HomeController extends BaseController {
    public function index() {
        require_once 'app/Views/home.php';
    }
}
