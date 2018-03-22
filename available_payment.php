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
<body>

  <h2 colspan='2'  align='center' style="color:black;font-family: 'Times New Roman'">Available Amount</h2><br>
               <table align="center" border="2">
                        <th>Payment Method or Wallet</th>
                        <th>Available Balance(Re/-)</th>
                    <?php
                             include 'db_connect/db.php';
                             $sql="select m , bal from pay";
                             $res=  mysql_query($sql) or die(mysql_error());
                             if($res === FALSE)
                             { 
                                    die(mysql_error()); 
                             }
                             while($rws=mysql_fetch_array($res))
                                {
                                    echo "<tr>";
                                    echo "<td> ".$rws[0]." </td>";
                                    echo "<td> ".$rws[1]." </td>";
                                    echo "</tr>";
                                }
                    ?>
                <div style="margin:2% auto 3% 15%"><a href='index.php' align='center' ><button width=100% type="button" class="btn btn-primary" style="margin:50px";>Home</button></a></div>
             </table>
</body>
</html>
