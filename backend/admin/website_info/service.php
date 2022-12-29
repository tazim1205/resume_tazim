<?php
include ('../layouts/header.php');
include ('../layouts/sidebar.php');
?>

<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 class="m-b-10">SERVICE</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="service.php">Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h5>Basic Component</h5> -->
                        <div class="row">
                            <div class="col-6">
                                <h5>Service</h5>
                            </div>
                            <div class="col-6">
                                <div class="links" style="margin-left: 427px;">
                                    <a href="view_service.php" class="btn btn-info">View Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php 
                                if(isset($_POST['save']))
                                {
                                    $icon = $_POST['icon'];
                                    $title = $_POST['title'];
                                    $description = $_POST['description'];

                                    $db->insert('service',['icon'=>$icon,'title'=>$title,'description'=>$description]);
                                    
                                    if($db)
                                    {
                                        echo "<div class='alert alert-success'>Data Insert Successfull</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>Data Insert Unsuccessfull</div>";
                                    }

                                }
                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label>Icon Name</label>
                                        <input type="text" name="icon" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Description :</label>
                                        <textarea name="description" class="form-control summernote"></textarea>
                                    </div> 
                                    <div class="form-group" style="text-align: center !important;">
                                    	<input type="submit" name="save" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>


<?php
include ('../layouts/footer.php');
?>