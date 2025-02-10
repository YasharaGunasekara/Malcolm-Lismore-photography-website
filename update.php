<!DOCTYPE html>
<html>
<head>

	<?php 
 		include('db_connect.php');
	 ?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<title></title>

	<style type="text/css">
		body{
			background-image: url('image/bg.jpg');
		}
		form {
			margin-top: 100px;
		
		}
		input{
			margin-top: 20px;
			margin-bottom: 10px;
		}
		.form-control{
			background-color: #ffffff75;
			color: #fff;
		}
		.btn-warning{
			margin-left: 500px;
		}
	</style>
</head>
<body>

		<?php 
				if (isset($_GET['id'])) {
				   $test_id = mysqli_real_escape_string($con,$_GET['id']);

				   $sql = "SELECT * FROM tbl_upload  WHERE id = '$test_id'";

				   $run=mysqli_query($con,$sql);

				   if (mysqli_num_rows($run)>0) {
				   		foreach ($run as $data) {
				   			
				   }
				}

		 ?>

	<div class="container col-lg-6">
			
		<form class="form-control" action="function.php" method="POST" enctype="multipart/form-data">

		<a href="main.php" class="btn btn-warning "><< Go Back</a>

			<h2 class="text-center mt-5">EDIT PHOTOGRAPHY </h2>

			<input type="hidden" name="id" value="<?=$data['id']?>">

			<label>Name</label>
			<input type="text" name="img_name" class="form-control" value="<?=$data['name']?>">

			<label>Select a Category</label>
			<select class="form-control" name="cat" value="<?=$data['cat']?>">
				<option value="Whild Life">Whild Life </option>
				<option value="Wedding">Wedding</option>
				<option value="Sports">Sports</option>
				<option value="Event">Event</option>
			</select>

			<img src="upload/<?=$data['image']?>" width="100px;">
			<label>Insert an Image</label>
			<input type="file" name="image" class="form-control" value="upload/<?=$data['image']?>">

			<label>Write Some Description</label>
			<textarea rows="5" class="form-control" name="des" >
				<?=$data['des']?>
			</textarea>

				<?php 
					}
				   }
				}

 				?>
			<input type="submit" name="btn_edit" class="btn btn-success" value="UPDATE">
			<input type="reset"  class="btn btn-warning" value="CANCEL">


		</form>
	</div>
	

</body>
</html>