<?php
include "Includes/dbconn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `gittable` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result){
    header("Location: read.php?msg=Record deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>