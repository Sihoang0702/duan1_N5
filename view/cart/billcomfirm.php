<style>
    .mtop {
        margin-top: 150px;
    }

    .container {
        width: 1300px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .container-s {
        max-width: 1000px;
        margin: auto;
        padding: auto;
    }

    .boxtitle-a {
        color: #333;
        padding: 10px;
        background-color: #ee8686EE;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 1px #CCC solid;
        margin-top: 20px;
        font-weight: 550;
        font-family: Arial, Helvetica, sans-serif;
    }



    td {
        font-family: Arial, Helvetica, sans-serif;

        font-weight: 500;
    }

    td input {
        border-radius: 4px;
        border: 2px solid #CED0D4;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
    }

    .rowa {
        padding: 20px;
        border-left: 2px solid #737579;
        border-right: 2px solid #737579;
        border-bottom: 2px solid #737579;
        text-align: center;
        min-height: 120px;
    }


    .boxcontentq li {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        font-weight: 500;
        list-style: none;
    }
</style>


<div class="container mtop">
    <div class="container-s  mb row">
        <div class="boxtrai mr">
            <div class=" ">
                <div class="boxtitle-a">CẢM ƠN</div>
                <div class="rowa boxcontent-a" style="text-align:center">
                    <h2>Cảm ơn quý khách đã đặt hàng</h2>
                </div>
            </div>
            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            ?>
            <div class=" mb">
                <div class="boxtitle-a">THÔNG TIN ĐƠN HÀNG</div>
                <div class="rowa boxcontentq" style="text-align:center">
                    <li>MÃ đơn hàng : DAM-<?= $bill['id']; ?></li>
                    <li>-Ngày Đặt Hàng:-<?= $bill['ngaydathang']; ?></li>
                    <li>-Tổng đơn hàng-<?= $bill['total']; ?></li>
                    <li>-Phương thức thanh toán-<?= $bill['bill_pttt']; ?></li>
                </div>
            </div>
            <div class=" mb">
                <div class="boxtitle-a">THÔNG TIN ĐẶT HÀNG</div>
                <div class="rowa boxcontent billform">
                    <table>
                        <tr>
                            <td>Người đặt hàng: </td>
                            <td><?= $bill['bill_name']; ?></td>
                        </tr>
                        <tr>
                            <td>địa chỉ</td>
                            <td><?= $bill['bill_address']; ?></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><?= $bill['bill_email']; ?></td>
                        </tr>
                        <tr>
                            <td>điện thoại</td>
                            <td><?= $bill['bill_tel']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=" mb">
                <div class="boxtitle-a">Chi Tiết Giỏ Hàng</div>
                <div class="rowa boxcontent cart">
                    <table>
                        <?php
                        bill_chi_tiet($billct);
                        ?>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>