<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title><?=$titlelogin?></title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

      <?=form_open("welcome/checklogin")?>
    <div class="wrap">
		<div class="avatar">
      <img src="img/KKU.png">
		</div>
        <input type="text" placeholder="username" required  maxlength="10">
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" required maxlength="10">
		<!--<a href="" class="forgot_link">forgot ?</a>-->
		<button>Sign in</button>
	</div>
    
        <script src="js/index.js"></script>
        <?=form_close()?>
        

    
    
    
  </body>
</html>
