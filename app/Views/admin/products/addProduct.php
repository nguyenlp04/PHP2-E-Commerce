<div class="w-full">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/super-build/ckeditor.js"></script>
    <div class="flex justify-center xl:w-11/13">
        <div class="w-11/12 xl:w-11/13 mt-4 mb-8">
            <div class="w-full bg-white rounded-lg min-h-screen">
                <div class="w-full flex justify-center h-auto">
                    <div class="w-11/12">
                        <div class="title-container flex items-center">
                            <h1 class="text-[#0957CB] font-semibold text-md py-4 h3">Thêm Sản Phẩm</h1>
                        </div>
                        <form method="post" enctype="multipart/form-data" class="text-black">
                            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-x-4 md:gap-y-0 gap-4">
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Tên Sản Phẩm</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="name">
                                </div>
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="category" class="text-black  font-semibold pb-1 capitalize">Danh Mục</label>
                                    <select id="category" name="category" class="p-2  border border-[#a5abb5] rounded" required>
                                        <?php foreach ($getCategory as $category) : ?>
                                            <option name="category" value="<?= $category['id_category'] ?>"><?= $category['title'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Giá Bán</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="price">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Giá Giảm</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="discount">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Số Lượng</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="quantity">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Ngày Nhập</label>
                                    <input type="date" id="title" class="p-2  border border-[#a5abb5] rounded" name="date">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="description" class="text-black  font-semibold pb-1 capitalize"> Mô
                                        tả</label>
                                    <textarea type="text" id="title" class="p-2 h-[8.5rem] w-full border border-[#E8F0FC] rounded" name="description"></textarea>
                                </div>

                            </div>

                            <div class="w-full flex flex-col py-2 mt-10">
                                <div class="text-black pb-3 capitalize inline-block"> <i class="fa-solid fa-file-image fa-2xl"></i> Tải lên ảnh sản phẩm
                                </div>
                                <input type="file" class="article_photo" name="image[]" id="image" class="p-2  hidden border border-[#E8F0FC] rounded" style="display:none" multiple accept="image/*">
                                <div class=" flex items-center">
                                    <div id="preview"></div>
                                    <div class="image-upload-btn uploadImage p-2 rounded" data-preview="preview">
                                        <label for="image" style="display:flex; align-items:center; margin-bottom: 0px; ">
                                            <i class="fa-solid fa-upload mr-2"></i>
                                            <p>Tải lên</p>
                                        </label>
                                    </div>
                                    <div class="image-remove-btn deleteImage p-2 rounded" data-preview="preview">
                                        <i class="fa-solid fa-trash-can mr-2"></i>
                                        <p>Xóa ảnh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-end">
                                <input type="submit" name="submit" class="hover:text-[#0957CB] bg-[#0957CB] text-white rounded-lg p-3 text-sm font-semibold" value="Thêm sản phẩm">
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>