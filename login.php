<?php include "includes/db.php"; ?>
<?php session_start() ?>
<?php
if (isset($_POST['login'])) {
    $query = $conn->query("SELECT * FROM users WHERE 
    user_login = '$_POST[user_name]' AND
    user_pass = '$_POST[user_pass]'");
    while ($row = mysqli_fetch_assoc($query)) {
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_login'] = $row['user_login'];
        $_SESSION['user_status'] = $row['user_status'];
    }
    if ($query) {
        echo '<script>document.location = "index.php"</script>';
    } else {
        echo 'неправильно Логин или Пароль';
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
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="" method="POST">
                    <input type="text" class="form-control" name="user_name" placeholder="Login">
                    <input type="password" class="form-control" name="user_pass" placeholder="Pass">
                    <input type="submit" value="Login" class="btn btn-success w-100" name="login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>