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


<body>

    <div class="topnav">
      <a href="index.php">Add Records</a>
      <a class="active" href="view-records.php">View All Records</a>
      <a href="show-tabs-records.php">View Records By Filters</a>
    </div>

    <div class="text-center">
      <h3 class="title-heading">
        Displaying All Records
      </h3>
      <input type="search" placeholder="Search..." class="search-input" data-table="customers-list" />
    </div>
<?php
$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");

$sql = "SELECT * FROM musicrecords";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='customers-list'>";
            echo "<tr>";
                echo "<th>Artist</th>";
                echo "<th>Album</th>";
                echo "<th>Track</th>";
                echo "<th>Title</th>";
                echo "<th>Genre</th>";
                echo "<th>Released Year</th>";
      echo "<th>Ratings</th>";
				echo "<th>Edit</th>";
				echo "<th>Rate</th>";
                echo "<th>Delete</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                echo "<td>" . $row['Artist'] . "</td>";
                echo "<td>" . $row['Album'] . "</td>";
                echo "<td>" . $row['Track_Number'] . "</td>";
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
        echo "<td><a href='delete-records.php?ID=$row[ID]' class='btn btn-outline-danger btn-sm' title='Delete e-Mail'>Delete</a> </td>";

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

    </section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>

<script>
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
		
		
		function deletefunction(x){
			alert(x);
		}
    </script>

</body>
</html>