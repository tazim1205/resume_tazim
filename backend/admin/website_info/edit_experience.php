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
                            <h4 class="m-b-10">EDIT EXPERIENCE</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="add_experience.php">Add Experience</a></li>
                            <li class="breadcrumb-item"><a href="view_experience.php">View Experience</a></li>
                            <li class="breadcrumb-item"><a href="edit_experience.php">Edit Experience</a></li>
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
                                <h5>Experience</h5>
                            </div>
                            <div class="col-6">
                                <div class="links" style="margin-left: 427px;">
                                    <a href="view_experience.php" class="btn btn-info">View Experience</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                $id = $_GET['id'];

                                $from = isset($_POST['from'])?$_POST['from']:'';
                                $to = isset($_POST['to'])?$_POST['to']:'';
                                $company = isset($_POST['company'])?$_POST['company']:'';
                                $location = isset($_POST['location'])?$_POST['location']:'';
                                $title = isset($_POST['title'])?$_POST['title']:'';
                                $description = isset($_POST['description'])?$_POST['description']:'';
                    
                                if(isset($_POST['save']))
                                {
                                    $query = "UPDATE `experience` SET `from`='$from',`to`='$to',`company`='$company',`location`='$location',`title`='$title',`description`='$description' WHERE `id`='$id'";
                        
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

                                    $query = "SELECT * FROM `experience` WHERE `id`='$id'";

                                    $sql = $db->link->query($query);

                                    if($sql)
                                    {
                                        $showdata = $sql->fetch_assoc();
                                    }
                                }

                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label>From</label>
                                            <input type="date" name="from" class="form-control"  value="<?php echo $showdata['from']; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>To</label>
                                            <input type="date" name="to" class="form-control"  value="<?php echo $showdata['to']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Company</label>
                                        <input type="text" name="company" class="form-control"  value="<?php echo $showdata['company']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Location</label>
                                        <input type="text" name="location" class="form-control"  value="<?php echo $showdata['location']; ?>">
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