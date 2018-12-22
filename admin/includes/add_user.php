<?php 

if(isset($_POST['create_post'])){
    
	 $post_title = $_POST['title'];
	$post_author = $_POST['author'];
	$post_category_id = $_POST['post_category_id'];
	$post_status= $_POST['post_status'];
	$post_image = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image'] ['tmp_name'];

	$post_tags = $_POST['post_tags'];
	$post_content = $_POST['post_content'];
	$post_date = date('d-m-y');
	// $post_comment_count = 4;



	move_uploaded_file($post_image_temp, "../images/$post_image");


  $query = "SELECT * FROM users WHERE ";



  
  $create_post_query = mysqli_query($connection, $query);

   confirm($create_post_query);



}

?>

<form action="" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">First Name</label>
		<input type="text" class="form-control" name="user_firstname">
		
	</div>

	<div class="form-group">
		<label for="post_category">Last Naeme</label>
		<input type="text" class="form-control" name="user_lastname">
		
	</div>

	

	<!-- <div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file"  name="image">
		
	</div> -->

	<div class="form-group">
		<label for="post_tags">Username</label>
		<input type="text" class="form-control" name="username">
		
	</div>

	<div class="form-group">
		<label for="post_category">Email</label>
		<input type="emil" class="form-control" name="email">
		
	</div>


 	<div class="form-group">
		<label for="post_category">password</label>
		<input type="password" class="form-control" name="user_password">
		
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">

	</div>


</form>