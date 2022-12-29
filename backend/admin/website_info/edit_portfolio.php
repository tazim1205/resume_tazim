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
                            <h4 class="m-b-10">EDIT PORTFOLIO</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="add_portfolio.php">Add Portfolio</a></li>
                            <li class="breadcrumb-item"><a href="view_portfolio.php">View Portfolio</a></li>
                            <li class="breadcrumb-item"><a href="edit_portfolio.php">Edit Portfolio</a></li>
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
                                <h5>Portfolio</h5>
                            </div>
                            <div class="col-6">
                                <div class="links" style="margin-left: 427px;">
                                    <a href="view_portfolio.php" class="btn btn-info">View Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php

                                if(isset($_GET['id']))
                                {

                                    $id = $_GET['id'];

                                    $project_name = isset($_POST['project_name'])?$_POST['project_name']:'';
                                    $topic = isset($_POST['topic'])?$_POST['topic']:'';
                                    $url = isset($_POST['url'])?$_POST['url']:'';
                                    $image = isset($_POST['image'])?$_POST['image']:'';

                                    if(isset($_POST['save']))
                                    {

                                            $project_name = isset($_POST['project_name'])?$_POST['project_name']:'';
                                            $topic = isset($_POST['topic'])?$_POST['topic']:'';

                                            $sql = $db->link->query("UPDATE `portfolio` SET `project_name`='$project_name',`topic`='$topic',`url`='$url' WHERE `id`='$id' ");

                                            if($sql)
                                            {
                                                $file = $_FILES['image']['name'];

                                                if($file)
                                                { 
                                                    $pathImage = $db->link->query("SELECT `image` FROM `portfolio` WHERE `id`='$id' ");
                                                    $fetch_image = $pathImage->fetch_assoc();

                                                    $path = '../../asset/img/portfolio/'.$fetch_image['image'];

                                                    if(file_exists($path))
                                                    {
                                                        unlink($path); 
                                                    }
                                                }

                                                if($file)
                                                {
                                                    $path_info = $_FILES['image']['name'];

                                                    $extension = pathinfo($path_info, PATHINFO_EXTENSION);

                                                    $image_name = $id.'.'.$extension;

                                                    $path = '../../asset/img/portfolio/'.$image_name;

                                                    move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                                    $db->link->query("UPDATE `portfolio` SET `image`='$image_name' WHERE `id`='$id'");


                                                }

                                                echo '<div class="alert alert-success">Data Updated Successfully</div>';
                                            }
                                        }
                                        
                                    }

                                    $sql = $db->link->query("SELECT * FROM `portfolio` WHERE `id`='$id'");

                                    if($sql)
                                    {
                                        $showdata = $sql->fetch_assoc();
                                    }
                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label>Project Name</label>
                                        <input type="text" name="project_name" class="form-control"  value="<?php echo $showdata['project_name']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Topic</label>
                                        <select name="topic" class="form-control">
                                            <?php
                                            $topic=$db->link->query("SELECT * FROM `topic`");
                                            if($topic)
                                            {
                                                while ($showtopic = $topic->fetch_array() )
                                                {
                                                    if ( $showdata['topic'] == $showtopic['0']) 
                                                    {
                                                        $selected ='selected';
                                                    }

                                                    else {
                                                        $selected ='';
                                                    }
                                                ?>
                                    <option <?php echo $selected; ?> value="<?php echo $showtopic['0']; ?>"><?php echo $showtopic['1']; ?></option>
                                    <?php
                                  }
                                }
                                ?>
                            </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Url</label>
                                        <input type="text" name="url" class="form-control"  value="<?php echo $showdata['url']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Picture</label>
                                            <input type="file" class="filestyle" name="image">
                                            <img src="../../asset/img/portfolio/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
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