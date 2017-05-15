<h3>Access like <strong></strong></h3>
<form action='login.php' method='post' class='form-signin'>
  <div class="errors"></div>
  <input name='username' class='username' placeholder='username' type='text' />
  <input name='password' class='password' placeholder='**********' type='password' />
  <button type='submit'>Login</button>
  <input type="hidden" name="choice" class="choice"  value=""/>
  <?php if ( isset($_POST['choice'])  && $_POST['choice'] == "user" ) { ?>
    <button type=button onclick="window.open('user/signup.php','_self')">SignUp</button>
  <?php } ?>
</form>

<button type=button onclick='location.reload()'>Come Back</button>

<script src="assets/js/upload.js"></script>
