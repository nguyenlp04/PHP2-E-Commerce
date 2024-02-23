<div class="w-full">
    <!-- <link rel="stylesheet" href="<?= BASE_PATH ?>/public/vendor/dataTables/jquery.dataTables.min.css">
    <script src="<?= BASE_PATH ?>/public/vendor/dataTables/jquery-3.7.0.js"></script>
    <script src="<?= BASE_PATH ?>/public/vendor/dataTables/jquery.dataTables.min.js"></script> -->
    <div class="flex justify-center xl:w-11/13">
        <div class="w-11/12 xl:w-11/13 mt-4 mb-8">
            <div class="w-full bg-white rounded-lg min-h-screen">
                <div class="w-full flex justify-center h-auto">
                    <div class="w-11/12">
                        <p class="text-[#0957CB] font-semibold  text-2xl py-4">Danh sách bài viết</p>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th style="width: 20rem;">Tên sản phẩm</th>
                                    <th>Danh Mục</th>
                                    <th>Giá Bán</th>
                                    <th>Giảm Giá</th>
                                    <th>Số Lượng</th>
                                    <th style="width: 7rem;">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1 ?>
                                <?php foreach ($getProduct as $product) : ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td> <a href="<?= BASE_PATH ?>/product?id=<?= $product['id_product'] ?>"> <?= $product['name_products'] ?></a></td>
                                        <td><?= $product['name_category'] ?></td>
                                        <td><?= $product['price'] ?></td>
                                        <td><?= $product['discount'] ?></td>
                                        <td><?= $product['quantity'] ?></td>
                                        <td>
                                            <a href="updatePost?post_id=1" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>
                                            <!-- <a href="deletePost?post_id=1" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>\ -->
                                            <a href="#" onclick="confirmDelete('product/delete','<?php echo $product['id_product']; ?>')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php $stt++ ?>
                                <?php endforeach; ?>
                            </tbody>
                            
                        </table>

                        <script>
                            new DataTable('#example');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>