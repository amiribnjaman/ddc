<?php require 'include/header.php';?>
<?php
include 'admin/app/classes/add.php';
$add = new Add;
$doc_info = $add->manage_doctor();


?>
<!-----------------------Contact from design---------------------->
<div id="doctors_section">
<div id="doctors_header" class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav>
					<ul>
						<li><h4>Find Doctors</h4></li>
						<li class="float-right"><a href="index" class="text-success"><i class="fa fa-home" aria-hidden="true"></i> Home / </a> <span> FINDS DOCTORS</span></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


<!-------------------------Doctors Search---------------------->
<div id="doctor_search">
	<div class="container">	
		<div class="doctors_heading">
			<h3>Our Doctors</h3>
			<div class="search">
				<input type="search" name="search" class="form-control" placeholder="Search"><i class="fa fa-search"></i>
			</div>
		</div>
		<br>
		<div class="row doctors_info_row">

		  <?php /* if(mysqli_num_rows($doc_info) >= 1) { ?>
				<?php while($doc = mysqli_fetch_assoc($doc_info)){?>
					<div class="col-sm-3">
							<div class="card card-body">
								<!-- <img src="" alt=""> -->
								<hr>
								<div class="doctors_info">
									<h4><?= $doc['doctors_name'];?></h4>
									<p><?= $doc['department'];?></p>
									<p><?= $doc['qualification']?></p>
									<p class="position"><?= $doc['position']?></p>
									<p><?= $doc['visiting_hour']?></p>
								</div>
								<a href="appointment.php?id=<?= $doc['id'];?>&&page=doctor" class="doctor_appointment">Appointment</a>
							</div>
					</div>
				<?php }?>
			<?php } else { ?> 

				<hr>
				<h3 class="text-info" style="text-align:center;margin:auto; font-weight: bold">No Doctor Found!</h3>

			/* <?php } */ ?> 

			<!-- <div class="col-sm-3 doctors_box">
				<div class="doctor_image">
					<img src="images/logo.png" alt="">
				</div>
				<div class="doctors_info">
					<h3>name</h3>
					<p>data</p>
				</div>
			</div> -->
  			<?php if(mysqli_num_rows($doc_info) >= 1) { ?>
			<?php while($doc = mysqli_fetch_assoc($doc_info)){?>
			<div class="col-sm-8 col-md-8 col-lg-6 mb-4">
				<div class="doctor_box">
					<div class="row">
						<div class="col-sm-3 col-md-3">
							<div class="doctor_image">
								<img src="images/doctor.png" alt="">
							</div>
						</div>
						<div class="col-sm-9 col-md-9">
							<div class="doctor_info">
								<h5><i class="fa fa-user-md" aria-hidden="true"></i> <strong><?= $doc['doctors_name'];?></strong> <small><?= $doc['qualification']?></small> </h5>
								<p><?= $doc['department'];?></p>
								<p class="text text-danger"><?= $doc['position']?></p>
								<p><strong>Visiting Hour : <?= $doc['visiting_hour']?></strong></p>
								<hr>
								<p><strong>E-mail :</strong> <a href=""> kd@gmail.com </a></p>

								<a href="appointment?id=<?= base64_encode($doc['id']);?>&&page=doctor" class="doctor_appointment">Make an Appointment</a>
							</div>
						</div>

						</div>
					</div>
				</div>

				<?php }?>
			<?php } else { ?> 

			<h3 class="doc-error" style="text-align:center;margin:auto; font-weight: bold">No Doctor Found!</h3>

			<?php } ?> 
			</div>
		<br>
	</div>
</div>
</div>

<br>



<!--------------------Footer Section Start--------------------->
<?php require 'include/footer.php';?>
