<style>
    .mtrr {
        margin-top: 200px;
    }

    .boxtitle {
        margin-top: 20px;
        /* padding: 10px; */
        background-color: #f2b2b4;
        /* border-top-left-radius: 5px;
        border-top-right-radius: 5px; */
        border: 1px #ccc solid;
        height: 40px;
    }

    .boxtitle strong {
        margin-left: 10px;
        text-transform: uppercase;
        color: #fe1212;
        font-size: 20px;
    }
</style>
<div class="container mtrr">
    <div class="rowsss">
        <div class="boxtrai">

            <!-- Product Sorting -->

            <div class="product_sorting_container product_sorting_container_top">
                <ul class="product_sorting">
                    <li>
                        <span class="type_sorting_text">Default Sorting</span>
                        <i class="fa fa-angle-down"></i>
                        <ul class="sorting_type">
                            <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>
                                <span>Default Sorting</span>
                            </li>
                            <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                <span>Price</span>
                            </li>
                            <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
                                <span>Product Name</span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Show</span>
                        <span class="num_sorting_text">6</span>
                        <i class="fa fa-angle-down"></i>
                        <ul class="sorting_num">
                            <li class="num_sorting_btn"><span>6</span></li>
                            <li class="num_sorting_btn"><span>12</span></li>
                            <li class="num_sorting_btn"><span>24</span></li>
                        </ul>
                    </li>
                </ul>
                <div class="pages d-flex flex-row align-items-center">
                    <div class="page_current">
                        <span>1</span>
                        <ul class="page_selection">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                    <div class="page_total"><span>of</span> 3</div>
                    <div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                </div>

            </div>
            <div class="boxtitle"> Sản Phẩm <strong><?= $tendm ?></strong></div>
            <div class="grid-sp">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;

                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                        $mr = "mr";
                    } else {
                        $mr = "";
                    }

                    echo '<div class="product boxsp ' . $mr . '">
                                  <div class=" row img"><a href="' . $linksp . '" ><img src="' . $hinh . '" alt=""></a></div>
                                  <h6 class="product_name"> <a href="' . $linksp . '">' . $name . '</a></h6>
                                  <div class="product_price">$' . $price . '</div>
                                  <div class="red_button add_to_cart_button">
                                  <form action="index.php?act=addtocart" method="post">
                                      <input type="hidden" name="id" value="' . $id . '">
                                      <input type="hidden" name="name" value="' . $name . '">
                                      <input type="hidden" name="img" value="' . $img . '">
                                      <input type="hidden" name="price" value="' . $price . '">
                                      <input type="submit" name="addtocart" value="Add to Cart">
                                  </form>
                              </div>
                                 

                       </div>';

                    $i += 1;
                }
                ?>

                <!-- <div class="product boxsp ' . $mr . '">
                    <div class=" row img"><a href=""><img src="img/product_7.png" alt=""></a></div>

                    <h6 class="product_name"> <a href="' . $linksp . '">' . $name . '</a></h6>
                    <div class="product_price"></div>
                    <div class="red_button add_to_cart_button">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="submit" name="addtocart" value="Add to Cart">
                        </form>
                    </div>
                </div> -->


            </div>

        </div>
        <div class="boxphai">
            <?php
            include "boxright.php"
            ?>

        </div>

    </div>

</div>