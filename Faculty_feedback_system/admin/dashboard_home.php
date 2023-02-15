<h1 align="center" style="text-decoration:underline"><a href=""><b>Admin Dashboard</b></a></h1>
<?php 

$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:black'><b>Total Number of Faculty : $rows</b></h2>";	


$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:black'><b>Total Number of Student : $r1</b></h2>";	



$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'><b>Total Number feedback given by users  : $r2</b></h2>";	


					

?>
