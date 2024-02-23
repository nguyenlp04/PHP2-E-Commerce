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
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="code" value="<?= $getCouponDetail[0]['name_coupon']?>">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Số % giảm giá</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="discount" value="<?= $getCouponDetail[0]['discount_coupon']?>">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Ngày bắt đầu</label>
                                    <input type="date" id="title" class="p-2  border border-[#a5abb5] rounded" name="created_at" value="<?= $getCouponDetail[0]['start_date_coupon']?>">
                                </div>
                                
                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Ngày kết thúc</label>
                                    <input type="date" id="title" class="p-2  border border-[#a5abb5] rounded" name="expiry_date" value="<?= $getCouponDetail[0]['end_date_coupon']?>">
                                </div>

                                <div class="w-full flex flex-col py-2 ">
                                    <label for="title" class="text-black  font-semibold pb-1 capitalize">Số lần sử dụng tối đa</label>
                                    <input type="text" id="title" class="p-2  border border-[#a5abb5] rounded" name="usage_count" value="<?= $getCouponDetail[0]['max_uses_coupon']?>">
                                </div>

                                <div class="w-full flex flex-col py-2">
                                    <label for="description" class="text-black  font-semibold pb-1 capitalize"> Mô
                                        tả</label>
                                    <textarea type="text" id="title" class="p-2 h-[8.5rem]  border border-[#E8F0FC] rounded" name="description"> <?= $getCouponDetail[0]['description_coupon']?></textarea>
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