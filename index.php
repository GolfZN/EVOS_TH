<?php
    include "header.php";
    include "banner.php";
    include "navbar.php";
    include "conn.php";
?>


<div class="container mt-5">
 
<table class="table table-dark table-hover table table-striped table-bordered table-hover table-success" style="font-family:cursive;">
    <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Group ID</th>
      <th>Level Group</th>
    </tr>

  <!-- LOOP FOR SELECT DATA FROM DATABASE -->
<?php
$sql = "SELECT * FROM student3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
      <td><?php  echo $row["student_id"] ?></td>
      <td><?php  echo $row["name"] ?></td>
      <td><?php  echo $row["group_id"] ?></td>
      <td><?php  echo $row["level_group"] ?></td>
    </tr>

<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</table>

</div>


</body>

<?php
    include "footer.php";
?>

</html>
