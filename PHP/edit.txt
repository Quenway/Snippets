<!DOCTYPE html>
<html>
<head>
<title>Edit data</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table>
  <tr>
    <td align="center">EDIT DATA</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
      include "db.inc.php";
      $order = "SELECT * FROM data_employees";
      $result = mysql_query($order);
      while ($row=mysql_fetch_array($result)){
        echo ("<tr><td>$row[name]</td>");
        echo ("<td>$row[employees_number]</td>");
        echo ("<td>$row[address]</td>");
        echo ("<td><a href=\"edit_form.php?id=$row[employees_number]\">Edit</a></td></tr>");
      }
      ?>
      </table>
    </td>
   </tr>
</table>
</body>
</html>