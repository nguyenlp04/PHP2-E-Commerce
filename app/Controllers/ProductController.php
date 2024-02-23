<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        parent::__construct();
        $this->productModel = new ProductModel();
    }


    public function listProduct()
    {
        require_once 'app/Views/includes/admin/header.php';
        $ProductModel = new ProductModel();
        $getProduct = $ProductModel->getProduct();
        require_once 'app/Views/admin/products/listProducts.php';
        require_once 'app/Views/includes/admin/footer.php';
    }

    public function addProduct()
    {
        require_once 'app/Views/includes/admin/header.php';
        $CategoryModel = new CategoryModel();
        $getCategory = $CategoryModel->getCategory();
        require_once 'app/Views/admin/products/addProduct.php';
        require_once 'app/Views/includes/admin/footer.php';
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $discount = $_POST["discount"];
            $date = $_POST["date"];
            $quatity = $_POST["quantity"];
            $idCategory = $_POST["category"];
            $description = $_POST["description"];
            $view = 0;
            $image = $_FILES["image"];
            $ProductModel = new ProductModel();
            $addProduct = $ProductModel->addProduct($name, $price, $discount, $date, $quatity, $idCategory, $description, $view, $image);
        }
        
        
    }

    public function deleteProduct()
    {
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
    
            $ProductModel = new ProductModel();
            $deleteProduct = $ProductModel->deleteProduct($id);
        } else {
            echo "ID không được truyền";
        }
    
    }
}
