<?php
namespace App\Routing;

// use App\Models\Database;

class Route {
    private static $routes = [];

    public static function showRoutes(){
        return self::$routes;
    }

    public static function add($uri, $controller) {
        $uri = "#^" . $uri . "$#";
        self::$routes[] = ['uri' => $uri, 'controller' => $controller];
    }

    public static function dispatch($uri) {
        foreach (self::$routes as $route) {
            if (preg_match($route['uri'], $uri, $matches)) {
                if (count($matches) > 0) {
                    list($controller, $method) = explode('@', $route['controller']);
                    $controllerClass = 'App\Controllers\\' . $controller;
                    $controllerInstance = new $controllerClass();
                    $controllerInstance->$method();
                    return;
                }
            }
        }
        echo '404 Not Found';
    }
}

// Thêm các route ở đây
Route::add('/product/list', 'ProductController@productList');
Route::add('/product/test', 'ProductController@producttest');
Route::add('/product/detail/(\d+)', 'ProductController@productdetail');

Route::add('/admin', 'DashboardController@Dashboard'); //ok

Route::add('/admin/user', 'UserController@listUsers'); //ok
Route::add('/admin/user/add', 'UserController@addUser'); //ok
Route::add('/admin/user/update', 'UserController@test');
Route::add('/admin/user/delete', 'UserController@deleteUser'); //ok

Route::add('/admin/product', 'ProductController@listProduct'); //ok
Route::add('/admin/product/add', 'ProductController@addProduct'); //ok
Route::add('/admin/product/update', 'ProductController@test');
Route::add('/admin/product/delete', 'ProductController@deleteProduct'); //ok

Route::add('/admin/category', 'CategoryController@listCategory'); //ok
Route::add('/admin/category/add', 'CategoryController@addCategory'); //ok
Route::add('/admin/category/update', 'CategoryController@updateCategory');
Route::add('/admin/category/delete', 'CategoryController@deleteCategory'); //ok

Route::add('/admin/coupon', 'CouponController@listCoupon'); //ok
Route::add('/admin/coupon/add', 'CouponController@addCoupon'); //ok
Route::add('/admin/coupon/update', 'CouponController@updateCoupon');
Route::add('/admin/coupon/delete', 'CouponController@deleteCoupon'); //ok

Route::add('/admin/blog', 'BlogController@listBlog'); //ok
Route::add('/admin/blog/add', 'BlogController@addBlog'); //ok
Route::add('/admin/blog/category', 'BlogController@addCategoryBlog'); //ok
Route::add('/admin/blog/category/delete', 'BlogController@deleteCategoryBlog'); //ok
// Route::add('/admin/blog/delete', 'BlogController@test');

Route::add('/', 'ViewsController@viewHome');
Route::add('/index', 'ViewsController@viewHome');
Route::add('/home', 'ViewsController@viewHome');
Route::add('/about', 'ViewsController@viewAbout');
Route::add('/blog', 'ViewsController@viewBlog');
Route::add('/cart', 'CartController@viewCart');
Route::add('/category', 'ViewsController@viewCategory');
Route::add('/checkout', 'ViewsController@viewCheckout');
Route::add('/comingSoon', 'ViewsController@viewComingSon');
Route::add('/contact', 'ViewsController@viewContact');
Route::add('/dashboard', 'ViewsController@viewDashboard');
Route::add('/product', 'ViewsController@viewProduct');
Route::add('/wishlist', 'ViewsController@viewWishlist');

Route::add('/logout', 'AuthController@Logout');
Route::add('/login', 'AuthController@Login');

Route::add('/popup/quickView', 'ViewsController@quickView');
Route::add('/addToCart', 'CartController@addToCart');


