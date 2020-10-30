<?php
include('connection.php');
if(isset($_REQUEST['rsignin']))
{
    $remail = $_POST['remail'];
	$rpassword  = $_POST['rpassword'];
	$sql = "SELECT remail,rpassword FROM login WHERE remail = '".$remail."' AND rpassword = '".$rpassword."' ";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) 
	{
		echo "<script>location.href='profile.php';</script>";
		exit;
	}	
	else
	{
		echo "Failed";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style type="text/css">
		input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 60%;
}
button {
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 20px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
}
	</style>
</head>
<body>
<?php
include('navbar.php');
?>
<style>
            body{
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #2b5876 0%, #990099 100%);


  background-size: cover; 
    background-position: center;
    font-family: sans-serif;
}

.loginbox{

    width: 380px;
    height: 450px;
    border-radius: 20px;
    background: linear-gradient(to left, #2b5876 0%, #990099 100%);

    align-content: center;
    color: #fff;
    top: 25%;
    left: 37%;
    position: absolute;
    transform: translate(-50,-50);
    box-sizing: border-box;
    padding: 70px 35px;

}

h1{
text-decoration: underline;s
    margin: -10px;
    padding: 1px;
    text-align: center;
    font-size: 28px;
}

.loginbox label{

    margin: 1px;
    padding: -2px;
    font-weight: bold;

}

.loginbox input{
    width: 100%;
    margin-bottom: 15px;
}
.loginbox input[ type="text"], [ type="password"]{

border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 40px;
color: #fff;
font-size: 16px;
}

.loginbox input[ type="submit" ]
{
    border: none;
    outline: none;
    height: 40px;
    background: green;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[ type="submit" ]:hover{
    cursor: pointer;
    background: red;
    color: white;
}
.ghost {
    background-color: transparent;
    border-bottom: 1px solid #fff;
    color: #fff;

 font-size: 15px;
}
        </style>


        <div class="loginbox">
            <h1>Login Here</h1>
            <form action="" method="POST">
                <label>Username</label><br>
                <input type="text" name="remail" placeholder="Enter Username" required><br>
                <label>Password</label> <br>
                <input type="Password" name="rpassword" placeholder="enter Password" required><br>
                <input type="submit" name="rsignin" value="Login"><br>
                <p>Don't have account?  &nbsp; <button class="ghost" id="signUp"  onclick="window.location.href='register.php';">Sign Up</button></p>
            </form>
            
        </div>
    
    
</body>
</html>