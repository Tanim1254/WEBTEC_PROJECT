<?php
include('../control/updateControl.php');

?>
<!DOCTYPE html>
<html>
<body>

<h2>Search</h2>

<form action="" method="post">
  
   customer name  <input type="text" name="fname"  >
  
    <input name="search" type="submit" value="Search">
</form>
<br>
<form action='' method='post'>
       Enter FirstName <input type='text' name='fname' value="<?php echo $fname; ?>" > <br>
       Enter LastName <input type='text' name='lname' value="<?php echo $lname; ?>" > <br>
       Enter Password <input type='text' name='password' value="<?php echo $password; ?>" > <br>
       Enter Address <input type='text' name='address'  value="<?php echo $address; ?>"> <br>
       <input type='hidden' name='userName'  value="<?php echo $show_username; ?>"><br>
       <input name='update' type='submit' value='Update'>
       <input name='delete' type='submit' value='Delete'> <br><br>

       <?php echo $not_found; ?>
       <?php echo $update_message; ?>
       <?php echo $delete_message; ?>

</form>

</body>
</html>

<?php echo $error; ?>