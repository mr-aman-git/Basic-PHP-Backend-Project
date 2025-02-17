<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Table</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid black;
}

th, td {
  text-align: center;
  padding: 8px;
  border: 1px solid black;
  
}

tr:nth-child(even){background-color: #f2f2f2}

</style>


<h2>Form Table</h2>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Degree</th>
      <th>Post</th>
      <th colspan="2">Operation</th>
    </tr>

    <?php
include 'connection.php';

$selectQuery= "select * from jobregister ";

$query= mysqli_query($con, $selectQuery);

$nums= mysqli_num_rows($query);

$result= mysqli_fetch_array($query);

while($result= mysqli_fetch_array($query)){
    // echo $result["Name"] . "</br>";
?>
    <tr>
   
      <td><?php echo $result['Name'] ?></td>
      <td><?php echo $result['Email'] ?></td>
      <td><?php echo $result['Degree'] ?></td>
      <td><?php echo $result['Post'] ?></td>
      <td><i class="ri-delete-bin-3-line"></i></td>
      <td><i class="ri-edit-box-line"></i></td>
    </tr>

   <?php 
}


?>
    
    
  </table>
</div>
</body>
</html>








