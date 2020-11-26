<?php
function search_sts_count()
{
    global $conn;
    if($_SESSION['user_status']==1){
        $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден' LIKE '%$_POST[search]%'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Подтвержден (<?= $row['total2'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total6 FROM clients WHERE client_status = '4,1.Ожидает доставки'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Ожидает доставки (<?= $row['total6'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total8 FROM clients WHERE client_status = '5.В Пути'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">В Пути (<?= $row['total8'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total9 FROM clients WHERE client_status = '4,3.Поступил'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Поступил (<?= $row['total9'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total10 FROM clients WHERE client_status = '6.Вручено'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Вручено (<?= $row['total10'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status = '7.Отказ'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Отказ (<?= $row['total11'] ?>)</th>
        <?php

    }elseif($_SESSION['user_status']==2 or $_SESSION['user_status']==4){
        $query = $conn->query("SELECT count(client_price) as total1 FROM clients WHERE client_status = '1.В Оброботке'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">В оброботке (<?= $row['total1'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total4 FROM clients WHERE client_status = '3.Перезвон'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Перезвон (<?= $row['total4'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total5 FROM clients WHERE client_status = '4.Ожидает'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Ожидает (<?= $row['total5'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total7 FROM clients WHERE client_status = '4,2.Заберут'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Заберут (<?= $row['total7'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Подтвержден (<?= $row['total2'] ?>)</th>
        <?php

    }

    elseif ($_SESSION['user_status']==3){ ?>
        <?php
        $query = $conn->query("SELECT count(client_price) as total3 FROM clients WHERE client_status = '2,1.Алматы'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Алматы (<?= $row['total3'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total10 FROM clients WHERE client_status = '2,2.Вручено Ал'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Вручено Ал (<?= $row['total10'] ?>)</th>
    <?php }
    ?>

    <?php
}