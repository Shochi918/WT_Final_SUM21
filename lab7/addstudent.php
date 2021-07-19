<?php include 'admin_header.php';
	require_once 'controllers/ProductController.php';
	$products = getProducts();
?>
<!--All student starts -->

<div class="center">
	<h3 class="text">All Student</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>DOB </th>
			<th> Credit</th>
			<th> CGPA</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($student as $p){
					echo "<tr>";
						
						
						echo "<td>".$p["name"]."</td>";
						echo "<td>".$p["cgpa"]."</td>";
						echo "<td>".$p["credit"]."</td>";
						echo "<td>".$p["dob"]."</td>";
						echo '<td><a href="edit_student.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
</div>
<!--Student ends -->
<?php include 'main_footer.php';?>