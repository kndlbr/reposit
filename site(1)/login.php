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
?>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">BEAUTY PLACE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="form">
        <form method="POST" action="php/login.php">
            <p class="form-title">ВХОД</p>
            <div class="input-container">
                <input name="email" type="text" placeholder="Email">
                <span></span>
            </div>
            <div class="input-container">
                <input name="password" type="password" placeholder="Пароль">
            </div>
            <a style="text-decoration: none;">
                <button type="submit" class="submit">
                    Войти
                </button>
            </a>
    
            <p class="signup-link">
                Нет аккаунта?
                <a href="reg.php" style="text-decoration: none; color: white;">Зарегистрируйтесь</a>
            </p>
        </form>
    </div>
</body>