<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href= "style.css">
	<title>My Account</title>

</head>
<body>


<?php include('templates/header.php') ?>


<!-- BANNER -->
<div>
	<div id="banner">
		<div>
			<p id="bannertitle" >Hussein Harajli</p>
			<p id="bannerdesc">Member since Feb. 2017</p>
		</div>

	</div>
	<div>
		<!-- <img src="../images/profile.png" class="pic3"> -->
		<i class="login_box_header material-icons pic3">account_circle</i>
	</div>
</div>
<!-- BANNER -->

	<!-- Top Nav (When Screen width is less than 768px) -->
	<div class="topNav d-block d-md-none">
			<select class="topNav-dropdown">
				<option value="Profile"> <li class="list tablinks" onclick="openCity(event, 'Group1')"><a href="#">Profile</a> </li> </option>
			    <option value="Account" class="list1 tablinks" onclick="openCity(event, 'Group2')"><a href="#">Account</a></option>
			    <option value="Support" class="list1 tablinks" onclick="openCity(event, 'Group3')">Support</option>
			</select>
	</div>
	<!-- Top Nav -->

<!-- Main Area -->
<div id="mainarea">

	<!-- LEft -->
	<div class="d-none d-md-block leftdesc desc">
		<ul class="myaccountlist2">
			<li class="list1 tablinks" onclick="openCity(event, 'Group1')"><a href="#Group1">Profile</a><span></span></li>
			<li class="list tablinks" onclick="openCity(event, 'Group2')"><a href="#Group2">Account</a><span></span></li>



