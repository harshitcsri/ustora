<?php 
include "header.php";
include "connect2.php";
$id=$_GET['id'];
if(isset($id))
{
	?>
<body class="container">
<h3 align="center"> Add Product of the Dealer</h3>
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
            $sql="INSERT INTO  deals (pname,pquantity,pprice,pdate,payment,paymentmethod,dealer) values('$dpn','$dq','$dp','$ddate','$dpaycom','$dpay','$id')";
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
			<input type="text" name="dpn" class="form-control" id="dpn" placeholder="Name" required>
		</div>
		<div class="form-group">
			<label for="dq">Quantity</label>
			<input type="text" class="form-control" id="dq" name="dq" placeholder="Quantity" required>
		</div>
		<div class="form-group">
			<label for="dp">Price</label>
			<input type="text" class="form-control" id="dp" name="dp" placeholder="Price per item" required>
		</div>
			<div class="form-group">
			<label for="dpay">Payment</label>
			<input type="text" class="form-control" id="dpay" name="dpay" placeholder="Payment YES/NO" required>
		</div>
			<div class="form-group">
			<label for="dpaycom">Payment Comment</label>
			<input type="text" class="form-control" id="dpaycom" name="dpaycom" placeholder="Payment Method Detail(CHEQUE NO, DD NO etc)" required>
		</div>
			<div class="form-group">
			<label for="ddate">Payment Date</label>
			<input type="text" class="form-control" id="ddate" name="ddate" placeholder="Payment Date(Eg.12/01/2017)" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="submit" id="submit">Add Product</button>
	
	
	</form>

<?php
}
include "footer.php"
?>


</body>
</html> 
