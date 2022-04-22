<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>












<?php


$db = mysqli_connect('localhost', 'root','', 'studentmanagementsystem');
$query = mysqli_query($db, "select * from student");
$rowcount = mysqli_num_rows($query);

?>

<table border = "0" align= "center">

<?php
	for($j = 1; $j <= $rowcount/5+1; $j++){

?>

<tr>
	
<?php
	for($i = 1; $i <= 5; $i++){
		$row = mysqli_fetch_array($query);
		if($row == NULL) break;

?>

		
		<td><img data-toggle="modal" data-target="#<?php echo $row["Student_ID"]; ?>" src="images/<?php echo $row["photo"]?>" height="150px" width="150px" style="border-radius:60px;"</td>
		
		
		
		
		<!-- Modal -->
				<div id="<?php echo $row["Student_ID"]; ?>" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Student Details</h4>
					  </div>
					  <div class="modal-body">
						<p><img src="images/<?php echo $row["photo"]?>" height="150px" width="150px"</p>
						<p>Name: <?php echo $row["First_Name"];echo " "; echo $row["Last_Name"]?></p>
						<p>ID: <?php echo $row["Student_ID"] ?></p>
						<p>Address: <?php echo $row["Address"] ?></p>
						<p>Email: <?php echo $row["Email"] ?></p>
						<p>Contact: <?php echo $row["Contact_NO"] ?></p>
						<p>Birth Date: <?php echo $row["Date_of_birth"] ?></p>
						
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>



<?php
	}
?>

<?php
	}
?>
	</tr>
	
				
	
	
	
</table>



</body>
</html>