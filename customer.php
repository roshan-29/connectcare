<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='login.html'</script>";
 }
?>
<html>
    <head>
        <title>Customer </title>
        <style>
body {
  margin: 0;
  background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("cusimg.jpg");
}
.topnav {
  overflow: hidden;
  background-color:transparent;
  height: 70px;
  border: 3px solid #ffffff;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}

.topnav-right {
  float: right;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    outline:white solid 5px;
    background:transparent;
    margin:5px ;
    width:73%;
    height:65%;
    float: right;
}

td {
    border: 2px solid white;
    text-align:center;
    color: white;
    padding: 8px;
}

th{
  border: 2px solid white;
  text-align:center;
  color: #f2f2f2;
  background-color:black;
}
tr:hover{
  background-color:grey;
  color: black;

}
.custombutton{
  float:left;
  width: 25%;
  height: 65%;
  border: 3px solid white;

  
}
input[type=text] {
    size: 20px 15px;
    padding: 12px 20px;
    margin: 8px ;
    background:transparent;
    border: 3px solid red;
    color:white;
}
button
{
     height: 25%;width: 100%;cursor:pointer;
     border: 3px solid white;background-color:transparent;color:#f2f2f2;font-size:37px;
}
button:hover{
  background-color: grey;
}
input:hover{
  background-color: red;
}
</style>    
</head>
<body>
<div class="topnav">
            <a class="active" href="home.html"><img src="ic_add_pet.png"></a>
            <a href="customer.php">Customers</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
          <div class="custombutton">         
<form>
<button  formaction="customeradd.php">Add new customer</button>
<button  formaction="customerupdate.php">update customer</button>
<button  formaction="phone.php">phone number</button>
</form>
<form action="deletecustomer.php" method="post">
<input  style="font-size:18px;height:9%;"id="dbutton" type="text" name="t1" placeholder="Enter the id to delete" required>
<input  style="width:75px;height:45px;cursor:pointer;border: 3px solid white;background-color:transparent;
                  color:#f2f2f2;font-size:18px;" type="submit" value="Delete">
</form> 
</div>
    <?php
   
$con = mysqli_connect("localhost","root","","Petshop_management");//change username and password according to your server settings
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select * from customer ");
echo "<table>";
echo "<tr>
<th>cs_ID</th>
<th>cs_fname</th>
<th>cs_minit</th>
<th>cs_lname</th>
<th>cs_address</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    <td>$arr[4]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>


</body>
</html>