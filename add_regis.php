<?php
// $mysqli = new mysqli("localhost", "root", "ict315", "db_stu");
$mysqli = new mysqli("localhost", "root", "passc0de", "db_stu");
print_r($_GET);

// exit();
$g_name = $_GET['fm_name'];
$g_email = $_GET['fm_email'];
$g_tel = $_GET['fm_tel'];
$g_exp = $_GET['fm_exp'];

if ($_GET['fm_name'] <> '') {
  // echo "<br>OK OK";
  $insert_sql = "INSERT INTO form_exp VALUE('$g_name', '$g_email',  '$g_tel', '$g_exp')";
  echo '<br>'.$insert_sql;
  // $insert_result = mysqli_query($mysqli, $insert_sql);
  if ($mysqli->query($insert_sql) === TRUE) {
    echo "<br>New record created successfully";
  } else {
    echo "<br>Error: " . $insert_sql . "<br>" . $mysqli->error;
  }
}

// header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php" type="submit"><br>Back to: Register Page</a>
  </body>
</html>
