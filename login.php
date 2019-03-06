<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <?php

if(isset($_SESSION['login'])){
   header("location:index.php");
}

if (isset($_POST['username'])) {
	$link = mysql_connect('localhost', 'root', '');
            if (!$link) {
                die('Not connected : ' . mysql_error());
            }

                                // make sawer the current db
            $db_selected = mysql_select_db('sawer', $link);
            if (!$db_selected) {
                die ('Can\'t use sawer : ' . mysql_error());
            }

	$username = $_POST['username'];
	$pw = $_POST['password'];
	$cek = mysql_query("SELECT * FROM login where username = '$username' and password = '$pw'")or die(mysql_error());
	if (mysql_num_rows($cek) > 0) {
		
  //put this at the first line
  session_start();
  //if  authentication successful 
  $_SESSION['login'] = true;
header("location:index.php");
	}

}
  ?>
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

<form method="post" action="">
<div class="box">
<h1>Login</h1>

<input type="text" name="username" value="username" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="password" name="password" value="password" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<center><input type="submit" value="Masuk" class="btn"></a> <!-- End Btn --><!-- End Btn2 -->
  </center>
</div> <!-- End Box -->
  
</form>

<p>&nbsp;</p>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
