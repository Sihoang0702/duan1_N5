<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');

    * {
        box-sizing: border-box
    }

    body {
        font-family: 'Noto Sans JP', sans-serif;
    }

    h1,
    label {
        font-size: 20px;
        color: DodgerBlue;
    }

    .mtop {
        margin-top: 200px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        width: 100%;
        resize: vertical;
        padding: 15px;
        border-radius: 15px;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    }

    input[type=text]:focus,
    input[type=password]:focus {
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    .signupbtn {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .signupbtn:hover {
        opacity: 1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .signupbtn {
        float: left;
        width: 100%;
        border-radius: 15px;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Add padding to container elements */
    .containerd {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
<div class="container mtop">
    <form action="">
        <div class="containerd">
            <h1>Form cập nhật tài khoản</h1>
            <p>Xin hãy nhập biểu mẫu bên dưới để thay đổi thông tin tài khoản.</p>
            <hr>
            <?php

            if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }

            ?>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" value="<?= $email ?>">

            <label for="psw"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="Nhập tên đăng kí" name="user" value="<?= $user ?>">

            <label for="psw-repeat"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập Mật Khẩu" name="pass" value="<?= $pass ?>">

            <label for="psw-repeat"><b>Địa chỉ</b></label>
            <input type="text" placeholder="địa chỉ" name="psw-repeat" required>

            <label for="psw-repeat"><b>Số điện thoại</b></label>
            <input type="text" placeholder="sđt" name="tel" value="<?= $tel ?>">

            <!-- <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
            </label> -->

            <div class="clearfix">
                <input class="signupbtn" type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
            </div>
            <div class="rowa mb10">
                <input type="reset" value="Nhập lại">

            </div>


        </div>

    </form>

    <h2 class="thongbao">
        <?php

        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }

        ?>
    </h2 </div>