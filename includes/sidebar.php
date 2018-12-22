 <div class="col-md-4">
    <!-- Blog Search Well -->
    <div class="well">

        <h4>Blog Search</h4>
        <form action="search.php" method="POST">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <div class="well">

        <h4>Login </h4>
    <form action="includes/login.php" method="POST">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter Username">
                
            </div>

            <div class="input-group">
                <input name="password" type="password" class="form-control" placeholder="Enter Password">

                </div>

                <span class="btn btn-primary">
                    <button class="btn btn-primary" name="login" type="submit">
                        Submit
                    </button>

                </span>
                
            
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->


    <div class="well">

        <?php
        $query = "SELECT * FROM categories";
        $select_categories_sidebar = mysqli_query( $connection, $query ); 

        ?>

        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-sm-12">

                <ul class="list-unstyled">

                    <?php 
                    while($row = mysqli_fetch_assoc($select_categories_sidebar))
                    {
                     $cat_title = $row['cat_title'];
                     $cat_id = $row['cat_id']; 
                     echo "<li> <a href='categories.php?category=$cat_id'> {$cat_title} </a> </li>";

                 } 
                 ?>

             </ul>
         </div>

     </div>
     <!-- /.row -->
 </div>

 <div>
    <?php include "widget.php"; ?>

</div>
