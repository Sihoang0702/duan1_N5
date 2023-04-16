<div style="width: 50%; margin: 0 auto;" class='container p-5'>
    <h1 class="text-center mb-4">Thêm mới danh mục</h1>
    <h3 style="color: red;"><?php echo isset($_GET['mess']) ? $_GET['mess'] : ''; ?></h3>
    <form action='index.php?act=adddm' method='post'>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã loại</label>
            <input type="text" name='maloai' class="form-control" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên loại</label>
            <input type="text" name='tenloai' class="form-control">
        </div>
        <div class="">
            <input type="submit" name="themmoi" value="Thêm Mới">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>