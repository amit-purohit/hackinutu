<?php
include 'hhh.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fees Management</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="mdk-header-layout__content">

			<div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
				<div class="mdk-drawer-layout__content page ">
					<div class="container-fluid page__container">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<h4>Informing to Pay</h4>

									<textarea  name="informsms" class="form-control">Pls pay your fees immediately and your pending amount is ₹<?php $fees_pend=$_GET["pend"]; echo $fees_pend; ?> Ignore the message if already paid 
									</textarea><br>
									<input class="form-control btn-primary" type="submit" name="send" value="SEND">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>

<?php

error_reporting(1);
include 'C:/wamp64/www/mystudysite/connection.php'; 

if(isset($_POST["send"]))
{

	$to=$_GET[email];
	$subject="Pay Fees";
	$text=$_POST['informsms'];
	$m=mail($to, $subject, $text);
	if($m)
	{
		echo "mail sended";
	}
	else
	{
		echo "mail not able to be send";
	}
	

}

?>