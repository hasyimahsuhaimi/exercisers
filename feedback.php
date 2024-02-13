	<?php include "header.php" ?>
	
           

			<!-- Forms-1 -->
			<div class="outer-w3-agile col-xl mt-3 mr-xl-3">
				<h4 class="tittle-w3-agileits mb-4">Feedback</h4>
				
				<br><br>
				<b>1. Jamilah Bt. Hassan</b>
				<br>
				<small>02-Dec-2003</small>
				<br>
				- Good website info. I have learn lot of knowledge here
				
				<br><br>
				<b>2. Hau Seng hai</b>
				<br>
				<small>30-Nov-2003</small>
				<br>
				- Keep it up. Useful info. I hope this website can allow members to communicate each other
				
				<br><br><br>
				<h3>Send Feedback</h3>
				
				<form action="" method="post">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Feedback</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputEmail3"  >
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label"></label>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
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
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
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