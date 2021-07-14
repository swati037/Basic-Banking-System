<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Banking System</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://kit.fontawesome.com/8e3bbe9588.js" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
  <style>
    *{
	margin: 0;
	padding: 0;
	font-family: 'Charm', cursive;
	}
	.header{
		min-height: 100vh;
		width:  100%;
		background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/banner2.jpg);
		background-position: center ;
		background-size: cover;
		position: relative;
	}
	nav{
		display: flex;
		padding: 2% 6%;
		justify-content: space-between;
		align-items: center;	
	}
	.nav-links div{
		color: #f44336;
		font-size: 28px;
		color: #f44336;
		margin: 10px;
		margin-right: 30px;
	}
	.nav-links{
		flex: 1;
		text-align: right;
	}
	.nav-links ul li{
		list-style: none;
		display: inline-block;
		padding: 8px 12px;
		position: relative;
	}
	.nav-links ul li a{
		color: #fff;
		text-decoration: none;
		font-size: 13px;
	}
	.nav-links ul li::after{
		content:  '';
		width: 0%;
		height: 2px;
		background: #f44336;
		display: block;
		margin: auto;
		transition: 0.5s;
	}
	.nav-links ul li:hover::after{
		width: 100%;
	}
	.text-box{
		width: 90%;
		color: #fff;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		text-align: center;
	}
	.text-box h1{
		font-size: 60px;
	}
	.text-box p{
		margin: 10px 0 40px;
		font-size: 14px;
		color: #fff;
	}
	.first-btn{
		display: inline-block;
		text-decoration: none;
		color: #fff;
		border: 1px solid #fff;
		padding: 12px 34px;
		font-size: 13px;
		background: transparent;
		position: relative;
		cursor: pointer;
	}
	.first-btn:hover{
		border:  1px solid #f44336;
		background: #f44336;
		color: #fff;
		text-decoration-line: none;
		transition: 1s;
	}

	/*---footer--*/
	.footer{
		width: 100%;
		text-align: center;
		padding: 30px 0;
	}
	.footer h4{
		margin-bottom: 25px;
		margin-top: 20px;
		font-weight: 600;
	}
	.icons .second-btn{
		color: #626364;
		display: inline-block;
		border-radius: 1px;
		background-color: transparent;
		font-size: 1.3rem;
		text-decoration: none;
		width: 40px;
		height: 40px;
		margin-right: 0;
		margin-bottom: 15px;
	}
	.icons .second-btn:hover {
		color: white;
		background-color: #626364;
	}
	.icons .fa{
		display: flex;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 100%;
	}
</style>
</head>

<body>
<section class="header">
	<nav>
	  <a href="index.php"></a>
		<div class="nav-links" id="navLinks">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="./php/viewcustomer.php">VIEW CUSTOMERS</a></li>
			<li><a href="./php/transfer.php">TRANSFER MONEY</a></li>
			<li><a href="./php/transactionhistory.php">TRANSACTION</a></li>
		</ul>
		</div>
	</nav> 

	<div class="text-box">
		<h1>TSF Bank</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vulputate ut nunc et iaculis. Mauris sit amet aliquet tellus. <br>Nullam orci libero, faucibus at mattis quis, interdum at orci.</p>
		<a href="./php/transfer.php" class="first-btn">PERFORM TRANSACTION</a>
	</div>
</section>

<!---Footer--->
<section class="footer">
	<h1>About Us</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nisi tincidunt, auctor massa at, semper magna, ut turpis urna.<br> Molestie eu arcu sed, tincidunt aliquet leo.Vestibulum vehicula molestie ipsum feugiat rhoncus. </p>
	<div class="icons">
		<a href="" class="second-btn"><i class="fa fa-facebook"></i></a>
		<a href="" class="second-btn"><i class="fa fa-twitter"></i></a>
		<a href="" class="second-btn"><i class="fa fa-instagram"></i></a>
	</div>
</section>

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>