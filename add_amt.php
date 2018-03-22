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
</style >
</head>  

<?php
include 'db_connect/db.php';
$amount=  mysql_real_escape_string($_REQUEST['amt']);
$m=  mysql_real_escape_string($_REQUEST['method']);

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
                    
                    if($amount<=0)
                    {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not Sufficient Amount to Add , Enter amount greater than 0.
                        </div>
                        <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                        <?php  
                    }                     
                    else
                     {
                            $b=$row['bal']+$amount;
                            $sql="update pay set bal=$b where m like 'card'"; 
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added amount in Card.<br><br>     
                            <br><?php echo "Updated Balance in Card is ".$b."<br>";?>      
                            </div>
                            <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button> </div>
                            <?php
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
                    if($amount<=0)
                    {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not Sufficient Amount to Add , Enter amount greater than 0.
                        </div>
                        <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                        <?php
                    } 
                     else
                     {
                            $b=$row['bal']+$amount;
                            $sql="update pay set bal=$b where m like 'cash'"; 
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added amount in Cash.<br><br>
                            <br><?php echo "Updated Balance in Cash is ".$b."<br>";?>        
                            </div>
                            <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                            <?php
                     }
                break;
                }             
                break;   
case 'NetBanking':$a="select bal from pay where m like 'netbanking'";
             $res=mysql_query($a) or die(mysql_error());
            if($res === FALSE)
             { 
                die(mysql_error()); 
             }
             while($row = mysql_fetch_array($res))
                {
                    if($amount<=0)
                    {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not Sufficient Amount to Add , Enter amount greater than 0.
                            </div>
                        <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                        <?php
                    } 
                     else
                     {
                            $b=$row['bal']+$amount;
                            $sql="update pay set bal=$b where m like 'netbanking'"; 
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added amount in NetBanking.<br><br>   
                            <br><?php echo "Updated Balance in NetBanking is ".$b."<br>";?>          
                            </div>
                            <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                            <?php
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
                    if($amount<=0)
                    {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not Sufficient Amount to Add , Enter amount greater than 0.
                            </div>
                        <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                        <?php
                    } 
                     else
                     {
                            $b=$row['bal']+$amount;
                            $sql="update pay set bal=$b where m like 'phonepay'"; 
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added amount in PhonePay.<br><br>
                            <br><?php echo "Updated Balance in PhonePay is ".$b."<br>";?>          
                            </div>
                            <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                            <?php
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
                    if($amount<=0)
                    {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not Sufficient Amount to Add , Enter amount greater than 0.
                            </div>
                        <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                        <?php
                    } 
                     else
                     {
                            $b=$row['bal']+$amount;
                            $sql="update pay set bal=$b where m like 'paytmm'"; 
                            mysql_query($sql) or die(mysql_error());
                            e?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added amount in Paytm.<br><br>
                            <br><?php echo "Updated Balance in Paytm is ".$b."<br>";?>             
                            </div>
                            <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                            <?php
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
                    if($amount<=0)
                    {
                        ?>
                        <div class="alert alert-warning" align="center">
                            <strong>Failed!</strong> 
                            <br><br>Not Sufficient Amount to Add , Enter amount greater than 0.
                            </div>
                        <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                        <?php
                    } 
                     else
                     {
                            $b=$row['bal']+$amount;
                            $sql="update pay set bal=$b where m like 'others'"; 
                            mysql_query($sql) or die(mysql_error());
                            ?>
                            <div align="center" class="alert alert-success">
                            <strong>Success!</strong>
                            <br><br>You have successfully added amount in Other Resources.<br><br>
                            <br><?php echo "Updated Balance in Othe Sources".$b."<br>";?>             
                            </div>
                            <div style="margin:5% auto 0 48%" ><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
                            <?php
                     }
                break;
                }             
                break;   
}

?>
