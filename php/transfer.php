<!DOCTYPE html>
<html>
<head>
    <title>TSF Bank </title>
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
	.text-center{
		width: 80%;
	margin: auto;
	padding-top: 80px;
	padding-bottom: 50px;	
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
	.red-btn{
	border: 1px solid #f44336;
	background: transparent;
	color: #f44336;
	}
	.red-btn:hover{
		color: #fff;
	}
	
	/*---sub-header--*/
	.sub-header{
		height: 50vh;
		width: 100%;
		background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/history.png);
		background-position: center;
		background-size: cover;
		text-align: center;
		color: #fff;
	}
	.sub-header h1{
		margin-top: 100px;
	}
	.container{
	width: 80%;
	margin: auto;
	padding-top: 80px;
	padding-bottom: 50px;
	color: #000;
	}
	.text1{
	width: 80%;
	margin: auto;
	padding-top: 80px;
	padding-bottom: 50px;
}


	/*---footer--*/
	.footer{
		width: 100%;
		text-align: center;
		padding: 30px 0;
		color: #000;
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
    <?php
   
    ?>
     <section class="sub-header">
	<nav>
	  <a href="index.php"></a>
		<div class="nav-links" id="navLinks">
			<ul>
				<li><a href="../index.php">HOME</a></li>
				<li><a href="viewcustomer.php">VIEW CUSTOMERS</a></li>
				<li><a href="transfer.php">TRANSFER MONEY</a></li>
				<li><a href="transactionhistory.php">TRANSACTION</a></li>
			</ul>
		</div>
	</nav> 
    <h1>Payment Transfer</h1>

    <?php
        $conn = mysqli_connect("localhost", "root", "12345678", "banking");

        if (!$conn) {
        die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
        }

    if (isset($_POST['submit'])) {
        $sender = $_POST['sender'];
        $reciever = $_POST['reciever'];
        $amount = $_POST['amount'];

        $sql = "SELECT * from clients where c_name='$sender'";
        $query = mysqli_query($conn, $sql);
        $sql1 = mysqli_fetch_array($query); // returns array from which the amount is to be transferred.

        // check input of negative value by user
        if (($amount) < 0) {
            echo '<script>';
            echo ' alert("Please enter correct amount.")';  // showing an alert box.
            echo '</script>';
        }
        // constraint to check zero values
        else if ($amount == 0) {

            echo "<script>";
            echo "alert('Zero value cannot be transferred')";
            echo "</script>";
        } 
        // check insufficient balance.
        else if ($amount > $sql1['c_balance']) {
            echo '<script>';
            echo ' alert("Insufficient Balance")';  // showing an alert box.
            echo '</script>';
        }
        else {
        $sql = "SELECT * from clients where c_name='$reciever'";
        $query = mysqli_query($conn, $sql);
        $sql2 = mysqli_fetch_array($query);

        $sender = $sql1['c_name'];
        $receiver = $sql2['c_name'];

        // deducting amount from sender's account
        $newbalance = $sql1['c_balance'] - $amount;
        $sql = "UPDATE clients set c_balance=$newbalance where c_name='$sender'";
        mysqli_query($conn, $sql);

        // adding amount to reciever's account
        $newbalance = $sql2['c_balance'] + $amount;
        $sql = "UPDATE clients set c_balance=$newbalance where c_name='$reciever'";
        mysqli_query($conn, $sql);

        

        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful !!');
                                     window.location='transactionhistory.php';
                           </script>";
        }
        $newbalance = 0;
        $amount = 0;

        mysqli_close($db); // Close connection
    }
}
?>

        <form method="POST">
		<div class="text1">
		<div class="text-center">
            <label for="sender"> Tranfer:</label>
            <input type="text" name="sender" placeholder="sender" Required>
			</div>
            <div class="text-center">
            	<label for="reciever">Tranfer to:</label>
           		<input type="text" name="reciever" placeholder="reciever" Required>
		   </div>
		   <div class="text-center">
           		<label for="amount">Amount:</label>
            	<input type="number" class="form-control" name="amount" id="amount" required>
			</div>
            <div class="text-center">
                <button class="first-btn red-btn" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
		</div>		
        </form>    
    

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

