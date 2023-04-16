<style>
    .mtrr {
        margin-top: 200px;
    }

    .boxtitle {
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 500;
        color: #333;
        padding: 10px;
        background-color: #f2b2b4;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 1px #CCC solid;
    }


    .boxcontent {
        width: 100%;
        margin-left: 0px;
        /* border-left: 1px #ccc solid;
        border-right: 1px #ccc solid; */
        min-height: 200px;
        padding-top: 5px;
        border-bottom: 1px solid #ccc;
    }

    .spct {
        width: 100%;
        /* text-align: center; */
        justify-content: center;
        margin-right: 100px;
    }
</style>

<div class="container mtrr">
    <div class="rowsss">
        <div class="boxtrai mr">
            <div class="boxtitle boxtil"> <?= $name ?></div>
            <!-- Product Sorting -->

            <div class="row boxcontent bod">
                <?php

                $img = $img_path . $img;

                echo '<div class="row  spct" ><img src="' . $img . '"><br> </div>';
                echo $mota;

                ?>

            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                        idpro: <?= $id ?>
                    });
                });
            </script>

            <div class="rowp " id="binhluan">

            </div>

            <div class="rowa mb">
                <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                <div class="rowa boxcontent ">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        echo '<li> <a href="' . $linksp . '"> ' . $name . '</a>';
                    }
                    ?>

                </div>
            </div>



        </div>


        <div class="boxphai">
            <?php
            include "boxright.php"
            ?>

        </div>

    </div>

</div>