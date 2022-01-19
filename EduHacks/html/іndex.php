<?php
  include("./connectDB.php");
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/login.css">
  </div>
    </head>
    <body>
    <h1 class="title" data-text="Edu Hacks"><span>Edu Hacks</span></h1>
    <div class="login-box">
  <h2>Inicia sessió</h2>  
  <form method="POST">
    <div class="user-box">
      <input type="text" name="nomUsuari" required="">
      <label>Usuari</label>
    </div>
    <div class="user-box">
      <input type="password" name="passUsuari" required="">
      <label>Contrasenya</label>
    </div>
    <input class="accedeix " type="submit" name="submit" value="ACCEDEIX">
</br>
</br>
</br>
    <p class="registre">Encara no t'has registrat?</p>
    <a class="boton" href="./register.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registre
    </a>
  </form>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomUsuari = $_POST["nomUsuari"];
    $passUsuari = $_POST["passUsuari"];
  
    if(isset($nomUsuari) && isset($passUsuari)){
      $SQL = 'SELECT username,passHash FROM users';
      $validacio = false;
      $usuaris = $db->query($SQL);
      foreach ($usuaris as $usuari) {
          if($nomUsuari == $usuari[0] && password_verify($passUsuari, $usuari[1])){
              $lastSignIn = date('Y/m/d G:i:s');
              $updateSQL = "UPDATE users SET lastSignIn = '$lastSignIn' WHERE username = '$nomUsuari';";
              $test = $db->query($updateSQL);
              setcookie($nomUsuari, "cookie", time()+3600*24);
              $validacio = true;
              $_SESSION['nomUsuari'] = $nomUsuari;
              $_SESSION['passUsuari'] = $passUsuari;
              header("Location:./home.php");
          }
      }
      
      if($validacio == false){
          header("Location:./іndex.php");
      } 
    }
  }
?>


