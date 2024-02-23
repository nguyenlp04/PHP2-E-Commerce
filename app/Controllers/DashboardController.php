<?php
namespace App\Controllers;
use App\Models\DashboardModel;
class DashboardController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function Dashboard() {
        require_once 'app/Views/includes/admin/header.php';
        require_once 'app/Views/includes/admin/footer.php';
    }
    
}
