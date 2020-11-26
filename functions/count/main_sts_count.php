<?php
function main_sts_count()
{
    global $conn;
    if ($_SESSION['user_status']==2 or $_SESSION['user_status']==4) { ?>
        <?php
        $query = $conn->query("SELECT count(client_price) as total1 FROM clients WHERE client_status = '1.В Оброботке'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">В оброботке (<?= $row['total1'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total4 FROM clients WHERE client_status = '3.Перезвон'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Перезвон (<?= $row['total4'] ?>)</th>

        <?php
            if($_SESSION['user_name']=='Бағлан'){
                $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status = '4.Ожидает' AND client_confirm = 'Бағлан'");
                $row = mysqli_fetch_assoc($query); ?>
                <?php
            }
            elseif($_SESSION['user_name']=='Асылжан'){
                $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status = '4.Ожидает' AND client_confirm = 'Асылжан'");
                $row = mysqli_fetch_assoc($query); ?>
                <?php
            }
            else {
                $query = $conn->query("SELECT count(client_price) as total11 FROM clients WHERE client_status = '4.Ожидает'");
                $row = mysqli_fetch_assoc($query);
            } ?>
                <th class="text-center main-status">Ожидает (<?= $row['total11'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total7 FROM clients WHERE client_status = '4,2.Заберут'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Заберут (<?= $row['total7'] ?>)</th>
        <?php
        $query = $conn->query("SELECT count(client_price) as total2 FROM clients WHERE client_status = '2.Подтвержден'");
        $row = mysqli_fetch_assoc($query); ?>
        <th class="text-center main-status">Подтвержден (<?= $row['total2'] ?>)</th>
    <?php }






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