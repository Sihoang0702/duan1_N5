<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    section {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        margin-top: 80px;
    }

    section .img-bg {
        position: relative;
        width: 50%;
        height: 100%;
    }

    section .img-bg img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    section .noi-dung {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
    }

    section .noi-dung .form {
        width: 50%;
    }

    section .noi-dung .form h2 {
        color: #607d8b;
        font-weight: 500;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #fe4c50;
        display: inline-block;
        letter-spacing: 1px;
    }

    section .noi-dung .form .input-form {
        margin-bottom: 20px;
    }

    section .noi-dung .form .input-form span {
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #607db8;
        letter-spacing: 1px;
    }

    section .noi-dung .form .input-form input {
        width: 100%;
        padding: 10px 20px;
        outline: none;
        border: 1px solid #607d8b;
        font-size: 16px;
        letter-spacing: 1px;
        color: #607d8b;
        background: transparent;
        border-radius: 30px;
    }

    section .noi-dung .form .input-form input[type="submit"] {
        background: #fe4c50;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12),
            0 2px 2px rgba(0, 0, 0, 0.12),
            0 4px 4px rgba(0, 0, 0, 0.12),
            0 8px 8px rgba(0, 0, 0, 0.12),
            0 16px 16px rgba(0, 0, 0, 0.12);
    }

    section .noi-dung .form .input-form input[type="submit"]:hover {
        background: #fe4c50;
    }

    section .noi-dung .form .nho-dang-nhap {
        margin-bottom: 10px;
        color: #607d8b;
        font-size: 14px;
    }

    section .noi-dung .form .input-form p {
        color: #607d8b;
    }

    section .noi-dung .form .input-form p a {
        color: #fe4c50;
    }

    section .noi-dung .form h3 {
        color: #607d8b;
        text-align: center;
        margin: 80px 0 10px;
        font-weight: 500;
    }

    section .noi-dung .form .icon-dang-nhap {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section .noi-dung .form .icon-dang-nhap li {
        list-style: none;
        cursor: pointer;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section .noi-dung .form .icon-dang-nhap li:nth-child(1) {
        color: #3b5999;
    }

    section .noi-dung .form .icon-dang-nhap li:nth-child(2) {
        color: #dd4b39;
    }

    section .noi-dung .form .icon-dang-nhap li:nth-child(3) {
        color: #55acee;
    }

    section .noi-dung .form .icon-dang-nhap li i {
        font-size: 24px;
    }

    @media (max-width: 768px) {
        section .img-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        section .noi-dung {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        section .noi-dung .form {
            width: 100%;
            padding: 40px;
            background: rgba(255 255 255 / 0.9);
            margin: 50px;
        }

        section .noi-dung .form h3 {
            color: #607d8b;
            text-align: center;
            /* margin: 30px 0 10px; */
            font-weight: 500;
        }


    }
</style>

<div class="boxcenter">
    <div class="plm">
        <h3>Đăng nhập để mua hàng</h3>
    </div>
    <div class="plm">
        <h3>Đăng nhập để mua hàng</h3>
    </div>
    <div class="plm">
        <h3>Đăng nhập để mua hàng</h3>
    </div>
    <div class="plm">
        <h3>Đăng nhập để mua hàng</h3>
    </div>
    <div class="plm">
        <h3>Đăng nhập để mua hàng</h3>
    </div>
</div>
<section class="container">
    <!--Bắt Đầu Phần Hình Ảnh-->
    <div class="img-bg">
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/2b1e9e121967311.60d096515bea5.png" alt="Hình Ảnh Minh Họa">
    </div>
    <!--Kết Thúc Phần Hình Ảnh-->
    <!--Bắt Đầu Phần Nội Dung-->
    <div class="noi-dung">
        <div class="form">
            <h2> Sign Up </h2>
            <form action="index.php?act=dangky" method="post">
                <div class="input-form">
                    <span>Email</span>
                    <input type="email" name="email">
                </div>
                <div class="input-form">
                    <span>Tên đăng nhập</span>
                    <input type="text" name="user">
                </div>
                <div class="input-form">
                    <span>Mật Khẩu</span>
                    <input type="password" name="pass">
                </div>
                <div class="nho-dang-nhap">
                    <label><input type="checkbox" name=""> Nhớ mật khẩu</label>
                </div>
                <div class="input-form">
                    <input type="submit" value="Đăng kí" name="dangky">
                </div>
                <!-- <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="#">Đăng Ký</a></p>
                    </div> -->
            </form>
            <h2 class="thongbao">
                <?php

                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }

                ?>
            </h2>

            <h3>Đăng Nhập Bằng Mạng Xã Hội</h3>
            <ul class="icon-dang-nhap">
                <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                <li><i class="fa fa-google" aria-hidden="true"></i></li>
                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
            </ul>
        </div>
    </div>
    <!--Kết Thúc Phần Nội Dung-->
</section>