<?php $link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_GET['ID'])){
    $ID = $_GET['ID'];

    


    $delete = "DELETE FROM musicrecords WHERE ID = '$ID'";
    $run = mysqli_query($link, $delete);

    if ($run) {
         header("location: view-records.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}
?>
