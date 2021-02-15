<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>قسم الدعم التقني</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
	<style type="text/css">
		hr{
			height: 2px;
		}
	</style>

</head>
<body style="background-color: #F0EEEE">

	<div class="container">
		<div class="row" style="margin-top: 50px">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<h3  align="center"><p>قسم الدعم الفني  <br></p></h3>
				<hr>
				<form method="post" action="">
					<div class="panel panel-success">
						<div class="panel-heading" align="center"> تسجيل الدخول </div><br>
						<div class="panel-body">
							<div class="form-group" style="direction: rtl">
									<input type="text" name="email" placeholder="أدخل الإيميل" class="form-control">
							</div>
							<div class="form-group" style="direction: rtl">
									<input type="password" name="password" placeholder="أدخل كلمة السر" class="form-control">
							</div>
							<div class="form-group" align="center">
								<button type="submit" class="btn btn-info" name="Submit"> تسجيل دخول
                               </button>
							</div>

						</div>
						<div class="panel-footer">
							<?php
            if (isset($_GET['error'])) 
							{
		    echo "<font color='red'><p align='center'><b>".@$_GET['error']. "</b></p>";
							} 
			if (isset($_GET['logout'])) 
							{
		    echo "<font color='green'> <p align='center'><b>".@$_GET['logout']. "</b></p>";
							} 

			if (isset($_POST['Submit'])) {
			    
			    $email = $_POST['email'];
			    $password = $_POST['password'];

				$result = mysqli_query($conn , "SELECT * from user where email='$email' and password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['email'] = $row['email'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					}
					if(mysqli_num_rows($result)>0){			
						$query = mysqli_query($conn, "UPDATE user SET status = '1' WHERE email = '$email' ");
						header('location: index.php');
						}
					else {
						echo "<font color='red'><p align='center'>إيميل أو كلمة مرور غير صحيحة</p>";
						}	
                          }

                          ?>
						</div>
						<div class="panel-footer">
							<div align="center" style="color: black">
								إذا لم يكن لديك حساب <a href="register.php"><font color="teal"><b>أنشئ حساباً </b></font></a>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

</body>
</html>
