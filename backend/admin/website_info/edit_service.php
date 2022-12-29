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
                            <h4 class="m-b-10">EDIT SERVICE</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="add_service.php">Add Service</a></li>
                            <li class="breadcrumb-item"><a href="view_service.php">View Service</a></li>
                            <li class="breadcrumb-item"><a href="edit_service.php">Edit Service</a></li>
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
                                $id = $_GET['id'];

                                $icon = isset($_POST['icon'])?$_POST['icon']:'';
                                $title = isset($_POST['title'])?$_POST['title']:'';
                                $description = isset($_POST['description'])?$_POST['description']:'';
                    
                                if(isset($_POST['save']))
                                {
                                    $query = "UPDATE `service` SET `icon`='$icon',`title`='$title',`description`='$description' WHERE `id`='$id'";
                        
                                    $sql = $db->link->query($query);
                        
                                    if($sql)
                                    {
                                        echo "<div class='alert alert-success'>Data Update Successfllly</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>Data Update Unsuccessfully</div>";
                                    }
                                }
                                
                                if(isset($_GET['id']))
                                {
                                    $id = $_GET['id'];

                                    // echo $id;

                                    $query = "SELECT * FROM `service` WHERE `id`='$id'";

                                    $sql = $db->link->query($query);

                                    if($sql)
                                    {
                                        $showdata = $sql->fetch_assoc();
                                    }
                                }

                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label>Icon</label>
                                        <input type="text" name="icon" class="form-control"  value="<?php echo $showdata['icon']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"  value="<?php echo $showdata['title']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Description :</label>
                                        <textarea name="description" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12" style="text-align: center !important;">
                                        <input type="submit" name="save" class="btn btn-primary" value="Update">
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