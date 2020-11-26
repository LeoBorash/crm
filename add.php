<?php include "includes/db.php"; ?>
<?php
if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];
    $track = $_POST['treck'];
    $status = $_POST['status'];
    $data = $_POST['data'];

    $query = $conn->query("
    INSERT INTO `clients`(`client_name`, `client_phone`, `client_product`, `client_price`, `client_city`, `client_adress`, `client_track`, `client_status`, `client_date`) 
    VALUES ('$name','$phone','$product','$price','$city','$adress','$track','$status','$data')");

    if ($query) {
        echo '<script>document.location="/"</script>';
    } else {
        echo 'Не добавлен';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Добавить товар</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="/" class="btn btn-secondary mt-2">Назад</a>
            <h2>Добавить клиента</h2>
            <form action="" method="POST">
                <input name="name" type="text" class="form-control"  placeholder="Имя">
                <input name="phone" type="text" class="form-control"  placeholder="Телефон">
                <select name="product" class="form-control mb-1">
                    <option value="">Товар</option>
                    <option value="V8">V8</option>
                    <option value="AirDots">AirDots</option>
                    <option value="AirDots+Mi4">AirDots+Mi4</option>
                    <option value="Sky">Sky</option>
                </select>
                <input type="text" class="form-control" name="price" placeholder="Цена">
                <input type="text" class="form-control" name="city" placeholder="Город">
                <input type="text" class="form-control" name="adress" placeholder="Адрес">
                <input type="text" class="form-control" name="treck" placeholder="Трек">
                <select name="status" class="form-control mb-1">
                    <option value="">Статус</option>
                    <option value="1.В Оброботке">В Оброботке</option>
                    <option value="2.Подтвержден">Подтвержден</option>
                    <option value="3.Перезвон">Перезвон</option>
                    <option value="4.Ожидает">Ожидает</option>
                    <option value="5.В Пути">В Пути</option>
                    <option value="6.Вручено">Вручено</option>
                    <option value="7.Отказ">Отказ</option>
                </select>
                <input name="data" type="date" class="form-control">
                <button name="add" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>

<!-- 
$conn = mysqli_connect("srv-pleskdb34.ps.kz", "marke_smart", "MyPassword2", "markets1_smart"); -->