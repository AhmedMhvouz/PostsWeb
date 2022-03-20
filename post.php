<?php require_once ('include/nav.php') ?>
<?php require_once ('include/connect.php') ?>
<?php

$id=$_GET['id'];
$query="select * from posts where id=$id";

// if (!mysqli_query($conn, $query))
//  {
//       print_r(mysqli_error($conn)); 
//     }


$result= mysqli_query($conn,$query);
$roww= mysqli_fetch_assoc($result);


?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $roww['title']; ?></h5>
    <p class="card-text"><?php echo $roww['content']; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php require_once ('include/foot.php') ?>