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
<?php $connection = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary"); 

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>

<body>
<div class="topnav">
  <a class="active" href="index.php">Add Records</a>
  <a href="view-records.php">View All Records</a>
  <a  href="show-tabs-records.php">View Records By Filters</a>

</div>

<section class="login-form">
        <div class="form-area">
          <h3 class="form-tag text-center">Add New Record</h3>
          <p>
            All form fields are required. <br> 
            Question marks can be used in place of unknown information. 
          </p>

          <form action="insert-records.php" method="post" class="add-form">
            <div class="form-row">
              <div class="col-md-12 ">
                <label for="artist">Artist Name:</label>
                <input type="text" class="form-control custom-form-control" id="artist-name" name="artist_name"  required>
              </div>
              <div class="col-md-12 ">
              <label for="Album">Album:</label>
                <input type="text" class="form-control custom-form-control" id="album-name" name="album_name"  required>
              </div>

              <div class="col-md-12 ">
              <label for="Track-Number">Track:</label>
                <input type="text" class="form-control custom-form-control" id="Track-Number" name="Track_Number"  required>
              </div>
           
              <div class="col-md-12 ">
              <label for="Track Title">Title:</label>
                <input type="text" class="form-control custom-form-control" id="Track-title" name="Track_title"  required>
              </div>

              <div class="col-md-12 ">
              <label for="Genre">Genre:</label>
                <input type="text" class="form-control custom-form-control" id="Genre" name="Genre"  required>
              </div>
             
              <div class="col-md-12 ">
              <label for="Year">Year:</label>
                <input type="text" class="form-control custom-form-control" id="year" name="Released_Year"  required>
              </div>
</div>
            <div class="form-row mt-3">
         
            <button class="btn btn-block button-orange" type="submit">Add New Record</button>
          </form>
        </div>
    </section>

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