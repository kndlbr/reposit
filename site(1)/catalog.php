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
                <a class="nav-link" href="<?
                if (empty($_SESSION['auth'])) {
                    echo "login.php";
                }else {
                    echo "profile.php";
                }?>">Личный кабинет</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container" style="margin-bottom: 10%;">
        <h3>МАНИКЮР</h3>
        <div class="row">
            <div class="col">
                <div class="card-servise" style="background-image: url(images/service\ 1.png);">
                    <div class="service-check">Маникюр с покрытием</div>
                    <div class="prace">1200 РУБ.</div>
                    <a href="">
                        <button class="white">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card-servise" style="background-image: url(images/service\ 1.png);">
                    <div class="service-check">Маникюр с покрытием</div>
                    <div class="prace">1200 РУБ.</div>
                    <a href="">
                        <button class="white">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card-servise" style="background-image: url(images/service\ 1.png);">
                    <div class="service-check">Маникюр с покрытием</div>
                    <div class="prace">1200 РУБ.</div>
                    <a href="">
                        <button class="white">Записаться</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-servise" style="background-image: url(images/service\ 1.png);">
                    <div class="service-check">Маникюр с покрытием</div>
                    <div class="prace">1200 РУБ.</div>
                    <a href="">
                        <button class="white">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card-servise" style="background-image: url(images/service\ 1.png);">
                    <div class="service-check">Маникюр с покрытием</div>
                    <div class="prace">1200 РУБ.</div>
                    <a href="">
                        <button class="white">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card-servise" style="background-image: url(images/service\ 1.png);">
                    <div class="service-check">Маникюр с покрытием</div>
                    <div class="prace">1200 РУБ.</div>
                    <a href="">
                        <button class="white">Записаться</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col">
                <div class="footer-info">
                    + 0 000 000 00
                    <br>Балтийская, 2
                    <br>beautyplace@gmail.com
                </div>
            </div>
            <div class="col">
                <a href="#">
                    <img src="images/inst.svg" alt="" class="icon">
                </a>
                <a href="#">
                    <img src="images/email.svg" alt="" class="icon">
                </a>            
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>