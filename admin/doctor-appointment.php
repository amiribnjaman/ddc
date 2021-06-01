<?php

include '../app/classes/Doctor.php';
$doctor = new Doctor;
$app_req = $doctor->appointment_request();

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Doctor Appointment Request</h1>
		<hr>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Patient Name</th>
                      <th>Email</th>
                      <th>Phome No.</th>
                      <th>Dr.Name</th>
                      <!-- <th>Date</th>
                      <th>Month</th>
                      <th>Year</th> -->
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php
						
						$sl = 1;
					 while($appointment = mysqli_fetch_assoc($app_req)){ ?>
					 <tr>
						<td><?= $sl; ?></td>
						<td><?= $appointment['patient_name']; ?></td> 
						<td><?= $appointment['email']; ?></td> 
						<td><?= $appointment['phone_number']; ?></td> 
						<td><?= $appointment['doctor_name']; ?></td> 
						<!-- <td><?= $appointment['date']; ?></td> 
						<td><?= $appointment['month']; ?></td>  -->
						<td><?= $appointment['message']; ?></td>
						<td>
							<a href="index.php?page=appointment-accept&&id=<?= $appointment['id']?>" class="btn btn-info">Accept</a>
							<a href="../app/classes/Delete.php?id=<?= $appointment['id']; ?>&&page=appointment" class="btn btn-danger">Delete</a>

						</td>
                        </tr>
					<?php $sl++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

</body>
</html>
