<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
  </head>

  <body>

      <form action="sign.php" method="post" class="form-signup">
        <div class="errors"></div>
        <input name="username" type="text" placeholder="username" />
        <input name="password" type="password" placeholder="password" />
        <input name="confirmation" type="password" placeholder="confirmation password" />
        <input name="name" type="text" placeholder="name" />
        <input name="surname" type="text" placeholder="surname" />
        <input name="email" type="email" placeholder="email" />
        <button type='submit'>SignUp</button>
        <button type='button' class='login' onclick='window.open("../log.php", "_self")'>Login</button>
      </form>

      <script src="bower_components/jquery/dist/jquery.js"></script>
      <script src="assets/js/upload.js"></script>

  </body>
</html>
