<?php
  if(!isset($_POST['password'])) {
    include('formulaire.php');
  }
  if(isset($_POST['password']) && $_POST['password'] == 'kangourou') {
    include('secret.php');
  }
  elseif (isset($_POST['password']) && $_POST['password'] != 'kangourou') {
    include('failed.php');
  }
?>
