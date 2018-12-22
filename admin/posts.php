<?php  include "includes/admin_header.php" ?>
<?php  include "includes/admin_navigation.php" ?> 


<div id="wrapper">

    <!-- Navigation -->


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                      Welcome to Admin
                      <small>Author</small>
                  </h1>



                  <?php
                 if(isset($_GET['source'])){
                  
                  $source = $_GET['source'];

              }

              else
              {
                $source= ""; 
              }

                  switch($source){
       

                    case 'add_post';
                        include "includes/add_post.php";
                        break;

                    case 'edit_post';
                        include "includes/edit_post.php";
                        break;
                     case '36';
                        echo "nice 36";
                        break;
                     case '37';
                        echo "nice 37";
                        break;

                      default;

                      include "includes/view_all_posts.php";
                                  
                  
              


                 }


                  ?>

             






     </div>

 </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php  include "includes/admin_footer.php" ?>
