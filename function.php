

<?php 
	
	include('db_connect.php');

	if (isset($_POST['btn_add'])) {
		
		$abc = mysqli_real_escape_string($con,$_POST['img_name']);
		$cat = mysqli_real_escape_string($con,$_POST['cat']);
		$des = mysqli_real_escape_string($con,$_POST['des']);

		$file_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = 'upload/'.$file_name;

		$sql = "INSERT INTO tbl_upload(name,cat,image,des) VALUE ('$abc','$cat','$file_name','$des')";

		$run = mysqli_query($con,$sql);

		if ($run) {
				move_uploaded_file($_FILES['image']['tmp_name'], $folder);
				header("Location:view_photo.php");
		}
		else{
			echo "Failed";
		}
	}



	// end of insert function 


	//stgarting of update function 


	if (isset($_POST['btn_edit'])) {
		

		$id = mysqli_real_escape_string($con,$_POST['id']);
		$abc = mysqli_real_escape_string($con,$_POST['img_name']);
		$cat = mysqli_real_escape_string($con,$_POST['cat']);
		$des = mysqli_real_escape_string($con,$_POST['des']);

		$file_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = 'upload/'.$file_name;

		$sql = "UPDATE tbl_upload SET name ='$abc', cat = '$cat', image='$file_name ',des='$des'  WHERE id = '$id'";

		$run = mysqli_query($con,$sql);

		if ($run) {
				move_uploaded_file($_FILES['image']['tmp_name'], $folder);
				header("Location:view_photo.php");
		}
		else{
			echo "Failed";
		}
	}


//end of the update function 

/// starting of delete function 


		if (isset($_POST['delete'])) {
			$_id = mysqli_real_escape_string($con,$_POST['delete']);

			$sql = "DELETE FROM tbl_upload WHERE id = '$_id'";

			$run = mysqli_query($con, $sql);

			if ($run) {
				header("Location:view_photo.php");
			}else{
				header("Location:main.php");
			}
		}


//login function 

		if (isset($_POST['btn_login'])) {
				$email = mysqli_real_escape_string($con,$_POST['email']);
				$pass = mysqli_real_escape_string($con,$_POST['pass']);

				if ($email == "admin@123" && $pass == "123") {
					header("Location:main.php");
				}else{
					header("Location:login.php");
				}
		}


 ?>