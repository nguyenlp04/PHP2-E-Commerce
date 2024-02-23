<div class="w-full">
    <link rel="stylesheet" href="../../../vendor/dataTables/jquery.dataTables.min.css">
    <script src="../../../vendor/dataTables/jquery-3.7.0.js"></script>
    <script src="../../../vendor/dataTables/jquery.dataTables.min.js"></script>
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
                                    <th>Mã Giảm Giá </th>
                                    <th>Số % giảm giá</th>
                                    <th>Ngày bắt đầu</th>
                                    <th>Ngày kết thúc</th>
                                    <th>Số lần sử dụng tối đa</th>
                                    <th>Mô tả</th>
                                    <th style="width: 4rem;">Thao Tác</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $stt = 1 ?>
                                <?php foreach ($getCoupon as $coupon) : ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td> <?= $coupon['name_coupon'] ?></td>
                                        <td><?= $coupon['discount_coupon'] ?></td>
                                        <td><?= $coupon['start_date_coupon'] ?></td>
                                        <td><?= $coupon['end_date_coupon'] ?></td>
                                        <td><?= $coupon['max_uses_coupon'] ?></td>
                                        <td><?= $coupon['description_coupon'] ?></td>
                                        <td>
                                            <a href="coupon/update?id=<?= $coupon['id_coupon'] ?>" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>
                                            <!-- <a href="deletePost?post_id=1" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>\ -->
                                            <a href="#" onclick="confirmDelete('coupon/delete', '<?php echo $coupon['id_coupon']; ?>')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>
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