<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and subject_id='$subject'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>YOU HAVE ALREADY GIVEN FEEDBACK TO THIS SUBJECT , THANK YOU </h2>";
}
else
{
$query="insert into feedback values('','$user','$subject','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<center><u><H2><B>STUDENT'S FEEDBACK FORM</B></H2></u></center><br>
 
<fieldset>



<h3><b>Please give your rating on the following question by using the dropdown menu in each question :</b></h3>


<button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Strongly Agree 5</button>
<button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Agree 4</button>
<button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Neutral 3</button>
<button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px"> Disagree 2</button>
<button type="button" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Strongly Disagree 1</button><br>

<table class="table table-bordered" style="margin-top:50px">
<tr>

<th><h4> <b>Select subject :-</b></h4></th>
<td>
<select name="subject" class="form-control">
	
	
	
	<?php
	

	

$sql=mysqli_query($conn,"select * from subject where semester='".$users['semester']."'");
	while($r=mysqli_fetch_array($sql))

	
	
	{
	echo "<option value='".$r['sub_name']."'>".$r['paper_code']."</option>";
	}
		 
		 
		 
		 
		 ?>





</select>
</td>
</tr>
</table>


<h3>1-Course Material</h3>
<table class="table table-bordered ">
<tr>
<td><b>1:</b> Has the Teacher covered entire Syllabus as prescribed by University?  
<td><select class="form-control" style="width:120px;float:left" name="quest1">
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</td>
          
</tr>
  
<tr>
<td><b>2:</b>Has the Teacher covered relevant topics beyond Syllabus?
<td><select class="form-control" style="width:120px;float:left" name="quest2">
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</td>
</tr>


</table>

<h3>2-Effectiveness of teacher in terms of</h3>
 <table  class="table table-bordered" >
<Td><b>4:</b> Technical Content:</td>
<td><select class="form-control" style="width:120px;float:left" name="quest3" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</td>

<tr>
<td>
<b>5:</b> Communication Skills: </td>
<td><select class="form-control" style="width:120px;float:left" name="quest4" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>
<tr>
<td><b>6:</b> Teacher is good at explaining the subject matter:</td>
<td><select class="form-control" style="width:120px;float:left" name="quest5" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>

<tr><td>
<b>7:</b> Use of non-print teaching aids:</td>
<td><select class="form-control" style="width:120px;float:left" name="quest6" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
<tr>
<td>
<b>8:</b>  Availability beyond normal classes and co-operation to solve individual problems:</td>
<td><select class="form-control" style="width:120px;float:left" name="quest7" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>
<tr>
<td>
<b>9:</b>  Pace on which contents were covered:</td> 
<td><select class="form-control" style="width:120px;float:left" name="quest8" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>
<tr>
<td>
<b>10:</b> Overall Effectiveness:</td>

<td><select class="form-control" style="width:120px;float:left" name="quest9" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>
<tr>
<td>
<b>11:</b>  Come in-out time:</td>

<td><select class="form-control" style="width:120px;float:left" name="quest10" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>
<tr>
<td>

<b>12:</b> How do you rate the Contents of the curricular?:</td>

<td><select class="form-control" style="width:120px;float:left" name="quest11" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>
<tr>
<td>

<b>13:</b> How do you rate the lab facilities, if applicable?:</td>

<td><select class="form-control" style="width:120px;float:left" name="quest12" required> 5
<option value="">Rate here</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></td>
</tr>



</table>



<b>14:</b>Any suggestion ragarding Library Facility:<br><br>
<center>
<textarea name="quest13" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;" required> 

</textarea></center><br><br>

<b>15:</b>Any suggestion regarding Internet Facility:<br><br>
<center>
<textarea name="quest14" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;" required> 

</textarea></center><br><br>



<p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Submitt</button></p>


</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>