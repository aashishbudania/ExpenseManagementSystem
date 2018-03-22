
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
            <table align="center">
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Add Amount</u></h3></td></tr><br>
                <td> <form align='center' action="add_amt.php" method="POST">                    
                    <tr>
                    <td>Amount to Add</td>
                    <td><input type="float" name="amt" required=""/></td>
                </tr>
                <br>
                <tr>
                    <td>
                        Payment Method
                    </td>
                    <td>
                        <select name="method">
                            <option>Cash</option>
                            <option>Card</option>
                            <option>NetBanking</option>
                            <option>PhonePay</option>
                            <option>Paytm</option>
                            <option>Others</option>
                        </select>
                    </td>
                </tr>
                <tr>

              <div style="margin:5% auto 0% 5%"><a href='index.php' align='center' ><button width=100% type="button" class="btn btn-primary" style="margin:50px";>Home</button></a></div>
                </tr>
          </table>
              <div style="margin:2% auto 3% 48%"><td align='center' >  <button type="submit" class="btn btn-primary">Add Amount</button></td></div>
        </form>
    </body>
</html>
