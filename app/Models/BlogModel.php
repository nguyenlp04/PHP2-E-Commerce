<?php

namespace App\Models;

use App\Models\Database;

class BlogModel extends BaseModel
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBlogForHomePage()
    {
        $query = "SELECT * FROM blogs LIMIT 3";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function addCategoryBlog($name, $description) {
        $isDataValid = true;
        if (empty($name) || empty($description)) {
            $isDataValid = false;
        }
        if ($isDataValid) {
            $query = "INSERT INTO category_blog (`title`, `description`)
            VALUES ('$name', '$description')";
            $this->db->conn->query($query);
            echo '<script>addItemSuccess("Thêm");</script>';
            ;
        } else {
            echo '<script>addItemError();</script>';
        }
    }
    public function getCategoryBlog()
    {
        $query = "SELECT *
        FROM category_blog";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function deleteCategoryBlog($id)
{
    $query = "SELECT * FROM category_blog WHERE id_category ='$id'";
    $result = $this->db->conn->query($query);
    if ($result->num_rows == 1) {
        $delete = "DELETE FROM category_blog WHERE id_category ='$id'";
        if ($this->db->conn->query($delete) === TRUE) {
            return true;
        } else {
            echo "Lỗi trong quá trình xóa: " . $this->db->conn->error;
        }
    } else {
        echo "Không tìm thấy dữ liệu";
    }
    return false;
}


function updateCategoryBlog($id, $title, $description){

    if (empty($title) || empty($description) ) {
        echo '<script>addItemError();</script>';
    } else {
        $query = "UPDATE category_blog SET title = '$title', description = '$description' WHERE id_category = $id";
        $this->db->conn->query($query);
        echo '<script>addItemSuccess("Cập nhật");</script>';
        
    }
}

public function getCategoryBlogDetail($id)
{
    $query = "SELECT *
    FROM category_blog WHERE id_category = '$id'";
    $result = $this->db->conn->query($query);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

    public function addBlog()  {
        
    }


}
