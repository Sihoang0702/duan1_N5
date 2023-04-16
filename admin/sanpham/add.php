<style>

</style>
<div style="width: 50%; margin: 0 auto;" class='container p-5'>
    <div class="row header">
        <h1>Thêm Mới Sản Phẩm</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                    <option value=""></option>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb20">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>