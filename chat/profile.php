<?php
include "db.php";
$id = $_GET['id'];

$query = "SELECT * from user WHERE  id = '$id' ";
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run, MYSQLI_BOTH)) {
	$name = $row['name'];
	$email = $row['email'];
	$country = $row['country'];
	$gender = $row['gender'];

}
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
        <br><br><br><br><br><br>
		<div class="row">
			<!--<h3  align="center"><font color="#E32F75">Chat System in PHP</font></h3>
				<hr color="#E32F75">-->
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading" align="center">
							<?php echo "Profile of ". $name ?>
						</div>
						<div class="panel-body" style="direction: rtl;">
								<label class="pull-right">اسم المستخدم</label>
								<input type="text" name="name" value="<?php echo $name ?>" class="form-control" readonly style="font-size: 14px;"><br>
								<label class="pull-right">البريد الالكتروني</label>
								<input type="text" name="email" value="<?php echo $email ?>" class="form-control" readonly style="font-size: 14px;"><br>
								<label class="pull-right">البلد </label>
								<input type="text" name="email" value="<?php echo $country ?>" class="form-control" readonly style="font-size: 14px;"><br>
								<label class="pull-right">الجنس</label>
								<input type="text" name="email" value="<?php echo $gender ?>" class="form-control" readonly style="font-size: 14px;"><br>
								<div class="panel-footer" align="center">
									<a href="index.php"><button class="btn btn-info ">رجوع</button></a>
								</div>
								
						</div>
						
					</div>
				</div>
				<div class="col-md-3"></div>
		</div>
	</div>

</body>
</html>
