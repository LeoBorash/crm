<?php
function logist_sts_count()
{
    global $conn;
    if ($_SESSION['user_status']==2 or $_SESSION['user_status']==4) { ?>
        <?php
        if($_SESSION['user_name']=='Бағла'){

            $query = $conn->query("SELECT count(client_price) as total3 FROM clients WHERE client_status = '2,1.Алматы' AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Алматы (<?= $row['total3'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден' AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Подтвержден (<?= $row['total2'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total6 FROM clients WHERE client_status = '4,1.Ожидает доставки' AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Ожидает доставки (<?= $row['total6'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total8 FROM clients WHERE client_status = '5.В Пути' AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">В Пути (<?= $row['total8'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total8 FROM clients WHERE client_status = '5,1.СДЭК' AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">СДЭК (<?= $row['total8'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total9 FROM clients WHERE client_status = '4,3.Поступил' AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Поступил (<?= $row['total9'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status in('7.Отказ','8.Отказ') AND client_confirm = 'Бағла'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Отказ (<?= $row['total11'] ?>)</th>

        <?php }

        elseif($_SESSION['user_name']=='Асылжан'){
            $query = $conn->query("SELECT count(client_price) as total3 FROM clients WHERE client_status = '2,1.Алматы' AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Алматы (<?= $row['total3'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден' AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Подтвержден (<?= $row['total2'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total6 FROM clients WHERE client_status = '4,1.Ожидает доставки' AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Ожидает доставки (<?= $row['total6'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total8 FROM clients WHERE client_status = '5.В Пути' AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">В Пути (<?= $row['total8'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total8 FROM clients WHERE client_status = '5,1.СДЭК' AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">СДЭК (<?= $row['total8'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total9 FROM clients WHERE client_status = '4,3.Поступил' AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Поступил (<?= $row['total9'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status in('7.Отказ','8.Отказ') AND client_confirm = 'Асылжан'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Отказ (<?= $row['total11'] ?>)</th>
        <?php }else{
            $query = $conn->query("SELECT count(client_price) as total3 FROM clients WHERE client_status = '2,1.Алматы'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Алматы (<?= $row['total3'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден'");
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
            $query = $conn->query("SELECT count(client_price) as total8 FROM clients WHERE client_status = '5,1.СДЭК'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">СДЭК (<?= $row['total8'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total9 FROM clients WHERE client_status = '4,3.Поступил'");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Поступил (<?= $row['total9'] ?>)</th>
            <?php
            $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status in('7.Отказ','8.Отказ')");
            $row = mysqli_fetch_assoc($query); ?>
            <th class="text-center main-status">Отказ (<?= $row['total11'] ?>)</th>
      <?php  }

    }

    elseif ($_SESSION['user_status']==3){ ?>
        <?php
        $query = $conn->query("SELECT count(client_price) as total3 FROM clients WHERE client_status = '2,1.Алматы'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Алматы (<?= $row['total3'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total10 FROM clients WHERE client_status = '2,2.Вручено Ал'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Вручено Ал(<?= $row['total10'] ?>)</th>
    <?php }
    ?>

    <?php
}