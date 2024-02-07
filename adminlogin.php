<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body, html {
			height: 100%;
			margin: 0;
			font-family: 'Oxygen', sans-serif;
		}

		#myVideo {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			z-index: -1;
		}

		.header {
			text-align: center;
			padding: 100px 0;
			color: #fff;
		}

		.header h1 {
			font-size: 36px;
			color: white;
		}

		.header p {
			font-size: 18px;
		}

		.main-container {
			position: relative;
			z-index: 1;
			padding: 10px;
			max-width: 500px;
			margin: auto;
			margin-top: 10px;
		}

.main{
		margin-top: 10px;
	}

#myVideo {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}
	hr{
		width: 20%;
		color: #fff;
	}

	.form-group{
		margin-bottom: 15px;
	}

	label{
		margin-bottom: 15px;
	}

	input,
	input::-webkit-input-placeholder {
		font-size: 11px;
		padding-top: 3px;
	}

	.main-login{
		background-color: #fff;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

	}

	.main-center{
		margin-top: 30px;
		margin: 0 auto;
		max-width: 330px;
		padding: 40px 40px;

	}

	.login-button{
		margin-top: 5px;
	}

	.login-register{
		font-size: 11px;
		text-align: center;
	}
	h1{
		color: cyan;
	}

	</style>
  
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="uthaoo.mp4" type="video/mp4">
  
</video>

<div class="header">
  <h1>UTHAOO</h1>
  <p>Your Journey to Change, On-Demand.</p>
  
</div>
	<div class="main-container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1> Admin Login</h1>
	               		<hr/>
	               	</div>
	            </div> 
				
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="adminresponse.php">
					
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
							<button type="submit" class="btn btn-success btn-lg btn-block login-button">Log In</button>
						</div>
					</form>
				</div>
			</div>
		</div>

</body>
</html>
