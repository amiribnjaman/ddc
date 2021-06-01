<?php

include '../app/classes/Doctor.php';
$doctor = new Doctor;
$message = $doctor->sent_message();


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
          <h1 class="h3 mb-2 text-gray-800">User Message</h1>
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
                      <th>Sender Name</th>
                      <th>Eamil</th>
                      <th>Message</th>
                      <th>Sent Time</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
				<?php 
					$sl = 1;
					while($msg = mysqli_fetch_assoc($message)){ ?>
					<tr>
						<td><?= $sl; ?></td>
						<td><?= $msg['sender_name']?></td>
						<td><?= $msg['sender_email']?></td>
						<td><?= $msg['sender_message']?></td>
						<td><?= $msg['send_time']?></td>
						<td>
							<a href="index.php?page=message-replay&&id=<?= $msg['id']?>" class="btn btn-success">Replay</a>
							<a href="../app/classes/Delete.php?id=<?= $msg['id'];?>&&page=message" class="btn btn-danger">Delete</a>

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
