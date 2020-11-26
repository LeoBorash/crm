<?php

function all()
{ ?>
    <div class="col-md-12">
        <table class="table table-bordered ">


            <tbody class="">
                <th scope="col">
                    <?= $_SESSION['airdots'] ?> +
                    <?= $_SESSION['airdots2'] ?> +
                    <?= $_SESSION['airdotsmi4'] ?> +
                    <?= $_SESSION['v8'] ?>  = <?=$all_count = $_SESSION['airdots']+$_SESSION['airdots2']+$_SESSION['airdotsmi4']+$_SESSION['v8'] ?>тг
                </th>
                <br>
            <th>
                <?= $all_count + 2500 - 43000 - 63000 - 90000?>
            </th>
            </tbody>
        </table>
    </div>
<?php }
