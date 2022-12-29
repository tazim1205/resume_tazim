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
                            <h4 class="m-b-10">ABOUT US</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="about_us.php">About Us</a></li>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <?php

                                $data = $db->link->query("SELECT * FROM `about_us` WHERE `id`=1");
                                
                                if($data)
                                {
                                    $showdata = $data->fetch_assoc();
                                } 

                                if(isset($_POST['save']))
                                {
                                    $description = $_POST['description'];

                                    $update = $db->link->query("UPDATE `about_us` SET `description`='$description' WHERE `id`=1");

                                    if($update)
                                    {
                                        $file = $_FILES['image']['name'];
                                        if($file)
                                        {
                                            $path = '../../asset/img/about_us/'.$showdata['image'];

                                            if(file_exists($path))
                                            {
                                                unlink($path);
                                            }
                                        }

                                        if($file)
                                        {
                                            $extension = pathinfo($file, PATHINFO_EXTENSION);

                                            $image_name = rand().'.'.$extension;

                                            $image_path = '../../asset/img/about_us/'.$image_name;

                                            move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                                            $db->link->query("UPDATE `about_us` SET `image`='$image_name' WHERE `id`=1");
                                        }

                                        echo "<div class='alert alert-success'>Data Update Successfully</div>";
                                    }

                                    else
                                    {
                                        echo "<div class='alert alert-danger'>Data Update Unsuccesfull</div>";
                                    }
                                }
                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label>Description :</label>
                                        <textarea name="description" id="" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-sm-3 col-form-label">Picture :</label>
                                        <input type="file" name="image" class="form-control">
                                        <?php
                                        $path = '../../asset/img/about_us/'.$showdata['image'];
                                        if(file_exists($path))
                                        {
                                        ?>
                                        <img src="../../asset/img/about_us/<?php print $showdata['image']; ?>" class="img-fluid" height="70px" width="90px">
                                        <?php
                                        }
                                        ?>
                                    </div>
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