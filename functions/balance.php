<?php
function balance()
{
    global $conn;
    $query = $conn->query("SELECT SUM(client_price) as total1 FROM clients WHERE client_status = '2.Подтвержден' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['a'] = $row['total1'];

    $query = $conn->query("SELECT SUM(client_price) as total2 FROM clients WHERE client_status = '4,1.Ожидает доставки' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['b'] = $row['total2'];

    $query = $conn->query("SELECT SUM(client_price) as total3 FROM clients WHERE client_status = '5.В Пути' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['c'] = $row['total3'];

    $query = $conn->query("SELECT SUM(client_price) as total4 FROM clients WHERE client_status = '4,3.Поступил' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['d'] = $row['total4'];

    $query = $conn->query("SELECT SUM(client_price) as total5 FROM clients WHERE client_status = '7.Отказ' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['e'] = $row['total5'];

    $query = $conn->query("SELECT SUM(client_price) as total6 FROM clients WHERE client_status = '2,2.Вручено Ал' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['f'] = $row['total6'];

    $query = $conn->query("SELECT SUM(client_price) as total FROM clients WHERE client_status = '6.Вручено' and client_confirm = '$_SESSION[user_name]'");
    $row = mysqli_fetch_assoc($query);
    $_SESSION['g'] = $row['total'];

    $a = $_SESSION['a'] + $_SESSION['b'] + $_SESSION['c'] + $_SESSION['d'] ;


    echo '
    <span style="color: white";>
        <i style="color:gold" class="fas fa-coins"></i>  : ' . (int)(($a - 300000) * (8 / 100)) . 'тг' . ' 
        <i style="color:lightblue" class="ml-1 fas fa-money-check-alt"></i> : ' . (int)(($_SESSION['f'] + $_SESSION['g'] - 1339940 - 230000) * (8 / 100)) . 'тг' . '
        <i style="color:orangered" class="ml-2 fas fa-times"></i> : ' . ($_SESSION['e'] - 3087700) * (8 / 100) . 'тг' . '
     </span>
       ';
}