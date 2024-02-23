<div class="w-full">
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
                                    <th>Tên danh mục </th>
                                    <th>Mô tả</th>
                                    <th style="width: 4rem;">Thao Tác</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php $stt = 1 ?>
                                <?php foreach ($getCategory as $category) : ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td> <?= $category['title'] ?></td>
                                        <td><?= $category['description'] ?></td>
                                        <td>
                                            <a href="category/update?id=<?= $category['id_category'] ?>" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>
                                            <!-- <a href="deletePost?post_id=1" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>\ -->
                                            <a href="#" onclick="confirmDelete('category/delete', '<?php echo $category['id_category']; ?>')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>
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