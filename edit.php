<?php session_start() ?>
<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRM</title>
    <style>
        td, th, p, span, a{
            color: black;
        }
        input {
            width: 100%;
            border: none;
        }

        td {
            border: 2px solid gray;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>

<body>
<?php
$index = 1;
$query = $conn->query("SELECT * FROM clients WHERE client_id = '$_GET[id]'");
while ($row = mysqli_fetch_assoc($query)) :
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <a href="#" onclick="history.go(-2); return false;" class="btn btn-light mt-2 mb-3">Назад</a>
                <form action="" method="POST">
                    <span>Имя:</span> <input type="text" class="form-control" name="client_name"
                                             value="<?= $row['client_name'] ?> ">
                    <span> Номер:</span> <input type=" text" class="form-control" name="client_phone"
                                                value="<?= $row['client_phone'] ?> ">
                    <span>Товар:</span>
                    <select name="client_product" class="m-1 form-control">
                        <?php
                        // V8
                        if ($row['client_product'] == 'V8') { ?>
                            <option value="V8">V8</option>
                            <!-- Pandora -->
                        <?php } elseif ($row['client_product'] == 'AirDots') { ?>
                            <option value="AirDots">AirDots</option>
                            <!-- Sky Watch -->
                        <?php } elseif ($row['client_product'] == 'Sky+Port+Fit') { ?>
                            <option value="Sky+Port+Fit">Sky+Port+Fit</option>
                            <!-- V8 Gifts -->
                        <?php } elseif ($row['client_product'] == 'V8-Gifts') { ?>
                            <option value="V8-Gifts">V8-Gifts</option>
                            <!-- Клатч -->
                        <?php } elseif ($row['client_product'] == 'Клатч') { ?>
                            <option value="Клатч">Клатч</option>
                        <!-- T5 Pro -->
                        <?php } elseif ($row['client_product'] == 'T5 Pro') { ?>
                            <option value="T5 Pro">T5 Pro</option>
                            <!-- Watch 5 -->
                        <?php } elseif ($row['client_product'] == 'Watch 5') { ?>
                            <option value="Watch 5">Watch 5</option>
                            <!-- Apai Genie -->
                        <?php } elseif ($row['client_product'] == 'Apai Genie') { ?>
                            <option value="Apai Genie">Apai Genie</option>
                            <!-- Airdots Mi4 -->
                        <?php } elseif ($row['client_product'] == 'Realme Z7') { ?>
                            <option value="Realme Z7">Realme Z7</option>
                      <?php } elseif ($row['client_product'] == 'Xiaomi Mi 5') { ?>
                            <option value="Xiaomi Mi 5">Xiaomi Mi 5</option>

                        <?php } elseif ($row['client_product'] == 'Airdots 2-комплект') { ?>
                            <option value="Airdots 2-комплект">Airdots 2-комплект</option>

                        <?php } elseif ($row['client_product'] == 'Baellary портмоне') { ?>
                            <option value="Baellary портмоне">Baellary портмоне</option>
                            
                        <?php } elseif ($row['client_product'] == 'AirDots+Mi4') { ?>
                            <option value="AirDots+Mi4">AirDots+Mi4</option>

                        <?php } elseif ($row['client_product'] == 'V8 2-комплект') { ?>
                            <option value="V8 2-комплект">V8 2-комплект</option>
                        <? }
                        ?>
                    </select>
                    <span>Цена:</span> <input type=" text" class="form-control" name="client_price"
                                              value="<?= $row['client_price'] ?> ">
                    <span>Город:</span> <input type=" text" class="form-control" name="client_city"
                                               value="<?= $row['client_city'] ?> ">
                    <span>Адрес:</span> <input type=" text" class="form-control" name="client_adress"
                                               value="<?= $row['client_adress'] ?> ">
                    <span>Трек:</span> <input type=" text" class="form-control" name="client_track"
                                              value="<?= $row['client_track'] ?> ">
                    <span>Статус:</span>
                    <select name="client_status" class="m-1 form-control">
                        <?php
//                        5.В Пути
                        if ($row['client_status'] == '5.В Пути') { ?>
                            <option value="5.В Пути">В Пути</option>
                            <option value="4,3.Поступил">Поступил</option>
                            <option value="8.Отказ">Отказ!</option>
                            <option value="6.Вручено">Вручено</option>
                        <?php }
//                        1.В Оброботке
                        elseif($row['client_status'] == '1.В Оброботке') { ?>
                            <option value="1.В Оброботке">В Оброботке</option>
                            <option value="2.Подтвержден">Подтвержден</option>
                            <option value="2,1.Алматы">Алматы</option>
                            <option value="3.Перезвон">Перезвон</option>
                            <option value="4.Ожидает">Ожидает</option>
                            <option value="4,1.Ожидает доставки">Ожидает доставки</option>
                            <option value="4,2.Заберут">Заберут</option>
                            <option value="4,3.Поступил">Поступил</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="7.Отказ">Отказ</option>
                        <?php }
//                        2.Подтвержден
                        elseif($row['client_status'] == '2.Подтвержден') { ?>
                            <option value="2.Подтвержден">Подтвержден</option>
                            <option value="2,1.Алматы">Алматы</option>
                            <option value="4,1.Ожидает доставки">Ожидает доставки</option>
                            <option value="5.В Пути">В Пути</option>
                            <option value="4,3.Поступил">Поступил</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="2,2.Вручено Ал">Вручено Ал</option>
                            <option value="8.Отказ">Отказ!</option>
                        <?php }
//                        2,1.Алматы
                        elseif($row['client_status'] == '2,1.Алматы') { ?>
                            <option value="2,1.Алматы">Алматы</option>
                            <option value="2,2.Вручено АЛ">Вручено Ал</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="7.Отказ">Отказ</option>
                        <?php }
                        // 2,2.Алматы Вручено
                        elseif($row['client_status'] == '2,2.Вручено Ал') { ?>
                            <option value="2,2.Вручено Ал">Вручено Ал</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="8.Отказ">Отказ!</option>
                        <?php }
//                        3.Перезвон
                        elseif ($row['client_status'] == '3.Перезвон') { ?>
                            <option value="3.Перезвон">Перезвон</option>
                            <option value="2.Подтвержден">Подтвержден</option>
                            <option value="4.Ожидает">Ожидает</option>
                            <option value="4,1.Ожидает доставки">Ожидает доставки</option>
                            <option value="4,2.Заберут">Заберут</option>
                            <option value="5.В Пути">В Пути</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="7.Отказ">Отказ</option>
                        <?php }
//                        4.Ожидает
                        elseif ($row['client_status'] == '4.Ожидает') { ?>
                            <option value="4.Ожидает">Ожидает</option>
                            <option value="2.Подтвержден">Подтвержден</option>
                            <option value="3.Перезвон">Перезвон</option>
                            <option value="4,1.Ожидает доставки">Ожидает доставки</option>
                            <option value="4,2.Заберут">Заберут</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="7.Отказ">Отказ</option>
                        <?php }
                        // Ожидает Доставки
                        elseif ($row['client_status'] == '4,1.Ожидает доставки') { ?>
                            <option value="4,1.Ожидает доставки">Ожидает доставки</option>
                            <option value="5.В Пути">В Пути</option>
                            <option value="4,3.Поступил">Поступил</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="8.Отказ">Отказ!</option>
                        <?php }
                        // Заберут
                        elseif ($row['client_status'] == '4,2.Заберут') { ?>
                            <option value="4,2.Заберут">Заберут</option>
                            <option value="2,1.Алматы">Алматы</option>
                            <option value="4.Ожидает">Ожидает</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="2,2.Вручено Ал">Вручено Ал</option>
                            <option value="7.Отказ">Отказ</option>
                        <?php }
                        // Поступ
                        elseif ($row['client_status'] == '4,3.Поступил') { ?>
                            <option value="4,3.Поступил">Поступил</option>
                            <option value="6.Вручено">Вручено</option>
                            <option value="8.Отказ">Отказ!</option>
                        <?php }
//                        7.Отказ
                        elseif ($row['client_status'] == '7.Отказ') { ?>
                            <option value="7.Отказ">Отказ</option>
                        <?php }
                        //                        8.Отказ
                        elseif($row['client_status'] == '8.Отказ') { ?>
                            <option value="8.Отказ">Отказ!</option>
                        <?php }
//                        6.Вручено
                        elseif ($row['client_status'] == '6.Вручено') { ?>
                            <option value="6.Вручено">Вручено</option>
                            <option value="2,2.Вручено Ал">Вручено Ал</option>
                        <?php }
                        ?>

                    </select>
                    <span> Принял:</span>
                    <select name="client_confirm" class="m-1 form-control">
                        <?php
                        //                        Менеджеры
                        if ($row['client_confirm'] == '') { ?>
                            <option value=""></option>
                            <option value="Акбота">Акбота</option>
                            <option value="Асылжан">Асылжан</option>
                            <option value="Бағлан">Бағлан</option>
                        <?php }

                        //                        Если Подтвержден Асылжан
                        elseif($row['client_confirm'] == 'Асылжан' && $row['client_status'] == '2.Подтвержден') { ?>
                            <option value="Асылжан">Асылжан</option>
                        <?php }
                        elseif($row['client_confirm'] == 'Асылжан' && $row['client_status'] == '4,1.Ожидает доставки') { ?>
                            <option value="Асылжан">Асылжан</option>
                        <?php }

                        //                        Если Подтвержден Акбота
                        elseif($row['client_confirm'] == 'Акбота' && $row['client_status'] == '2.Подтвержден') { ?>
                            <option value="Акбота">Акбота</option>
                        <?php }
                        elseif($row['client_confirm'] == 'Акбота' && $row['client_status'] == '4,1.Ожидает доставки') { ?>
                            <option value="Акбота">Акбота</option>
                        <?php }

                        //                        Если Подтвержден Бағлан
                        elseif($row['client_confirm'] == 'Бағлан' && $row['client_status'] == '2.Подтвержден') { ?>
                            <option value="Бағлан">Бағлан</option>
                        <?php }
                        elseif($row['client_confirm'] == 'Бағлан' && $row['client_status'] == '4,1.Ожидает доставки') { ?>
                            <option value="Бағлан">Бағлан</option>
                        <?php }

//                        Если Отказ Асылжан
                        elseif($row['client_confirm'] == 'Асылжан' && $row['client_status'] == '7.Отказ') { ?>
                            <option value="Асылжан">Асылжан</option>
                        <?php }
//                        Если Отказ Акбота
                        elseif($row['client_confirm'] == 'Акбота' && $row['client_status'] == '7.Отказ') { ?>
                            <option value="Акбота">Акбота</option>
                        <?php }
//                        Если Отказ Бағлан
                        elseif($row['client_confirm'] == 'Бағлан' && $row['client_status'] == '7.Отказ') { ?>
                            <option value="Бағлан">Бағлан</option>
                        <?php }

//                        1.В Оброботке
                        elseif($row['client_confirm'] == 'Асылжан') { ?>
                            <option value="Асылжан">Асылжан</option>
                            <option value="Акбота">Акбота</option>
                            <option value="Бағлан">Бағлан</option>
                        <?php }
                        elseif($row['client_confirm'] == 'Бағлан') { ?>
                            <option value="Бағлан">Бағлан</option>
                            <option value="Акбота">Акбота</option>
                            <option value="Асылжан">Асылжан</option>
                        <?php }
                        elseif($row['client_confirm'] == 'Акбота') { ?>
                            <option value="Акбота">Акбота</option>
                            <option value="Бағлан">Бағлан</option>
                            <option value="Асылжан">Асылжан</option>
                        <?php }

                        else { ?>
                            <option value=""></option>
                            <option value="Бағлан">Бағлан</option>
                            <option value="Акбота">Акбота</option>
                            <option value="Асылжан">Асылжан</option>
                        <?php }
                        ?>
                    </select>
                     <span> Предоплата:</span>
                        <input type=" text" class="form-control" name="client_oplata"
                                                value="<?= $row['client_oplata'] ?> ">

<!--                    <span>Дата:</span>-->
<!--                    <input type="date" class="form-control" name="client_date" value="--><?//= $row['client_date'] ?><!--">-->

                    <?php
                    if ($_SESSION['user_status'] == 2 or $_SESSION['user_status'] == 1) { ?>
                        <button name="btn-save" class="btn btn-primary mb-5 ml-1 mt-2"">Изменить</button>
                    <?php }
                    elseif ($_SESSION['user_status'] == 4){ ?>
                        <button name="btn-save" class="btn btn-primary mb-5 ml-1 mt-2">Изменить</button>
                        <button name="btn-delete" class="btn btn-danger mb-5 ml-1 mt-2">Удалить</button>
                    <?php }
                    elseif ($_SESSION['user_status'] == 3){ ?>
                        <button name="btn-save" class="btn btn-primary mb-5 ml-1 mt-2">Изменить</button>
                    <?php }
                    ?>

                </form>
            </div>
            <div class="col-md-6">
                <div class="block">

                    <?php
                    $query = $conn->query("SELECT * FROM comments WHERE com_client_id = '$_GET[id]' ORDER BY com_date DESC, com_time DESC");
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <p><?= $row['com_user'] ?> (<?= substr($row['com_date'], -5)  ?>/
                            <?= substr($row['com_time'], 0, -3)  ?>): <?= $row['com_text'] ?> </p>
                    <?php }
                    ?>
					<!--Изменение статуса-->
                    <?php
                    $query = $conn->query("SELECT * FROM status WHERE status_client_id = '$_GET[id]' ORDER BY status_date DESC, status_time DESC");
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <p><?= $row['status_name'] ?> (<?= substr($row['status_date'], -5)  ?>/
                            <?= substr($row['status_time'], 0, -3)  ?>): Изменил статус на
                            <span style="color: red"><?= substr($row['status_status'],2) ?></span> </p>
                    <?php }
                    ?>

                </div>
                <form action="" method="POST">
                    <textarea placeholder="Написать коммент" name="com_text" cols="30" rows="2"
                              class="form-control" id="com_pole"></textarea>
                    <button name="add_com" class="btn btn-success w-100">Коммент</button>
                </form>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php
