<div class="main_slider" style="background-image:url(img/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_content">
                    <h6>Spring / Summer Collection 2023</h6>
                    <h1>Get up to 30% Off New Arrivals</h1>
                    <div class="red_button shop_now_button"><a href="#">shop now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner -->

<div class="banner">
    <div class="container">
        <div class="rowd">
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(img/banner_1.jpg)">
                    <div class="banner_category">
                        <a href="categories.html">women's</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(img/banner_2.jpg)">
                    <div class="banner_category">
                        <a href="categories.html">accessories's</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(img/banner_3.jpg)">
                    <div class="banner_category">
                        <a href="categories.html">men's</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new_arival">
    <div class="container tttt">
        <div class="section_title">
            <h2>New Arrivals</h2>
        </div>


        <div class=" align-items-center">
            <div class=" text-center">
                <div class="new_arrivals_sorting">
                    <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked">
                            <a href="" class="cctt">all</a>
                        </li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center">
                            <a href="" class="cctt">women's</a>
                        </li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center">
                            <a href="" class="cctt">accessories</a>
                        </li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center">
                            <a href="" class="cctt">men's</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container">
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

            <div class="grid-sp">
                <?php
                $i = 0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;

                    if (($i == 2) || ($i == 5) || ($i == 8)) {
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

<!-- Benefit -->

<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Miễn phí ship</h6>
                        <p>Suffered Alteration in Some Form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Thanh toán khi nhận hàng</h6>
                        <p>The Internet Tend To Repeat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>45 ngày hoàn trả</h6>
                        <p>Making it Look Like Readable</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Mở cả tuần</h6>
                        <p>8AM - 09PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                    <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                    <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>