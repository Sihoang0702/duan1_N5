<div style='background:#f8f9fa;' class="col  py-3">
    <div class="container p-4">
        <p style="color: red;"><?php echo isset($_GET['mess']) ? $_GET['mess'] : ''; ?></p>

        <div style='display:flex' class='d_flex mb-4 justify-content-between'>
            <h2 class='fs-3  d-inline'>Danh sách người dùng</h2>
            <a href='' class='btn btn-primary'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
                Add a new user</a>
        </div>
        <table class="table align-middle mb-0 bg-white table-bordered table-hover ">
            <thead class="bg-light ">
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                                <td ><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>' . $role . '</td>
                                <td><a  href="' . $suatk . '"><input type="button" value="sửa"></a> 
                                <a href="' . $xoatk . '"> <input type="button" value="xoá"></a></td>
                            </tr> ';
                }
                ?>
            </tbody>
        </table>
        <div class="row mb20">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a>
        </div>
    </div>

</div>
</div>
</div>