<!-- 			<li class="list tablinks" onclick="openCity(event, 'London')"><a href="#">Preferences</a></li>
			<li class="list tablinks" onclick="openCity(event, 'London')"><a href="#">Purchases</a></li> -->


			<li class="list tablinks" onclick="openCity(event, 'Group3')"><a href="#Group3">Support</a><span></span></li>
		</ul>
	</div>
	<!-- LEft -->



	<!-- right -->

	<!-- First Group "Profie" -->
	<div class="col-lg-8 col-10 rightdesc desc desc2" id="Group1">
		<div>
			<h3 class="desc-title">
				Profile
			</h3>
			<hr>

			<!-- ONE ROW -->
			<div class="row">
				<div class="col-lg-3">
					<p class="left-label">Name</p>
				</div>
				<div class="col-lg-7 col-sm-10">
					<form class="">
						<input type="text" name="FirstName" placeholder="First Name" class="nameinput">
						<input type="text" name="LastName" placeholder="Last Name" class="nameinput">
					</form>
				</div>
			</div>
			<!-- ONE ROW -->

			<!--ROW 2 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Gender</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
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
				<div class="col-lg-3 ">
					<p class="left-label">Date of Birth</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="">
						<input type="Date" name="" >

					</form>
				</div>
			</div>
			<!--ROW 3 -->


			<!--ROW 4 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Location</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="">
						<input type="text" name="City" placeholder="City/Province" class="nameinput">
						<input type="text" name="Country" placeholder="Country" class="nameinput">
					</form>
				</div>
			</div>
			<!--ROW 4 -->

			<!--ROW 5 -->
			<div class="row">
				<div class="col-lg-3 ">
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="btn-r">
						<input type="submit" class="sub-button" value="Save" >
					</form>
				</div>
			</div>
			<!--ROW 5 -->

		</div>
	</div>
	<!-- First Group "Profie" -->



	<!-- Second Group "Account" -->
	<div class="col-lg-8 col-10 rightdesc desc desc2" id="Group2">
		<div>
			<h3 class="desc-title">
				Account
			</h3>
			<hr>

			<!-- ROW 1 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Email</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="">
						<div>
							<input type="email" name="email" placeholder="Email Address" class="nameinput">
							<input type="password" name="password" placeholder="Password Required" class="nameinput">
						<div class="btn-r">
							<input type="submit" class="sub-button2 save-email" value="Save" >
						</div>
						</div>

					</form>
				</div>
			</div>
			<!-- ROW 1 -->

			<!--ROW 2 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Password</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<p>
						<a href="#">Change Password</a>
					</p>
				</div>
			</div>
			<!--ROW 2 -->


			<!--ROW 3 -->
				<div class="row">
					<div class="col-lg-3 ">
						<p class="left-label">Credit Cards</p>
					</div>
					<div class="col-lg-7 col-sm-10">
						<p>Cards are Secure</p>
						<form id="add-card">
							<input type="submit" onclick="card(1)" class="sub-button2" id="add-card" value="Add New Card" >
						</form>
					</div>
				</div>
			<!--ROW 3 -->
			<!--ROW 3 Replaces previous row -->
				<div class="row" id="new-card">
					<div class="col-lg-3 ">
						<p class="left-label">New Card</p>
					</div>
					<div class="col-lg-7 col-sm-10">
						<form>
							<input class="ccard-name1" type="text" placeholder="First Name" >
							<input class="ccard-name2" type="text" placeholder="Last Name"  >
							<div>
								<input class="ccard-num" type="text" name="" placeholder="Card Number">
							</div>
							<div class="ccard-final-row">
								<input class="ccard-date" type="text" name="" placeholder="MM">
								<input class="ccard-date" type="text" name="" placeholder="YY">
								<input class="ccard-date" type="text" name="" placeholder="CCV">
							</div>
							<div class="btn-r">
								<input type="submit" class="sub-button2" name="" value="Save">
							</div>
						</form>
					</div>

				</div>
			<!--ROW 3 -->
		</div>
	</div>
	<!-- Second Group "Account" -->


	<!-- Third Group "Support" -->
	<div class="col-lg-8 col-10 rightdesc desc desc2" id="Group3">
		<div>
			<h3 class="desc-title">
				Support
			</h3>
			<hr>

			<!--ROW 1 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Name</p>
				</div>
				<div class="col-lg-7 col-sm-10">
					<form class="">
						<input type="text" name="Full Name" placeholder="First Name" class="supportinput">
					</form>
				</div>
			</div>
			<!--ROW 1 -->

			<!-- ROW 2 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Email</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="">
						<input type="email" name="email" placeholder="Email Address" class="supportinput">
					</form>
				</div>

			</div>
			<!-- ROW 2 -->




			<!--ROW 3 -->
			<div class="subject-issue row">
				<div class="col-lg-3 ">
					<p class="left-label">Subject</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="">
						<select class="support-dropdown">
							<option value="...">...</option>
						    <option value="account-issue">My Account</option>
						    <option value="order-issue">My Order</option>
						    <option value="Site-issue">Site Issue</option>
						    <option value="other-issue">Other</option>

						</select>
					</form>
				</div>

			</div>
			<!--ROW 3 -->

			<!--ROW 4 -->
			<div class="row">
				<div class="col-lg-3 ">
					<p class="left-label">Message</p>
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="">
						<textarea class="support-message" placeholder="Explain your Issue..."></textarea>
					</form>
				</div>

			</div>
			<!--ROW 4 -->

			<!--ROW 4 "Textarea under message title, and extends" -->
		<!-- 	<div class="row">
				<div class="col-3 ">
					<p class="left-label message-title2">Message</p>
				</div>
				<div class="col-9"></div>
				<div class="col-9 ">
					<form class="">
						<textarea class="support-message"></textarea>
					</form>
				</div>

			</div> -->
			<!--ROW 4 -->

			<!-- ROw 5 -->
			<div class="row">
				<div class="col-lg-3 ">
				</div>
				<div class="col-lg-7 col-sm-10 ">
					<form class="btn-r">
						<input type="submit" class="sub-button" value="Submit" >
					</form>
				</div>
			</div>
			<!-- ROw 5 -->


		</div>
	</div>
	<!-- Third Group "Support" -->


	<!-- right -->



</div>
<!-- Main Area -->

    <?php include('templates/footer.php') ?>






  <script type="text/javascript" src="tabs.js"></script>

</body>
</html>
