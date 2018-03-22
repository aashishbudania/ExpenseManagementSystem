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
            <h2 colspan='4'  align='center' style="color:black;font-family: 'Times New Roman'">EXPENSES BASED ON TYPE</h2><br>
                      <table align="center" border="1">  
                      <th>Type of Expense</th>
                      <th>Total Amount of Type</th>
                        <?php 
                                         $date1=$_REQUEST['date1'];
                                         $date2=$_REQUEST['date2'];
                                         include 'db_connect/db.php';
                                         $sql = "select tp, sum(amt) from exp  where dt between '$date1' and '$date2' group by tp";
                                         $res=  mysql_query($sql) or die(mysql_error());
                                         if($res === FALSE)
                                         { 
                                            die(mysql_error()); 
                                         }
                                         while($rws=  mysql_fetch_array($res))
                                          {
                                                echo "<tr>";
                                                echo "<td>".$rws[0]."</td>";
                                                $qty= 0;
                                                $a = "select * from exp where tp like '$rws[0]'";
                                                $b = mysql_query($a);
                                                while ($num = mysql_fetch_assoc ($b))
                                                 {
                                                    $qty += $num['amt']; 
                                                 }
                                                echo "<td>".$qty."<td>";
                                                echo "</tr>";
                                                
                                          }
                        ?>                  
                    <table>
 <div style="margin:0% auto 2% 15%"><a href='index.php' align='center' ><button width=100% type="button" class="btn btn-primary" style="margin:50px";>Home</button></a></div>
                    </table>
 <div style="margin:4% auto 2% 49%"><button align="center" type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button></div>
</body>
</html>
