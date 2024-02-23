<?php

namespace App\Models;

use App\Models\Database;

class CouponModel extends BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addCoupon($code ,$discount ,$created_at ,$expiry_date ,$usage_count ,$description) {
        $isDataValid = true;
        if (empty($code) || empty($discount) || empty($created_at) || empty($expiry_date) || empty($usage_count) || empty($description)) {
            $isDataValid = false;
        }
        if ($isDataValid) {
            $query = "INSERT INTO coupons (`name_coupon`, `discount_coupon`, `start_date_coupon`, `end_date_coupon`, `max_uses_coupon`, `description_coupon`)
            VALUES ('$code', '$discount', '$created_at', '$expiry_date', '$usage_count', '$description')";
            $this->db->conn->query($query);
            echo '<script>addItemSuccess("Thêm");</script>';
        } else {
            echo '<script>addItemError();</script>';
        }
    }
    public function getCoupon()
    {
        $query = "SELECT *
        FROM coupons";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function deleteCoupon($id){
        $query = "SELECT * FROM coupons WHERE id_coupon ='$id'";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            $delete = "DELETE FROM coupons WHERE id_coupon ='$id'";
            if ($this->db->conn->query($delete) === TRUE) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
            } 
        }
        echo "Không tìm thấy dữ liệu";
        exit;

    }



    function updateCoupon($id, $title, $description){

        if (empty($title) || empty($description) ) {
            echo '<script>addItemError();</script>';
        } else {
            $query = "UPDATE coupons SET title = '$title', description = '$description' WHERE id_coupon = $id";
            $this->db->conn->query($query);
            echo '<script>addItemSuccess("Cập nhật");</script>';
            
        }
    }

    public function getCouponDetail($id)
    {
        $query = "SELECT *
        FROM coupons WHERE id_coupon = '$id'";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
