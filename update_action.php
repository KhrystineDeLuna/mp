<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $ID = $_POST['ID'];
	$artist_name = $_POST['artist_name'];
	$album_name = $_POST['album_name'];
	$Released_Year = $_POST['Released_Year'];
	$Track_Number = $_POST['Track_Number'];
	$Track_title = $_POST['Track_title'];
	$Genre = $_POST['Genre'];

    


    $update = "UPDATE musicrecords set Artist = '$artist_name',Album = '$album_name',Released_Year='$Released_Year', Track_Number = '$Track_Number',Track_title = '$Track_title',Genre = '$Genre' WHERE ID = '$ID'";
    $run = mysqli_query($link, $update);

    if ($run) {
         header("location: view-records.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}
?>
