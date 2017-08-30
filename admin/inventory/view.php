<?php 
include "header.php";

?>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$result=mysqli_query($con,"select name from dealers where id='$id' limit 0,1");
		$data=$result->fetch_assoc();
	?><h4>Dealer Name:</h4><?php	echo $data['name'];
?>
<body class="container">
	<div class="row">
		<div>   <!-- Main Body -->
	    <br>
	 
	   
	    </div>
		<div class="col-md-3">
		<h4>Product Available</h4>
	</div>
	<div class="col-md-2 text-right">
	</div>
</div>
<br/>
<table class="table table-bordered table-striped">
<thead>
	<tr>
		<th width="20">No</th>
		<th>Product name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Date</th>
		<th>Payment</th>
		<th>Payment Method</th>
		<th width="100">Action</th>
	</tr>
</thead>
<tbody>
<h3>	<a href="adddeals.php?id=<?php echo $id ?>" class="btn btn-primary">
			<span class="glyphicon glyphicon-file" aria-hidden="true"></span>Add Deals
		</a>
		</h3>

<?php

$sql = "SELECT id,pname,pquantity,pprice,pdate,payment,paymentmethod FROM deals where dealer=$id";
$result = $con->query($sql);
$no=1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())   {   	?>
			<tr>
			
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['pname'] ?></td>
				<td><?php echo $row['pquantity'] ?></td>
				<td><?php echo $row['pprice'] ?></td>
				<td><?php echo $row['pdate'] ?></td>
				<td><?php echo $row['payment'] ?></td>
				<td><?php echo $row['paymentmethod'] ?></td>
				<td>
					<a href="updatedeals.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true">
					</span>
					</a>
					<a href="deletedeals.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" href="delete.php"><span class="glyphicon glyphicon-trash" aria-hidden="true">
					</span>
				
				</td>
				
			</tr>
		<?php
		}
	}
		?>
<?php
}
else{
	echo"<script>('Choose a Dealer to View');location.href='index.php';</script>";
}
?>
</tbody>
</table>

</body>
</html>
<?php
include "footer.php"
?>