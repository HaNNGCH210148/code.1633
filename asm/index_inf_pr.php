<!DOCTYPE html>
<html>
<head>
	<title>Minh Ha</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		.container img{
			width: 1130px;
			height: 200px;
			margin-bottom: 5px;
		}
		.container-nav{
			margin-left: 500px;
		}
		.header{
			background-color: #000066;
		}
		.header a{
			color: white;
			text-transform: uppercase; 
			font-size: 20px;
		}
		.header ul{
			padding: 0;
			margin: 0;
		}
		.nav li:hover{
			background-color: #D1D7D7;
		}
		.navbar{
			margin: 20px 0;
			padding: 0;
			width: 100%;
		}
		.navbar ul{
			width: 100%;
			text-align: center;
			background-color: white;
			font-weight: bold;
		}
		nav a:hover{
			background-color: #003399;
		}
		.container-ad{
			background-color: black;
		}
		.ad{
			width: 100%;
			border: 2pxa solid black;
			text-align: center;
			line-height: 200px;
			margin: 0;
			overflow: auto;
		}
		.product img{
			width: 100%;
			height: 200px;
		}
		.product{
			text-align: center;		
		}
		.item{
			margin: 5px 0;
			text-align: center;
			background-color: white;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		}
		.item img{
			width: 100%;
		}
		.ad img{
			width: 100%;
			height: 200px;
		}

	</style>
</head>
<body>
</div>
	<div class="container-fluid">
		<div class="row header">
			<?php
			include_once("web_header.php");
			?>
		</div>		
		<div class="row">
			<div class="left col-lg-3">
				<?php
				include_once("web_left.php");
				?>		
			</div>
			<div class="right col-lg-9">	
				<div class="row">
					<div class="col-lg-8">		
				<div class="row main">
                    <?php
                    include_once("inf_pr.php");
                    ?>
				</div>
				</div>
					<div class="col-lg-4">		
						<?php
						include_once("web_ad.php");
						?>
					</div>
			</div>
			</div>
			</div>
		</div>
		<div class="footer">
			<?php
			include_once("footer.php");
			?>
		</div>
	</div>
</body>	
</html>