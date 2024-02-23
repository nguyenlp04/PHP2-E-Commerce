<div class="w-full">
    <div class="flex justify-center xl:w-13/13">
        <div class="w-11/12 xl:w-11/13 mt-4 mb-8">
            <div class="w-full bg-white rounded-lg min-h-screen">
                <div class="w-full flex justify-center h-auto">
                    <div class="w-11/12">

                        <div class="title-container flex items-center">
                            <p class="text-[#0957CB] font-semibold  text-2xl py-4">Tất Cả Người Dùng</p>
                        </div>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Username</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th style="width: 4rem;">Vai trò</th>
                                    <th style="width: 4rem;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1 ?>
                                <?php foreach ($getUser as $user) : ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td>  <?= $user['username'] ?></td>
                                        <td><?= $user['fullname'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['roles'] ?></td>
                                        <td>
                                            <a href="updatePost?post_id=1" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>
                                            <!-- <a href="deletePost?post_id=1" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>\ -->
                                            <a href="#" onclick="confirmDelete('user/delete','<?php echo $user['id_customer']; ?>')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>
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