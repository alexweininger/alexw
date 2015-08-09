 <!DOCTYPE html>

  
  <head>
    <html lang="en">
    <meta charset="utf-8">
    <title>Home</title>
    		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,300,200' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
    		<script type="text/javascript" language="Javascript" src="js/main.js"></script>

  </head>
 
 <body>

 


<table class="nodetable">

<?php
$con=mysqli_connect("us-cdbr-azure-northcentral-a.cleardb.com","b3262821ada9ac","cacb753a","alexwdb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM projects");

echo '
<tr>
<th>Project Name</th>
<th>Description</th>
<th>Status</th>
<th>Link</th>
</tr>';

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . '<a class="nodebutton" href="' . $row['link'] .'">Go to Project</a>' . "</td>";
echo "</tr>";
}

mysqli_close($con);
?>
  </table>
 </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>