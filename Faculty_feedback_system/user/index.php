<?php 
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty feedback System</title>

   
    <link href="../css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    
    <link href="../css/ie10-viewport-bug-workaround.css?v=<?php echo time(); ?>" rel="stylesheet">

    
    <link href="../css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet">

    
    <script src="../js/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000000">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
		
		
			<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")    
			{
			?>
            <li><a href="#"><img style="border-radius:50px" src="../admin/images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="#"><img style="border-radius:50px" src="../admin/images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user " style="color:#FFFFFF" > </span><span style="color:#FFFFFF"> Update Password</a></li>
            
			 <li><a href="index.php?page=feedback"><span class="glyphicon glyphicon-thumbs-up" style="color:#FFFFFF" ></span><span style="color:#FFFFFF"> Feedback</a></li>
       <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li> 
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
				if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="feedback")
			{
				include('give_feedback.php');
			
			}
		  }
		  else
		  {
		  
		  ?>
		 
		  
		  
		  
		  <h1 class="page-header">Dashboard</h1>
		  
		  
		  
		  
		  
		  

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              
            </div>
          </div>
<?php } ?>
        
          
        </div>
      </div>
    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    
    <script src="../js/vendor/holder.min.js"></script>
  
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
