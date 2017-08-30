<?php 
include "header.php";
?>
<body class="container">
	<div class="row">
		<div align="center"><h2>UStora Inventory Manager</h2></div>
		<div class="col-md-10">
		<h3>Dealers</h3>
	</div>
	<div class="col-md-2 text-right">
	<h3>	<a href="add.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-file" aria-hidden="true"></span>Add Dealers
		</a>
		</h3>
	</div>
</div>
<br/>
<table class="table table-bordered table-striped">
<thead>
	<tr>
		<th width="20">No</th>
		<th>Dealer name</th>
		<th>Email</th>
		<th>Contact number</th>
		<th>Address</th>
		<th width="130">Action</th>
	</tr>
</thead>
<tbody>
<?php
	include 'connect2.php';
$sql = "SELECT id,name,email,contact,address FROM dealers";
$result = $con->query($sql);
$no=1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())   {   	?>
			<tr>

				<td><?php echo $no++ ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['contact'] ?></td>
				<td><?php echo $row['address'] ?></td>
				<td>
					<a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true">
					</span>
					</a>
					<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" href="delete.php"><span class="glyphicon glyphicon-trash" aria-hidden="true">
					</span>
					</a>
						<a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true">
					</span>
					</a>
				
				</td>
				
			</tr>
		<?php
		}
	}
		?>

</tbody>
</table>

</body>
</html>
<?php
include "footer.php"
?>