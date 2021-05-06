<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$artist_name = mysqli_real_escape_string($link, $_REQUEST['artist_name']);
$album_name = mysqli_real_escape_string($link, $_REQUEST['album_name']);
$Released_Year = mysqli_real_escape_string($link, $_REQUEST['Released_Year']);
$Track_Number = mysqli_real_escape_string($link, $_REQUEST['Track_Number']);
$Track_title = mysqli_real_escape_string($link, $_REQUEST['Track_title']);
$Genre = mysqli_real_escape_string($link, $_REQUEST['Genre']);
 
// Attempt insert query execution
$sql = "INSERT INTO musicrecords (Artist, Album,Released_Year,Track_Number,Track_Title,Genre) 
VALUES ('$artist_name', '$album_name', '$Released_Year','$Track_Number','$Track_title','$Genre')";
if(mysqli_query($link, $sql)){
         header("location: view-records.php");
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

