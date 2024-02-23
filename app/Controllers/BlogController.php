<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        parent::__construct();
        $this->productModel = new BlogModel();
    }


    public function addBlog()
    {
        require_once 'app/Views/includes/admin/header.php';
        $BlogModel = new BlogModel();
        $getCategoryBlog = $BlogModel->getCategoryBlog();

        if (isset($_POST['submit'])) {
            if (isset($_POST['submit'])) {
                $name = $_POST["name"];
                $description = $_POST["description"];
                $addCategoryBlog = $BlogModel->addCategoryBlog($name, $description);
            }
        }
        
        $addBlog = $BlogModel->addBlog();

        require_once 'app/Views/admin/blog/addBlog.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
    public function listBlog()
    {
        require_once 'app/Views/includes/admin/header.php';
        require_once 'app/Views/admin/blog/listBlog.php';
        require_once 'app/Views/includes/admin/footer.php';
    }

    public function addCategoryBlog()
    {
        require_once 'app/Views/includes/admin/header.php';
        $BlogModel = new BlogModel();
    
        // Xử lý thêm danh mục blog
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $addCategoryBlog = $BlogModel->addCategoryBlog($name, $description);
        }
    
        // Xử lý cập nhật danh mục blog
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id = $_GET["id"];
            $title = $_POST["name"];
            $description = $_POST["description"];
            $updateCategoryBlog = $BlogModel->updateCategoryBlog($id, $title, $description);
        }
    
        // Lấy thông tin danh mục blog để cập nhật
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $getCategoryBlogDetail = $BlogModel->getCategoryBlogDetail($id);
        }
    
        // Lấy danh sách danh mục blog
        $getCategoryBlog = $BlogModel->getCategoryBlog();
    
        require_once 'app/Views/admin/blog/category.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
    

    public function deleteCategoryBlog()
    {

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $BlogModel = new BlogModel();
            $deleteCategory = $BlogModel->deleteCategoryBlog($id);
        } else {
            echo "ID không được truyền";
        }
    }


    public function updateCategoryBlog()
    {
        require_once 'app/Views/includes/admin/header.php';

        require_once 'app/Views/admin/blog/category.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
}
