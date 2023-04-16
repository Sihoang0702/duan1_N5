<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    // $i = 0;
    foreach ($_SESSION['mycart'] as $key => $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;

        if ($del == 1) {
            $xoasp_th = '<th>Thao tác</th>';

            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $key . '"> <input type="button" value="xoá"></a></td>';
        } else {
            $xoasp_th = '';
            $xoasp_td = '';
        }


        echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $xoasp_th . '
            </tr>
                <tr>
        
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                ' . $xoasp_td . '
            </tr>';
        // $i += 1;
    }
    echo '<tr>        
            <td colspan="4">Tổng đơn hàng</td>
            <td ">' . $tong . '</td>
            
            <td></td>
        </tr>';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];

        $tong += $cart['thanhtien'];


        echo '
                        <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                      
                    </tr>
                        <tr>
             
                        <td><img src="' . $hinh . '" alt="" height="80px"></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . '</td>
                        <td>' . $cart['soluong'] . '</td>
                        <td>' . $cart['thanhtien'] . '</td>
                     
                    </tr>';
        $i += 1;
    }
    echo '<tr>
             
                    
                    <td colspan="4">Tổng đơn hàng</td>
                    <td ">' . $tong . '</td>
                    
                    <td></td>
                </tr>';
}
function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {

        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
    }


    return $tong;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    //    echo $sql;
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    //   echo $sql;
    return pdo_execute_return_lastInsertID($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0)  $sql .= " AND iduser=" . $iduser;
    if ($kyw != "")  $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";

    $listbill = pdo_query($sql);
    return $listbill;
}


function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "đơn hàng mới";
            break;
        case '1':
            $tt = "đang sử lý";
            break;
        case '2':
            $tt = "đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            $tt = "đơn hàng mới";
            break;
    }
    return $tt;
}
