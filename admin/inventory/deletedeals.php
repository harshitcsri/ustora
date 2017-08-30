 <?php
include'connect2.php';
$id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM deals WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('Deleted');location.href='view.php'; </script>";
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?> 