<?php 
include('connection.php');
if(isset($_POST['rsignup']))
{
	
		
		$rname = $_POST['rname'];
    $remail = $_POST['remail'];
		$rpassword  = $_POST['rpassword'];
		$sql = "INSERT INTO login(rname,remail,rpassword) VALUES('$rname','$remail','$rpassword')";
		if($conn->query($sql)==TRUE)
		{
		echo "<script>location.href='profile.php';</script>";
    exit; 
		}
		else
		{
			echo "failed";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Create an account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="register.css"/>
<body>
<style >
  body
  {
    background: linear-gradient(to right, #2b5876 , #990099 );
  }
</style>
  <h2  style="margin-top: 50px; color:white;" id="contact">Create an account</h2> 
    <form action="" method="POST">
      <div class="form">
        <input type="text"  required style="" name="rname" placeholder="Name" >
      </div>
      <div class="form">
        <input type="email" name="remail" required placeholder="E-mail">
      </div>
      <div class="form">
        <input type="password" name="rpassword"  required placeholder="Password" id="rpassword">
       </div>
        <div class="form">
          <b><label class="checkbox-inline" style="color:white;"><input type="checkbox" required> I accept all the 
          <a style="color:red;" href="#">T&C*</a></label></b>
        </div>
        <div class="form">
          <button type="submit" name="rsignup">Sign Up</button>
        </div>
      </form>
</body>
</html>
  