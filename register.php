<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Recommender System</title>

    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header class="w3l-header">
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <span class="fa fa-pencil-square-o"></span> Recommender System</a>
                <!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
						<li class="nav-item active">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
						<li class="nav-item active">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>                       
                        <li class="nav-item @@contact__active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </nav>
        <!--//nav-->
    </header>
    <!-- //header -->
	
	<section class="w3l-contact-2 py-5">
    <div class="container py-lg-5 py-md-4">
		<h3 class="section-title-left">Register </h3>
		<div class="contact-grids d-grid">
			
			<div>
			<?php
			$username = (isset($_POST['username']) ? $_POST['username'] : null);
			$password = (isset($_POST['password']) ? $_POST['password'] : null);	
			$confirmPassword = (isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : null);
			$name = (isset($_POST['name']) ? $_POST['name'] : null);
			$phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
				
			$submit = (isset($_POST['submit']) ? $_POST['submit'] : null);
			if($submit!=null)
			{							
				if($password != $confirmPassword) {
					echo "<p><label style='color:red'>PASSWORD & CONFIRM PASSWORD NOT SAME!</label></p>";
				}
				else {
				
					include "database.php";
					
					$query = "select * from user where username='$username'";	
					$result= mysqli_query($db, $query);
					$row = mysqli_fetch_assoc($result);

					if ($row['id'] != null)
					{
						echo "<p><label style='color:red'>USER NAME ALREADY EXIST!</label></p>";
					}
					else
					{			
						$query = "insert into user values(null,'$username','$password','$name','$phone','','','')";	
						$result= mysqli_query($db, $query);
						
						echo "<p><label style='color:blue'>SUCESSFULLY REGISTER</label></p>";
						
						$username = ""; $password = ""; $confirmPassword = ""; $name = ""; $phone = "";
					}		
				}				
				
			}						
			
			?>
			<form action="" method="post" class="signin-form">
				<div class="input-grids">
					<input type="text" name="username" placeholder="Username" class="contact-input" value="<?php echo $username ?>" required="" />
				</div> 
				<div class="input-grids">
					<input type="password" name="password"  placeholder="Password" class="contact-input" value="<?php echo $password ?>" required="" />
				</div> 
				<div class="input-grids">
					<input type="password" name="confirmPassword" placeholder="Confirm Password" value="<?php echo $confirmPassword ?>" class="contact-input" required="" />
				</div> 
				<div class="input-grids">
					<input type="text" name="name" placeholder="Full Name" class="contact-input" value="<?php echo $name ?>" required="" />
				</div> 
				<div class="input-grids">
					<input type="text" name="phone" placeholder="Phone" class="contact-input" value="<?php echo $phone ?>" required="" />
				</div> 
				<div class="input-grids">
					<button class="btn btn-style btn-outline" name="submit" value="submit">Register</button>
				</div> 
			</form>
			
			</div>	
		</div>
	</div>
	</section>
	
	
    <!-- footer -->
    <footer class="w3l-footer-16">
        <div class="footer-content py-lg-5 py-4 text-center">
            <div class="container">
                <div class="copy-right">
                    <h6>© 2023 Recommender System</h6>
                </div>
               
            </div>
        </div>

       
    </footer>
    <!-- //footer -->

    <!-- Template JavaScript -->
    <script src="assets/js/theme-change.js"></script>

    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>