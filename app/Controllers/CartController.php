<?php
namespace App\Controllers;
use App\Models\CartModel;
class CartController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function addToCart() {
        (int)$quantity = $_GET['qty'];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $size = $_GET['size'];
            $color = $_GET['color'];
        } else {
            header('Location: home');
        }
        $CartModel = new CartModel();
        $addToCart = $CartModel->addToCart($id, $size, $color, $quantity);
        echo "<script>
        window.history.back();
        location.reload();
        </script>
        ";
        // echo "<pre>";
        // var_dump($addToCart);
        // echo "</pre>";
    }
    public function viewCart() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/cart.php';
        require_once 'app/Views/includes/footer.php';
        $CartModel = new CartModel();
        $viewCart = $CartModel->viewCart();
        $getCoupons = $CartModel->getCoupons();
        
        
    }

    
    
    
}
