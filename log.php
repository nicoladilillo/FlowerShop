<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>

    <form action='login.php' method='post' class='form-signin'>
      <div class="errors"></div>
      <input name='username' class='username' placeholder='username' type='text' />
      <input name='password' class='password' placeholder='**********' type='password' />
      <button type='submit'>Login</button>
      <button type='button' onclick='window.open("signup.php", "_self")'>SignUp</button>
    </form>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="assets/js/upload.js"></script>

  </body>
</html>
