<?php
session_start();
$con=mysqli_connect("localhost","root","","movieticket")

if(isset($_POST['save']))
{
    $genre=$_POST['genre'];
    
    foreach($genre as $item)
    {
        $query = "INSERT INTO movies (genre) VALUES ('$item')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: index.php");
    }
}
?>
