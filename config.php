<?php

$link = mysqli_connect("localhost", "empyrean_MusicLibrary", "Spring2021!", "empyrean_MusicLibrary");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>