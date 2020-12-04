<?php
function obrobotke()
{
    $_SESSION['manager'] = 1;
    global $conn;
    $query = $conn->query("SELECT * FROM clients WHERE client_status = '1.В Оброботке' ORDER BY client_date DESC");
    while ($row = mysqli_fetch_assoc($query)) {
        $_SESSION['tel'] = $row['client_phone'];

        $queryss = $conn->query("SELECT * FROM clients WHERE client_phone = '$_SESSION[tel]'");
        $rowss = mysqli_num_rows($queryss);
        if($rowss > 1) {
            $double = 'Дубль';
        }
        ?>

        <div class="text-primary mb-2 statusi">
            <span><?=$double?><?= substr($row['client_date'], 5,-3) ?> </span><br>
            <a href="edit.php?id=<?=$row['client_id']?>"><?= mb_substr($row['client_name'],0,23) ?></a> <br>
            <span><?= $row['client_phone'] ?></span><br>
            <span><?= $row['client_product'] ?> | <?=$row['client_price']?>тг</span>
        </div>
    <?php }





}

function perezvon()
{
    $_SESSION['manager'] = 1;
    global $conn;
    $query = $conn->query("SELECT * FROM clients WHERE client_status = '3.Перезвон'");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="text-primary mb-2 statusi">
            <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
            <a href="edit.php?id=<?=$row['client_id']?>"><?= mb_substr($row['client_name'],0,23) ?></a> <br>
            <span><?= $row['client_phone'] ?></span>
            <br>
            <span><?= $row['client_product'] ?> | <?=$row['client_price']?>тг</span>
        </div>
    <?php }
}

function ozhidaet()
{
    $_SESSION['manager'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4.Ожидает'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4.Ожидает'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4.Ожидает' ORDER BY client_date DESC");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
            <?php
        }
    }
}

function zaberut()
{
    $_SESSION['manager'] = 1;
    global $conn;
    $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,2.Заберут'");
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="text-primary mb-2 statusi">
            <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
            <a href="edit.php?id=<?=$row['client_id']?>"><?= mb_substr($row['client_name'],0,23) ?></a> <br>
            <span><?= $row['client_phone'] ?></span><br>
            <span><?= $row['client_product'] ?> | <?=$row['client_price']?>тг</span>
        </div>
    <?php }
}

function podtver()
{
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2.Подтвержден'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2.Подтвержден'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2.Подтвержден' ORDER BY client_date DESC");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
            <?php
        }
    }
}

function ozhidDostavki()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,1.Ожидает доставки'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_track'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,1.Ожидает доставки'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_track'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,1.Ожидает доставки'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

          <div class="text-primary mb-2 statusi">
              <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
              <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
              <span><?= $row['client_track'] ?></span><br>
          </div>
            <?php
        }
    }
}

function almaty()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2,1.Алматы'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2,1.Алматы'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2,1.Алматы'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
                <?php
        }
    }
}


function vputi()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '5.В Пути'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_track'] ?></span><br>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '5.В Пути'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_track'] ?></span><br>
                </div>
            <?php }
        }
    }else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '5.В Пути'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_track'] ?></span><br>
            </div>
            <?php
        }
    }
}

function postupil()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,3.Поступил'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_track'] ?></span><br>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,3.Поступил'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_track'] ?></span><br>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,3.Поступил'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <span><?= substr($row['client_date'], 5,-3) ?> </span><br>
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_track'] ?></span><br>
            </div>
            <?php
        }
    }
}
function vrucheno()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '6.Вручено'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '6.Вручено'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '4,3.Поступил'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
            <?php
        }
    }
}

function vruchenoAlmaty()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2,2.Вручено АЛ'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 statusi">
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2,2.Вручено АЛ'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 statusi">
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '2,2.Вручено АЛ'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>

            <?php
        }
    }
}

function otkaz()
{
    $_SESSION['logist'] = 1;
    global $conn;
    if ($_SESSION['user_login'] == 'asiok') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '8.Отказ')");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Асылжан') { ?>

                <div class="text-primary mb-2 otkaz">
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    } elseif ($_SESSION['user_login'] == 'Bagan') {
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '8.Отказ'");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <?php if ($row['client_confirm'] == 'Бағла') { ?>

                <div class="text-primary mb-2 otkaz">
                    <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                    <span><?= $row['client_phone'] ?></span><br>
                    <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
                </div>
            <?php }
        }
    }
    else{
        $query = $conn->query("SELECT * FROM clients WHERE client_status = '8.Отказ' and '7.Отказ'");
        while ($row = mysqli_fetch_assoc($query)) { ?>

            <div class="text-primary mb-2 statusi">
                <a href="edit.php?id=<?= $row['client_id'] ?>"><?= mb_substr($row['client_name'], 0, 23) ?></a> <br>
                <span><?= $row['client_phone'] ?></span><br>
                <span><?= $row['client_product'] ?> | <?= $row['client_price'] ?>тг</span>
            </div>
            <?php
        }
    }
}
