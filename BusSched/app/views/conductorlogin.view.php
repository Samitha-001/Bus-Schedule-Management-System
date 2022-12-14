<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Conductor Login</title>


  <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
  
  <h2><a href="<?=ROOT?>" id="logo_white">BusSched</a></h2>

  <h3 class="center">Conductor</h3>
  <h1 style="text-align:center" class="center">Login</h1><br>

  <!-- LOGIN FORM FOR ALL USERS -->
  <form method="post">    
  <div id="form_bg" class="center">    
    <div>
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email..." required><br><br>
      
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password..." required><br><br>
      
      <button class="button-orange" type="submit">Login</button>
    </div>
    <div class="errors">
      <?php if(!empty($errors)):?>
      <?= implode("<br>", $errors)?>
      <?php endif;?>
    </div>
  </div>

  <div id="form_footer" class="center">Don't have an account? <a href="<?=ROOT?>/conductorsignup">Register</a></div>

  </form>

</body>
</html>