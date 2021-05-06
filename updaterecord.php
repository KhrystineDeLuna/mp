  <!-- CONTROLS UPDATE / EDIT FOR EXISTING RECORD | Change order here if changing order of appearance within table -->

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
if(isset($_GET['ID'])){
    $ID = $_GET['ID'];

    


    $get = "Select * FROM musicrecords WHERE ID = '$ID'";
    $result = mysqli_query($link, $get);
	while($row = mysqli_fetch_array($result)){
?>

<body>
<section class="login-form">
        <div class="form-area">
          <h3 class="form-tag text-center">Update Record</h3>

          <form action="update_action.php" method="post" class="add-form">
            <div class="form-row">
              <div class="col-md-12 ">
			  <input type="hidden" class="form-control custom-form-control" id="ID" name="ID" value="<?php echo $row['ID'];?>"  required>
                <label for="artist">Artist Name:</label>
                <input type="text" class="form-control custom-form-control" id="artist-name" name="artist_name" value="<?php echo $row['Artist'];?>"  required>
              </div>
              <div class="col-md-12 ">
              <label for="Album">Album:</label>
                <input type="text" class="form-control custom-form-control" id="album-name" name="album_name" value="<?php echo $row['Album'];?>" required>
              </div>

              <div class="col-md-12 ">
              <label for="Track-Number">Track Number:</label>
                <input type="text" class="form-control custom-form-control" id="Track-Number" name="Track_Number" value="<?php echo $row['Track_Number'];?>" required>
              </div>
           
              <div class="col-md-12 ">
              <label for="Track Title">Track Title:</label>
                <input type="text" class="form-control custom-form-control" id="Track-title" name="Track_title" value="<?php echo $row['Track_Title'];?>" required>
              </div>

              <div class="col-md-12 ">
              <label for="Genre">Genre:</label>
                <input type="text" class="form-control custom-form-control" id="Genre" name="Genre" value="<?php echo $row['Genre'];?>" required>
              </div>

              <div class="col-md-12 ">
              <label for="Year">Year:</label>
                <input type="text" class="form-control custom-form-control" id="year" name="Released_Year" value="<?php echo $row['Released_Year'];?>" required>
              </div>
              
</div>
            <div class="form-row mt-3">
         
            <input class="btn btn-block" style="background-color: orange; color:white;" value="Update" name="submit" type="submit">
          </form>
        </div>
    </section>

	
	<?php
	
}
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>

<script>

</script>

</body>
</html>