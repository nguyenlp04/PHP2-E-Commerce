<?php
namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\BlogModel;
use App\Models\CategoryModel;
use App\Models\ReviewModel;
use App\Models\AuthModel;

class ViewsController extends BaseController {


    public function __construct() {
        parent::__construct();
    }
   
    public function viewHome() {
        $ProductModel = new ProductModel();
        $BlogModel = new BlogModel();
        $AuthModel = new AuthModel();
        // $Login = $AuthModel->Login();
        $getProductNewArrivals = $ProductModel->getProductNewArrivals();
        $getProductTopRated = $ProductModel->getProductTopRated();
        $getProductBestSelling = $ProductModel->getProductBestSelling();
        $getProductOnSale = $ProductModel->getProductOnSale();
        $getProductRecommend = $ProductModel->getProductRecommend();
        $getBlogForHomePage = $BlogModel->getBlogForHomePage();
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/home.php';
        require_once 'app/Views/includes/footer.php';
       

    }

    public function viewCategory() {
        $CategoryModel = new CategoryModel();
        $ProductModel = new ProductModel();
        $getCategoryProductCounts = $CategoryModel->getCategoryProductCounts();
        $getAllProducts = $ProductModel->getAllProducts();
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/category.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewAbout() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/about.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewBlog() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/blog.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewCart() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/cart.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewCheckout() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/checkout.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewComingSoon() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/coming_soon.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewContact() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/contact.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewDashboard() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/dashboard.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewLogin() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/login.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewProduct() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header('Location: home');
        }
        
        $ProductModel = new ProductModel();
        $ReviewModel = new ReviewModel();
        $getProductDetail = $ProductModel->getProductDetail($id);
        $getReviewProduct = $ReviewModel->getReviewProduct($id);
        $getRelatedProducts = $ProductModel->getRelatedProducts($id);
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/product.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function viewWishlist() {
        require_once 'app/Views/includes/header.php';
        require_once 'app/Views/wishlist.php';
        require_once 'app/Views/includes/footer.php';
    }

    public function quickView() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header('Location: home');
        }
        $ProductModel = new ProductModel();
        $getProductDetail = $ProductModel->getProductDetail($id);
        require_once 'popup/quickView.php';
    }


   
}
