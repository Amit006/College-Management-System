<!DOCTYPE html>
<?php

	$msg="";
	$opr="";
	$id="";
	
	if(isset($_GET['opr'])){
	$opr=$_GET['opr'];}
	
if(isset($_GET['rs_id'])){
	$id=$_GET['rs_id'];}
	
//--------------add data-----------------
if(isset($_POST['btn_sub'])){
	$f_name=$_POST['fnametxt'];
	$l_name=$_POST['lnametxt'];
	$gender=$_POST['genderrdo'];
	$dob=$_POST['yy']."/".$_POST['mm']."/".$_POST['dd'];
	$pob=$_POST['pobtxt'];
	$addr=$_POST['addrtxt'];
	$degree=$_POST['degree'];
	$salary=$_POST['slarytxt'];
	$married=$_POST['marriedrdo'];
	$phone=$_POST['phonetxt'];
	$mail=$_POST['emailtxt'];
	$note=$_POST['notetxt'];	
	
$sql_ins=mysql_query("INSERT INTO teacher_tbl 
						VALUES(
							NULL,
							'$f_name',
							'$l_name' ,
							'$gender',
							'$dob',
							'$pob',
							'$addr',
							'$degree',
							'$salary' ,
							'$married',
							'$phone',
							'$mail',
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
$f_name=$_POST['fnametxt'];
$l_name=$_POST['lnametxt'];
$gender=$_POST['genderrdo'];
$dob=$_POST['yy']."/".$_POST['mm']."/".$_POST['dd'];
$pob=$_POST['pobtxt'];
$addr=$_POST['addrtxt'];
$degree=$_POST['degree'];
$salary=$_POST['slarytxt'];
$married=$_POST['marriedrdo'];
$phone=$_POST['phonetxt'];
$mail=$_POST['emailtxt'];
$note=$_POST['notetxt'];


$sql_update=mysql_query("UPDATE teacher_tbl SET
                        f_name='$f_name' ,
                        l_name='$l_name' ,
                        gender='$gender' ,
                        dob='$dob' ,
                        pob='$pob' ,
                        address='$addr' ,
                        degree='$degree' ,
                        salary='$salary' ,
                        married='$married' ,
                        phone='$phone' ,
                        email='$mail' ,
                        note='$note'
                    WHERE teacher_id=$id

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

<html>
<head>
	<title>Teacher Entry</title>
</head>
<body>
<?php
if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM teacher_tbl WHERE teacher_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>
<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #10C5FC;">
	   <div class="panel panel-default">
  		  <div class="panel-heading"><h1><span class="fa fa-user-o"></span> Teachers Update Form</h1></div>
  			<div class="panel-body">
				<p style="text-align:center;">Here, you'll update your teachers records into database.</p>
			
				<div class="container_form">
				    <form method="post">
								<div class="form-group">
									<input type="text" name="fnametxt" class="form-control" value="<?php echo $rs_upd['f_name'];?>" style="width: 530px;" placeholder="Frist Name" />
								</div>
								<div class="form-group">	
									<input type="text" name="lnametxt" class="form-control" value="<?php echo $rs_upd['f_name'];?>" style="width: 530px;" placeholder="Last Name"/>
								</div>

								<div class="form-check">
									<span class="form-check-span">&nbsp;Male</span>
									<input class="form-check-input" type="radio" name="genderrdo" style="width: 130px;" value="Male"<?php if($rs_upd['gender']=="Male") echo "checked";?> /> 
								</div>
								<div class="form-check">
									<span class="form-check-span">&nbsp;Female</span>
									<input class="form-check-input" type="radio" name="genderrdo" style="width: 100px;" value="Female"<?php if($rs_upd['gender']=="Female") echo "checked";?> /> 
								</div>

								<div class="teacher_bday_box">
									<span class="p_font">Birthday: </span>
									<div class="form-inline">
				    					<select name="yy" class="form-control" style="width: 150px;">
				       						<option>Year</option>
				       						<?php
											$sel="";
											for($i=1985;$i<=2015;$i++){	
												if($i==$y){
													$sel="selected='selected'";}
												else
												$sel="";
											echo"<option value='$i' $sel>$i </option>";
											}
											
										?>
										</select>
								<!-- </div>


						<div class="form-group"> -->
    						<select  name="mm" class="form-control" style="width: 130px;">
       							<option>Month</option>
		       						<?php
									$sel="";
		                            $mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
		                            $i=0;
		                            foreach($mm as $mon){
		                                $i++;
											if($i==$m){
												$sel=$sel="selected='selected'";}
											else
												$sel="";
		                                echo"<option value='$i' $sel> $mon</option>";		
		                            }
		                        ?>                        
		                    </select>
						<!-- </div>
					
						<div class="form-group"> -->
	    					<select  name="dd" class="form-control" style="width:130px">
	       						<option>date</option>
			       						<?php
									$sel="";
			                        for($i=1;$i<=31;$i++){
										if($i==$d)
										$sel="selected='selected'";
										else
											$sel="";
			                        ?>
			                        <option value="<?php echo $i ;?>"<?php echo $sel ;?> >
			                        <?php
			                        if($i<10)
			                            echo"0"."$i" ;
			                        else
			                            echo"$i";	
										  
									?>
								</option>	
									<?php 
									}?>
							</select>
						</div></div>

						<div class="form-group">
							<span class="formGroupExampleInput">podtxt</span>
							<input type="text" name="pobtxt" class="form-control"   style="width:530px;" value=" <?php echo $rs_upd['pob']; ?>"  />
						</div>
						
						<div class="form-group">
						<span class="formGroupExampleInput">Address</span>
							<input type="text" name="addrtxt" class="form-control" style="width: 530px;" value=" <?php echo $rs_upd['address'];?>" placeholder="address"/>
						</div>
						
						<div class="form-group">
							<span class="formGroupExampleInput">Teacher's qualification: </span>
		    					<select name="degree" class="form-control" style="width: 530px;">
		       						<option>Degree</option>
		       						<?php
		                                $mm=array("Bachelor","Master","P.HD");
		                                $i=0;
		                                foreach($mm as $mon){
		                                    $i++;
												if($mon==$rs_upd['degree'])
													$iselect="selected";
												else
													$iselect="";
													
												echo"<option value='$mon' $iselect> $mon</option>";		
		                                }
		                            ?>			     					
		                        </select>
						</div>
							
		     			<div class="form-group">
		     			<span class="formGroupExampleInput">Salary</span>
							<input type="text" name="slarytxt" style="width: 530px;" class="form-control" value="<?php echo $rs_upd['salary'];?>" placeholder="salary" />
						</div>
						<span class="formGroupExampleInput">Married</span>
						<div class="form-check">
							<span class="form-check-span">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="marriedrdo" class="form-check-input" value="Yes"<?php if($rs_upd['married']=="Yes") echo "checked";?> />
						
							<span class="form-check-span">No</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="marriedrdo" class="form-check-input" value="No"<?php if($rs_upd['married']=="No") echo "checked";?> /> 
							
						</div>

						<div class="form-group">
						<span class="formGroupExampleInput">Phone</span>
							<input type="text" name="phonetxt" class="form-control"  value="<?php echo $rs_upd['phone'];?>"  style="width: 530px;" placeholder="Phone"/>
						</div>
						
						<div class="form-group">
						<span class="formGroupExampleInput">Email</span>
							<input type="text" name="emailtxt" class="form-control" value="<?php echo $rs_upd['email'];?>" style="width: 530px;" placeholder="Email"/>
						</div>
						
						<div class="form-group">
							<span class="formGroupExampleInput">Note</span>
							<input type="text" name="notetxt" class="form-control" value="<?php echo $rs_upd['note'];?>"  style="width: 530px;" placeholder="note"/>
						</div>
						
						<div class="form-group">
							<input type="submit" name="btn_upd" class="btn btn-primary btn-lg" value="Update" />&nbsp;&nbsp;&nbsp;
							<input type="reset"  href="#" class="btn btn-primary btn-md" value="Cancel" />
						</div>

				
					</form>


			</div>
		</div>
<?php	
}
else
{
?>
<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #10C5FC;">
	<div class="panel panel-default">
	  		<div class="panel-heading"><h1><span class="fa fa-user-circle"></span> Teachers Entry Form</h1></div>
	  			<div class="panel-body">
					<p style="text-align:center;">Here, you'll add new teachers detail to record into database.</p>
				</div>
	</div>
		
		<div class="container_form">
		    <form method="post">
						<div class="form-group">
						<span class="formGroupExampleInput">First Name</span>
							<input type="text" name="fnametxt" class="form-control" placeholder="First name" style="width: 530px;" />
						
							<span class="formGroupExampleInput">Last Name</span>	
							<input type="text" name="lnametxt" class="form-control" placeholder="Last name" style="width: 530px;" />
						</div>

						<div class="form-check">
						<span class="form-check-span">&nbsp;Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="form-check-input" type="radio" name="genderrdo" value="Male" /> 
							<span class="form-check-span">&nbsp;Female</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="form-check-input" type="radio" name="genderrdo" value="Female" /> 
							
						</div>

						<div class="form-group">
							<span class="formGroupExampleInput">Birthday: </span>&nbsp;&nbsp;&nbsp;
							<!-- <div class="form-group"> -->
		    					<select name="yy" class="form-control" style="width: 530px;">
		       						<option>Year</option>
		       						<?php
									for($i=1985;$i<=2015;$i++){	
									echo"<option value='$i'>$i</option>";
									}
								?>
								</select>


								<select name="mm" class="form-control" style="width:530px;">
		       						<option>Month</option>
		       						<?php
		                            $mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
		                            $i=0;
		                            foreach($mm as $mon){
		                                $i++;
		                                echo"<option value='$i'> $mon</option>";		
			                            }
			                        ?>
		                        </select>

		                        <select name="dd" class="form-control" style="width: 530px;">
		       						<option>date</option>
				       						<?php
				                        for($i=1;$i<=31;$i++){
				                        ?>
				                        <option value="<?php echo $i; ?>">
				                        <?php
				                        if($i<10)
				                            echo"0".$i;
				                        else
				                            echo"$i";	  
										?>
										</option>	
										<?php 
										}?>
								</select>
						</div>

						<div class="form-group">
							<span class="formGroupExampleInput">Place of birth</span>
								<input type="text" name="pobtxt" class="form-control" placeholder="Place of birth" style="width: 530px;" />
						</div>
							
							<div class="form-group">
								<span class="formGroupExampleInput">Address</span>
								<input type="text" name="addrtxt" class="form-control" placeholder="Address" style="width:530px;" />
							</div>
							
							<div class="form-group">
								<span class="formGroupExampleInput">Teacher's qualification: </span>
			    					<select name="degree" class="form-control" style="width: 530px;">
			       						<option>Degree</option>
			       						<?php
			                                $mm=array("Bachelor","Master","P.HD");
			                                $i=0;
			                                foreach($mm as $mon){
			                                    $i++;
													echo"<option value='$mon'> $mon</option>";
			                                    //echo"<option value='$i'> $mon</option>";		
			                                }
			                            ?> 					     					
			                        </select>
								
							</div>

							<div class="form-group">
								<span class="formGroupExampleInput">Salary</span>
								<input type="text" name="slarytxt" class="form-control" placeholder="Salary" style="width: 530px;" />
							</div>
							<span class="formGroupExampleInput">Married</span>
							<div class="form-group">
								<span class="form-check-span">&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" class="form-check-input" name="marriedrdo" value="Yes"/> 
								<span class="form-check-span">&nbsp;No</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" class="form-check-input" name="marriedrdo" value="No"/> 
								
							</div>
							
							<div class="form-group">
								<span class="formGroupExampleInput">Mobile Number</span>
								<input type="text" name="phonetxt" class="form-control" placeholder="Mobile no."  style="width:530px;" />
							</div>
							
							<div class="form-group">
								<span class="formGroupExampleInput">Email address</span>
								<input type="text"  name="emailtxt" class="form-control" placeholder="Email address"  style="width: 530px;" />
							</div>
							
							<div class="form-group">
							<span class="formGroupExampleInput">Note</span>
								<textarea type="text" name="notetxt" class="form-control" placeholder="Note" style="width: 530px;" ></textarea>
							</div>

							<div class="form-group">
								<input type="submit" name="btn_sub" href="#" class="btn btn-primary btn-lg" value="Register" />&nbsp;&nbsp;&nbsp;
								<input type="reset"  href="#" class="btn btn-primary btn-md" value="Cancel" />
							</div>



			</form>						
		</div>	
</div>
<?php
}
?>
</body>
</html>