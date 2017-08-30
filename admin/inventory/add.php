<?php 
include "header.php";
?>
<body class="container">
<h3 align="center"> Add Dealers</h3>
	<div class="row">
		<div class="col-md-10">
		
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
            $dn=$_POST['dn'];
			$de=$_POST['de'];
			$dc=$_POST['dc'];
			$da=$_POST['da'];
            $sql="insert into dealers (name,email,contact,address) VALUE ('$dn','$de','$dc','$da')";
            if(mysqli_query($con,$sql))
            {
            	?>	
            	<div class="alert alert-success alert-dismissible role="alert">
			<button type="button" class="close"><span data-dismiss="alert" aria-label="true">&times;</span></button>
			<strong>Successfully! Added Dealer </strong>
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
			<label for="dn"> Dealer Name
			</label>
			<input type="text" name="dn" class="form-control" id="dn" placeholder="Name" required>
		</div>
		<div class="form-group">
			<label for="de">Email</label>
			<input type="email" class="form-control" id="de" name="de" placeholder="Email" required>
		</div>
		<div class="form-group">
			<label for="dc">Contact number</label>
			<input type="text" class="form-control" id="dc" name="dc" placeholder="Mobile number" required>
		</div>
		<div class="form-group">
			<label for="da">Address</label>
			<input type="text" class="form-control" id="da" name="da" placeholder="Address here" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="submit" id="submit">Add</button>
	
	
	</form>
<?php
include "footer.php"
?>


</body>
</html> 
