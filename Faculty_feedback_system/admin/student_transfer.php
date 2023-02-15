<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update subject set paper_code='$paper_code',programme	='$programme',semester='$sem',sub_name='$Subject_name' where id='".$_GET['id']."'");	

$err="<font color='green'>SUBJECT Details updated</font>";

	}

$con=mysqli_query($conn,"select * from subject where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Subject</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>PAPER CODE</label>
            <Select name="paper_code" class="form-control" required>
                <option>BCAN_501(Chandrima Sinha Roy)</option>
					<option>BCAN_502(Priyanka Kundu)</option>
					<option>BCAN_503(Debabrata Barik)</option>
					<option>BCAN_504(Aritra Kundu)</option>
					<option>BCAN_505(Sharbi Banerjee)</option>
					<option>BCAN_301(Aritra Kundu)</option>
					<option>BCAN_302(Debabrata Barik)</option>
					<option>BCAN_303(Priyanka Kundu)</option>
                    <option>BCAN_304(Chandrima Sinha Roy)</option>
                    <option>BCAN_201(Aritra Kundu)</option>
                    <option>BCAN_202</option>
                    <option>BCAN_203</option>
                    <option>BCAN_204</option>
                    <option>BCAN_205</option>
                    <option>BCAN_206</option>
                    <option>BCAN_601</option>
                    <option>BCAN_601</option>
					</select>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        <label>programme:</label>
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
        <label>Subject name:</label>
            	<Select name="Subject_name" class="form-control" required>

                     <option>LINUX LAB(BCAN_504)</option>
					<option>COMMUNICATIVE ENGLISH(BCAN_505)</option>
					<option>CYBER SECURITY(BCAN_501)</option>
					<option>NUMERICAL ANALYSIS</option>
					<option>UNIX & SHELL PROGRAMMING</option>
					<option>INDUSTRIAL TRAINING</option>
					<option>DATABASE MANAGEMENT SYSTEM</option>
					<option>PROGRAMMING WITH JAVA</option>
					</select>
        </div>
    </div>
	
	
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  subject">
        </div>
  	</div>
	</form>


</div>