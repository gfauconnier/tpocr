<?php
print_r($_POST);
  if(isset($_POST['password']) && $_POST['password'] == 'kangourou' && $_POST['sentpwd'] == 1)
  {
    echo "Password valid, you have access to the secret info.";
  }
  elseif (isset($_POST['password']) && $_POST['password'] != 'kangourou' && $_POST['sentpwd'] == 1) {
    echo "Password incorrect.";
    // echo "<form>";
  }
?>
