<?php

// include 'app/classes/home-page.php';
// $home = new Contents;

// if(isset($_POST['save_home_page'])){
// 	$home->themeColor($_POST);
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DDC&GH-Admin Dashboard-Content</title>
</head>
<body>
<!-- -------------Theme color------------ -->
	<div id="home_page">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="theme_color">
			<div class="container">
				<h3>Contents</h3>
				<p><?= isset($msg) ? $msg:'';?></p>
				<hr>
				<div class="row">
					<div class="col-sm-0"></div>
					<div class="col-sm-8">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-3">
									<label for="themeColor">Theme Color</label>
								</div>
								<div class="col-sm-8">
									<select name="themeColor" id="themeColor" class="form-control">
										<option value="">Select Theme Color</option>
										<option value="1">Red</option>
										<option value="2">Black</option>
										<option value="3">Green</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>

			<!-- --------------Logo-------------- -->
			<div class="logo">
			<div class="container">
				<hr>
				<div class="row">
					<div class="col-sm-0"></div>
					<div class="col-sm-8">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="themeColor">Change Logo</label>
									</div>
									<div class="col-sm-8">
										<input type="file" value="logo" class="form-control" name="logo">
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			</div>

			<div class="container">
			<div class="col-sm-2 home_submit">
				<input type="submit" value="Save" class="btn btn-success form-control" name="save_home_page">
			</div>
			</div>
			<br>
		</form>
	</div>
</body>
</html>
