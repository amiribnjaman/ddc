<?php
include 'app/classes/add.php';
$data = new Add();
$patient = $data->patient_exam_data();

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
          <h1 class="h3 mb-2 text-gray-800">Manage Doctors</h1>
		      <hr>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                    <?php $sl = 1;?>
                    <?php while($data = mysqli_fetch_assoc($patient)){ ?>

                  <tbody>
                    <td><?= $sl; ?></td>
                    <td><?= $data['patient_name']; ?></td>
                    <td><?= $data['age']; ?></td>
                    <td><?= $data['sex']; ?></td>
                    <td style="max-width:50px">
                         <a href="index.php?page=edit-patient&&id=<?= base64_encode($data['id']); ?>" class="btn btn-warning">Edit</a>
                         <a href="../app/classes/Delete.php?id=<?= $data['id']; ?>&&page=patientmanage" class="btn btn-danger">Delete</a>
                    </td>
                  </tbody>

                    <?php $sl++; } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

</body>
</html>
