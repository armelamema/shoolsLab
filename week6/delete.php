<?php
if (isset($_GET['schoolID'])) {
    $schoolID = $_GET['schoolID'];
    require('../reusables/connect.php');
    $query = "DELETE FROM schools WHERE id = " . mysqli_real_escape_string($connect, $schoolID);
    
    if (mysqli_query($connect, $query)) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Error deleting the school: " . mysqli_error($connect);
    }

    mysqli_close($connect);
} else {
    echo "No school ID provided.";
}
?>
