<div style='backround:#f8f9fa;' class="col  py-3">
    <div class="row header">
        <h1>Danh sách Tài Khoản</h1>
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <table class="table align-middle mb-0 bg-white table-bordered table-hover ">
                <thead class="bg-light ">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG BÌNH LUẬN</th>
                        <th>USER ID</th>
                        <th>ID PRO</th>
                        <th>NGÀY</th>

                        <th></th>
                    </tr>
                </thead>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suatk&id=" . $id;
                    $xoabl = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                                <td ><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $noidung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $idpro . '</td>
                                <td>' . $ngaybinhluan . '</td>
                                
                                <td><a href="' . $suabl . '"><input type="button" value="sửa"></a> <a href="' . $xoabl . '"> <input type="button" value="xoá"></a></td>
                            </tr> ';
                }
                ?>

            </table>

        </div>
        <div class="row mb20">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">

        </div>

    </div>
</div>