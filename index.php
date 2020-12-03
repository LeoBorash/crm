<?php session_start();
include "includes/db.php"; ?>
<?php include "functions/main.php"; ?>

<?php
if (!isset($_SESSION['user_name'])) {
    echo '<script>document.location = "login.php"</script>';
}
if (isset($_POST['exit'])) {
    session_destroy();
    echo "<script>document.location = '/'</script>";
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
    <script src="https://kit.fontawesome.com/89dfc9b8f5.js" crossorigin="anonymous"></script>
    <title>CRM</title>

    <?php if($_SESSION['user_status']==2 or $_SESSION['user_status']==1 or $_SESSION['user_status']==3){ ?>
        <style>
            .main-div{
                width: 100%;
            }
        </style>

    <?php } ?>

</head>

<body>

<div class="main-div">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2" id="navbar_top">
        <a class="navbar-brand ml-3" href="/">CRM System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0" action="" method="POST">
            <input class="form-control mr-sm-2 mt-1" type="search" name="search" placeholder="Поиск..." aria-label="Поиск...">
            <!--            <input type="date" class="form-control mr-sm-2 mt-1" name="fromdate">-->
            <!--            <input type="date" class="form-control mr-sm-2 mt-1" name="todate">-->
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="searchbtn">Поиск</button>
            <?php
            if($_SESSION['user_name'] == 'Асылжан'){ ?>
                <a href="profile.php" class="btn btn-outline-primary mr-2 ml-2" name="exit"><?php balance();?></a>
                <br><br><br>
            <?php }
            ?>
            <div class="mobile-header">
                <a href="logist.php" class="btn btn-outline-primary mr-1 ml-2" >Логистика</a>
                <a href="profile.php" class="btn btn-outline-primary " >Профиль</a>
                <button class="btn btn-outline-primary" name="exit">Выход</button>
            </div>
        </form>

    </nav>

    <?php
    // Топ Отчет Статусов
    count_status();
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <?php
                    if(!isset($_POST['searchbtn'])){
                        main_sts_count();
                    }else{
                        search_sts_count();
                    }
                    ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    if(isset($_POST['searchbtn'])){

                        if ($_SESSION['user_status']==1) { ?>
                            <td><?php Searchpodtver(); ?></td>
                            <td><?php SearchozhidDostavki(); ?></td>
                            <td><?php Searchvputi(); ?></td>
                            <td><?php Searchpostupil(); ?></td>
                            <td><?php Searchvrucheno(); ?></td>
                            <td><?php Searchotkaz(); ?></td>
                        <?php }
                        elseif ($_SESSION['user_status']==3) { ?>
                            <td><?php Searchalmaty(); ?></td>
                            <td><?php SearchvruchenoAlmaty(); ?></td>
                        <?php }
                        else{ ?>
                            <td><?php  Searchobrobotke(); ?> </td>
                            <td><?php Searchperezvon(); ?></td>
                            <td><?php Searchozhidaet(); ?></td>
                            <td><?php Searchzaberut(); ?></td>
                            <td><?php Searchpodtver(); ?></td>
                        <?php }
                    }
                    else{ ?>
                        <?php
                        if ($_SESSION['user_status']==4 or $_SESSION['user_status']==2) { ?>
                            <td><?php obrobotke(); ?> </td>
                            <td><?php perezvon(); ?></td>
                            <td><?php ozhidaet(); ?></td>
                            <td><?php zaberut(); ?></td>
                            <td><?php podtver(); ?></td>
                        <?php }
                        elseif ($_SESSION['user_status']==1) { ?>
                            <td><?php podtver(); ?></td>
                            <td><?php ozhidDostavki(); ?></td>
                            <td><?php vputi(); ?></td>
                            <td><?php postupil(); ?></td>
                            <td><?php vrucheno(); ?></td>
                            <td><?php otkaz(); ?></td>
                        <?php }
                        elseif ($_SESSION['user_status']==3) { ?>
                            <td><?php almaty(); ?></td>
                            <td><?php vruchenoAlmaty(); ?></td>
                        <?php }
                        ?>
                    <?php }
                    ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 60) {
            $('#navbar_top').addClass("fixed-top");
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        }else{
            $('#navbar_top').removeClass("fixed-top");
            $('body').css('padding-top', '0');
        }
    });
</script>
</body>

</html>
