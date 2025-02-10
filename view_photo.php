<!DOCTYPE html>
<html>
<head>

	<?php 
 		include('db_connect.php');
	 ?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<title>VIEW DETAILES</title>
</head>
<body>

	<div class="container">
		<h1 class="text-center mt-5 mb-5">View Photography Detailes</h1>
		<a href="main.php" class="btn btn-success">Dashboard</a>
		<table class="table">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Category</th>
			<th>Image</th>
			<th>Description</th>
			<th>Action</th>
		</tr>

				<?php 

					$sql = "SELECT * FROM tbl_upload ";
					$run = mysqli_query($con,$sql);

					if (mysqli_num_rows($run)>0) {
						foreach ($run as $data ) {
						
				 ?>

		<tr>
				
				

				 	<td><?=$data['id']?></td>
				 	<td><?=$data['name']?></td>
				 	<td><?=$data['cat']?></td>
				 	<td><img src="upload/<?=$data['image']?>" width="100px;"></td>
				 	<td><?=$data['des']?></td>

				 	<td>
				 		
				 		<a href="update.php?id=<?=$data['id']?>" class="btn btn-primary">EDIT</a>

				 		<form action="function.php" method="POST">
				 			<button class="btn btn-danger" name="delete" value="<?=$data['id']?>">DELETE</button>
				 		</form>
				 	

				 	</td>


		</tr>


				 <?php 

				 	}

				 }

				  ?>

	</table>
	</div>

</body>
</html>