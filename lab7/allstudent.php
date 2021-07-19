<?php include 'admin_header.php';
    require_once 'controllers/ProductController.php';
    $students = getstudents();
?>
<!--All Products starts -->

 

<div class="center">
    <h3 class="text">All Students</h3>
    <table class="table table-striped">
        <thead>
            <th>Sl#</th>
            <th> Name</th>
            <th>DOB</th>
            <th> Credit</th>
            <th> CGPA</th>
            <th> DEPT_ID</th>
            <th></th>
            <th></th>
            
        </thead>
        <tbody>
            <?php
                $i=1;
                foreach($products as $p){
                    echo "<tr>";
                        
                        echo "<td>$i</td>";
                        echo "<td><img src='".$p["img"]."' width='100px' height='100px'></td>";
                        echo "<td>".$p["name"]."</td>";
                        echo "<td>".$p["dob"]."</td>";
                        echo "<td>".$p["credit"]."</td>";
                        echo "<td>".$p["cgpa"]."</td>";
                        
                        echo "<td>".$p["dept_id"]."</td>";
                        echo '<td><a href="editproduct.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
                        echo '<td><a class="btn btn-danger">Delete</td>';
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>