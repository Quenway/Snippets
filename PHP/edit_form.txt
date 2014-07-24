<!DOCTYPE html>
<html>
<head>
<title>Data edit form</title>
</head>

<body>
<table border=1>
  <tr>
    <td align=center>Data Edit form</td>
  </tr>
  <tr>
    <td>
      <table>

      <?php
      include "db.inc.php";

      $id = (isset($_GET['id'])) ? $_GET['id'] : '';
      $order = "SELECT * FROM data_employees WHERE employees_number = '$id'";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
    

      ?>

      <form method="post" action="edit_data.php">
      <input type="hidden" name="id" value="<?php echo "$row[employees_number]"?>">
        <tr>        
          <td>Name</td>
          <td>
            <input type="text" name="name" 
        size="20" value="<?php echo "$row[name]"?>">
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td>
            <input type="text" name="address" size="40" value="<?php echo "$row[address]"?>">
          </td>
        </tr>
        <tr>
          <td align="right">
            <input type="submit" name="submit value" value="Edit">
          </td>
        </tr>
      </form>
      </table>
    </td>
  </tr>
</table>
</body>
</html>