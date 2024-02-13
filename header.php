<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php

include "database.php";

session_start();

$userId=(isset($_SESSION['userId']) ? $_SESSION['userId'] : null);

$pageName = basename($_SERVER['PHP_SELF']);	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recommender System</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
	<style>
		* { box-sizing: border-box; }
		
		.autocomplete {
		  /*the container must be positioned relative:*/
		  position: relative;
		  display: inline-block;
		}		
		.autocomplete-items {
		  position: absolute;
		  border: 1px solid #d4d4d4;
		  border-bottom: none;
		  border-top: none;
		  z-index: 99;
		  /*position the autocomplete items to be the same width as the container:*/
		  top: 100%;
		  left: 0;
		  right: 0;
		}
		.autocomplete-items div {
		  padding: 10px;
		  cursor: pointer;
		  background-color: #fff;
		  border-bottom: 1px solid #d4d4d4;
		}
		.autocomplete-items div:hover {
		  /*when hovering an item:*/
		  background-color: #e9e9e9;
		}
		.autocomplete-active {
		  /*when navigating through the items using the arrow keys:*/
		  background-color: DodgerBlue !important;
		  color: #ffffff;
		}
	</style>
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>
                    <a href="">Recommender System</a>
                </h2>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li <?php if ($pageName=="home.php") { echo "class='active'"; } ?> >
                    <a href="home.php">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>                
                <li <?php if ($pageName=="my-favorites.php") { echo "class='active'"; } ?>>
                    <a href="my-favorites.php">
                        <i class="fas fa-heart"></i>
                        My Favorites
                    </a>
                </li>
                <li <?php if ($pageName=="type-of-exercises.php") { echo "class='active'"; } ?>>
                    <a href="type-of-exercises.php">
                        <i class="fas fa-th"></i>
                        Type Of Exercises
                    </a>
                </li>                
               
                <li <?php if ($pageName=="top-rated.php") { echo "class='active'"; } ?>>
                    <a href="top-rated.php">
                        <i class="far fa-star"></i>
                        Top Rated
                    </a>
                </li>
                <li <?php if ($pageName=="feedback.php") { echo "class='active'"; } ?>>
                    <a href="feedback.php">
                        <i class="fas fa-file"></i>
                        Feedback
                    </a>
                </li>                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">
                   
                    <!-- Search-from -->
                    <form action="search-result.php" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" name="text1" id="text1" type="search" style="width:400px" placeholder="Search for exercises" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" name="submit" type="submit" value="submit">Search</button>
                    </form>
					<script>
						var countries = 
						[
						<?php
						$query = "select * from search_text";	
						$result= mysqli_query($db, $query);
						while($row = mysqli_fetch_assoc($result)) {
							echo "\"" . $row['topic'] . "\",";
						}						
						?>						
						];

						function autocomplete(inp, arr) {
						  /*the autocomplete function takes two arguments,
						  the text field element and an array of possible autocompleted values:*/
						  var currentFocus;
						  /*execute a function when someone writes in the text field:*/
						  inp.addEventListener("input", function(e) {
							  var a, b, i, val = this.value;
							  /*close any already open lists of autocompleted values*/
							  closeAllLists();
							  if (!val) { return false;}
							  currentFocus = -1;
							  /*create a DIV element that will contain the items (values):*/
							  a = document.createElement("DIV");
							  a.setAttribute("id", this.id + "autocomplete-list");
							  a.setAttribute("class", "autocomplete-items");
							  /*append the DIV element as a child of the autocomplete container:*/
							  this.parentNode.appendChild(a);
							  /*for each item in the array...*/
							  for (i = 0; i < arr.length; i++) {
								/*check if the item starts with the same letters as the text field value:*/
								if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
								  /*create a DIV element for each matching element:*/
								  b = document.createElement("DIV");
								  /*make the matching letters bold:*/
								  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
								  b.innerHTML += arr[i].substr(val.length);
								  /*insert a input field that will hold the current array item's value:*/
								  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
								  /*execute a function when someone clicks on the item value (DIV element):*/
									  b.addEventListener("click", function(e) {
									  /*insert the value for the autocomplete text field:*/
									  inp.value = this.getElementsByTagName("input")[0].value;
									  /*close the list of autocompleted values,
									  (or any other open lists of autocompleted values:*/
									  closeAllLists();
								  });
								  a.appendChild(b);
								}
							  }
						  });
						  /*execute a function presses a key on the keyboard:*/
						  inp.addEventListener("keydown", function(e) {
							  var x = document.getElementById(this.id + "autocomplete-list");
							  if (x) x = x.getElementsByTagName("div");
							  if (e.keyCode == 40) {
								/*If the arrow DOWN key is pressed,
								increase the currentFocus variable:*/
								currentFocus++;
								/*and and make the current item more visible:*/
								addActive(x);
							  } else if (e.keyCode == 38) { //up
								/*If the arrow UP key is pressed,
								decrease the currentFocus variable:*/
								currentFocus--;
								/*and and make the current item more visible:*/
								addActive(x);
							  } else if (e.keyCode == 13) {
								/*If the ENTER key is pressed, prevent the form from being submitted,*/
								e.preventDefault();
								if (currentFocus > -1) {
								  /*and simulate a click on the "active" item:*/
								  if (x) x[currentFocus].click();
								}
							  }
						  });
						  function addActive(x) {
							/*a function to classify an item as "active":*/
							if (!x) return false;
							/*start by removing the "active" class on all items:*/
							removeActive(x);
							if (currentFocus >= x.length) currentFocus = 0;
							if (currentFocus < 0) currentFocus = (x.length - 1);
							/*add class "autocomplete-active":*/
							x[currentFocus].classList.add("autocomplete-active");
						  }
						  function removeActive(x) {
							/*a function to remove the "active" class from all autocomplete items:*/
							for (var i = 0; i < x.length; i++) {
							  x[i].classList.remove("autocomplete-active");
							}
						  }
						  function closeAllLists(elmnt) {
							/*close all autocomplete lists in the document,
							except the one passed as an argument:*/
							var x = document.getElementsByClassName("autocomplete-items");
							for (var i = 0; i < x.length; i++) {
							  if (elmnt != x[i] && elmnt != inp) {
							  x[i].parentNode.removeChild(x[i]);
							}
						  }
						}
						/*execute a function when someone clicks in the document:*/
						document.addEventListener("click", function (e) {
							closeAllLists(e.target);
						});
						}
						
						autocomplete(document.getElementById("text1"), countries);
					</script>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                
                                 <a class="dropdown-item" href="profile.php">Profile</a>
                                <!--<div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
         
            