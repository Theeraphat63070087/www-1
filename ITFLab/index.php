<!DOCTYPE html>
<html>
<head>
	<title>Database | 13th ITF LAB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #ffc107;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Data</h1></div>
							<div class="col-6 text-right"><a href="form.php" class="btn btn-warning btn-sm font-weight-bold">ADD</a></div>
						</div>
						<div class="table-responsive">
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'suphafang.mysql.database.azure.com', 'suphafang@suphafang', 'Fang2545', 'ITFLab', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$res = mysqli_query($conn, 'SELECT * FROM guestbook');
							?>
							<table class="table table-borderless table-hover">
								<thead>
									<tr>
										<th width="150px">Action</th>
										<th>Name</th>
										<th>Comment</th>
										<th>Link</th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($Result = mysqli_fetch_array($res)) {
									?>
									<tr>
										<td><a href="delete.php?ID=<?php echo $Result['ID'];?>" class="btn btn-sm btn-danger mb-2 mb-md-0">DEL</a> <a href="edit.php?ID=<?php echo $Result['ID'];?>" class="btn btn-sm btn-dark">EDIT</a></td>
										<td><?php echo $Result['Name'];?></td>
										<td><?php echo $Result['Comment'];?></td>
										<td><?php echo $Result['Link'];?></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<?php
								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
