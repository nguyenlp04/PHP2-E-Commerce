<?php

namespace App\Models;

use App\Models\Database;

class ReviewModel extends BaseModel
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReviewProduct($id)
    {
        $query = "SELECT reviews.*, customer.*
        FROM reviews
        JOIN customer ON reviews.id_customer = customer.id_customer
        WHERE id_product = $id";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
