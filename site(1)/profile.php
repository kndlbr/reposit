<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Beauty place</title>
    <link rel="shortcut icon" href="images/favicon (2).png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Syncopate:wght@700&display=swap" rel="stylesheet">
</head>

    <?
        require_once('php/configM.php');
        session_start();
        $email = $_SESSION['email'];
        $res = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `users` where email = '$email'"));
        
    ?>

<body>
    <nav class="navbar navbar-expand-lg justify-content-end">
        <a class="navbar-brand" href="index.php">BEAUTY PLACE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><img src="images/burger.svg"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="catalog.php">Каталог</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="note.php">Запись</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="php/exit.php">Выйти из профиля</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="profile" style="display: <?
        if ($res['role_id'] == 2){
            echo 'none';
        } else {
            echo 'block';
        }
    ?>;">
        <table>
            <tr>
                <td>
                    <h5>ЛИЧНЫЙ КАБИНЕТ</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="info-profile">Имя</div>
                    <div class="info-profile">Фамилия</div>
                    <div class="info-profile">Номер телефона</div>
                    <div class="info-profile">Почта</div>
                </td>
                <td>
                    <div class="info-profile"><?echo $res['name']?></div>
                    <div class="info-profile"><?echo $res['lname']?></div>
                    <div class="info-profile"><?echo $res['phone']?></div>
                    <div class="info-profile"><?echo $res['email']?></div>
                </td>
            </tr>
        </table>
    </div>
    
    <div style="display:<?if ($res['role_id'] != '3') {echo 'none';}else {echo 'flex; justify-content:center; ';}?>">
        <a href="new_master.php" style="text-decoration: none;">
            <button type="submit" class="submit">
                Добавить нового мастера
            </button>
        </a>
    </div>

    <div class="profile" style="display:<?
        if ($res['role_id'] == 2) {
            echo 'block';
        }else {
            echo 'none';
        }
    ?> ;">
        <table>
            <tr>
                <td>
                    <h5>Список записей</h2>
                </td>
            </tr>
            <?
                if ($res['role_id'] == 2) {
                    $master_id = $res['id'];
                    $res_note = mysqli_query($conn, "SELECT * From `notes` where master_id  = '$master_id'");
                    while ($i = mysqli_fetch_array($res_note)) {
                        $user_id = $i['user_id'];
                        $res_user = mysqli_query($conn, "SELECT * FROM `users` where id = '$user_id'");
                        while($n = mysqli_fetch_array($res_user)){
                            echo '
                            <tr>
                                <td>
                                    <div class="info-profile">Имя клиента</div>
                                    <div class="info-profile">Фамилия клиента</div>
                                    <div class="info-profile">Номер телефона</div>
                                    <div class="info-profile">Дата и время записи</div>
                                </td>
                                <td>
                                    <div class="info-profile">'.$n['name'].'</div>
                                    <div class="info-profile">'.$n['lname'].'</div>
                                    <div class="info-profile">'.$n['phone'].'</div>
                                    <div class="info-profile">'.$i['datetime'].'</div>
                                </td>
                            </tr>
                            ';
                        }
                    }
                }else {
                }
            ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>