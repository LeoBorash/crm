<?php


function Searchobrobotke()
{
    global $conn;
    $query = $conn->query("
        SELECT * FROM clients 
        WHERE  
         client_name LIKE '%$_POST[search]%' || 
         client_phone LIKE '%$_POST[search]%' || 
         client_product LIKE '%$_POST[search]%' || 
         client_track LIKE '%$_POST[search]%' || 
         client_confirm LIKE '%$_POST[search]%' || 
         client_date LIKE '%$_POST[search]%' || 
         client_city LIKE '%$_POST[search]%'
         ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '1.В Оброботке') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>

    <?php }
}

function Searchperezvon()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' || 
    client_confirm LIKE '%$_POST[search]%' || 
         client_date LIKE '%$_POST[search]%' ||
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '3.Перезвон') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchozhidaet()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' || 
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' ||
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '4.Ожидает') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchpodtver()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' || 
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' ||
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '2.Подтвержден') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function SearchozhidDostavki()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '4,1.Ожидает доставки') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchalmaty()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '2,1.Алматы') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchzaberut()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '4,2.Заберут') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchvputi()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '5.В Пути') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchpostupil()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '4,3.Поступил') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchvrucheno()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '6.Вручено') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function SearchvruchenoAlmaty()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '2,2.Вручено АЛ') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}

function Searchotkaz()
{
    global $conn;
    $query = $conn->query("
    SELECT * FROM clients 
    WHERE 
    client_name LIKE '%$_POST[search]%' || 
    client_phone LIKE '%$_POST[search]%' || 
    client_product LIKE '%$_POST[search]%' || 
    client_track LIKE '%$_POST[search]%' ||
    client_confirm LIKE '%$_POST[search]%' || 
    client_date LIKE '%$_POST[search]%' || 
    client_city LIKE '%$_POST[search]%'
    ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <?php
        if($row['client_status'] == '7.Отказ') { ?>
            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
        <?php }
        ?>
    <?php }
}
