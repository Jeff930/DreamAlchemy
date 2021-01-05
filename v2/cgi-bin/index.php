<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Horoscope</title>
	<style type="text/css">
		body {
  background-image: url("./assets/images/original.gif");
  background-size:100%;
    background-repeat: repeat-y;
    background-attachment: fixed;
    height:100%;
    width:100%;
}
	</style>
</head>

<body>
<div class="container">
	<br>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 center-block">
			<h1 style="color: white;text-align: center;font-family: Courier">YOUR ASTROLOGY</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-md-8 col-lg-8 center-block">
			<h4 style="color: white;text-align: center;font-family: Courier;background: green">Discover Untold Secrets About Who You Really Are</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-md-10 col-lg-10 center-block">
			<h5 style="color: white;text-align: center;font-family: Courier">This SHOCKINGLY Accurate Astrology Reading From The East Will Reveal The 4 Major Obstacles In Your Life Blocking Your True Path</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<a href="#form1" id="formButton"><img class="img-responsive center-block d-block" style="max-width:50%;" src="./assets/images/astrology.png"></a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 center-block">
			<h2 style="color: white;text-align: center;font-family: Courier">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </h2>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 center-block">
			<p style="color: white;text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 center-block">
			<video width="600" style="display:block; margin: 0 auto;" controls>
	            <source src="./assets/images/mov_bbb.mp4" type="video/mp4">
	            <source src="./assets/images/mov_bbb.ogg" type="video/ogg">
	        </video>
        </div>
	</div> -->
	<br>
	<form method="post" action="./soulreading.php" id="form1">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 form-group center-block">
				<input type="text" class="form-control" name="name" id="fullname" placeholder="Enter your name">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 form-group center-block">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4 form-group">
						<select class="form-control">
							<option value="" disabled selected hidden>Month</option>
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 form-group">
						<select class="form-control">
							<option value="" disabled selected hidden>Day</option>
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
							<option value="5">05</option>
							<option value="6">06</option>
							<option value="7">07</option>
							<option value="8">08</option>
							<option value="9">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 form-group">
						<select class="form-control" name="year">
							<option value="" disabled selected hidden>Year</option>
							<option value="1920">1920</option>
							<option value="1921">1921</option>
							<option value="1922">1922</option>
							<option value="1923">1923</option>
							<option value="1924">1924</option>
							<option value="1925">1925</option>
							<option value="1926">1926</option>
							<option value="1927">1927</option>
							<option value="1928">1928</option>
							<option value="1929">1929</option>
							<option value="1930">1930</option>
							<option value="1931">1931</option>
							<option value="1932">1932</option>
							<option value="1933">1933</option>
							<option value="1934">1934</option>
							<option value="1935">1935</option>
							<option value="1936">1936</option>
							<option value="1937">1937</option>
							<option value="1938">1938</option>
							<option value="1939">1939</option>
							<option value="1940">1940</option>
							<option value="1941">1941</option>
							<option value="1942">1942</option>
							<option value="1943">1943</option>
							<option value="1944">1944</option>
							<option value="1945">1945</option>
							<option value="1946">1946</option>
							<option value="1947">1947</option>
							<option value="1948">1948</option>
							<option value="1949">1949</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1953">1953</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 form-group center-block">
				<button class="custom-btn btn-25" name="Submit"><span>Show me my Soul Reading</span></button>
			</div>
		</div>
	</form>
	<?php 
		if (isset($_POST['Submit'])) { 
		 $_SESSION['Name'] = $_POST['name'];
		 } 
		 ?>
	<br>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 center-block">
				<h2 style="color: white;text-align: center;font-family: Courier;text-transform: uppercase;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </h2>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 center-block">
				<ul class="list-group">
	  	    <li class="list-group-item" style="background: transparent;color:white"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Summary of sign
As a Taurus you are one of the most reliable signs in the zodiac. You make a good friend, a business partner, and a loyal romantic partner. </li>
	  	    <li class="list-group-item" style="background: transparent;color:white"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Advantages to using sign in synchronicity with law of attraction
As a Taurus, your biggest advantage when it comes to manifesting your desires is persistence. </li>
	  	    <li class="list-group-item" style="background: transparent;color:white"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> The disadvantages you may face (manifestation blockages) 
“All that glitters isn’t gold".</li>
	  	</ul>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 center-block">
				<h2 style="color: white;text-align: center;font-family: Courier">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </h2>
			</div>
		</div>
		<br>
		<br>
		<footer>
			<div class="col-sm-6 col-md-6 col-lg-6 center-block" id="footer">
				<a href="#">Terms</a>&nbsp;<span style="color: white">|</span>&nbsp;<a href="#">Privacy</a>&nbsp;<span style="color: white">|</span>&nbsp;<a href="#">Disclamer</a><span style="color: white">&nbsp;|&nbsp;</span><a href="#">Contact</a>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-10 col-md-10 col-lg-10 center-block">
					<p style="color: white;text-align: center;">Copyright © 2020 Dream Alchemy</p>
				</div>
			</div>
			<br>
		</footer>
</div>

<script src="./assets/js/jquery-3.5.1.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/custom.js"></script>
</body>
</html>