<?php

use LDAP\Result;

$title = 'View Records'; ?>
<?php require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
$results =$crud->getAttendees();
?>

<table class="table">
  <tr>
    <th>#</th>
    <th>first Name</th>
    <th>Last Name</th>
      <th>Specialty</th>
    <th>Actions</th>
    
  </tr>
  <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
<tr>
<td> <?php echo $r['attendee_id'] ?> </td>
<td><?php echo $r['firstname'] ?></td>
<td><?php echo $r['lastname'] ?></td>
<td><?php echo $r['name'] ?></td>
<td>
<a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
<a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
<a onclick="return confirm('are you sure you want to Delete this?')" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a></td>
</td>


</tr>

  <?php }  
  ?>
    


  

</table>

<br>
<br>
<br>

<?php require_once  'includes/footer.php'; ?>

