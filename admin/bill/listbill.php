<div style='backround:#f8f9fa;' class="col  py-3">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row  frmcontent">
        <div class="row mb10 frmdsloai">
            <table class="table align-middle mb-0 bg-white table-bordered table-hover ">
                <tr>
                    <th></th>
                    <th>Mã Đơn hàng</th>
                    <th>Khách Hàng</th>
                    <th>Số Lượng hàng</th>
                    <th>Giá Trị Đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao Tác</th>

                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill["bill_name"] . '
                    <br> ' . $bill["bill_email"] . '
                    <br> ' . $bill["bill_address"] . '
                    <br> ' . $bill["bill_tel"];
                    $countsp = loadall_cart_count($bill['id']);
                    $ttdh = get_ttdh($bill['bill_status']);

                    echo ' <tr>
                    <td><input type="checkbox" name="" id=""> </td>
                    <td>DAM-' . $bill['id'] . '</td>
                    <td>
                    ' . $kh . '
                    </td>
                    <td>' . $countsp . ' </td>
                    <td> ' . $bill['total'] . '</td>
                    <td> ' . $ttdh . '</td>
                    <td> ' . $bill['ngaydathang'] . '</td>

                    <td><input type="button" value="sửa"> <input type="button" value="xoá">  </td>
                    </tr>

                    ';
                }
                ?>
            </table>

        </div>
        <div class="row mb10">
            <input type="button" value="chọn tất cả">
            <input type="button" value="bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="nhập thêm"></a>
        </div>
    </div>
</div>