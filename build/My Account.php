<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/My Account.css">
	<link rel="stylesheet" type="text/css" href="css/header&footer.css">
	<title>My Account</title>
</head>
<body>

<?php include('templates/header.php') ?>

<!-- BANNER -->
<div>
	<div id="banner">
		<div>
			<p id="bannertitle">Hussein Harajli</p>
			<p id="bannerdesc">Member since Feb. 2017</p>
		</div>
	</div>
	<img src="stuff/profile.png" class="pic3">
</div>
<!-- BANNER -->



<!-- Main Area -->
<div id="mainarea">
	<!-- LEft -->
	<div class="col-2 leftdesc desc">
		<ul class="myaccountlist2">
			<li class="list1 tablinks" onclick="openCity(event, 'Group1')"><a href="#">Profile</a><span></span></li>
			<li class="list tablinks" onclick="openCity(event, 'Group2')"><a href="#">Account</a><span></span></li>
			<li class="list tablinks" onclick="openCity(event, 'London')"><a href="#">Preferences</a></li>
			<li class="list tablinks" onclick="openCity(event, 'London')"><a href="#">Purchases</a></li>
			<li class="list tablinks" onclick="openCity(event, 'London')"><a href="#">Support</a></li>
		</ul>
	</div>
	<!-- LEft -->

	<!-- right -->
	<div class="col-8 rightdesc desc desc2" id="Group1">
		<div>
			<h3 class="desc-title">
				Profile
			</h3>
			<hr>

			<!-- ONE ROW -->
			<div class="row">
				<div class="col-3 ">
					<p class="left-label">Name</p>
				</div>
				<div class="col-6 ">
					<form class="">
						<input type="text" name="FirstName" placeholder="First Name" class="nameinput">
						<input type="text" name="FirstName" placeholder="Last Name" class="nameinput">
					</form>
				</div>
			</div>
			<!-- ONE ROW -->

			<!--ROW 2 -->
			<div class="row">
				<div class="col-3 ">
					<p class="left-label">Gender</p>
				</div>
				<div class="col-6 ">
					<form class="">
						<input type="radio" name="gender" id="male">
						<label for="male">Male</label>
						<input type="radio" name="gender" class="" id="female">
						<label for="male">Female</label>
					</form>
				</div>
			</div>
			<!--ROW 2 -->


			<!--ROW 3 -->
			<div class="row">
				<div class="col-3 ">
					<p class="left-label">Date of Birth</p>
				</div>
				<div class="col-6 ">
					<form class="">
						<input type="Date" name="" >

					</form>
				</div>
			</div>
			<!--ROW 3 -->


			<!--ROW 4 -->
			<div class="row">
				<div class="col-3 ">
					<p class="left-label">Location</p>
				</div>
				<div class="col-6 ">
					<form class="">
						<input type="text" name="City" placeholder="City/Province" class="nameinput">
						<input type="text" name="Country" placeholder="Country" class="nameinput">
					</form>
				</div>
			</div>
			<!--ROW 4 -->

			<!--ROW 5 -->
			<div class="row">
				<div class="col-3 ">
				</div>
				<div class="col-6 ">
					<form class="">
						<input type="submit" class="sub-button" value="Save" >
					</form>
				</div>
			</div>
			<!--ROW 5 -->


		</div>
	</div>



	<!-- Second Group -->
	<div class="col-8 rightdesc desc desc2" id="Group2">
		<div>
			<h3 class="desc-title">
				Account
			</h3>
			<hr>

			<!-- ONE ROW -->
			<div class="row">
				<div class="col-3 ">
					<p class="left-label">Email</p>
				</div>
				<div class="col-6 ">
					<form class="">
						<input type="email" name="email" placeholder="Email Address" class="nameinput">
						<input type="password" name="password" placeholder="Enter Password to Change Email" class="nameinput">
					</form>
				</div>
				<div class="col-3">
					<form class="">
						<input type="submit" class="sub-button save-email" value="Save" >
					</form>

				</div>
			</div>
			<!-- ONE ROW -->

			<!--ROW 2 -->
			<div class="row">
				<div class="col-3 ">
					<p class="left-label">Password</p>
				</div>
				<div class="col-6 ">
					<p>
						<a href="#">Change Password</a>
					</p>
				</div>
			</div>
			<!--ROW 2 -->


			<!--ROW 3 -->
			<div>
				<div class="row">
					<div class="col-3 ">
						<p class="left-label">Credit Cards</p>
					</div>
					<div class="col-6 ">
						<p>Cards are Secure</p>
						<form id="add-card">
							<input type="submit" class="sub-button add-card" value="Add New Card">
						</form>
					</div>
				</div>
			<!--ROW 3 -->





		</div>
	</div>
	<!-- right -->



</div>
<!-- Main Area -->




  <script type="text/javascript" src="js/tabs.js"></script>

</body>
</html>
