<?php

namespace App\Models;

use App\Models\Database;

class CategoryModel extends BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCategory()
    {
        $query = "SELECT *
        FROM category";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getCategoryProductCounts()
    {
        $query = "SELECT category.*, COUNT(products.id_product) AS product_count
        FROM category
        LEFT JOIN products ON category.id_category = products.id_category
        GROUP BY category.id_category, category.title";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function addCategory($name, $description) {
        $isDataValid = true;
        if (empty($name) || empty($description)) {
            $isDataValid = false;
        }
        if ($isDataValid) {
            $query = "INSERT INTO category (`title`, `description`)
            VALUES ('$name', '$description')";
            $this->db->conn->query($query);
            echo 123;
            echo '<script>addItemSuccess("Thêm");</script>';
        } else {
            echo '<script>addItemError();</script>';
        }
    }

    function deleteCategory($id){
        $query = "SELECT * FROM category WHERE id_category ='$id'";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            $delete = "DELETE FROM category WHERE id_category ='$id'";
            if ($this->db->conn->query($delete) === TRUE) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
            } 
        }
        echo "Không tìm thấy dữ liệu";
        exit;
    }

    function updateCategory($id, $title, $description){

        if (empty($title) || empty($description) ) {
            echo '<script>addItemError();</script>';
        } else {
            $query = "UPDATE category SET title = '$title', description = '$description' WHERE id_category = $id";
            $this->db->conn->query($query);
            echo '<script>addItemSuccess("Cập nhật");</script>';
            
        }
    }

    public function getCategoryDetail($id)
    {
        $query = "SELECT *
        FROM category WHERE id_category = '$id'";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

}
