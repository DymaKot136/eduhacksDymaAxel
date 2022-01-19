<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/register.css">
    </head>
    <body>
    <h1 class="title" data-text="Edu Hacks"><span>Edu Hacks</span></h1>
    <div class="login-box">
  <h2>Registre</h2>
  <form method="POST" action="./registerdb.php">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Usuari</label>
    </div>
    <div class="user-box">
      <input type="text" name="userFirstName">
      <label>Nom (opcional)</label>
    </div>
    <div class="user-box">
      <input type="text" name="userLastName">
      <label>Cognom (opcional)</label>
    </div>
    <div class="user-box">
      <input type="email" name="mail" required="">
      <label>E-mail</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Contrasenya</label>
    <div class="user-box">
      <input type="password" name="repeat_password" required="">
        <label>Repeteix la Contrasenya</label>
      </div>
    </div>
    <div>
      <input class="accedeix" type="submit" name="register" >
    </div>
  </form>
</div>
    </body>
</html>