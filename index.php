<body bgcolor="191970" />
<font color="F5FFFA" />
<script>
//alert("Welcome!");
</script>
<?php

$user = $_POST['user'];

?>
<center>
<form action="" method="post">
<img src="https://lh5.ggpht.com/1CxNUEdzrREikWZoaHIU5J63x2gOxTb7R-ZIbJd51uPBFt0jUj8AX2bMOhKiIBcuAqtH=w300" />
<h1><i><u>Database Resolve</u></i></h1>
<b>Username : </b><input type="text" name="user" /><br>
<br>
<input type="submit" value="Resolve" /><br>
</form>
<div style="color:#FF4500">
  <h3>Owner : Menace</h3>
  <p>Admin/Support : iHit</p>
</div>
<hr>
<?php
if ($user == null)
{
echo "Please enter a valid skype name\n";
}
else{
$ip = file_get_contents("http://api.com/api.php?user=$user"); //api here
echo "<CENTER><b> Result :<br> $ip</b><br></CENTER>";
echo "<CENTER>Take this ip down with our stresser ;)</CENTER>";
}
?>

</center>
<hr>
<div style="color:BA55D3">
<!---Donate Button here--->
<center><p>^ Donate ^</p><br></center>
</div>

<hr>
