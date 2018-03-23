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
    <tr><td colspan='2'  align='center' style="color:black;font-family: 'Times New Roman'"><h2>Expenese Combined with Type</h2></td></tr><br>
    <form action="exp_b_dates.php" method="POST">
    <br><br>    
        <tr><td>Start Date [mm/dd/yyyy] </td><td>
        <input type="date" name="date1" required></td></tr>
        
        <tr><td>End Date [mm/dd/yyyy] </td><td>
        <input type="date" name="date2" required></td></tr>
        <br>
        <div style="margin:0% auto 0% 15%"><a href='index.php' align='center' ><button width=100% type="button" class="btn btn-primary" style="margin:50px";>Home</button></a></div>
        </tr>
    </table>
        <div style="margin:5% auto 0% 47%"><td align='center'  >  <button type="submit"witdth=50% class="btn btn-primary">GO</button></td></div>
    </form> 
</body>
</html> 
    
