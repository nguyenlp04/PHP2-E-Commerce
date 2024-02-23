<?php

namespace App\Models;

use App\Models\Database;

class UserModel extends BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getUser()
    {
        $query = "SELECT *
        FROM customer";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


    public function addUser($fullname, $username, $pass, $cfpass, $email, $roles, $avatar)
    {
        echo 11111;
        $isDataValid = true;
        if (empty($fullname) || empty($username) || empty($pass) || empty($cfpass) || empty($email) || empty($roles) ) {
            $isDataValid = false;
        }
        if ($isDataValid) {
            $avatar = $_FILES['image']['name'];
            if ($avatar != "") {
                $path = $avatar;
            } else {
                $path = "user.png";
            }
            $source_img = $_FILES['image']['tmp_name'];
            $path_img =  './public/images/user/' . $avatar;
            move_uploaded_file($source_img, $path_img);
            $query = $sql = "INSERT INTO customer (`username`, `fullname`, `password`,`email`, `avatar`, `roles`)
            VALUES ('$username' ,'$fullname' ,'$email' ,'$pass  ' ,'$path' ,'$roles')";
            if ($this->db->conn->query($query)) {
                echo '<script>addItemSuccess("Thêm");</script>';
            }
        } else {
            echo '<script>addItemError();</script>';
        }
    }


    function deleteUser($id)
    {
        $query = "SELECT * FROM customer WHERE id_customer ='$id'";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            $delete = "DELETE FROM customer WHERE id_customer ='$id'";
            if ($this->db->conn->query($delete) === TRUE) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        }
        echo "Không tìm thấy dữ liệu";
        exit;
    }
}
