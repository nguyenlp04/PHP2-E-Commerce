<?php
namespace App\Controllers;
use App\Models\UserModel;
class UserController extends BaseController {

    public function __construct() {
        parent::__construct();
    }


    public function listUsers() {
        require_once 'app/Views/includes/admin/header.php';
        $UserModel = new UserModel();
        $getUser = $UserModel->getUser();
        require_once 'app/Views/admin/users/listUsers.php';
        require_once 'app/Views/includes/admin/footer.php';
    }

    public function addUser() {
        require_once 'app/Views/includes/admin/header.php';
        require_once 'app/Views/admin/users/addUser.php';
        require_once 'app/Views/includes/admin/footer.php';
        if (isset($_POST['submit'])) {
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            $cfpass = $_POST["cfpass"];
            $email = $_POST["email"];
            $roles = $_POST["roles"];
            $avatar = $_FILES["image"];
            $UserModel = new UserModel();
            $addUser = $UserModel->addUser($fullname ,$username ,$pass ,$cfpass ,$email ,$roles ,$avatar);
        }
    }

    public function deleteUser()
    {
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $UserModel = new UserModel();
            $deleteUser = $UserModel->deleteUser($id);
        } else {
            echo "ID không được truyền";
        }
    
    }

   
}
