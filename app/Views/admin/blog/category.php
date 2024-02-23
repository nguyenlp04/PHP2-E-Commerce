<div class="w-full">
    <div class="flex justify-center xl:w-11/13">
        <div class="w-11/12 xl:w-11/13 mt-4 mb-8">
            <div class="w-full bg-white rounded-lg min-h-screen">
                <div class="w-full flex justify-center h-auto">
                    <div class="w-11/12">
                        <div class="title-container flex items-center">
                            <h1 class="text-[#0957CB] font-semibold text-md py-4 h3">Thêm Danh Mục <a href="category"><i class="fa-solid fa-circle-plus"></i></a></h1>
                        </div>
                        <form method="post" enctype="multipart/form-data" class="text-black">
                            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-x-4 md:gap-y-0 gap-4">
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Tên danh mục</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="name" value="<?php if(isset($_GET["id"])){ echo $getCategoryBlogDetail[0]['title']; }?>"
>
                                </div>

                                <div class="w-full flex flex-col py-2  md:row-span-2 md:row-start-1 md:col-start-2">
                                    <label for="description" class="text-black  font-semibold pb-1 capitalize"> Mô
                                        tả</label>
                                    <textarea type="text" id="title" class="p-2 h-[8.5rem]  border border-[#E8F0FC] rounded" name="description"><?php if(isset($_GET["id"])){ echo $getCategoryBlogDetail[0]['description']; }?></textarea>
                                </div>
                            </div>
                            <div class="w-full flex justify-end">
                                <input name="<?php echo (isset($_GET["id"])) ? "update" : "submit"; ?>" type="submit" class="hover:text-[#0957CB] bg-[#0957CB] text-white rounded-lg p-3 text-sm font-semibold" value="<?php echo (isset($_GET["id"])) ? "Cập nhật" : "Thêm"; ?> danh mục">
                            </div>
                        </form>
                        <div class="list-category mt-5">
                        <table id="example" class="display" style="width:100%;">
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
                                <?php foreach ($getCategoryBlog as $category) : ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td> <?= $category['title'] ?></td>
                                        <td><?= $category['description'] ?></td>
                                        <td>
                                            <a href="category?id=<?= $category['id_category'] ?>" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>
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

</div>