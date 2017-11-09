<?php
?>
<form method="post">
  <input type='text' name='email'>
  <input type='text' name='password'>
  <button></button>
</form>
<?php
  if(!empty($_POST['email'])){
    $db = mysql_connect("localhost", "root", "");
    mysql_select_db("test", $db);
    $query = "INSERT INTO `users` (`email`, `pass`) VALUES('".$_POST['email']."', '".$_POST['password']."')";
    mysql_query($query);
  }
 ?>

 
хуй