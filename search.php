<?php

include "includes/db.php";

include "includes/header.php";
//    <!-- Navigation -->
include "includes/nav.php";

?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            
            
            
            
            
            <div class="col-md-8">

                
                <?php
                
    
    if(isset($_POST['submit'])){
    
    $search = $_POST['search'];
    
    $query="SELECT * FROM posts WHERE p_tag LIKE '%$search%' ";
        
    $search_q= mysqli_query($connection,$query);
        
        
        if(!$search_q){
        
            die("QUERY FAILED".mysqli_error($connection));
        }
        
    
        $count=mysqli_num_rows($search_q);
        if($count == 0){
            echo"<h1>No Results</h1>";
        }
    
     else{
                   
while($row = mysqli_fetch_assoc($search_q)){
    
    $post_title = $row['p_title'];   
    $post_author = $row['p_author'];   
    $post_date = $row['p_date'];   
    $post_pic = $row['p_pic'];   
    $post_content = $row['p_content'];  

    ?>
          
                
                </a>
    <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title;  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date;  ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_pic;?>" alt="">
                <hr>
                <p><?php echo $post_content;  ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
             <?php
} 
                    
}
}
    
                ?>
                
                
              
            </div>

            <!-- Blog Sidebar Widgets Column -->
<?php            
include "includes/side.php";
?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
        include "includes/footer.php";
        ?>