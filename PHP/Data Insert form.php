// INPUT.HTML
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Input data form</title>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

  <table border="1">
    <tr>
      <td align="center">Input data html form/td>
    </tr>
    <tr>
      <td>
        <table>
          <form method="post" action="input.php">
          <tr>
            <td>Name</td>
            <td><input type="text" name="name" size="20">
            </td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="address" size="40">
            </td>
          </tr>
          <tr>
            <td></td>
            <td align="right"><input type="submit" 
            name="submit" value="Sent"></td>
          </tr>
          </table>
        </td>
      </tr>
  </table>

  </body>
</html>



// INPUT.PHP

<?php
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("localhost","root","");//database connection
mysql_select_db("employees");

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$address  = $_POST['address'];
}

//inserting data order
$order = "INSERT INTO data_employees
      (name, address)
      VALUES
      ('$name',
      '$address')";

//declare in the order variable
$result = mysql_query($order);  //order executes
if($result){
  echo("<br>Input data is succeed");
} else{
  echo("<br>Input data is fail");
}
?>
