<?php
session_start();

// session_destroy();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

use App\Models\Database;
// $database = new Database();
// if ($database->checkConnection()) {
//     echo "Kết nối CSDL thành công.";
// } else {
//     echo "Kết nối CSDL thất bại.";
// }

use App\Routing\Route;

require_once 'config/config.php';
// Các logic xử lý tiếp theo
$uri = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
Route::dispatch($uri);

// use App\Models\AuthModel;

// $AuthModel = new AuthModel();

 
// if (isset($_POST['login'])) {
//     $Login = $AuthModel->Login();
//     // echo "<pre>";
//     // var_dump($Login);
//     // echo "</pre>";
//     // echo 'da nhan';
// } else {
//     // echo 'chua submit';
// }
// if(isset($_SESSION['customer'])){
// echo "<pre>";
// var_dump($_SESSION['customer']);
// echo "</pre>";
// }
