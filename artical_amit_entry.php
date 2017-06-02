<?php
$id="";
$opr="";
if(isset($_GET['opr']))
  $opr=$_GET['opr'];

if(isset($_GET['rs_id']))
  $id=$_GET['rs_id'];

if(isset($_POST['btn_sub'])){
  $lid=$_POST['sudenttxt'];
  $title=$_POST['locationtxt'];
  $content=$_POST['descriptxt'];
  $status=$_POST['genderrdo'];
  $note=$_POST['notetxt'];
  
  $sql_add=mysql_query("INSERT INTO article_tbl 
              VALUES(
                NULL,
                $lid,
                '$title',
                '$content',
                '$status' ,
                '$note'
              )
            ");
  if($sql_add==true)
    $msg="1 Record inserted...";
  else
    $smg="Insert Fail...".mysql_error();
}

//------------------uodate data----------
if(isset($_POST['btn_upd'])){
  $loca_id=$_POST['sudenttxt'];
  $title=$_POST['locationtxt'];
  $content=$_POST['descriptxt'];
  $status=$_POST['genderrdo'];
  $note=$_POST['notetxt'];
  
  $sql_update=mysql_query("UPDATE  article_tbl SET  
              loca_id='$loca_id' ,
              title='$title' ,
              content='$content' ,
              status='$status' ,
              note='$note'
              
          ");
          
if($sql_update==true)
  echo "<div style='background-color: white;padding: 20px;border: 1px solid black;margin-bottom: 25px;''>"
                . "<span class='p_font'>"
                . "Record Updated Successfully... !"
                . "</span>"
                . "</div>";
  else
    echo "Updated Failed...!";
  
  
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>artical_amit_entry</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<?php
if($opr=="upd")
{
  $sql_upd=mysql_query("SELECT * FROM article_tbl WHERE a_id=$id");
  $rs_upd=mysql_fetch_array($sql_upd);
?>


<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #DAF7A6 ;>
    <div class="panel panel-default">
          <div class="panel-heading"><h1><span class="fa fa-th "></span> Artical's Entry Form</h1></div>
            <div class="panel-body">
          
                  <p style="text-align:center;">Here, you'll add your artical's records into database.</p>
          
                <form method="post">    
                       
                    <div class="form-group">
                        <select class="form-control" name="sudenttxt" style="width: 530px;">
                                                      <option>Choose location</option>
                                          <?php
                                             $location=mysql_query("SELECT * FROM location_tb");
                                                 while($row=mysql_fetch_array($location)){
                                          ?>
                                            <option value="<?php echo $row['loca_id']?>"><?php echo $row['l_name'];?></option>
                                          <?php
                                          }
                                          ?>
                              
                          </select>
                        </div>


                      <div class="form-group">
                        <input type="text" class="form-control" name="locationtxt" id="textbox" value="<?php echo $rs_upd['title'];?>" style="width: 530px;" placeholder="location"/>
                      </div>

                      <div class="form-group">
                        <textarea name="descriptxt" class="form-control" cols="82" rows="7" style="width: 530px;" placeholder="description"><?php echo $rs_upd['content'];?></textarea>
                      </div>
                      <div class="form-check" style="margin-left: 0px;">
                          <span class="form-check-label">Public</span>
                           <input class="form-check-input" type="radio" name="genderrdo" value="Public"  <?php if($rs_upd['status']=="Public") echo "checked";?> style="width: 130px"/> 
                      </div>
                      <div class="form-check">
                      <span class="form-check-label">Private</span>
                           <input class="form-check-input" type="radio" name="genderrdo" value="Private" <?php if($rs_upd['status']=="Private") echo "checked";?>  style="width: 130px" /> 
                      </div>

                      <div class="form-group">
                        <textarea name="notetxt" class="form-control" cols="23" rows="5" style="width: 530px;" placeholder="artical note"><?php echo $rs_upd['note'];?></textarea>
                      </div>

                       <div>
                        <input type="submit" name="btn_upd" class="btn btn-primary btn-lg" value="Update" id="button-in" />
                        <input type="reset" value="Cancel" style="margin-left: 9px;" class="btn btn-info btn-md" id="button-in" />  
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
<div class='offset-md-3 col-md-6 offset-md-3' style="background-color: #DAF7A6 ;">
          <div class="panel panel-default">
                <div class="panel-heading"><h1><span class="fa fa-th-large"></span> Artical's Entry Form</h1></div>
                  <div class="panel-body">
                      <p style="text-align:center;">Here, you'll add your artical's records into database.</p>
                    <form method="post">    
                      <div class="form-group">
                        <select class="form-control" name="sudenttxt" style="width: 530px;">
                                                      <option>Choose location</option>
                                          <?php
                                             $location=mysql_query("SELECT * FROM location_tb");
                                                 while($row=mysql_fetch_array($location)){
                                          ?>
                                            <option value="<?php echo $row['loca_id']?>"><?php echo $row['l_name'];?></option>
                                          <?php
                                           }
                                          ?>
                              
                        </select>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" name="locationtxt" id="textbox" placeholder="Title" style="width: 530px;" />
                      </div>
                      
                      <div class="form-group">
                        <textarea name="descriptxt" class="form-control" cols="82" rows="7" placeholder="Add content.." style="width: 530px;"></textarea>
                      </div>

                      <div class="form-check" style="margin-left: 0px;">
                      <span class="form-check-label">&nbsp;Public</span>
                            <input class="form-check-input" type="radio" name="genderrdo" value="Public" checked="checked" style="width: 130px;" />
                      </div>
                      <div class="form-check">
                          <span class="form-check-label">&nbsp;Private</span>
                         <input class="form-check-input" type="radio" name="genderrdo" value="Private" style="width: 120px;" />
                      </div>

                      <div class="form-check">
                        <textarea class="form-control" name="notetxt" class="form-control" cols="23" rows="3" style="width: 530px;"></textarea>
                      </div><br><br>
                      

                      <div>
                        <input type="submit" name="btn_sub" class="btn btn-primary btn-lg" value="Add Now" id="button-in" />
                        <input type="reset" style="margin-left: 9px;" class="btn btn-primary btn-md" value="Cancel" id="button-in" />
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