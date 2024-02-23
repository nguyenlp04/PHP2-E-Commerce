<?php

namespace App\Models;

use App\Models\Database;

class AuthModel extends BaseModel
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function Login()
    {
        $username = $_POST["singin-email"];
        $password = $_POST["singin-password"];

        $query = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
        $result = $this->db->conn->query($query);
        if ($result->num_rows > 0) {
            $info = $result->fetch_assoc();
            $customerData['id_customer'] = $info['id_customer'];
            $customerData['username'] = $info['username'];
            $customerData['password'] = $info['password'];
            $customerData['email'] = $info['email'];
            $customerData['fullname'] = $info['fullname'];
            $customerData['roles'] = $info['roles'];
            $customerData['avatar'] = $info['avatar'];
            $_SESSION['customer'] = $customerData;
            return $_SESSION['customer'];
        } else {
            // Trả về false nếu đăng nhập thất bại
            // return "Chua co session User";
        }
    }

    public function Logout()
    {
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        } 
        // if(!isset($_SESSION['customer'])){
        //     echo 'k co ss';
        // }
            // header("Location: category");
        // exit();
    }
}
