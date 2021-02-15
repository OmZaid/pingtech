<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>قسم الدعم التقني</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
	<style type="text/css">
		hr{
			height: 2px;
		}
	</style>
</head>
<body style="background-color: #F0EEEE">
	<div class="container" style="font-size: 14px;">
        <br><br>
        <h1 class="text-center" style="padding-bottom: 20px;"> قسم الدعم الفني </h1>
		<div class="row col-md-12">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-primary" >
						<div class="panel-heading" align="center">
                            إنشاء حساب
						</div>
						<div class="panel-body">
							<form method="POST" action="register.php" style="direction: rtl">
								<label class="pull-right">اسم المستخدم</label><br>
								<input type="text" name="name" placeholder="اسم المستخدم " class="form-control" style="font-size: 14px;"><br>
								<label class="pull-right">البريد الالكتروني</label><br>
								<input type="text" name="email" placeholder="البريد الالكتروني" class="form-control" style="font-size: 14px;"><br>
								<label class="pull-right">المدينة</label><br>
								<select name="country" class="form-control" style="font-size: 14px;">
									<option disabled selected >اختر المدينة</option>
									<option value="Pakistan">مرسين</option>
									<option value="India"> هاتاي</option>
									<option value="Australia">اسطنبول</option>
									<option value="England">أنقرة</option>
								</select><br>
								<label class="pull-right">الجنس</label><br>
								<span style="margin-left: 40px; margin-right: 5px"> ذكر </span> <input type="radio" name="gender" value="male"  style="margin-right: 15px;">
								أنثى <input type="radio" name="gender" value="female" style="margin-left: 5px;"><br><br>
								<label class="pull-right">كلمة السر</label><br>
								<input type="password" name="password" placeholder="كلمة السر" class="form-control" style="font-size: 14px;">
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-info" name="Submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;تسجيل </button>
							<button type="reset" class="btn btn-danger" style="float: right;"> <span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;مسح</button>
						</div>
						<div class="panel-footer">
							<div align="center">
								هل لديك حساب؟ <a href="login.php"><font color="teal"><b>سجل دخولك هنا</b></font></a>
							</div>
						</div>
					  </form>
					</div>
				</div>
				<div class="col-md-3"></div>
		</div>
	</div>

</body>
</html>

<?php

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	$query = "INSERT INTO user SET name='$name', email='$email', country='$country', gender='$gender', password='$password', status='0' ";
	$run = mysqli_query($con, $query);
	if ($run) {
		header('location: login.php');
	}
	else{
		echo "Error Occured";
	}
}