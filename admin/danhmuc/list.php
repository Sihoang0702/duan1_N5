<div style='backround:#f8f9fa;' class="col  py-3">
    <div class="container p-4">
        <div style='display:flex' class='d_flex mb-4 justify-content-between'>
            <h2 class='fs-3  d-inline'>Danh sách loại hàng hóa</h2>
            <p style="color: red;"><?php echo isset($_GET["mess"]) ? $_GET['mess'] : "" ?></p>

            <a href='' class='btn btn-primary'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
                Thêm danh mục</a>
        </div>
        <table class="table align-middle mb-0 bg-white table-bordered table-hover ">
            <thead class="bg-light ">
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td><a href="' . $suadm . '"><input type="button" value="sửa"></a> <a href="' . $xoadm . '"> <input type="button" value="xoá"></a></td>
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

</div>0