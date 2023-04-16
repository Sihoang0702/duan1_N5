<?php
if (is_array($dm)) {
    extract($dm);
}
?>


<div style="width: 50%; margin: 0 auto;" class='container p-5'>
    <h1 class="text-center mb-4">Cập nhật loại hàng hóa</h1>
    <h3 style="color: red;"><?php echo isset($_GET['mess']) ? $_GET['mess'] : ''; ?></h3>

    <form action='index.php?act=updatedm' method='post'>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã loại</label>
            <input type="text" name='=maloai' class="form-control" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên loại</label>
            <input type="text" name="tenloai" class="form-control" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
        </div>
        <div class="row mb20">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="capnhat" value="Cập Nhật">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>