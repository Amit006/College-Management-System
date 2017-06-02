<?php
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
if(isset($_POST['btn_sub'])){
	$facuties_name=$_POST['fnametxt'];
	$note=$_POST['notetxt'];	
	

$sql_ins=mysql_query("INSERT INTO facuties_tbl 
						VALUES(
							NULL,
							'$facuties_name',
							'$note'
							)
					");
if($sql_ins==true)
	$msg="1 Row Inserted";
else
	$msg="Insert Error:".mysql_error();
	
}

//------------------uodate data----------
if(isset($_POST['btn_upd'])){
	$fac_name=$_POST['fnametxt'];
	$note=$_POST['notetxt'];	
	
	$sql_update=mysql_query("UPDATE facuties_tbl SET 
								faculties_name='$fac_name',
								note='$note'
							WHERE
								faculties_id=$id
							");
	if($sql_update==true)
		echo "<div style='background-color: white;padding: 20px;border: 1px solid black;margin-bottom: 25px;''>"
                . "<span class='p_font'>"
                . "Record Updated Successfully... !"
                . "</span>"
                . "</div>";
	else
		$msg="Update Failed...!";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Fraculty Entry Php</title>
</head>
<body>

<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM facuties_tbl WHERE faculties_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	
?>
	<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #DAF7A6 ;">
		<div class="panel panel-default">
	  		<div class="panel-heading"><h1><span class="fa fa-user-circle-o"></span> Faculties Update Form</h1></div>
	  			<div class="panel-body">
					<p style="text-align:center;">Here, you'll update the faculties detail to record into database.</p>
				

				<div class="container_form">
				    <form method="post">
				        <div class='form-group'>
				            <input type="text"  class="form-control" name="fnametxt"  value="<?php echo $rs_upd['faculties_name'];?>" style="width: 530px;" placeholder="faculties_name"/>
				        </div>
				        <div class="form-group">
				            <textarea name="notetxt" class="form-control" cols="18" value='<?php  echo $rs_upd['note'];?>' rows="4" style="width: 530px;" placeholder="note"></textarea>
				        </div> 
				           
				        <div class="form-group">
				            <input type="submit" name="btn_upd" href="#" class="btn btn-primary btn-lg" value="Register" />&nbsp;&nbsp;&nbsp;
					    	<input type="reset"  href="#" class="btn btn-primary btn-md" value="Cancel" />
				        </div>
				    </form>
				</div>
			</div>
		</div>			
	</div>			
</div>

<?php	
}
else
{
?>
<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #DAF7A6 ;">
		<div class="panel panel-default">
		  		<div class="panel-heading"><h1><span class="fa fa-user-circle"></span> Faculties Entry Form</h1></div>
		  			<div class="panel-body">
						<p style="text-align:center;">Here, you'll add new facultie's detail to record into database.</p>
					


						<div class="container_form">
						    <form method="post">
							        <div class='form-group'>
							            <input type="text" style="width: 530px;" class="form-control" name="fnametxt" placeholder='Faculties name' />
							        </div>
							        <div class="form-group">
							            <textarea name="notetxt" class="form-control" cols="18" placeholder='Add notes..' rows="4" style="width: 530px;"></textarea>
							        </div>
							        <div class="form-group">
							            <input type="submit" name="btn_sub" href="#" class="btn btn-primary btn-lg" value="Register" />&nbsp;&nbsp;&nbsp;
							    
								    	<input type="reset"  href="#" class="btn btn-primary btn-md" value="Cancel" />
							        </div>

						    </form>
						 </div>    
					</div>
		</div>	
</div>		

<?php
}
?>

</body>
</html>	