<?php
session_start();
if (isset($_SESSION["unique_id"])) {
	header("location: user.php");
}

?>


<?php 
include_once("php/header.php");
?>
<body>

	<div class="wrapper">
		<section class="form signup">
			<header>Realtime Chat App</header>
			<form action="#" enctype="multipart/form-data">
				<div class="error_txt"></div>
				<div class="name_details">
					<div class="field input">
						<label>First Name</label>
						<input type="text" name="fname" placeholder="Enter your first name" autocomplete required>
					</div>

					<div class="field input">
						<label>Last Name</label>
						<input type="text" name="lname" placeholder="Enter your Last name" autocomplete required>
					</div>
				</div>
					<div class="field input">
						<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter your Email Address" autocomplete required>
					</div>

					<div class="field input">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter your Password" autocomplete required>
						<i class="fa-solid fa-eye"></i>
					</div>

					<div class="field image">
						<label>Select Images</label>
						<input type="file" name="image" autocomplete required>
					</div>
					<div class="field btn">
						<input type="submit" name="submit" value="Continue to chat">
					</div>
			</form>
			<div class="link">Already signed up? <a href="login.php" class="btn">login now</a></div>
		</section>
	</div>


	<script type="text/javascript" src="javascript/pass-show-hide.js"></script>
	<script type="text/javascript" src="javascript/signup.js"></script>

</body>
</html>