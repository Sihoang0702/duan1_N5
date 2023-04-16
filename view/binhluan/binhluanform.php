<?php
session_start();
include "../../pdo.php";
include "../../binhluan.php";
$iduser = $_SESSION['user']['id'];
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="binhluan.css">
    <style>
        .binhluan table {
            width: 100%;
            margin-left: 5%;
        }

        .binhluan table:nth-child(1) {
            width: 50%;
        }

        .binhluan table:nth-child(2) {
            width: 20%;
        }

        .binhluan table:nth-child(3) {
            width: 30%;
        }
    </style>
</head>

<body>



    <div class="container mb">

        <div class="boxtitle">Bình Luận</div>
        <div class="boxcontent binhluan ">
            <table>
                <?php


                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>   ' . $noidung . '</td>';
                    echo '<td>      ' . $iduser . '</td>';
                    echo '<td>     ' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>

        </div>
        <div class="container boxfooter binhluanform">

            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">

                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>
</body>

</html>