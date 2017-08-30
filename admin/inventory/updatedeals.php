<?php 
include "header.php";
include "connect2.php";
$id=$_GET['id'];
if(isset($id))
{
		$result=mysqli_query($con,"select *from deals where id='$id' limit 0,1");
		$data=$result->fetch_assoc();
	?>
<body class="container">
<h3 align="center"> Update or Modify Deals</h3>
	<div class="row">
		<div class="col-md-10">
		
	</div>
	<div class="col-md-2 text-right">
		<h1>	<a href="view.php?id=<?php echo $id ?>" class="btn btn-primary">
			<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back
		</a>
        </h1>
	</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
             $dpn=$_POST['dpn'];
			$dq=$_POST['dq'];
			$dp=$_POST['dp'];
			$dpay=$_POST['dpay'];
			$dpaycom=$_POST['dpaycom'];
			$ddate=$_POST['ddate'];
            $sql="update deals set pname='$dpn',pquantity='$dq',pprice='$dp',pdate='$ddate',payment='$dpaycom',paymentmethod='$dpay',dealer='$id' where dealer='$id')";
            if(mysqli_query($con,$sql))
            {
            	?>	
            	<div class="alert alert-success alert-dismissible role="alert">
			<button type="button" class="close"><span data-dismiss="alert" aria-label="true">&times;</span></button>
			<strong>Successfully! Added Product </strong>
			<?php
	
            }    
            else
            {
            	?>
			<div class="alert alert-warning alert-dismissible role="alert">
			<button type="button" class="close"><span data-dismiss="alert" aria-label="true">&times;</span></button>
			<strong>Failed! Some Error Occured </strong>
			
			<?php
               }
	}
	?>
	

	<br/>
	<form method="post">
		<div class="form-group">
			<label for="dpn"> Product name
			</label>
			<input type="text" name="dpn" class="form-control" id="dpn" placeholder="Name"  value="<?php echo $data['pname'] ?>" required>
		</div>
		<div class="form-group">
			<label for="dq">Quantity</label>
			<input type="text" class="form-control" id="dq" name="dq" placeholder="Quantity" value="<?php echo $data['pquantity'] ?>" required>
		</div>
		<div class="form-group">
			<label for="dp">Price</label>
			<input type="text" class="form-control" id="dp" name="dp" placeholder="Price per item" value="<?php echo $data['pprice'] ?>" required>
		</div>
			<div class="form-group">
			<label for="dpay">Payment</label>
			<input type="text" class="form-control" id="dpay" name="dpay" placeholder="Payment YES/NO" value="<?php echo $data['pdate'] ?>" required>
		</div>
			<div class="form-group">
			<label for="dpaycom">Payment Comment</label>
			<input type="text" class="form-control" id="dpaycom" name="dpaycom" placeholder="Payment Method Detail(CHEQUE NO, DD NO etc)" value="<?php echo $data['payment'] ?>" required>
		</div>
			<div class="form-group">
			<label for="ddate">Payment Date</label>
			<input type="text" class="form-control" id="ddate" name="ddate" placeholder="Payment Date(Eg.12/01/2017)" value="<?php echo $data['paymentmethod'] ?>" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="submit" id="submit">Add Product</button>
	
	
	</form>

<?php
}
include "footer.php"
?>


</body>
</html> 