if (isset($_POST['btn-save'])) {


	$data = date("Y-m-d H:i:s");
    $time = date("H:i:s");
    $querys = $conn->query("
        INSERT INTO `status`(`status_client_id`,`status_name`, `status_status`, `status_date`,`status_time`)
        VALUES ('$_GET[id]','$_SESSION[user_name]','$_POST[client_status]','$data','$time')");
	
                    $query = $conn->query("UPDATE clients SET
                        client_name = '$_POST[client_name]',
                        client_price = '$_POST[client_price]',
                        client_track = '$_POST[client_track]',
                        client_product = '$_POST[client_product]',
                        client_city = '$_POST[client_city]',
                        client_adress = '$_POST[client_adress]',
                        client_status = '$_POST[client_status]',
                        client_confirm = '$_POST[client_confirm]',
                        client_oplata = '$_POST[client_oplata]'
                        WHERE client_id = '$_GET[id]';
                        ");

                    if ($query) {
                        echo '<script>history.go(-1)</script>';
                    }
                }
//            }
//        }
if (isset($_POST['btn-delete'])) {
    $query = $conn->query("DELETE FROM clients WHERE client_id='$_GET[id]';");
    if ($query) {
        echo '<script>document.location="/"</script>';
    }
}
?>

<?php
if (isset($_POST['add_com'])) {
    $data = date("Y-m-d H:i:s");
    $time = date("H:i:s");
    $query = $conn->query("
        INSERT INTO `comments`(`com_client_id`,`com_user`, `com_text`, `com_date`,`com_time`)
        VALUES ('$_GET[id]','$_SESSION[user_name]','$_POST[com_text]','$data','$time')");
    if ($query) {
        echo '<script>history.go(-1)</script>';
    }
}
?>
</body>

</html>
