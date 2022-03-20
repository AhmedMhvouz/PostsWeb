<?php




if(isset($_POST['m'])){
    $one =$_POST["inputSearch"];
    $query="select * from posts where title like '%".$one."%'";
    $res=mysqli_query($conn,$query);
    while($row= mysqli_fetch_assoc($res)){?>

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
    }
}
include('foot.php');
        ?>