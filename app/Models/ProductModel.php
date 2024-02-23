<?php

namespace App\Models;

use App\Models\Database;

class ProductModel extends BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducts()
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN 
        images ON products.id_product = images.id_product
        GROUP BY products.id_product";
        $result = $this->db->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductNewArrivals()
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN images ON products.id_product = images.id_product
        GROUP BY products.id_product 
        ORDER BY products.entry_date DESC 
        LIMIT 5";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductTopRated()
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title 
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN 
        images ON products.id_product = images.id_product
        GROUP BY products.id_product 
        ORDER BY total_reviews DESC 
        LIMIT 4";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductBestSelling()
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title, SUM(order_items.quantity) AS total_ordered_quantity
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN order_items ON products.id_product = order_items.id_product
        LEFT JOIN 
        images ON products.id_product = images.id_product
        GROUP BY products.id_product 
        ORDER BY total_ordered_quantity DESC 
        LIMIT 1";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductOnSale()
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title 
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN 
        images ON products.id_product = images.id_product
        WHERE products.discount > 0
        GROUP BY products.id_product 
        ORDER BY products.discount ASC 
        LIMIT 4";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductRecommend()
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title 
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN 
        images ON products.id_product = images.id_product
        GROUP BY products.id_product 
        ORDER BY RAND()
        LIMIT 8";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductDetail($id)
    {
        $updateViewsProduct = "UPDATE products SET views = views + 1 WHERE id_product = $id";
        $this->db->conn->query($updateViewsProduct);

        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN 
        images ON products.id_product = images.id_product
        WHERE products.id_product = $id
        GROUP BY products.id_product";
        $result = $this->db->conn->query($query);
        $data = [];
        if ($result->num_rows > 0) {
            $data['item'] = $result->fetch_assoc();
        }

        $queryImages = "SELECT images.url_image  FROM products
        LEFT JOIN images ON products.id_product = images.id_product
        WHERE products.id_product = $id";
        $resultImages = $this->db->conn->query($queryImages);
        $imageData = [];
        if ($resultImages->num_rows > 0) {
            while ($row = $resultImages->fetch_assoc()) {
                $imageData[] = $row['url_image'];
            }
        }
        $data['images'] = $imageData;
        return $data;
    }

    public function getRelatedProducts($id)
    {
        $query = "SELECT products.*, COUNT(reviews.id_review) AS total_reviews, images.url_image AS image, category.title AS category_title 
        FROM products
        LEFT JOIN reviews ON products.id_product = reviews.id_product 
        LEFT JOIN category ON products.id_category = category.id_category
        LEFT JOIN 
        images ON products.id_product = images.id_product
        WHERE products.id_category = (SELECT id_category FROM products WHERE id_product = $id) AND products.id_product <> $id 
        GROUP BY products.id_product LIMIT 4";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function addProduct($name, $price, $discount, $date, $quatity, $idCategory, $description, $view, $image)
    {
        $isDataValid = true;
        if (empty($name) || empty($price) || empty($discount) || empty($date) || empty($quatity) || empty($idCategory) || empty($description) || empty($image) ) {
            $isDataValid = false;
        }
        if ($isDataValid) {
            $query = $sql = "INSERT INTO products (`name_products`, `price`, `discount`,`id_category`, `quantity`, `entry_date`, `description`, `views`)
            VALUES ('$name', '$price', '$discount','$idCategory', '$quatity', '$date','$description', '$view')";
            if ($this->db->conn->query($query)) {
                $idProduct = $this->db->conn->insert_id;
                if (is_array($image) && !empty($image['name'][0])) {
                    echo "<pre>";
                    var_dump($image);
                    echo "</pre>";
                    $imagePaths = [];
                    foreach ($image['tmp_name'] as $key => $tmp_name) {
                        $imageName = $this->db->conn->real_escape_string($image['name'][$key]);
                        $targetPath = './public/images/products/' . $imageName;
                        echo $tmp_name;
                        echo $targetPath;
                        if (move_uploaded_file($tmp_name, $targetPath)) {
                            $imagePaths[] = $imageName;
                        } else {
                            echo "Không thể chuyển tập tin.";
                        }
                    }

                    foreach ($imagePaths as $imagePath) {
                        $imagePath = $this->db->conn->real_escape_string($imagePath);
                        $imageQuery = "INSERT INTO images (id_product, url_image) VALUES ($idProduct, '$imagePath')";
                        $this->db->conn->query($imageQuery);
                    }
                }
                echo '<script>addItemSuccess("Thêm");</script>';
            }
        } else {
            echo '<script>addItemError();</script>';
        }
    }

    function getProduct()
    {
        $query = "SELECT products.*, category.title AS name_category
        FROM products
        INNER JOIN category ON products.id_category = category.id_category";
        $result = $this->db->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function deleteProduct($id)
    {
        $query = "SELECT * FROM products WHERE id_product ='$id'";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            $delete = "DELETE FROM products WHERE id_product ='$id'";
            if ($this->db->conn->query($delete) === TRUE) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        }
        echo "Không tìm thấy dữ liệu";
        exit;
    }
}
