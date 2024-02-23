<?php
namespace App\Controllers;
use App\Models\CouponModel;
class CouponController extends BaseController {
    private $productModel;

    public function __construct() {
        parent::__construct();
    }


  
    public function listCoupon() {
        require_once 'app/Views/includes/admin/header.php';
        $CouponModel = new CouponModel();
        $getCoupon = $CouponModel->getCoupon();
        require_once 'app/Views/admin/coupons/listCoupons.php';
        require_once 'app/Views/includes/admin/footer.php';
    }

    public function addCoupon() {
        require_once 'app/Views/includes/admin/header.php';
        require_once 'app/Views/admin/coupons/addCoupon.php';
        require_once 'app/Views/includes/admin/footer.php';
        if (isset($_POST['submit'])) {
            $code = $_POST["code"];
            $discount = $_POST["discount"];
            $created_at = $_POST["created_at"];
            $expiry_date = $_POST["expiry_date"];
            $usage_count = $_POST["usage_count"];
            $description = $_POST["description"];
            $CouponModel = new CouponModel();
            $addCoupon = $CouponModel->addCoupon($code ,$discount ,$created_at ,$expiry_date ,$usage_count ,$description);
        }
    }

    public function deleteCoupon()
    {
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $CouponModel = new CouponModel();
            $deleteCoupon = $CouponModel->deleteCoupon($id);
        } else {
            echo "ID không được truyền";
        }
    
    }

    public function updateCoupon()
    {
        require_once 'app/Views/includes/admin/header.php';
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $CouponModel = new CouponModel();
            if (isset($_POST['submit'])) {
                $title = $_POST["name"];
                $description = $_POST["description"];
                $updateCoupon = $CouponModel->updateCoupon($id, $title, $description);
            }
            $getCouponDetail = $CouponModel->getCouponDetail($id);
        } else {
            echo "ID không được truyền";
        }
        require_once 'app/Views/admin/coupons/updateCoupon.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
  
}
