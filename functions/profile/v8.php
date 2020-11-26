<?php
function V8() {
    global $conn;
    ?>
    <div class="col-md-6">
        <h3>Smart Watch V8</h3>
        <div class="divkago">
            <table class="table table-bordered ">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Цена</th>
                </tr>
                </thead>

                <tbody class="">
                <?php
                $query = $conn->query("SELECT * FROM clients WHERE client_product = 'v8' AND client_status in ('2.Подтвержден','5.В Пути','4,3.Поступил','6.Вручено','8.Отказ')");
                $row = mysqli_fetch_assoc($query);
                $index = 1;
                $price = 1500;
                while ($row = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <th style="width: 5px"><?= $index++ ?></th>
                        <td><?= $row['client_name'] ?></td>
                        <td><?= $row['client_phone'] ?></td>
                        <td><?= $price ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="table-container-footer">
            <table class="table table-striped table-hover table-condensed table-bordered">
                <tfoot>
                <tr>
                    <?php
                    $query = $conn->query("SELECT count(*) as total FROM clients WHERE client_product = 'v8' AND client_status in ('2.Подтвержден','5.В Пути','4,3.Поступил','6.Вручено','8.Отказ')");
                    $row = mysqli_fetch_assoc($query);
                    ?>
                    <th>Количество заявок: <?=( $row['total'])?></th>
                    <?php
                    $query = $conn->query("SELECT count(*) as total2 FROM clients WHERE client_product = 'v8' AND client_status in ('2.Подтвержден','5.В Пути','4,3.Поступил','6.Вручено','8.Отказ')");
                    $row = mysqli_fetch_assoc($query);
                    ?>
                    <th>Общ сумма: <?=$_SESSION['v8'] = ($row['total2']) * 1500 ?></th>
                </tr>
                </tfoot>
            </table>
            <hr>
        </div>

    </div>
<?php }