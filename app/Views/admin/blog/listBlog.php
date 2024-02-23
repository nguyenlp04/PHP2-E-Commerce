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
                                    <th>Id</th>
                                    <th>Ảnh đại diện </th>
                                    <th> Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Loại</th>
                                    <th style="width: 4rem;">Thao Tác</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>1</td>
                                <td><img src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t39.30808-6/351469911_640370124787247_7414355397774439356_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=-iAz_fDL0KAAX_b1Rw6&_nc_oc=AQmJ5K4fcCIlspdKLsHNrchVmi9hQA9AiaAD-80SpCMs-LlXItAjkoczRdfv9tZntZsm_ykIu7wHCKK-ItYadQEd&_nc_ht=scontent.fsgn5-2.fna&oh=00_AfC1Ns_1AViNeLyw_QttSQSVNeCEIeuNn6gglQxQtohEYQ&oe=65D1A095" alt="Ảnh đại diện" width="100"></td>
                                <td>Title</td>
                                <td>
                                    <p style="  display: -webkit-box; -webkit-box-orient: vertical;-webkit-line-clamp: 3; overflow: hidden;">
                                        Mô Tả
                                    <p>
                                </td>
                                <td>Category</td>
                                <td> <a href="updatePost?post_id=1" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>

                                    <a href="deletePost?post_id=1" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t39.30808-6/351469911_640370124787247_7414355397774439356_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=-iAz_fDL0KAAX_b1Rw6&_nc_oc=AQmJ5K4fcCIlspdKLsHNrchVmi9hQA9AiaAD-80SpCMs-LlXItAjkoczRdfv9tZntZsm_ykIu7wHCKK-ItYadQEd&_nc_ht=scontent.fsgn5-2.fna&oh=00_AfC1Ns_1AViNeLyw_QttSQSVNeCEIeuNn6gglQxQtohEYQ&oe=65D1A095" alt="Ảnh đại diện" width="100"></td>
                                <td>Title</td>
                                <td>
                                    <p style="  display: -webkit-box; -webkit-box-orient: vertical;-webkit-line-clamp: 3; overflow: hidden;">
                                        Mô Tả
                                    <p>
                                </td>
                                <td>Category</td>
                                <td> <a href="updatePost?post_id=1" style="margin-right:10px;"><i class="fa-solid fs-5 fa-pen-to-square text-primary mr-3"></i></a>

                                    <a href="deletePost?post_id=1" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"><i class="fa-solid fs-5 fa-trash-can text-danger"></i></a>
                                </td>
                            </tr>
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