
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
                <tr><td colspan='2'  align='center' style="color:black;font-family: 'Times New Roman'"><h2>ADD EXPENSE</h2></td></tr><br>
                <tr>
                    <td> <form align='center' action="aex.php" method="POST"> 
                   
                        Food<input type="radio" name="toe" value="food" checked/>
                        Transporatation<input type="radio" name="toe" value="transportation" />
                        Utilities<input type="radio" name="toe" value="utilities" />
                        Activities<input type="radio" name="toe" value="activities"/>
                        Loan<input type="radio" name="toe" value="loan" />
                        Others<input type="radio" name="toe" value="others" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Date 
                    </td>
                    <td>
                        <input type="date" name="dt" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="des"/></td>
                </tr>
                 <tr>
                    <td>Amount Spent</td>
                    <td><input type="float" name="amt" required=""/></td>
                </tr>
                <tr>
                    <td>
                        Payment Method
                    </td>
                    <td>
                        <select name="m">
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
  <div style="margin:5% auto 0% 48%"><td align='center' >  <button type="submit" class="btn btn-primary">Add Expense</button></td></div>
  <div style="margin:5% auto 0% 15%"><a href='index.php' align='center' ><button width=100% type="button" class="btn btn-primary" style="margin:50px";>Home</button></a></div>
                </tr>
            </table>
        </form>
    </body>
</html>
