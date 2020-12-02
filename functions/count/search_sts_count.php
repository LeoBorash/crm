<?php
function search_sts_count()
{
    global $conn;
    if ($_SESSION['user_status'] == 2 or $_SESSION['user_status'] == 4) {

        $query = $conn->query("SELECT count(*) as total1 FROM clients WHERE client_status = '1.В Оброботке'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">В оброботке (<?= $row['total1'] ?>)</th>

        <?php
        $query = $conn->query("SELECT count(*) as total4 FROM clients WHERE client_status = '3.Перезвон'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Перезвон (<?= $row['total4'] ?>)</th>

        <?php
        $query = $conn->query("SELECT count(*) as total5 FROM clients WHERE client_status = '4.Ожидает'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Ожидает (<?= $row['total5'] ?>)</th>

        <?php
        $query = $conn->query("SELECT count(*) as total7 FROM clients WHERE client_status = '4,2.Заберут'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Заберут (<?= $row['total7'] ?>)</th>

        <?php
        $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден' LIKE '%$_POST[search]%'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Подтвержден (<?= $row['total2'] ?>)</th>
        <?php
    }
}