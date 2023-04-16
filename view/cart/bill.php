<style>
    .mrtop {
        margin-top: 200px;
    }

    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=radio]+img {
        cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked+img {
        outline: 2px solid #f00;
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

    .rowl {
        border: 2px solid #f00;
        min-height: 220px;
        padding: 25px;
    }

    td {
        font-weight: 500;
    }

    td input {
        border-radius: 4px;
        border: 2px solid #CED0D4;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
    }

    .row-2a {
        display: flex;
        justify-content: space-between;
    }

    .ttol {
        padding: 20px;
        border-left: 2px solid #737579;
        border-right: 2px solid #737579;
        border-bottom: 2px solid #737579;
        text-align: center;
    }

    .ttol p {
        font-size: 20px;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
    }

    .table-users {
        border: 1px solid #398B93;
        border-radius: 10px;
        box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
        max-width: calc(100% - 2em);
        margin: 1em auto;
        overflow: hidden;
        width: 100%;
    }
</style>


<div class="container mrtop">

    <div class="container-s pink-box">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="rowl-1 ">
                <div class="boxtitle-a">Thông Tin Đặt Hàng</div>
                <div class="rowl boxcontent billform">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $user = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>

                        <tr>
                            <td>Người đặt hàng:</td>
                            <td><input type="text" name="user" value="<?= $user ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ:</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại:</td>
                            <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="rowq mb">
                <div class="boxtitle-a">Phương thức thanh toán</div>
                <div class="row-2a boxcontent">

                    <label class="ttol">

                        <input type="radio" name="test" value="small" checked>
                        <img src="img/ttknh.jpg">
                        <p>Trả tiền khi nhận hàng</p>
                    </label>

                    <label class="ttol">

                        <input type="radio" name="test" value="big">
                        <img src="img/ckonl.jpg">
                        <p>Thanh toán online</p>
                    </label>
                    <label class="ttol">

                        <input type="radio" name="test" value="big">
                        <img src="img/atmknh.jpg">
                        <p>chuyển khoản ngân hàng</p>
                    </label>
                </div>
            </div>
            <div class="rows mb">
                <div class="boxtitle-a">THÔNG TIN GIỎ HÀNG</div>
                <div class="table-users rows boxcontent cart">
                    <table>

                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
                <div class="rows mb bill ">
                    <input type="submit" value="Đồng ý đặt hàng " name="dongydathang">

                </div>
            </div>
        </form>


    </div>

</div>
</div>