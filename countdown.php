<html>
<body>
<form method='POST' action=''>
<h2>Countdown</h2>
<label>Enter the Message: </label><input type='text' name='greet' required><br/><br/>
<label>Enter the Seconds : </label><input type='text' name='countdown' required><br/><br/>
<input type='submit' value='submit'>
</form>
<div id='countdowndisplay'></div>
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['greet'])&&isset($_POST['countdown']))
{
$_SESSION['greet']=$_POST['greet'];
$_SESSION['countdown']=intval($_POST['countdown']);
if(isset($_SESSION['greet']))
{
echo '<h2>'.$_SESSION['greet'].'</h2>';
}
echo '<script>
var countdown='.$_SESSION["countdown"].'
var countdowndisplay=setInterval(function(){
if(countdown>0)
{
document.getElementById("countdowndisplay").textContent="time remaining "+countdown+" seconds";
countdown--;
}
else
{
clearInterval(countdowndisplay);
alert("session expired. try again");
location.href="";
}
},1000);
</script>';
}
?>
</body>
</html>