 <?php
include'include/connect2.php';
$did=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id=$did";

if ($con->query($sql) === TRUE) {
    echo "Account Deleted Successfully";
    session_start();
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	header("Location: index.php");
}
 else {
    echo "Error Deleting Account: " . $con->error;
}

$con->close();
?> 