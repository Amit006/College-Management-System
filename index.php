<?php
	session_start();
	include("conection/connect.php");

	  extract($_POST);
      if(isset($submit))
      {
      	echo "<h1>submit in work</h1>";
	     $rs=mysql_query("select * from users_tbl where username='$unametxt' and password='$pwdtxt'");
	     $count =mysql_num_rows($rs);
	     // if ($count> 0){
	     // 	echo "<h1>count is</h1>";
	     // }
         $arr=mysql_fetch_array($rs);
         // foreach ($arr as $value) {
		       //  echo "<pre>".print_r($value)."</pre>";
         // }
		       if($count<1)
		       {
			        $found="N";
			    	$msg="Login trov hery!.....";
			    	echo "MESSAGE".$msg;
			    }
		       else
		       {
			     $_SESSION[login]=$unametxt;
	            $email = $arr['username'];
	            $password = $arr['password'];
	            $_SESSION[email]=$email;
	            header("location: everyone.php");
		       }      
      }


	


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<title> College management System.</title>
</head>

<body><div class="row" style="background: rgb(244,226,156);
background: -moz-linear-gradient(-45deg, rgba(244,226,156,0) 0%, rgba(59,41,58,1) 100%), -moz-linear-gradient(left, rgba(244,226,156,1) 0%, rgba(130,96,87,1) 100%);
background: -webkit-linear-gradient(-45deg, rgba(244,226,156,0) 0%,rgba(59,41,58,1) 100%), -webkit-linear-gradient(left, rgba(244,226,156,1) 0%,rgba(130,96,87,1) 100%);
background: -o-linear-gradient(-45deg, rgba(244,226,156,0) 0%,rgba(59,41,58,1) 100%), -o-linear-gradient(left, rgba(244,226,156,1) 0%,rgba(130,96,87,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(244,226,156,0) 0%,rgba(59,41,58,1) 100%), -ms-linear-gradient(left, rgba(244,226,156,1) 0%,rgba(130,96,87,1) 100%);
background: linear-gradient(135deg, rgba(244,226,156,0) 0%,rgba(59,41,58,1) 100%), linear-gradient(to right, rgba(244,226,156,1) 0%,rgba(130,96,87,1) 100%);">

<!-- <div class="col-lg-12"> -->
			<br><br> &nbsp;<div class="col-lg-2"><br>
			<img src="images/NSEC_college.jpeg" class="img-rounded" alt="Cinque Terre" width="#" height="#" style=" border-left-width: 10px; padding-left: 20px; padding-top: 40px; border-top-left-radius: 5em	; box-shadow:   ">

			</div>

			<div class="col-lg-10" style="background-image: url("../");   ">
			<div class="col-md-7"  style="padding-top: 500px; font-size: 18px;">
			<p >Netaji Subhash Engineering College (NSEC) is one of the pioneer technical professional self-financed and privately managed institutes established in 1998 under Kalyani University. Since 2001 it is affiliated to Maulana Abul Kalam Azad University.</p></div>
				<div class="container">
			    	<div class="container2">
			    		<div class="h1_pos">
			    			<h1>College authorities for only staff members. </h1>
			    		</div><br><br><br>
			    		<form method="post">
			    				<div class="form-group">
			                    <input type="text" class="form-control" name="unametxt" placeholder="Username" title="Enter username here" />
			                    </div><br>
			                    <div class="form-group">
			                    <input type="password" class="form-control" name="pwdtxt" placeholder="Password" title="Enter username here" />
			                    </div><br>
					    		<input type="submit" class='' class="btn btn-info btn-lg" name="submit" value="Sign in" style="float: right;"/>

					    		<div class="about_pos">
			                    <a href="AboutManagement.php" style="text-decoration:none; color: silver">About management</a>
			    		</div>
			    		</form>
			    	</div>
			    </div>
			<!-- </div> -->
</div> 
<div class="row">
        <h2 style="color: #3a28a5; text-align: center;">
            <?php echo $msg; ?>
        </h2> 
  </div>
          
</body>
</html>