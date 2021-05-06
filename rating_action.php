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
	$rating = $_POST['rating'];

    $update = "UPDATE musicrecords set rating ='$rating' WHERE ID = '$ID'";
    $run = mysqli_query($link, $update);

    if ($run) {
         header("location: view-records.php");
      exit();
    }else{
        echo "<script>alert('Error');</script>";
    }
}
  
?>
