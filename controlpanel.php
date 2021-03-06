<?php
    session_start();
?>

<html>
    <head>
        <!-- Meta Tag -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap / CSS / Fonts -->
        <link href="css/main-style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- SEO
        <meta name="description" content="">
        <meta name="url" content="">
        <meta name="copyright" content="">
        <meta name="robots" content="index,follow">
        <meta name="keywords" content=""> -->

        <!-- Google Analytics Tracking Code -->
        <!-- *** Code *** -->

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">

        <!-- Title -->
        <title>HomeHub - Control Panel</title>
    </head>
    <body>

		<!-- Non logged in redirect -->
		<?php
			if ( !(isset($_SESSION['user_id'])) )
			{
				header("Location: login.php");
			}
		?>

		<div class="row">
			<div class="col-md-12">
				<h1 id="title-top">HomeHub - Control Panel</h1>
			</div>
		</div>

		<!-- Navbar -->
		<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Overview</a>
				</li>
				<li>
					<a href="appliances.php">Appliances</a>
				</li>
				<li>
					<a href="analytics.php">Analytics</a>
				</li>
				<li>
					<a href="profile.php">Profile</a>
				</li>
				<?php
					if (isset($_SESSION['user_id']))
					{
						if ($_SESSION['user_id'] == 777)
						{
							echo "<li><a href='controlpanel.php'>Control Panel</a></li>";
						}
					}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<?php
							if (isset($_SESSION['user_id']))
							{
								echo "Welcome " . $_SESSION['name'];
							}
							else
							{
								echo "You are not logged in.";
							}
						?>
					</a>
				</li>
				<li>
					<a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
				<li>
					<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
				</li>
			</ul>
		</nav>

		<!-- Panels -->
		<div class="wrapper">
			<div class="container">
				<h1>HomeHub User Register</h1>
				<div class="row">
					<img src="images/logos/main-logo.png" alt="Logo" >	
				</div>
				<div class="row" style="margin-top: 5px">
					<!-- <h3>No user found</h3> -->
				</div>
				<div class="row">
					<form action="register_db.php" method="POST" class="form-horizontal">
						<div class="form-group">
							<input type="text" class="form-control" id="usr" name="usr" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" id="email" placeholder="E-Mail">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
						<div class="form-group" style="margin-top: 3px">
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</form>
				</div>
				<div class="row" style="margin-top: 0px", "margin-bottom: 10px">
					<button class="bttn-unite bttn-md bttn-success" style="margin-top: 10px" onclick="window.location.href='index.php'">Home</button>
					<p style="margin-top: 10px"> Copyright © HomeHub Project 2017 </p>
				</div>
			</div>
		</div>
        
        <p>
            HomeHub is a centralized control panel with analytics support for every smart network-connected home appliance.
            It gives the ablity to control and manage every connected appliance, from the washing machine to the central alarm
            with ease. Change.
        </p>
    </body>
</html>