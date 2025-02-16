<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Table</title>
</head>
<body>

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

</head>
<body>

<h2>Form Table</h2>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Degree</th>
      <th>Post</th>
    </tr>
    <tr>
   
      <td>Aman Sharma</td>
      <td>aman@gmail.com</td>
      <td>BCA</td>
      <td>frontend</td>
    </tr>
    <tr>
      <td>Sakshi</td>
      <td>sakshi@gmail.com</td>
      <td>BCOM</td>
      <td>HR</td>
    </tr>
    
  </table>
</div>
</body>
</html>








<?php
include 'connection.php';

$selectQuery= "select * from jobregister ";

$query= mysqli_query($con, $selectQuery);

$nums= mysqli_num_rows($query);

$result= mysqli_fetch_array($query);

while($result= mysqli_fetch_array($query)){
    echo "</br>";
    echo $result["Name"] . "</br>";
    echo $result["Email"] . "</br>";
    echo $result["Degree"] . "</br>";
    echo $result["Post"] . "</br>";
}


?>