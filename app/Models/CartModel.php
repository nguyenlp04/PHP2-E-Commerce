<?php

namespace App\Models;

use App\Models\Database;

class CartModel extends BaseModel
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addToCart($id, $size, $color, $quantity)
    {

        $idProduct = $id;
        $idCustomer = $_SESSION['customer']['id_customer'];

        $insert = "INSERT INTO cart (id_product, id_customer, size, color, quantity) VALUES ('$idProduct', '$idCustomer', '$size', '$color', '$quantity')";
        $this->db->conn->query($insert);

        
        

    }
    public function viewCart()
    {
        $id_customer = $_SESSION['customer']['id_customer'];
        $query = "SELECT 
        products.name_products AS product_name,
        products.id_product AS id_product,
        products.price AS price,
        size,
        color,
        cart.quantity AS quantity,
        images.url_image AS image_url
    FROM 
        cart
    JOIN 
        products ON cart.id_product = products.id_product
    LEFT JOIN 
        images ON products.id_product = images.id_product
    WHERE 
        cart.id_customer = $id_customer
    GROUP BY 
        cart.id_product, cart.color, cart.size
    ";
        $result = $this->db->conn->query($query);
        $data = array();
        $totalPrice = 0; // Khởi tạo tổng tiền
        while ($row = $result->fetch_assoc()) {
            $totalPrice += floatval($row['price']) * intval($row['quantity']); // Tính tổng tiền
            $row['total'] = floatval($row['price']) * intval($row['quantity']); // Tính tổng giá sản phẩm
            $data[] = $row;
        }
        // $data['total_price'] = $totalPrice;
        // $data[] = ['total_price' => $totalPrice];

        return $data;
    }

    public function getCoupons()
    {
        $query = "SELECT * FROM coupons";
        $result = $this->db->conn->query($query);
        $coupons = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $coupons[$row['name_coupon']] = $row['discount_coupon'];
        }
        $couponsJSON = json_encode($coupons);

        return $couponsJSON;
    }
}
