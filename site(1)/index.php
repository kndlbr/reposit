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
              <a class="nav-link" href="note.php" style="display:<?if(empty($_SESSION['auth'])){echo 'none';} else{ echo'';}?>;">Запись</a>
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

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="h1-info">Салон красоты, который заботится о тебе</div>
                <h1>ПРЕУМНОЖАЯ ЛУЧШЕЕ В ТЕБЕ</h1>
            </div>
            <div class="col">
                <div class="cover"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cover" style="background-image: url(https://static-sl.insales.ru/files/1/7866/16113338/original/https_3A_2F_2Ftextreporter.ru_2Fphoto_2Forganizaciya_prostranstva2.jpg?1617644342);"></div>
            </div>
            <div class="col">
                <h2>О НАС</h2>
                <div class="h2-info">Мы рады предложить Вам широкий спектр услуг, направленных на поддержание и улучшение Вашей красоты и здоровья. В нашем салоне работают только опытные и квалифицированные мастера, которые с радостью помогут Вам подчеркнуть свою индивидуальность и привлекательность.
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 10%;" id="sale">
        <h3>УСЛУГИ</h3>
        <div class="row">
            <div class="col">
                <div class="card" style="background-image: url(images/service\ 1.png)">
                    <div class="service">Маникюр</div>
                    <a href="check-note.php">
                        <button class="black">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-image: url(images/service\ 2.png);">
                    <div class="service">Брови</div>
                    <a href="check-note.php">
                        <button class="black">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-image: url(images/service\ 3.png);">
                    <div class="service">Брови</div>
                    <a href="check-note.php">
                        <button class="black">Записаться</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card" style="background-image: url(images/service\ 4.png);">
                    <div class="service">Маникюр</div>
                    <a href="check-note.php">
                        <button class="black">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-image: url(images/service\ 5.png);">
                    <div class="service">Брови</div>
                    <a href="check-note.php">
                        <button class="black">Записаться</button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-image: url(images/service\ 6.png);">
                    <div class="service">Брови</div>
                    <a href="check-note.php">
                        <button class="black">Записаться</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cover2" style="background-image: url(https://static-sl.insales.ru/files/1/7866/16113338/original/https_3A_2F_2Ftextreporter.ru_2Fphoto_2Forganizaciya_prostranstva2.jpg?1617644342);"></div>
            </div>
            <div class="col">
                <h2>ЧАСТЫЕ ВОПРОСЫ</h2>
                <div class="accordion"> 
                    <div class="tab">
                     <input type="checkbox" id="tab1" name="tab-group">
                     <label for="tab1" class="tab-title">Как записаться?</label> 
                     <section class="tab-content"> 
                      Оплата принимается банковскими картами Mastercard, Visa, Maestro, МИР и UnionPay через платежную систему PayKeeper.
                     </section> 
                    </div> 
                    <div class="tab">
                     <input type="checkbox" id="tab2" name="tab-group">
                     <label for="tab2" class="tab-title">Как записаться?</label> 
                     <section class="tab-content"> 
                        Оплата принимается банковскими картами Mastercard, Visa, Maestro, МИР и UnionPay через платежную систему PayKeeper.
                     </section> 
                    </div> 
                    <div class="tab">
                     <input type="checkbox" id="tab3" name="tab-group">
                     <label for="tab3" class="tab-title">Как записаться?</label>
                     <section class="tab-content">
                        Оплата принимается банковскими картами Mastercard, Visa, Maestro, МИР и UnionPay через платежную систему PayKeeper.
                     </section>
                    </div>
                   </div>
                 
            </div>
        </div>
    </div>

    <div class="container">
        <h3>НАШИ МАСТЕРА</h3>
        <div class="h3-info">
            “Если делать свою работу, то только на 100%” - кредо работников Beauty Place
        </div>
    </div>

    <div class="container-padding">
        <div class="row">
            <div class="col">
                <img src="images/master.png" alt="" class="master-photo">
                <div class="master-name">Василенко Катя</div>
                <div class="master-info">Я - мастер бьюти-процедур. Уже несколько лет я занимаюсь предоставлением профессиональных услуг по уходу за внешностью. </div>
                <a href="" style="text-decoration: none;">
                    <button class="outline">Записаться</button>
                </a>
            </div>
            <div class="col">
                <img src="images/master 2.png" alt="" class="master-photo">
                <div class="master-name">Василенко Катя</div>
                <div class="master-info">Я - мастер бьюти-процедур. Уже несколько лет я занимаюсь предоставлением профессиональных услуг по уходу за внешностью. </div>
                <a href="" style="text-decoration: none;">
                    <button class="outline">Записаться</button>
                </a>
            </div>
            <div class="col">
                <img src="images/master 3.png" alt="" class="master-photo">
                <div class="master-name">Василенко Катя</div>
                <div class="master-info">Я - мастер бьюти-процедур. Уже несколько лет я занимаюсь предоставлением профессиональных услуг по уходу за внешностью. </div>
                <a href="" style="text-decoration: none;">
                    <button class="outline">Записаться</button>
                </a>
            </div>
        </div>
    </div>

    <div class="cover3">
        <h4>КАРТА ЛОЯЛЬНОСТИ</h4>
        <div class="h4-info">Оформите и получайте скидку на каждое посещение!</div>
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