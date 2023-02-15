<?php
session_start();
 require('dbconfig.php'); ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	

    <link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    
    <link href="css/modern-business.css?v=<?php echo time(); ?>" rel="stylesheet">

   
    <link href="font-awesome/css/font-awesome.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

</head>

<body>

   
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding:25px;background:#DDE4EA">
        <div class="container" >
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="padding:0px;height:60px;color:#000000"><h4><b>Faculty feedback System</b></h4></a>
				
				
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#000000">
                        <a style="color:#000000" href="index.php"><i class="fa fa-home fa-fw"></i><b>Home</b></a>
                    </li>
					
					
					
					
				
				
								
	<li class="dropdown">
        <a style="color:#000000" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i><b>Login</b>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login"><b>Student</b></a></li>
		  
          <li><a href="admin"><b>Admin</b></a></li> 
        </ul>
      </li> 
	  
      <li style="color:#000000">
                        <a style="color:#000000" href="impnotice.php?info=about"><i class="fa fa-eye"></i><b>Imp Notice !!</b></a>
                    </li>
	  
	  
	 <li>
                        <a style="color:#000000" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i><b>Help Desk</b></a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            
        </div>
       
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		
    <header id="myCarousel" class="carousel slide">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/ocean (1).gif');?v=<?php echo time(); ?>"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/ocean (2).gif');?v=<?php echo time(); ?>"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/ocean (3).gif');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
       
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- 			
	
	
    <!--  -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
				
	
	
				
				
				
			
			
			
				<?php } ?>
            </div>
            
    </div>
    
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:100px; background:#DDE4EA">
		<span style="color:#000000"><b>Developed By  - </b><a href="https://www.facebook.com/profile.php?id=100007324186700"><span style=color:#000000><h4><b>Sailik Sarkar (Facebook)</b></h4></a> </span>
	</div>
  
    <script src="css/jquery.js"></script>

    
    <script src="css/bootstrap.min.js"></script>

   
    <script>
    $('.carousel').carousel({
        interval: 4000 
    })
    </script>

</body>

</html>
