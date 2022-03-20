<?php require_once ('include/nav.php') ?>
<?php require_once ('include/connect.php') ?>
<?Php
if(isset($_POST['m'])){
  include('include/search.php');
}
else{
    $dd= "select * from posts";
    $result=mysqli_query($conn,$dd);

  while($row= mysqli_fetch_assoc($result)){?>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                <p class="card-text"><?php echo $row['content'] ?></p>
                <a href="post.php?id= <?php echo $row['id'];    ?>" class="btn btn-primary">Read</a>
              </div>
          </div>
      </div>
    </div>
  </div>
<?php 
  }}
?>





<?php require_once ('include/foot.php') ?>


      
        
  