<style>
  .responstable {
    margin: 1em 0;
    width: 100%;
    overflow: hidden;
    background: #fff;
    color: #024457;
    border-radius: none;
    border: 1px solid #167F92;
  }

  tr {
    /* background: #f76b6e; */
    border: 1px solid #D9E4E6;
    background-color: #f7e2e3;
  }


  th {
    display: none;
    border: 1px solid #D9E4E6;
    background-color: #f76b6e;
    color: #024457;
    padding: 1em;
    display: table-cell;
    text-align: center;

    display: table-cell;

  }



  td {
    display: block;
    word-wrap: break-word;
    max-width: 7em;
    display: table-cell;
    text-align: center;
    border-right: 1px solid #D9E4E6;

  }

  th,
  td {
    text-align: center;
    margin: .5em 1em;
    display: table-cell;
    padding: 1em;
  }

  .mrt {
    margin-top: 250px;
  }

  h1 {
    font-family: Verdana;
    font-weight: normal;
    color: #024457;
    /* color: #167F92; */
  }

  .btn-back-bill {
    border: red solid 2px;
    border-radius: 5px;
    padding: 6px 10px;
    font-size: 14px;
    /* color: red; */
    background-color: #fff;
    margin-top: 10px;
  }

  .btn-back-bill a {
    color: red;
  }

  .btn-action {
    margin-top: 30px;
  }
</style>
<div class="container mrt">

  <h3>Đơn Hàng Của Bạn</h3>
  <table class="responstable">

    <tr>
      <th>MÃ ĐƠN HÀNG</th>
      <th style="width:30%">NGÀY ĐẶT </th>
      <th>SỐ LƯỢNG MẶT HÀNG</th>
      <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
      <th style="width:20%">TÌNH TRẠNG</th>
    </tr>

    <?php
    if (is_array($listbill)) {
      foreach ($listbill as $bill) {
        extract($bill);

        $ttdh = get_ttdh($bill['bill_status']);
        $countsp = loadall_cart_count($bill['id']);
        echo ' <tr>
                            <td>DAM-' . $bill['id'] . '</td>
                            <td>' . $bill['ngaydathang'] . '</td>
                            <td>' .  $countsp . '</td>
                          
                            <td>' . $bill['total'] . '</td>
                            <td>' .  $ttdh . '</td>
                        </tr>';
      }
    }
    ?>

  </table>
  <div class="btn-action">
    <button class="btn-back-bill">
      <a href="index.php"><i class="fas fa-arrow-left"></i> Back to Shopping</a>
    </button>
  </div>
</div>