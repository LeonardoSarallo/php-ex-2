<?php

  $password = $_GET['password'];

?>

<?php if ($password == 'boolean') { ?>
  <h1 style="color:green"><?php echo 'password corretta'; ?></h1>
<?php }
  else { ?>
  <h1 style="color:red"><?php echo 'password non corretta'; ?></h1>
<?php }  ?>
