	<?php
	include "header.php"
	?>
	<!-- Forms-1 -->
	<div class="outer-w3-agile col-xl mt-3 mr-xl-3">
		<h4 class="tittle-w3-agileits mb-4">Profile</h4>

		<?php

		$submit = (isset($_POST['submit']) ? $_POST['submit'] : null);
		if ($submit != null) {
			$name = (isset($_POST['name']) ? $_POST['name'] : null);
			$phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
			$age = (isset($_POST['age']) ? $_POST['age'] : null);
			$weight = (isset($_POST['weight']) ? $_POST['weight'] : null);
			$height = (isset($_POST['height']) ? $_POST['height'] : null);

			$query = "update user set name='$name',phone='$phone',age='$age',weight='$weight',height='$height' where id=$userId";
			$result = mysqli_query($db, $query);
			echo "<p><label style='color:blue'>UPDATED</label></p><br>";
			
			
		}

		$query = "select * from user where id='$userId' ";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
		$username = $row['username'];
		$name = $row['name'];
		$phone = $row['phone'];
		$age = $row['age'];
		$weight = $row['weight'];
		$height = $row['height'];

?>
		
		<form action="#" method="post">
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="inputEmail3" value="<?php echo $username ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="<?php echo $name ?>" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="phone" value="<?php echo $phone ?>" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="age" value="<?php echo $age ?>" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Weight (kg)</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="weight" value="<?php echo $weight ?>" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Height (cm)</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="height" value="<?php echo $height ?>" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Copyright -->
	<div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
		<p>© 2023 Recommender System</a>
		</p>
	</div>
	<!--// Copyright -->
	</div>
	</div>


	<!-- Required common Js -->
	<script src='js/jquery-2.2.3.min.js'></script>
	<!-- //Required common Js -->

	<!-- loading-gif Js -->
	<script src="js/modernizr.js"></script>
	<script>
		//paste this code under head tag or in a seperate js file.
		// Wait for window load
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>
	<!--// loading-gif Js -->

	<!-- Sidebar-nav Js -->
	<script>
		$(document).ready(function() {
			$('#sidebarCollapse').on('click', function() {
				$('#sidebar').toggleClass('active');
			});
		});
	</script>
	<!--// Sidebar-nav Js -->


	<!-- Bar-chart -->
	<script src="js/rumcaJS.js"></script>
	<script src="js/example.js"></script>
	<!--// Bar-chart -->
	<!-- Calender -->
	<script src="js/moment.min.js"></script>


	<!-- profile-widget-dropdown js-->
	<script src="js/script.js"></script>
	<!--// profile-widget-dropdown js-->




	<!-- Js for bootstrap working-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //Js for bootstrap working -->

	</body>

	</html>