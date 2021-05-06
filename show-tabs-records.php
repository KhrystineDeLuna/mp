 <!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Music Inventory</title>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php $link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");

if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
  
<body onload="functionclick()">

<!-- NAV: primary -->  
  
<div class="topnav">
  <a  href="index.php">Add Records</a>
  <a href="view-records.php">View All Records</a>
  <a  class="active" href="show-tabs-records.php">View Records By Filters</a>
</div>

<!-- NAV: sub filters -->    
<div class="tab">
	<div style="20px auto 0px auto">
  <button class="tablinks" id="allbutton" onclick="opentab(event, 'All')">All</button>
  <button class="tablinks" onclick="opentab(event, 'Albums')">Albums</button>
  <button class="tablinks" onclick="opentab(event, 'Artists')">Artists</button>
  <button class="tablinks" onclick="opentab(event, 'Songs')">Songs</button>
  </div>
</div>

<!-- Tab content -->
  
  <!-- TAB: ALL -->
  
<div id="All" class="tabcontent text-center" style="display:block;margin-top:20px;margin-bottom:20px">
  <h3>Displaying All Records</h3>
  <input type="search" placeholder="Search..." class="search-input" data-table="customers-list"/>

  <?php

$sql = "SELECT * FROM musicrecords";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='customers-list'>";
            echo "<tr>";
                echo "<th>Artist</th>";
                echo "<th>Album</th>";
                echo "<th>Title</th>";
                echo "<th>Genre</th>";
                echo "<th>Released Year</th>";
                echo "<th>Ratings</th>";
                echo "<th>Edit</th>";
                echo "<th>Rate</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                echo "<td>" . $row['Artist'] . "</td>";
                echo "<td>" . $row['Album'] . "</td>";
                echo "<td>" . $row['Track_Title'] . "</td>";
                echo "<td>" . $row['Genre'] . "</td>";
                echo "<td>" . $row['Released_Year'] . "</td>";
          if($row['rating']==0){
					echo "<td>Not Rated Yet</td>";
				}else{
					?>
					<td>
					<?php
					for($i=0;$i<$row['rating'];$i++){
						echo "<span class='fa fa-star checked' style='color:orange'></span>";
					}
					?>
					</td>
					<?php
				}
				echo "<td><a href='updaterecord.php?ID=$row[ID]' class='btn btn-outline-success btn-sm' title='Edit e-Mail'>Edit</a> </td>";
				echo "<td><a href='rating.php?ID=$row[ID]' class='btn btn-outline-info btn-sm' title='Rate e-Mail'>Rate</a> </td>";


            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>

  <!-- TAB: ALBUMS -->
  
<div id="Albums" class="tabcontent text-center" style="display:block;margin-top:20px;margin-bottom:20px">
  <h3>Displaying All Albums</h3>
  <input type="search" placeholder="Search..." class="search-input" data-table="customers-list"/>

  <?php
$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");

$sql = "SELECT DISTINCT Album FROM musicrecords";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='customers-list'>";
            echo "<tr>";
        
				echo "<th>Album</th>";

      echo "</tr>";
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
            echo "<td>" . $row['Album'] . "</td>";
          
				// }

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>

  <!-- TAB: ARTISTS -->

<div id="Artists" class="tabcontent text-center" style="display:block;margin-top:20px;margin-bottom:20px">
  <h3>Displaying All Artists</h3>
  <input type="search" placeholder="Search..." class="search-input" data-table="customers-list"/>

  <?php
$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");

$sql = "SELECT DISTINCT Artist FROM musicrecords";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='customers-list'>";
            echo "<tr>";
        
				echo "<th>Artists</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                 echo "<td>" . $row['Artist'] . "</td>";
          
				// }

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>

  <!-- TAB: SONGS -->
  
<div id="Songs" class="tabcontent text-center" style="display:block;margin-top:20px;margin-bottom:20px">
  <h3>Displaying All Songs </h3>
  <input type="search" placeholder="Search..." class="search-input" data-table="customers-list"/>

  <?php
$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");

$sql = "SELECT * FROM musicrecords";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='customers-list'>";
            echo "<tr>";
        
				echo "<th>Songs</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                echo "<td>" . $row['Track_Title'] . "</td>";
          
				// }

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>

<!-- libraries  -->  
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>

<script>
function opentab(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
(function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
		
		
		function functionclick(){
			document.getElementById("allbutton").click();
		}
</script>

</body>
</html>