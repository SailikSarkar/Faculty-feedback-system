<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_subject.php?id='+id;
     }
}
</script>	


<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Paper code</th>";
	echo "<th>programme</th>";
	echo "<th>semester</th>";
	echo "<th>sub name</th>";
    echo "<th>Update</th>";
    echo "<th>delete</th>";
	
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from subject");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['paper_code']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['sub_name']."</td>";
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_subject'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		
		
	}
	
?>