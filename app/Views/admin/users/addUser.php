<div class="w-full">
  <div class="flex justify-center xl:w-11/13">
    <div class="w-11/12 xl:w-11/13 mt-4 mb-8">
      <div class="w-full bg-white rounded-lg min-h-screen">
        <div class="w-full flex justify-center h-auto">
          <div class="w-11/12">
            <div class="title-container flex items-center">
              <p class="text-[#0957CB] font-semibold  text-2xl py-4">Thêm Người Dùng</p>
            </div>
            <form method="post" enctype="multipart/form-data" class="text-black">
              <div class="grid md:grid-cols-2 grid-cols-1 md:gap-x-4 md:gap-y-0 gap-4">

                <div class="w-full flex flex-col py-2 ">
                  <label for="fullname" class="text-black  font-semibold pb-1 capitalize">Họ và tên</label>
                  <input type="text" id="fullname" class="p-2  border border-[#a5abb5] rounded" name="fullname">
                </div>

                <div class="w-full flex flex-col py-2 ">
                  <label for="username" class="text-black  font-semibold pb-1 capitalize">Username </label>
                  <input type="text" id="username" class="p-2  border border-[#a5abb5] rounded" name="username">
                </div>

                <div class="w-full flex flex-col py-2 ">
                  <label for="pass" class="text-black  font-semibold pb-1 capitalize">Mật khẩu</label>
                  <input type="password" id="pass" class="p-2  border border-[#a5abb5] rounded" name="pass">
                </div>

                <div class="w-full flex flex-col py-2 ">
                  <label for="cfpass" class="text-black  font-semibold pb-1 capitalize">Xác nhận mật khẩu</label>
                  <input type="password" id="cfpass" class="p-2  border border-[#a5abb5] rounded" name="cfpass">
                </div>

                <div class="w-full flex flex-col py-2 ">
                  <label for="email" class="text-black  font-semibold pb-1 capitalize">Email</label>
                  <input type="text" id="email" class="p-2  border border-[#a5abb5] rounded" name="email">
                </div>

                <div class="w-full flex flex-col py-2 ">
                  <label for="roles" class="text-black  font-semibold pb-1 capitalize">Vai trò</label>
                  <select id="roles" name="roles" class="p-2  border border-[#a5abb5] rounded" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>

                <div class="w-full flex flex-col py-2 mt-10">
                  <div class="text-black pb-3 capitalize inline-block"> <i class="fa-solid fa-file-image fa-2xl"></i> Tải lên ảnh sản phẩm
                  </div>
                  <input type="file" class="article_photo" name="image" id="image" class="p-2  hidden border border-[#E8F0FC] rounded" style="display:none"  accept="image/*">
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
              </div>

                <div class="w-full flex justify-end">
                  <input type="submit" name="submit" class="hover:text-[#0957CB] bg-[#0957CB] text-white rounded-lg p-3 text-sm font-semibold" value="Thêm người dùng">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>