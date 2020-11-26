<?php
session_start();
include "includes/db.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My Profile</title>
</head>
<body>
<div class="row">
    <div class="col-md-6">
        <a href="/" class="btn btn-info mt-2 mb-3 ml-3">Назад</a>
        <div class="row">
            <?php
            $query = $conn->query("SELECT * FROM users WHERE id = $_SESSION[user_name]")
            ?>

            <div class="col-9 ml-3 mt-3">
                <h3><?= $_SESSION['user_name'] ?></h3>
                <p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as total1 FROM clients WHERE client_status = '2.Подтвержден' and client_confirm = '$_SESSION[user_name]'");
                    $row = mysqli_fetch_assoc($query);
                    $_SESSION['a'] = $row['total1'];
                    ?>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as total2 FROM clients WHERE client_status = '4,1.Ожидает доставки' and client_confirm = '$_SESSION[user_name]'");
                    $row = mysqli_fetch_assoc($query);
                    $_SESSION['b'] = $row['total2'];
                    ?>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as total3 FROM clients WHERE client_status = '5.В Пути' and client_confirm = '$_SESSION[user_name]'");
                    $row = mysqli_fetch_assoc($query);
                    $_SESSION['c'] = $row['total3'];
                    ?>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as total4 FROM clients WHERE client_status = '4,3.Поступил' and client_confirm = '$_SESSION[user_name]'");
                    $row = mysqli_fetch_assoc($query);
                    $_SESSION['d'] = $row['total4'];
                    $a = $_SESSION['a'] + $_SESSION['b'] + $_SESSION['c'] + $_SESSION['d'];
                    ?>
                <p>Подтвержден: <span><?= $a ?></span>тг</p>
                <p><?php
                    $query = $conn->query("SELECT SUM(client_price) as total FROM clients WHERE client_status = '6.Вручено' and client_confirm = '$_SESSION[user_name]'");
                    $row = mysqli_fetch_assoc($query); ?>
                <p>Вручено: <?= $row['total'] ?>тг</p></p>

                <p><?php
                    $query = $conn->query("SELECT SUM(client_price) as total FROM clients WHERE client_status = '7.Отказ' and client_confirm = '$_SESSION[user_name]'");
                    $row = mysqli_fetch_assoc($query); ?>
                <p>Отказ: <?= $row['total'] ?>тг</p></p>
            </div>

        </div>
    </div>
    <div class="col-md-6">

    </div>
    <div class="row">
</body>
</html>
