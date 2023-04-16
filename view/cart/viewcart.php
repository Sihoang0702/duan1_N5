<style>
    .headerr {
        background-color: #e73232;
        color: white;
        font-size: 1.5em;
        padding: 1rem;
        text-align: center;
        text-transform: uppercase;
    }

    img {
        /* border-radius: 50%; */
        height: 60px;
        width: 60px;
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

    table {
        width: 100%;


    }

    .mrt {
        margin-top: 200px;
    }

    td,
    th {
        color: #070506;
        padding: 10px;
    }

    td {
        text-align: center;
        vertical-align: middle;
    }

    th {
        background-color: #a55f60;
        font-weight: 300;
    }
</style>

<div class="container mrt">
    <div class="table-users">
        <div class="headerr">Giỏ hàng của bạn</div>

        <table cellspacing="0">

            <?php
            viewcart(1);
            ?>
        </table>
    </div>
    <div class="rowx mb bill ">
        <a href="index.php?act=bill"><input type="submit" value="Tiếp tục đặt hàng "> </a><a href="index.php?act=delcart"> <input type="button" value="Xoá giỏ hàng"></a>
    </div>
</div>