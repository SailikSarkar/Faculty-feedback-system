<?php
	extract($_POST);
	if(isset($save))
	{	
	
		$q=mysqli_query($conn,"select * from user where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'><b>SORRY , This email can't be accepted. Cause it already exists  .</b></font>";
	}
	else
	{	


	mysqli_query($conn,"update user set name='$n',semester='$sem',email='$email', programme='$programme' where id='".$_GET['id']."'");	
 
$err="<font color='green'>student Details updated</font>";

	}
}

$con=mysqli_query($conn,"select * from user where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Student Data</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Programme:</label>
			<Select name="programme"  class="form-control" required>
					<option>BCA</option>
					<option>MSC</option>
					<option>BBA</option>
					<option>MBA</option>
					
					</select>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
			<select name="sem" class="form-control" required>
					
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					<option>vii</option>
					<option>viii</option>
					</select>
        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Student Data">
        </div>
  	</div>
	</form>


</div>