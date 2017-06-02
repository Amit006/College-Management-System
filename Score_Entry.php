<?php
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
						
if(isset($_POST['btn_sub'])){
	$stu_name=$_POST['sudenttxt'];
	$fa_name=$_POST['factxt'];
	$sub_name=$_POST['subjecttxt'];
	$miderm=$_POST['midermtxt'];
	$final=$_POST['finaltxt'];
	$note=$_POST['notetxt'];	
	

$sql_ins=mysql_query("INSERT INTO stu_score_tbl 
						VALUES(
							NULL,
							'$stu_name',
							'$fa_name' ,
							'$sub_name',
							'$miderm',
							'$final',
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
	$stu_id=$_POST['sudenttxt'];
	$faculties_id =$_POST['factxt'];
	$sub_id=$_POST['subjecttxt'];
	$miderm=$_POST['midermtxt'];
	$final=$_POST['finaltxt'];
	$note=$_POST['notetxt'];
	
	$sql_update=mysql_query("UPDATE stu_score_tbl SET
							stu_id='$stu_id' ,
							faculties_id='$faculties_id' ,
							sub_id='$sub_id' ,
							miderm='$miderm' ,	
							final='$final' ,
							note='$note' 
						WHERE ss_id=$id

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_entry.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<?php
if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM stu_score_tbl WHERE ss_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
?>



<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #DAF7A6 ;">
<div class="panel panel-default">
        <div class="panel-heading"><h1><span class="fa fa-hourglass-start"></span> Score's Update Form</h1></div>
            <div class="panel-body">
                <p style="text-align:center;">Here, you'll update your score's records into database.</p>
            
                  <form method="post">    
                    <div class="form-group">
                        <select class='form-control' name="sudenttxt" style="width: 80%">
                                            <option>Student's name</option>
                            <?php
                                $student_name=mysql_query("SELECT * FROM stu_tbl");
                                while($row=mysql_fetch_array($student_name)){
                                     if($row['stu_id']==$rs_upd['stu_id'])
                                        $iselect="selected";
                                    else
                                        $iselect="";
                                ?>
                                <option value="<?php echo $row['stu_id'];?>" <?php echo $iselect ;?> > <?php echo $row['f_name']; echo" "; echo $row['l_name'];?> </option>
                                <?php   
                                }
                            ?>
                            
                        </select>
                    </div>    

                        <div class="form-group">
                                <select class="form-control" name="factxt" style="width: 530px">
                                        <option>Faculties's name</option>
                                            <?php
                                               $fac_name=mysql_query("SELECT * FROM facuties_tbl");
                                               while($row=mysql_fetch_array($fac_name)){
                                                    if($row['faculties_id']==$rs_upd['faculties_id'])
                                                        $iselect="selected";
                                                    else
                                                        $iselect="";
                                                ?>
                                                <option value="<?php echo $row['faculties_id'];?>" <?php echo $iselect ;?> > <?php echo $row['faculties_name'];?> </option>
                                                <?php 
                                               }
                                            ?>
                                </select>
                         </div>

                         <div class="form-group">
                                <select class="form-control" name="subjecttxt" style="width: 530px">
                                    <option>Subject's name</option>
                                        <?php
                                           $subject=mysql_query("SELECT * FROM sub_tbl");
                                           while($row=mysql_fetch_array($subject)){
                                               if($row['sub_id']==$rs_upd['sub_id'])
                                                    $iselect="selected";
                                                else
                                                    $iselect="";
                                        ?>
                                        <option value="<?php echo $row['sub_id'];?>" <?php echo $iselect ;?> > <?php echo $row['sub_name'];?> </option>
                                        <?php      
                                           }
                                        ?>
                                </select>
                         </div>
                         <div class="form-group">
                            <input  type="text" name="midermtxt" class="form-control" id="textbox" value="<?php echo $rs_upd['miderm'];?> " style="width: 530px;"/>
                        </div>
                        <div class="form-group">
                        <input type="text" name="finaltxt" class="form-control" id="textbox" value="<?php echo $rs_upd['final'];?>"  style="width: 530px;"/>
                        </div>
                         <div class="form-group">
                            <textarea name="notetxt" class="form-control" cols="25" rows="3" id="exampleTextarea" style="width: 530px"><?php echo $rs_upd['note'];?></textarea>
                        </div>

                         <div>
                            <input type="submit" class="btn btn-outline-danger btn-lg" name="btn_upd" value="Update" id="button-in" title="Update"  />
                                <input type="reset" style="margin-left: 9px;" class="btn btn-outline-warning btn-md" value="Cancel" id="button-in"/>
                            </div>

                    </div>
                 </form>
            </div>
        </div>
 </div>                   
<?php	
}
else
{
?>
<div class='offset-lg- col-md-6 offset-lg-3' style="background-color: #78D2F0 ;">

    <div class="panel panel-default">
        <div class="panel-heading"><h1><span class="fa fa-plus-square "></span> Score's Entry Form</h1></div>
            <div class="panel-body">
                <p style="text-align:center;">Here, you'll entry your score's records into database.</p>

                  <form method="post">    
                    <div class="form-group">
                        <select class="form-control" name="sudenttxt" style="width: 530px;">
                                            <option>Student's name</option>
                            <?php
                                $student_name=mysql_query("SELECT * FROM stu_tbl");
                                while($row=mysql_fetch_array($student_name)){
                                ?>
                                <option value="<?php echo $row['stu_id'];?>"> <?php echo $row['f_name']; echo" "; echo $row['l_name'];?> </option>
                                <?php   
                                }
                            ?> 
                        </select>   
                    </div>
                    
                    <div class="form-group">
                                <select class="form-control" name="factxt" style="width: 530px">
                                    <option>Faculties's name</option>
                                        <?php
                                           $fac_name=mysql_query("SELECT * FROM facuties_tbl");
                                           while($row=mysql_fetch_array($fac_name)){
                                            ?>
                                            <option value="<?php echo $row['faculties_id'];?>"> <?php echo $row['faculties_name'];?> </option>
                                            <?php 
                                           }
                                        ?>
                                </select>
                    </div>
                    <div class="form-group">
                            <select class="form-control" name="subjecttxt" style="width: 530px">
                                <option>Subject's name</option>
                                    <?php
                                       $subject=mysql_query("SELECT * FROM sub_tbl");
                                       while($row=mysql_fetch_array($subject)){
                                    ?>
                                    <option value="<?php echo $row['sub_id'];?>"> <?php echo $row['sub_name'];?> </option>
                                    <?php      
                                       }
                                    ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="midermtxt" id="textbox" placeholder='Midterm' style="width: 530px;" />
                    </div>
            
                    <div class="form-group">
                        <input type="text" class="form-control" name="finaltxt"  id="textbox" placeholder='Final' style="width: 530px;"/>
                    </div>
                
                    <div class="form-group">
                        <textarea name="notetxt" cols="23" class="form-control" rows="3" placeholder='Add note..' id="" style="width: 530px;"></textarea>
                    </div>
                
                    <div>
                       <input type="submit" class="btn btn-outline-success btn-lg" name="btn_sub" value="Add Now" id="button-in"  />
                        <input type="reset" style="margin-left: 9px;" class="btn btn-outline-danger btn-md" value="Cancel" id="button-in"/>                 
                    </div>



                  </form>
             </div>
     </div>             
</div>

<?php
}
?>
</body>
</html>