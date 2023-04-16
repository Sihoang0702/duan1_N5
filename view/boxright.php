<style>
    .boxtitle-1 {
        color: #333;
        padding: 10px;
        background-color: #EEE;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 1px #CCC solid;
    }
</style>
<div class="rowv mb">
    <div class="boxtitle-1" style="color:red">Đăng nhập để mua hàng</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>


            <div class="rowv mb10 mmm">
                Xin chào<br> <?= $user ?>
            </div>

            <div class="rowv mb10 mmm">
                <li>
                    <a href="index.php?act=mybill">Đơn Hàng Của Tôi</a>
                </li>
                <li>
                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập Nhập Tài Khoản</a>
                </li>
                <?php if ($role == 1) { ?>
                    <li>
                        <a href="admin/index.php">Đăng Nhập ADMIN</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>

        <?php
        } else {
        ?>


            <form action="index.php?act=dangnhap" method="post">
                <div class="rowv mb10 lg">
                    <label for="">Tên Đăng Nhập</label>
                    <input type="text" name="user" style="width:270px">
                </div>

                <div class="rowv mb10 lg">
                    <label for=""> Mật Khẩu</label> <br>
                    <input type="password" name="pass" style="width:270px">
                </div>
                <div class="rowv mb10 lg"> <input type="checkbox" name="" id=""> ghi nhớ tài khoản ?
                </div>
                <div class="rowv mb10 lg"> <input type="submit" value="Đăng Nhập" name="dangnhap">
                </div>
            </form>
            <li>
                <a href="#" class="lg">Quên Mật Khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky" class="lg">Đăng Ký Thành Viên</a>
            </li>
        <?php } ?>
    </div>

</div>
<div class="rowv mb">
    <div class="boxtitle-1" style="color:red">Danh Mục</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
                                    <a href="' . $linkdm . '">' . $name . '</a>
                                    </li>';
            }
            ?>

        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
            <p><input type="text" name="kyw" placeholder="Tìm Kiếm Sản Phẩm" style="width:260px">
            </p>

            <input type="submit" name="timkiem" value="Tìm Kiếm">
        </form>
    </div>

</div>
<div class="rowv">
    <div class="boxtitle" style="color:red">Top Yêu Thích</div>
    <div class="rowv boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo ' <div class="rowv mb10 top10">
                              <a href="' . $linksp . '">   <img src="' . $img . '" alt=""></a>
                              <a href="' . $linksp . '">' . $name . '</a>

                              </div>';
        }
        ?>



    </div>
</div>