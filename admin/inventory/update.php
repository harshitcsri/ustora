<?php 
include "header.php";
$id=$_GET['id'];
if(isset($id))
{
		$result=mysqli_query($con,"select *from dealers where id='$id' limit 0,1");
		$data=$result->fetch_assoc();
?>
<body class="container">
<h1 align="center"> Ustora | Deal Manager</h1>
	<div class="row">
		<div class="col-md-10">
		<h1>Update Client</h1>
	</div>
	<div class="col-md-2 text-right">
		<h1>	<a href="index.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back
		</a>
        </h1>
	</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
           include 'connect2.php';
            $em=$_POST['em'];
			$pn=$_POST['pn'];
			$ad=$_POST['ad'];
			$nm=$_POST['nm'];
            $sql=("update  dealers set name='$nm',contact='$pn',address='$ad',email='$em' where id='$id'");
            if(mysqli_query($con,$sql))
            {
            	?>	<div class="alert alert-success alert-dismissible role="alert">
			<button type="button" class="close"><span data-dismiss="alert" aria-label="true">&times;</span></button>
			<strong>Success ! </strong><br/>Added
			<?php
	
            }    
            else
            {
            	?>
			<div class="alert alert-warning alert-dismissible role="alert">
			<button type="button" class="close"><span data-dismiss="alert" aria-label="true">&times;</span></button>
			<strong>Failed</strong>Unable to Add
			
			<?php
               }
	}
	?>
	

	<br/>
	<form method="post">
		<div class="form-group">
			<label for="nm">Name
			</label>
			<input type="text" name="nm" class="form-control" id="nm" placeholder="Full Name" value="<?php echo $data['name'] ?> " required>
		</div>
		<div class="form-group">
			<label for="em">Email</label>
			<input type="email" class="form-control" id="em" name="em" placeholder="Email" value="<?php echo $data['email'] ?>"  required>
		</div>
		<div class="form-group">
			<label for="pn">Phone</label>
			<input type="text" class="form-control" id="pn" name="pn" placeholder="Email" value="<?php echo $data['contact'] ?>"  required>
		</div>
		<div class="form-group">
			<label for="ad">Address</label>
			<textarea class="form-control" name="ad" id="ad"> <?php echo $data['address'] ?> 
			</textarea>
		</div>
		<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
	
	
	</form>
	

</body>
</html> 
<?php
}
?>
<?php
include "footer.php";
?>

