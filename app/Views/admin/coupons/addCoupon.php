<div class="w-full">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/super-build/ckeditor.js"></script>
    <div class="flex justify-center xl:w-11/13">
        <div class="w-11/12 xl:w-11/13 mt-4 mb-8">
            <div class="w-full bg-white rounded-lg min-h-screen">
                <div class="w-full flex justify-center h-auto">
                    <div class="w-11/12">
                        <form method="post" enctype="multipart/form-data" class="text-black">
                            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-x-4 md:gap-y-0 gap-4">
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Mã giảm giá</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="code">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Số % giảm giá</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="discount">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Ngày bắt đầu</label>
                                    <input type="date" id="title" class="p-2  border border-[#a5abb5] rounded" name="created_at">
                                </div>
                                
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Ngày kết thúc</label>
                                    <input type="date" id="title" class="p-2  border border-[#a5abb5] rounded" name="expiry_date">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Số lần sử dụng tối đa</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="usage_count">
                                </div>

                                <div class="w-full flex flex-col py-2">
                                    <label for="description" class="text-black  font-semibold pb-1 capitalize"> Mô
                                        tả</label>
                                    <textarea type="text" id="title" class="p-2 h-[8.5rem]  border border-[#E8F0FC] rounded" name="description"></textarea>
                                </div>

                            </div>

                            <div class="w-full flex justify-end">
                                <input type="submit" name="submit" class="hover:text-[#0957CB] bg-[#0957CB] text-white rounded-lg p-3 text-sm font-semibold" value="Thêm mã giảm giá">
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo BASE_PATH ?>public/js/ckeditor.js"></script>