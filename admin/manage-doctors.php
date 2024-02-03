<?php

include 'app/classes/add.php';
$manage_doc = new Add();
$doc_info = $manage_doc->manage_doctor();



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
                      <th>Department</th>
                      <th>Qualification</th>
                      <th>Position</th>
                      <th>Visiting Hour</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sl = 1;
                      while($row = mysqli_fetch_assoc($doc_info)){ ?>
                        <tr>
                          <td><?= $sl;?></td>
                          <td><?= $row['doctors_name'];?></td>
                          <td><?= $row['department'];?></td>
                          <td><?= $row['qualification'];?></td>
                          <td><?= $row['position'];?></td>
                          <td><?= $row['visiting_hour'];?></td>
                          <td>  
                              <a href="index.php?page=edit&id=<?= $row['id']?>&manage-table=mng-tbl" class="btn btn-warning">Edit</a>
                              <a href="delete.php?id=<?= $row['id']; ?>&manage-table=mng-tbl" class="btn btn-danger">Delete</a>
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
