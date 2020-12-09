<?php
function count_status() {
    global $conn;
    if($_SESSION['user_status']==4){ ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '1.В Оброботке'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>В Оброботке: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '2.Подтвержден'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Подтвержден: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as total FROM clients WHERE client_status = '2,1.Алматы'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Алматы: <?=$row['total']?></p>
                </div>
                <div class="col-md-3">
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '3.Перезвон'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Перезвон: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '4.Ожидает'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Ожидает: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '4,1.Ожидает доставки'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Ожидает доставки: <?=$row['totalc']?></p>
                </div>
                <div class="col-md-3">
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '4,2.Заберут'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Заберут: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '5.В Пути'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Казпочта: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '5,1.СДЭК'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>СДЭК: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as total FROM clients WHERE client_status = '4,3.Поступил'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Поступил: <?=$row['total']?></p>
                </div>
                <div class="col-md-3">
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '6.Вручено'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Вручено: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '2,2.Вручено Ал'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Вручено Алматы: <?=$row['totalc']?></p>
                    <?php
                    $query = $conn->query("SELECT SUM(client_price) as totalc FROM clients WHERE client_status = '7.Отказ'");
                    $row = mysqli_fetch_assoc($query); ?>
                    <p>Отказ: <?=$row['totalc']?></p>
                </div>

            </div>
        </div>
    <?php }
    $_SESSION['a'] = $row['total1'];
}