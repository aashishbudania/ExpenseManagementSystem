<?php 
session_start();  
?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body
{
   background-image:url("wall.jpg");
}
        <link rel="stylesheet" href="f.css">
</style >
</head>


<?php
include 'db_connect/db.php';
$tp=  mysql_real_escape_string($_REQUEST['toe']);
$dt=  mysql_real_escape_string($_REQUEST['dt']);
$des=  mysql_real_escape_string($_REQUEST['des']);
$amt=  mysql_real_escape_string($_REQUEST['amt']);
$m=  mysql_real_escape_string($_REQUEST['m']);

switch($m)
{
case 'Card': $a="select bal from pay where m like 'card'";
             $res=mysql_query($a) or die(mysql_error());
            if($res === FALSE)
             { 
                die(mysql_error()); 
             }
             while($row = mysql_fetch_array($res))
                {
                    if($amt>=$row['bal'])
                     {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br><?php echo "Balance in Card is ".$row['bal']."<br>"; ?>
                            <br><br>Not sufficient balace in Card to add expense , Try another method of Payment.
                            </div>
                        <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>
                        <?php
                     }
                     else
                     {
                            $b=$row['bal']-$amt;
                            $sql="insert into exp values('$tp','$dt','$des','$amt','$m')";
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added an expense.              
                            </div>
                            <?php                            
                            $d="update pay set bal=$b where m like 'card'"; 
                            $res=mysql_query($d) or die(mysql_error());
                      ?>  <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> <?php
                     }
                break;
                }             
                break;             
            
case 'Cash': $a="select bal from pay where m like 'cash'";
             $res=mysql_query($a) or die(mysql_error());
            if($res === FALSE)
             { 
                die(mysql_error()); 
             }
              while($row = mysql_fetch_array($res))
                {
                    if($amt>=$row['bal'])
                     {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not sufficient balace in Cash to add expense , Try another method of Payment.
                            </div>
                        <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>
                        <?php
                     }
                     else
                     {
                            $b=$row['bal']-$amt;
                            $sql="insert into exp values('$tp','$dt','$des','$amt','$m')";
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added an expense.              
                            </div>
                            <?php  
                            $d="update pay set bal=$b where m like 'cash'"; 
                            $res=mysql_query($d) or die(mysql_error());
                      ?>  <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> <?php
                     }
                break;
                }             
                break;             
            
case 'NetBanking': $a="select bal from pay where m like 'netbanking'";
             $res=mysql_query($a) or die(mysql_error());
            if($res === FALSE)
             { 
                die(mysql_error()); 
             }
              while($row = mysql_fetch_array($res))
                {
                    if($amt>=$row['bal'])
                     {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                             <br><br><?php echo "Balance in NetBanking is ".$row['bal']."<br>"; ?>
                            <br><br>Not sufficient balace in NetBanking to add expense , Try another method of Payment.
                            </div>
                        <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>
                        <?php
                     }
                     else
                     {
                            $b=$row['bal']-$amt;
                            $sql="insert into exp values('$tp','$dt','$des','$amt','$m')";
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added an expense.              
                            </div>
                            <?php  
                            $d="update pay set bal=$b where m like 'card'"; 
                            $res=mysql_query($d) or die(mysql_error());
                      ?>  <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> <?php
                     }
                break;
                }             
                break;             
            
case 'PhonePay' :$a="select bal from pay where m like 'phonepay'";
                     $res=mysql_query($a) or die(mysql_error());
                    if($res === FALSE)
                     { 
                        die(mysql_error()); 
                     }
                      while($row = mysql_fetch_array($res))
                        {

                            if($amt>=$row['bal'])
                             {
                                ?>
                                <div class="alert alert-warning" align="center">
                                    <strong>Failed!</strong> 
                                    <br><br><?php echo "Balance in PhonePay is ".$row['bal']."<br>"; ?>
                                    <br><br>Not sufficient balace in PhonePay to add expense , Try another method of Payment.
                                    </div>
                                <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>
                                <?php
                     }
                     else
                     {
                            $b=$row['bal']-$amt;
                            $sql="insert into exp values('$tp','$dt','$des','$amt','$m')";
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added an expense.              
                            </div>
                            <?php  
                            $d="update pay set bal=$b where m like 'phonepay'"; 
                            $res=mysql_query($d) or die(mysql_error());
                      ?>  <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> <?php
                     }
                break;
                }             
                break;             
            
case 'Paytm' : $a="select bal from pay where m like 'paytm'";
             $res=mysql_query($a) or die(mysql_error());
            if($res === FALSE)
             { 
                die(mysql_error()); 
             }
              while($row = mysql_fetch_array($res))
                {
                    if($amt>=$row['bal'])
                     {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br><?php echo "Balance in PhonePay is ".$row['bal']."<br>"; ?>
                            <br><br>Not sufficient balace in Paytm to add expense , Try another method of Payment.
                            </div>
                        <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>
                        <?php
                     }
                     else
                     {
                            $b=$row['bal']-$amt;
                            $sql="insert into exp values('$tp','$dt','$des','$amt','$m')";
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added an expense.              
                            </div>
                            <?php  
                            $d="update pay set bal=$b where m like 'paytm'"; 
                            $res=mysql_query($d) or die(mysql_error());
                      ?>  <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> <?php
                     }
                break;
                }             
                break;             
            
case 'Others' : $a="select bal from pay where m like 'others'";
                $res=mysql_query($a) or die(mysql_error());
                if($res === FALSE)
                 { 
                    die(mysql_error()); 
                 }
                  while($row = mysql_fetch_array($res))
                    {
                        if($amt>=$row['bal'])
                         {
                            ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br><?php echo "Balance in PhonePay is ".$row['bal']."<br>"; ?>
                            <br><br>Not sufficient balace in Other Resources to add expense , Try another method of Payment.
                            </div>
                        <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>
                        <?php
                         }
                         else
                         {
                                $b=$row['bal']-$amt;
                                $sql="insert into exp values('$tp','$dt','$des','$amt','$m')";
                                mysql_query($sql) or die(mysql_error());
                                ?>
                                    <div align="center" class="alert alert-success">
                                    <strong>Success!</strong>
                                    <br><br>You have successfully added an expense.              
                                    </div>
                                    <?php  
                                $d="update pay set bal=$b where m like 'others'"; 
                                $res=mysql_query($d) or die(mysql_error());
                      ?>  <button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> <?php
                         }
                        break;
                     }             
                     break;
}
?>


