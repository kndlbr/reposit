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
   $res = mysqli_fetch_array(mysqli_query($conn, "SELECT id FROM `users` where email = '$email'"))

?>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">BEAUTY PLACE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
    <form class="form" action="php/note_create.php?id=<?echo $res['id']?>" method="post">
        <p class="form-title">ЗАПИСЬ</p>
        <div class="input-container">
           <input name="datetime" type="datetime-local">
           <span>
           </span>
        </div>
        <div class="input-container">
           <select name="master">
               <option>Выберите мастера</option>
                  <?
                     $sql = mysqli_query($conn, "SELECT name, lname, id FROM `users` where role_id = 2");
                     while($n = mysqli_fetch_array($sql)){
                        echo '<option value="'.$n['id'].'">'.$n['name'].' '.$n['lname'].'</option>';
                     }
                  ?>
           </select>
           <span>
           </span>
        </div>
        <a style="text-decoration: none;">
            <button type="submit" class="submit">
                Записаться
            </button>
        </a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>