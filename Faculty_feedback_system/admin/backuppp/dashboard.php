<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css?v=<?php echo time(); ?>" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Faculty Feedback System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i><b>Change Password</b></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=add_faculty"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                                </li>
								 <li>
                                    <a href="dashboard.php?info=show_faculty"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li>  
                                                        
							</ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
						
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
								 <li>
                                    <a href="dashboard.php?info=display_student"><i class="fa fa-eye"></i> Manage Student</a>
                                
                                
                                    <a href="dashboard.php?info=registration_form"><i class="fa fa-plus fa-fw"></i> Add Student</a>
                                </li>           
							</ul>
                        </li>
						
						
		
		<!-- feedback-->
		<li>
         <a href="#"><i class="fa fa-user fa-book"></i>Feedback<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
                             
<li><a href="dashboard.php?info=feedback"><i class="fa fa-eye"></i> feedback</a></li>
<li><a href="dashboard.php?info=feedback_average"><i class="fa fa-eye"></i> feedback Average</a></li>
	 
							             
							</ul>
                        </li>
		<!--feedback end-->
						
					
						
						
		<li>
			<a href="dashboard.php?info=contact"><i class="fa fa-eye"></i> Contact us</a>
		</li>
			   

        <li>
			<a href="dashboard.php?info=Transfer"><i class="fa fa-eye"></i> Update students Info</a>
		</li>

        <li>
			<a href="dashboard.php?info=add_subject"><i class="fa fa-eye"></i> Add Subject </a>
		</li>

        <li>
			<a href="dashboard.php?info=show_subject"><i class="fa fa-eye"></i> Show & edit Subject  </a>
		</li>

				   
				        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                	<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="add_faculty")
										{
											include('add_faculty.php');
										}
										
									elseif($info=="show_faculty")
										{
											include('show_faculty.php');
										}
										
                                        elseif($info=="add_subject")
										{
											include('add_subject.php');
										}
										
                                        elseif($info=="show_subject")
										{
											include('show_subject.php');
										}

									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	

                                        elseif($info=="edit_student")
										{
											include('edit_student.php');
										}	
										
									elseif($info=="edit_subject")
										{
											include('edit_subject.php');
										}

                                        elseif($info=="display_student")
										{
											include('display_student.php');
										}


									
										elseif($info=="registration_form")
										{
											include('registration.php');
										}
									
										
									elseif($info=="contact")
										{
											include('contact.php');
										}	

                                        elseif($info=="Transfer")
										{
											include('Transfer.php');
										}

									elseif($info=="feedback")
										{
											include('feedback.php');
										}
										elseif($info=="feedback_average")
										{
											include('feedback_average.php');
										}		
										
										
									
										
										
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}
									
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>
				
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
