<?php
$name = $_REQUEST["txtName"];
$email = $_REQUEST["txtEmail"];

$con = mysqli_connect("localhost", "root", "", "lp2-1b") or die("Error Connecting to Database");

$q = mysqli_query($con, "insert into data(name,email) values('$name', '$email')");

if ($q) {
    echo "Record inserted successfully";
} else {
    echo mysqli_error($con);
}

?>
