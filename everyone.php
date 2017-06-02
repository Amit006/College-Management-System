<?php
	session_start();
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to College Management system</title>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.0.js"></script> -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<div class='container-fluid'>
		<div class="row" style="background-color: #616BF3; ">
			<div class='col-lg-12'  style="background: #092756;
 background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top, rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%);">
				<div class="img_home_pos">
			        <a href="everyone.php"><img src="images/download.png" height="90" alt="Netaji Subhash Engineering  College" /></a><span class="header_pos">Netaji Subhash Engineering  College</span>
			    </div>
			</div>
		</div>
		<div class='row' style="background-image: linear-gradient(#8b9da9, #fff6e4);
 box-shadow: inset 0 0 100px hsla(0,0%,0%,.3); padding-top: 10px; border-spacing: 10px; border-top: 20px;">
			<div class='offset-lg-2 col-lg-8 offset-lg-2' >
			<nav>
				<div class="btn-group pull-right">
	  				<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span>
	  					  Students <span class="caret"></span> 					
	  					</button>
	  				<ul class="dropdown-menu" role="menu">
	  				  <li><a href="everyone.php?tag=student_entry">Students Entry</a></li>
	  				  <li><a href="everyone.php?tag=view_students">View Students</a></li>
	  				</ul>
				</div>
				
				<!--second button-->
				<div class="btn-group pull-right">
  					<button type="button" class="btn btn-outline-primary  dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user-md"></span>
  					  Teachers <span class="caret"></span> 					
  					</button>
	  				<ul class="dropdown-menu" role="menu">
	  				  <li><a href="everyone.php?tag=teachers_entry">Teachers Entry</a></li>
	  				  <li><a href="everyone.php?tag=view_teachers">View Teachers</a></li>
	  				</ul>
				</div>
				
				<!--third button-->
				<div class="btn-group pull-right">
  					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-users"></span>
  					  Faculties <span class="caret"></span>
  					</button>
	  				<ul class="dropdown-menu" role="menu">
	  				  <li><a href="everyone.php?tag=faculties_entry">Faculties Entry</a></li>
	  				  <li><a href="everyone.php?tag=view_faculties">View Faculties</a></li>
	  				</ul>
				</div>
				
				<!--forth button-->
				<div class="btn-group pull-right">
  					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-list"></span>
  					  Subjects <span class="caret"></span>
  					</button>
	  				<ul class="dropdown-menu" role="menu">
	  				  <li><a href="everyone.php?tag=subject_entry">Subjects Entry</a></li>
	  				  <li><a href="everyone.php?tag=view_subjects">View Subjects</a></li>
	  				</ul>
				</div>
				
				<!--fifth button-->
				<div class="btn-group pull-right">
  					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-graduation-cap"></span>
  					  Score <span class="caret"></span>
  					</button>
	  				<ul class="dropdown-menu" role="menu">
	  				  <li><a href="everyone.php?tag=score_entry">Score Entry</a></li>
	  				  <li><a href="everyone.php?tag=view_scores">View Score</a></li>
	  				</ul>
				</div>
				
				
				
				<!--eaigth button-->
				<div class="btn-group pull-right">
  					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-align-justify"></span>
  					  Artical <span class="caret"></span>
  					</button>
	  				<ul class="dropdown-menu" role="menu">
	  				  <li><a href="everyone.php?tag=artical_entry">Artical Entry</a></li>
	  				  <li><a href="everyone.php?tag=view_artical">View Artical</a></li>
	  				</ul>
				</div>
			</nav>
				<script>
				    $(document).ready(function () {
				        $('.dropdown-toggle').dropdown();
				    });
				</script>
		</div>
</div>	

<div class='row' style="background: rgb(105,155,200);
background: -moz-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%, rgba(181,197,216,1) 57%);
 background: -webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(0%,rgba(105,155,200,1)), color-stop(57%,rgba(181,197,216,1)));
 background: -webkit-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 background: -o-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 background: -ms-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 background: radial-gradient(ellipse at top left, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#699bc8', endColorstr='#b5c5d8',GradientType=1 ); padding-top: 10px; border-spacing: 10px; border-top: 20px;" >
		<div class='offset-lg-1 col-lg-10 offset-lg-auto'>
				 
								<?php        
		                            // include './drop_down_menu.php';
		                            //user info
		                            if (isset($_SESSION[login]))
						    			  {
										     									     
						    			  	 $email = $_SESSION[email];
									         
						    			  	echo "<marquee width='100%'><h4> Welcome, $email </h4></marquee>

						    			  	<div class='pull-right'>
						    			  	<a href='index.php' class='btn btn-outline-warning btn-md'>Logout</a>
						    			  	</div>
						    			  	";

						    			  }
		                            ?>  					
		                                 
		</div>        
  </div>
  <div class='row' style="background-image: linear-gradient(#8b9da9, #fff6e4);
 box-shadow: inset 0 0 100px hsla(0,0%,0%,.3);
 }
 .background-4 {
background: rgb(105,155,200);
background: -moz-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%, rgba(181,197,216,1) 57%);
 background: -webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(0%,rgba(105,155,200,1)), color-stop(57%,rgba(181,197,216,1)));
 background: -webkit-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 background: -o-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 background: -ms-radial-gradient(top left, ellipse cover, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 background: radial-gradient(ellipse at top left, rgba(105,155,200,1) 0%,rgba(181,197,216,1) 57%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#699bc8', endColorstr='#b5c5d8',GradientType=1 );
}
.background-5 {
background-image: linear-gradient(45deg, rgba(194, 233, 221, 0.5) 1%, rgba(104, 119, 132, 0.5) 100%), linear-gradient(-45deg, #494d71 0%, rgba(217, 230, 185, 0.5) 80%); padding-top: 10px; border-spacing: 10px; border-top: 20px;">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        elseif($tag=="teachers_entry")
                            include("Teachers_Entry.php");
                        elseif($tag=="score_entry")
                            include("Score_Entry.php");	
                        elseif($tag=="subject_entry")
                            include("Subject_Entry.php");
                        elseif($tag=="faculties_entry")
                            include("Faculties_Entry.php");
                        elseif($tag=="susers_entry")
                            include("Users_Entry.php");	
                        elseif($tag=="view_students")
                            include("View_Students.php");
						elseif($tag=="view_teachers")
							include("View_Teachers.php");
						elseif($tag=="view_subjects")
							include("View_Subjects.php");
						elseif($tag=="view_scores")
							include("View_Scores.php");
						elseif($tag=="view_users")
							include("View_Users.php");
						elseif($tag=="view_faculties")
							include("View_Faculties.php");
						elseif($tag=="location_entry")
							include("Location_Entry.php");
						elseif($tag=="artical_entry")
							include("artical_amit_entry.php");
						elseif($tag=="test_score")
							include("test_Scores.php");
						elseif($tag=="view_location")
							include("View_location.php");
						elseif($tag="view_artical")
							include("View_Articaly.php");
						elseif($tag="attendance_entry")
							include("attendance_entry.php");	
							/*$tag= $_REQUEST['tag'];
							
							/*if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
</div>	
		<div class='row'>
					<div class='col-lg-12'>
						<?php include("AboutManagement.php") ?>
					</div>
		</div>
</div>




    
    

</body>
</html>