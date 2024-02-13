	<?php include "header.php" ?>
	
           

			<!-- Forms-1 -->
			<div class="outer-w3-agile col-xl mt-3 mr-xl-3">
				<h4 class="tittle-w3-agileits mb-4">Search Result</h4>
				
				<?php
				
				$submit = (isset($_POST['submit']) ? $_POST['submit'] : null);
				
				if($submit!=null)
				{	
					$text1 = (isset($_POST['text1']) ? $_POST['text1'] : null);
					
					echo "Search Text: " . $text1;
					echo "<br><br>";
					
					$query = "select * from search_text where topic like '%$text1%'";	
					$result= mysqli_query($db, $query);
					$i=0;
					while($row = mysqli_fetch_assoc($result)) {
						
						echo "<b>" . ($i+1) . ". " . $row['topic'] . "</b><br>";
						
						echo $row['description'] . "<br><br>" ;
						
						$i+=1;
					}
					
					
				}
				?>
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