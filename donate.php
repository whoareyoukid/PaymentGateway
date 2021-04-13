<html>
<head>
	<style>
		.topnav {
		  overflow: hidden;
		  background-color: black;
		  //position: fixed;
		}

		.topnav a {
		  float: left;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}
		
		.topnav a.active {
		  background-color: rgb(238, 235, 240);
		  color: white;
		}
		
		#cont {
			margin-top: 200px;
			margin-left: 500px;
			font-size: 20px;
		}
	</style>
</head>

<body>
	<div class="topnav">
	  <a href="index.html">Home</a>
	  <a class="active" href="donate.php">Donate</a>
	</div>
	<div id="cont">
		<p>Proceed with Stripe <input type="button" onclick="location.href='donate_stripe.php'", value="Click here">
		<p>Proceed with PayU <input type="button" onclick="location.href='https://pmny.in/bIrKfDXFD8Pa'", value="Click here"> 
		<p>Proceed with Instamojo <input type="button" onclick="location.href='https://test.instamojo.com/@rosh17cs'", value="Click here">
	</div>
</body>
</html>