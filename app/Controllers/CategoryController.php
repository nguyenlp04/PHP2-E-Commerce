<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addCategory()
    {
        require_once 'app/Views/includes/admin/header.php';
        require_once 'app/Views/admin/category/addCategory.php';
        require_once 'app/Views/includes/admin/footer.php';
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $CategoryModel = new CategoryModel();
            $addCategory = $CategoryModel->addCategory($name, $description);
        }
    }
    public function listCategory()
    {
        require_once 'app/Views/includes/admin/header.php';
        $CategoryModel = new CategoryModel();
        $getCategory = $CategoryModel->getCategory();
        require_once 'app/Views/admin/category/listCategorys.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
    public function deleteCategory()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $CategoryModel = new CategoryModel();
            $deleteCategory = $CategoryModel->deleteCategory($id);
        } else {
            echo "ID không được truyền";
        }
    }

    public function updateCategory()
    {
        require_once 'app/Views/includes/admin/header.php';
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $CategoryModel = new CategoryModel();
            if (isset($_POST['submit'])) {
                $title = $_POST["name"];
                $description = $_POST["description"];
                $updateCategory = $CategoryModel->updateCategory($id, $title, $description);
            }
            $getCategoryDetail = $CategoryModel->getCategoryDetail($id);
        } else {
            echo "ID không được truyền";
        }
        require_once 'app/Views/admin/category/updateCategory.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
}
