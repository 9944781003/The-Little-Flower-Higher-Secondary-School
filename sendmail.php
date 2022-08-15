

<?php


if(isset($_POST["Qualification"],$_POST["Name"],$_POST["Age"],$_POST["Year"])){



				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: paul@touchskytechnologies.com' . "\r\n";
				$headers .= 'Cc: mailtoarull@gmail.com' . "\r\n";

				$message="<html>
	<head>
	</head>
	<link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
	<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>

	<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-3 col-sm-6'>

					<div class='card hovercard' style='margin: 10px 0 20px 0; border-top-width: 0; border-bottom-width: 2px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; padding-top: 0; overflow: hidden; text-align: center; background-color: rgba(214, 224, 226, 0.2);'>
						<div class='cardheader' style='background-image: url('http://lfhss-salem.com/img/banner_alumni.jpg'); background-size: cover; height: 135px;'>

						</div>
						<div class='avatar' style='position: relative; top: -50px; margin-bottom: -50px;'>
							<img alt='' src='http://lfhss-salem.com/img/alumni.png' style='width: 100px; height: 100px; max-width: 100px; max-height: 100px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; border: 5px solid rgba(255,255,255,0.5);' width='100' height='100'>
						</div>
						<div class='info' style='padding: 4px 8px 10px;'>
							<div class='title' style='margin-bottom: 4px; font-size: 24px; line-height: 1; color: #262626; vertical-align: middle;'>
								<a target='_blank' href='#'>".$_POST['Name']." </a>
							</div>

							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Age</strong> <br>
										".$_POST['Age']."
							</div>

							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Academic Year</strong> <br>
										".$_POST['Year']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Email</strong> <br>
										".$_POST['Email']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Phone</strong> <br>
										".$_POST['Mobile']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Address</strong> <br>
										".$_POST['Address']."
							</div>

							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>City</strong> <br>
										".$_POST['City']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>State</strong> <br>
										".$_POST['State']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Country</strong> <br>
										".$_POST['Country']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Qualification</strong> <br>
										".$_POST['Qualification']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Occupation</strong> <br>
										".$_POST['Occupation']."
							</div>

							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Work Place</strong> <br>
										".$_POST['Work']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Marital Status</strong> <br>
										".$_POST['MaritalStatus']."
							</div>
						</div>



						<div class='bottom' style='padding: 0 20px; margin-bottom: 17px;'>
							<a class='btn btn-primary btn-twitter btn-sm' href='https://twitter.com/webmaniac' style='border-radius: 50%; width: 32px; height: 32px; line-height: 18px;'>
								<i class='fa fa-twitter'></i>
							</a>
							<a class='btn btn-danger btn-sm' rel='publisher' href='https://plus.google.com/+ahmshahnuralam' style='border-radius: 50%; width: 32px; height: 32px; line-height: 18px;'>
								<i class='fa fa-google-plus'></i>
							</a>
							<a class='btn btn-primary btn-sm' rel='publisher' href='https://plus.google.com/shahnuralam' style='border-radius: 50%; width: 32px; height: 32px; line-height: 18px;'>
								<i class='fa fa-facebook'></i>
							</a>
							<a class='btn btn-warning btn-sm' rel='publisher' href='https://plus.google.com/shahnuralam' style='border-radius: 50%; width: 32px; height: 32px; line-height: 18px;'>
								<i class='fa fa-behance'></i>
							</a>
						</div>
					</div>

				</div>

			</div>
	</div>
</html>";












				  if(mail('alumnilfhss@gmail.com','New Alumni Details',$message,$headers)){


				echo "Thank you for submitting your details. Your Details have been registered with us. we will call you if any more details required"  ;
				  }








}




?>