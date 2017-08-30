 <?php
include'include/connect.php';
$did=$_GET['no'];



// sql to delete a record
$sql = "DELETE FROM test WHERE no=$did";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('Succesfully Subscribed');location.href='cart.php'; </script>";
} else {
    echo "<script>Error deleting record</script>" ;
}

$con->close();
?> 