<?php 
include 'db.php';
include 'action.php';
session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		session_destroy();
		header('location: login.php?error=Login to access chat.');
		}

 ?>
<!DOCTYPE html> 
<html>
	<head>
		<title>قسم الدعم التقني</title>
	<!-- <script type="text/javascript" src="jquery-3.1.1.min.js"></script> -->
	    <link rel="stylesheet" type="text/css" href="css/ScrollBar.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
	<style type="text/css">
		hr{
			height: 2px;
		}
		.btn{
			height: 24px;
			line-height: 12px;
		}

		
	</style>
	</head>
	
<body style="background-color: #F0EEEE">
<br><br>
<div class="container">
    <h3  align="center">قسم الدعم الفني .. أهلاً بكم</h3>
<br><br>
	<div class="row">

		<div class="col-sm-3">
			<div class="panel panel-success">
				<div class="panel-heading" align="center">الأعضاء المتصلين حالياً</div><br>
				<div class="panel-body">
					<div id="Userlog"> 
						<!-- <a href="logout.php" style="float: right;" class="btn btn-danger btn-sm">Logout</a> --></div>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-success">
				<div class="panel-heading" align="center">غرفة الدردشة</div><br>
				<div class="panel-body" style="max-height: 450px; overflow-y: scroll;" class="scrollbar" id="style-2">
					<div id="show"></div>

				</div>
				<div class="panel-footer" id="footer">
					<div class="row">
						<form >
						<input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name'] ?>"  class="form-control" >
						<div class="col-sm-10"><input type="text" name="msg" id="msg"  class="form-control" ></div>
						<div class="col-sm-2" style="padding-left: 35px">
							<input type="reset" name="send" id="send" value="أرسل" class="btn btn-primary " >
						</form>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

</body>
</html>

<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#Userlog').load('UserLog.php')
			}, 1000);
		});




	</script>